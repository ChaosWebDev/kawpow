window.createNetworkHashrateChart = function (chartData) {
    const ctx = document.getElementById('networkHashrateChart').getContext('2d');
    const labels = chartData.map(item => item.time);
    const dataPoints = chartData.map(item => item.networkHashrate);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Network Hashrate',
                data: dataPoints,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointRadius: 0,
                fill: true,
            }]
        },
        options: {
            scales: {
                x: {
                    title: {
                        display: false,
                        text: 'Time'
                    },
                    ticks: {
                        autoSkip: true,
                        maxTicksLimit: 0,
                        display: false
                    }
                },
                y: {
                    title: {
                        display: false,
                        text: 'Hashrate'
                    },
                    ticks: {
                        autoSkip: true,
                        maxTicksLimit: 0,
                        display: false
                    }
                }
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            },
            maintainAspectRatio: false,
        }
    });
}
