<section class="row" id='nps-section'>
    <div id="network-section" class='card'>
        <h3>Network</h3>

        <div class="row">
            <i class="fa fa-globe icon"></i>
            <span class="text">Hashrate:</span>
            <span class="value" id="networkHashRate">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-unlock-alt icon"></i>
            <span class="text">Difficulty:</span>
            <span class="value" id="networkDifficulty">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-bars icon"></i>
            <span class="text">Blockchain Height:</span>
            <span class="value" id="networkHeight">TBD</span>
        </div>
    </div>

    <div id="pool-section" class='card'>
        <h3>Pool</h3>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Last Block Found:</span>
            <span class="value" id="poolLastBlockFound">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-coins icon"></i>
            <span class="text">Last Reward:</span>
            <span class="value" id="poolLastReward">0</span>
            <span class="value">{{ strtoupper(config('coin.symbol')) }}</span>
        </div>

        <div class="row">
            <i class="nf nf-oct-hash icon"></i>
            <span class="text">Last Hash:</span>
            <span class="value" id="poolLastHashPlaceholder">TBD</span>
            <a class="value hidden" id="poolLastHash"></a>
        </div>

        <div class="row">
            <i class="far fa-money-bill-alt icon"></i>
            <span class="text">Pool Fee:</span>
            <span class="value" id="poolRecipientFee">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-dollar-sign icon"></i>
            <span class="text">Minimum Payout:</span>
            <span class="value" id="poolMinPayment">0</span>
            <span class="value">{{ strtoupper(config('coin.symbol')) }}</span>
        </div>

        <div class="row">
            <i class="fas fa-stopwatch icon"></i>
            <span class="text">Payment Interval:</span>
            <span class="value" id="poolPaymentInterval">TBD</span>
        </div>
    </div>

    <div id="miner-section" class='card'>
        <h3>Pool Mining</h3>

        <div class="row">
            <i class="fas fa-tachometer-alt icon"></i>
            <span class="text">Pool Hash Rate:</span>
            <span class="value" id="minerHashrate">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-users icon"></i>
            <span class="text">Connected Miners:</span>
            <span class="value" id="minerConnectedMiners">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Last Block Found:</span>
            <span class="value" id="minerLastBlockFound">TBD</span>
        </div>

        <div class="row">
            <i class="nf nf-md-meter_electric_outline icon"></i>
            <span class="text">Current Effort:</span>
            <span class="value" id="minerCurrentEffort">TBD</span>
        </div>
    </div>

    <div id="solo-section" class='card'>
        <h3>Solo Mining</h3>

        <div class="row">
            <i class="fas fa-tachometer-alt icon"></i>
            <span class="text">Solo Pool Hash Rate:</span>
            <span class="value" id="soloHashrate">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-user icon"></i>
            <span class="text">Connected Miners:</span>
            <span class="value" id="soloConnectedMiners">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Last Block Found:</span>
            <span class="value" id="soloLastBlockFound">TBD</span>
        </div>
    </div>
</section>
@vite(['resources/js/data.js'])
