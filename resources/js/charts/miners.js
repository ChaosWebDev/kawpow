window.createMinersChart = function (chartData) {
    const ctx = document.getElementById('minersChart').getContext('2d');
    const labels = chartData.map(item => item.time);
    const dataPoints = chartData.map(item => item.miners);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Number of Miners',
                data: dataPoints,
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 2,
                pointRadius: 0,
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
                        text: 'Miners'
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
