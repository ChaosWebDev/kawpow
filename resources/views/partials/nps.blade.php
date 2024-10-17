<section class="row" id='nps-section'>
    <div id="network-section">
        <h3>Network</h3>

        <div class="row">
            <i class="fa fa-globe icon"></i>
            <span class="text">Network Hash Rate:</span>
            <span class="value" id="networkHashRate">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Average Block Time:</span>
            <span class="value" id="networkAverageBlockTime">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Last Block Found:</span>
            <span class="value" id="networkLastBlockFound">TBD</span>
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

        <div class="row">
            <i class="fa fa-coins icon"></i>
            <span class="text">Last Reward:</span>
            <span class="value" id="networkLastReward">TBD</span>
            <span class="value">{{ strtoupper(config('coin.symbol')) }}</span>
        </div>

        <div class="row">
            <i class="nf nf-oct-hash icon"></i>
            <span class="text">Last Hash:</span>
            <span class="value" id="networkLastHashPlaceholder">TBD</span>
            <a class="value hidden" id="networkLastHash"></a>
        </div>

    </div>

    <div id="pool-section">
        <h3>Pool Mining</h3>

        <div class="row">
            <i class="fas fa-tachometer-alt icon"></i>
            <span class="text">Pool Hash Rate:</span>
            <span class="value" id="poolHashRate">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-users icon"></i>
            <span class="text">Connected Miners:</span>
            <span class="value" id="poolConnectedMiners">TBD</span>
        </div>

        <div class="row">
            <i class="fa fa-clock icon"></i>
            <span class="text">Last Block Found:</span>
            <span class="value" id="poolLastBlockFound">TBD</span>
        </div>

        <div class="row">
            <i class="nf nf-md-meter_electric_outline icon"></i>
            <span class="text">Current Effort:</span>
            <span class="value" id="poolCurrentEffort">TBD</span>
        </div>

        <div class="row">
            <i class="far fa-money-bill-alt icon"></i>
            <span class="text">Pool Fee:</span>
            <span class="value" id="receipientFee">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-dollar-sign icon"></i>
            <span class="text">Minimum Payout:</span>
            <span class="value" id="minPayout">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-stopwatch icon"></i>
            <span class="text">Payment Interval:</span>
            <span class="value" id="paymentInterval">TBD</span>
        </div>
    </div>

    <div id="solo-section">
        <h3>Solo Mining</h3>

        <div class="row">
            <i class="fas fa-tachometer-alt icon"></i>
            <span class="text">Solo Pool Hash Rate:</span>
            <span class="value" id="soloHashRate">TBD</span>
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

        <div class="row">
            <i class="far fa-money-bill-alt icon"></i>
            <span class="text">Pool Fee:</span>
            <span class="value" id="receipientFee">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-dollar-sign icon"></i>
            <span class="text">Minimum Payout:</span>
            <span class="value" id="minPayout">TBD</span>
        </div>

        <div class="row">
            <i class="fas fa-stopwatch icon"></i>
            <span class="text">Payment Interval:</span>
            <span class="value" id="paymentInterval">TBD</span>
        </div>
    </div>
</section>
