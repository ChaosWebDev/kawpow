$(() => {
    const apiEndpoints = ['', 'miners?method=active', 'blocks', 'payments?method=records'];

    fetchAllData(apiEndpoints)
        .then(data => {
            console.log(data);
            // NETWORK PANEL
            $("#networkHashRate").html(formatHashrate(data.base.network.hashrate));

            $("#networkLastBlockFound").html(lastBlock(data.blocks));
            $("#networkDifficulty").html(formatDifficulty(data.base.network.difficulty));
            $("#networkHeight").html(data.base.network.height);

            // POOL PANEL
            $("#poolLastBlockFound").html(lastBlockFound(data.blocks, 'all'));
            $("#poolLastReward").html(formatPayment(data.payments[0].paid));
            $("#poolLastHashPlaceholder").addClass('hidden');
            $("#poolLastHash").removeClass('hidden')
                .text(shortenString(data.payments[0].transaction))
                .prop('href', `${explorer}/tx/${data.payments[0].transaction}`)
                .prop('target', '_blank');
            $("#poolMinPayment").html(formatPayment(data.base.config.minPayment));
            $("#poolRecipientFee").html(formatPercentages(data.base.config.recipientFee, '.'));
            $("#poolPaymentInterval").html(formatSeconds(data.base.config.paymentInterval));

            // POOL MINERS
            $("#minerHashrate").html(formatHashrate(data.base.hashrate.shared));
            $("#minerConnectedMiners").html(counter(data.miners.shared));
            $("#minerLastBlockFound").html(lastBlockFound(data.blocks, 'pool'));
            $("#minerCurrentEffort").html(formatPercentages(data.base.status.effort, '%', 2));

            // SOLO PANEL
            $("#soloHashrate").html(formatHashrate(data.base.hashrate.solo));
            $("#soloConnectedMiners").html(counter(data.miners.solo));
            $("#soloLastBlockFound").html(lastBlockFound(data.blocks, 'solo'));


        })
        .catch(error => {
            console.error(error);
        });
});

window.fetchAllData = async (apiEndpoints) => {
    try {
        const links = apiEndpoints.map(endpoint => `${baseAPI}/${endpoint}`);

        const [
            { data: { body: { primary: base } } },
            { data: { body: { primary: miners } } },
            { data: { body: { primary: blocks } } },
            { data: { body: { primary: payments } } }
        ] = await Promise.all(links.map(link => axios.get(link)));

        return { base, miners, blocks, payments };
    } catch (error) {
        console.error('Error fetching data:', error);
    }
};

window.fetchSingleData = async (endpoint) => {
    try {
        const link = `${baseAPI}/${endpoint}`;
        const { data: { body: { primary } } } = await axios.get(link);

        return primary;
    } catch (error) {
        console.error(error);
    }
}
