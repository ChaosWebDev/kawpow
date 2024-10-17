window.createHashrateChart = function (chartData) {
    const ctx = document.getElementById('hashrateChart').getContext('2d');
    const labels = chartData.map(item => item.time);
    const dataPoints = chartData.map(item => item.hashrate);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Pool Hash Rate',
                data: dataPoints,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
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
                        text: 'Hash Rate'
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
