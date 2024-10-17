<form action="{{ route('admin.pool.update', $coin->id) }}" class="card form hidden" id='form-{{ $coin->symbol }}'
    method='POST'>
    @csrf
    @method('PUT')

    <!-- Pool Name -->
    <input type="text" name="pool_name" id="pool_name" value="{{ old('pool_name', $coin->pool_name) }}"
        placeholder="Pool Name" autofocus>
    @error('pool_name')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Icon URL -->
    <input type="file" name="icon_url" id="icon_url" accept="image/*">
    @if ($coin->icon_url)
        <img id="icon_url_preview" src="{{ asset('/storage/' . $coin->icon_url) }}" alt="Icon Preview"
            style="width: 100px; height: auto;">
    @endif
    @error('icon_url')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Scheme -->
    <input type="text" name="scheme" id="scheme" value="{{ old('scheme', $coin->scheme) }}" placeholder="Scheme">
    @error('scheme')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Primary Color -->
    <input type="color" name="primary_color" id="primary_color"
        value="{{ old('primary_color', $coin->primary_color) }}" placeholder="Primary Color">
    @error('primary_color')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Secondary Color -->
    <input type="color" name="secondary_color" id="secondary_color"
        value="{{ old('secondary_color', $coin->secondary_color) }}" placeholder="Secondary Color">
    @error('secondary_color')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Website -->
    <input type="text" name="website" id="website" value="{{ old('website', $coin->website) }}"
        placeholder="Website">
    @error('website')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Explorer -->
    <input type="text" name="explorer" id="explorer" value="{{ old('explorer', $coin->explorer) }}"
        placeholder="Explorer">
    @error('explorer')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- GitHub -->
    <input type="text" name="github" id="github" value="{{ old('github', $coin->github) }}"
        placeholder="GitHub">
    @error('github')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Discord -->
    <input type="text" name="discord" id="discord" value="{{ old('discord', $coin->discord) }}"
        placeholder="Discord">
    @error('discord')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Forum -->
    <input type="text" name="forum" id="forum" value="{{ old('forum', $coin->forum) }}" placeholder="Forum">
    @error('forum')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- X -->
    <input type="text" name="x" id="x" value="{{ old('x', $coin->x) }}" placeholder="X">
    @error('x')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Market -->
    <input type="text" name="market" id="market" value="{{ old('market', $coin->market) }}"
        placeholder="Market">
    @error('market')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- CoinGecko -->
    <input type="text" name="coingecko" id="coingecko" value="{{ old('coingecko', $coin->coingecko) }}"
        placeholder="CoinGecko">
    @error('coingecko')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Submit Button -->
    <div class="buttons">
        <button type="submit">Update Pool</button>
        <button type='button' class='btn-alert' onclick="destroyPool(`{{ $coin->id }}`)">Delete Pool</button>
    </div>
</form>
