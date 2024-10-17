<section id="graphs-section">
    <div class="panel">
        <div class="heading">Pool Hashrate</div>
        <canvas id="hashrateChart"></canvas>
    </div>

    <div class="panel">
        <div class="heading">Miners</div>
        <canvas id="minersChart"></canvas>
    </div>

    <div class="panel">
        <div class="heading">Workers</div>
        <canvas id="workersChart"></canvas>
    </div>

    <div class="panel">
        <div class="heading">Network Hashrate</div>
        <canvas id="networkHashrateChart"></canvas>
    </div>

    <div class="panel">
        <div class="heading">Network Difficulty</div>
        <canvas id="networkDifficultyChart"></canvas>
    </div>
</section>
@vite(['resources/js/historical.js'])
