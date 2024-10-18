$(() => {
    getData().then(data => {
        updateDOM(data);
    });
});

window.getData = async function () {
    try {
        let response = await fetchSingleData(`miners?method=${wallet}`);

        let mappedData = {
            hashrate: {
                shared: response.hashrate.shared || 0,
                solo: response.hashrate.solo || 0
            },
            payments: {
                balances: response.payments.balances || 0,
                generate: response.payments.generate || 0,
                immature: response.payments.immature || 0,
                paid: response.payments.paid || 0
            },
            shares: {
                shared: {
                    valid: response.shares.shared.valid || 0,
                    invalid: response.shares.shared.invalid || 0,
                    stale: response.shares.shared.stale || 0
                },
                solo: {
                    valid: response.shares.solo.valid || 0,
                    invalid: response.shares.solo.invalid || 0,
                    stale: response.shares.solo.stale || 0
                }
            },
            times: {
                shared: response.times.shared || 0
            },
            work: {
                shared: response.work.shared || 0,
                solo: response.work.solo || 0
            },
            workers: {
                shared: [],
                solo: []
            }
        };

        for (const workeraddy of response.workers.shared) {
            let workerData = await fetchSingleData('workers?method=' + workeraddy);

            if (workerData.hashrate.shared > 0 || workerData.hashrate.solo > 0) {
                let workerObj = {
                    [workeraddy]: {
                        hashrate: {
                            shared: workerData.hashrate.shared || 0,
                            solo: workerData.hashrate.solo || 0
                        },
                        shares: {
                            shared: workerData.shares.shared || {},
                            solo: workerData.shares.solo || {}
                        },
                        times: {
                            shared: workerData.times.shared || 0
                        },
                        work: {
                            shared: workerData.work.shared || 0,
                            solo: workerData.work.solo || 0
                        }
                    }
                };
                mappedData.workers.shared.push(workerObj);
            }
        }

        return mappedData;
    } catch (error) {
        console.error(error);
    }
}

window.updateDOM = (data) => {
    console.log(data);

    $("#walletPoolRoundShares>.value").html(data.shares.shared.valid);
    $("#walletSoloRoundShares>.value").html(data.shares.solo.valid);
    $("#walletEffort>.value").html(formatPercentages(data.work.shared, "%", 2));
    $("#walletTimes>.value").html(formatSeconds(data.times.shared, true));
    $("#walletPendingPayments>.value>.val").html(formatPayment(data.payments.generate + data.payments.immature + data.payments.balances));
    $("#walletTotalPayments>.value>.val").html(formatPayment(data.payments.paid));
    $("#walletPoolHashrate>.value").html(formatHashrate(data.hashrate.shared));
    $("#walletSoloHashrate>.value").html(formatHashrate(data.hashrate.solo));

    $("#headerWalletHashrate").html(formatHashrate(data.hashrate.shared + data.hashrate.solo));
}
