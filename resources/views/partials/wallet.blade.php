<section id="walletSection">
    <div class="card-holder">
        <div class="card" id="walletPoolRoundShares">
            <h2 class='heading'>Current Pool<br>Round Shares</h2>
            <span class='value'>TBD</span>
            <i class="fa-solid fa-share-from-square"></i>
            <span class="notes"># of shares * share difficulty</span>
        </div>

        <div class="card" id="walletSoloRoundShares">
            <h2 class='heading'>Current Solo<br>Round Shares</h2>
            <span class='value'>TBD</span>
            <i class="fa-solid fa-share-from-square"></i>
            <span class="notes"># of shares * share difficulty</span>
        </div>

        <div class="card" id="walletEffort">
            <h2 class='heading'>Current Miner<br>Effort</h2>
            <span class='value'>TBD</span>
            <i class="nf nf-md-chart_donut"></i>
        </div>

        <div class="card" id="walletTimes">
            <h2 class='heading'>*Times</h2>
            <span class='value'>TBD</span>
            <i class="fa-regular fa-clock"></i>
            <span class="notes">
                *Times is defined as: Time mining this round beginning with the first share struck this
                round.
            </span>
        </div>

        <div class="card" id="walletPendingPayments">
            <h2 class='heading'>Pending<br>Payments</h2>
            <span class='value'>
                <span class="val">0</span>
                <span class="symbol">{{ strtoupper(config('coin.symbol')) }}</span>
            </span>
            <i class="fa-solid fa-coins"></i>
        </div>

        <div class="card" id="walletTotalPayments">
            <h2 class='heading'>Total<br>Payments</h2>
            <span class='value'>
                <span class="val">0</span>
                <span class="symbol">{{ strtoupper(config('coin.symbol')) }}</span>
            </span>
            <i class="fa-solid fa-coins"></i>
        </div>

        <div class="card" id="walletPoolHashrate">
            <h2 class='heading'>Adjusted Miner<br>Pool Hashrate</h2>
            <span class='value'>0 H/s</span>
            <i class="fa-solid fa-coins"></i>
        </div>

        <div class="card" id="walletSoloHashrate">
            <h2 class='heading'>Adjusted Miner<br>Pool Hashrate</h2>
            <span class='value'>0 H/s</span>
            <i class="fa-solid fa-coins"></i>
        </div>
    </div>
</section>
