window.createNetworkDifficultyChart = function (chartData) {
    const ctx = document.getElementById('networkDifficultyChart').getContext('2d');
    const labels = chartData.map(item => item.time);
    const dataPoints = chartData.map(item => item.difficulty);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Network Difficulty',
                data: dataPoints,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
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
                        maxTicksLimit: 1,
                        display: false
                    }
                },
                y: {
                    title: {
                        display: false,
                        text: 'Difficulty'
                    },
                    ticks: {
                        autoSkip: true,
                        maxTicksLimit: 1,
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
