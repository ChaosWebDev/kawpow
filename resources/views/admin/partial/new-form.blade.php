<form action="{{ route('admin.pool.store') }}" class="card form hidden" method="POST" id='form-new'
    enctype="multipart/form-data">
    @csrf

    <!-- Pool Name -->
    <input type="text" name="pool_name" id="pool_name" value="{{ old('pool_name') }}" placeholder="Pool Name" autofocus>
    @error('pool_name')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Icon URL -->
    <input type="file" name="icon_url" id="icon_url" accept="image/*">
    @error('icon_url')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Scheme -->
    <input type="text" name="scheme" id="scheme" value="{{ old('scheme') }}" placeholder="Scheme">
    @error('scheme')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Primary Color -->
    <input type="color" name="primary_color" id="primary_color" value="{{ old('primary_color', '#060818') }}"
        placeholder="Primary Color">
    @error('primary_color')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Secondary Color -->
    <input type="color" name="secondary_color" id="secondary_color" value="{{ old('secondary_color', '#0E1726') }}"
        placeholder="Secondary Color">
    @error('secondary_color')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Website -->
    <input type="text" name="website" id="website" value="{{ old('website') }}" placeholder="Website">
    @error('website')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Explorer -->
    <input type="text" name="explorer" id="explorer" value="{{ old('explorer') }}" placeholder="Explorer">
    @error('explorer')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- GitHub -->
    <input type="text" name="github" id="github" value="{{ old('github') }}" placeholder="GitHub">
    @error('github')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Discord -->
    <input type="text" name="discord" id="discord" value="{{ old('discord') }}" placeholder="Discord">
    @error('discord')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Forum -->
    <input type="text" name="forum" id="forum" value="{{ old('forum') }}" placeholder="Forum">
    @error('forum')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- X -->
    <input type="text" name="x" id="x" value="{{ old('x') }}" placeholder="X">
    @error('x')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Market -->
    <input type="text" name="market" id="market" value="{{ old('market') }}" placeholder="Market">
    @error('market')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- CoinGecko -->
    <input type="text" name="coingecko" id="coingecko" value="{{ old('coingecko') }}" placeholder="CoinGecko">
    @error('coingecko')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Submit Button -->
    <button type="submit">Create Pool</button>
</form>
