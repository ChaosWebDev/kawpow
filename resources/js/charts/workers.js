window.createWorkersChart = function (chartData) {
    const ctx = document.getElementById('workersChart').getContext('2d');
    const labels = chartData.map(item => item.time);
    const dataPoints = chartData.map(item => item.workers);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Number of Workers',
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
                        autoSkip: false,
                        maxTicksLimit: 0,
                        display: false
                    }
                },
                y: {
                    title: {
                        display: false,
                        text: 'Workers'
                    },
                    ticks: {
                        autoSkip: false,
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
