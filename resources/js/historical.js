import "./charts/difficulty";
import "./charts/miners";
import "./charts/workers";
import "./charts/hashrate";
import "./charts/networkHashrate";

$(() => {
    const historicalURL = `${baseAPI}/historical`;

    axios.get(historicalURL).then(response => {
        const data = response.data.body.primary;
        const chartData = formatChartData(data);
        createHashrateChart(chartData);
        createMinersChart(chartData);
        createWorkersChart(chartData);
        createNetworkHashrateChart(chartData);
        createNetworkDifficultyChart(chartData);
    }).catch(error => {
        console.error('Error fetching data from API:', error);
    });

});

window.formatChartData = function (data) {
    return data.map(entry => {
        return {
            time: new Date(entry.time).toLocaleString('en-US', { timeZone: 'America/Chicago' }),
            hashrate: entry.hashrate.shared,
            miners: entry.status.miners,
            workers: entry.status.workers,
            networkHashrate: entry.network.hashrate,
            difficulty: entry.network.difficulty
        };
    });
}
