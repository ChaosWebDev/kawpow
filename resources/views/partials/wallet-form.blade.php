<section id="walletFormSection">
    <h2>Input your wallet</h2>

    <form action="{{ route('wallet.set') }}" method="post">
        @csrf
        <input type="text" name="wallet" id="wallet" required>
        <button type='submit' class='row'>
            <i class="fa fa-search"></i>
            <span>Search</span>
        </button>
    </form>
</section>
