<form action="{{ route('admin.pool.store') }}" class="card form hidden" method="POST" id='form-new'
    enctype="multipart/form-data">
    @csrf

    <!-- Coin Name -->
    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" autofocus>
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Coin Symbol -->
    <input type="text" name="symbol" id="symbol" value="{{ old('symbol') }}" placeholder="Pool Name" autofocus>
    @error('symbol')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Pool Name -->
    <input type="text" name="pool_name" id="pool_name" value="{{ old('pool_name') }}" placeholder="Pool Name"
        autofocus>
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
    <input type="color" name="color" id="color" value="{{ old('color', '#060818') }}" placeholder="Color">
    @error('color')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Externals -->
    <div class="column">
        <div class="row">
            <input type="text" name="externals[]" class='externalInput' value="{{ old('website') }}"
                placeholder="External Site">

            <span>
                Icon <button type='button' class='arrow down'></button>
                <button type='button' class='arrow up hidden'></button>
            </span>
        </div>

        @error('website')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <button class="secondary" type='button'>Add External Link</button>

    <!-- Submit Button -->
    <button type="submit">Create Pool</button>
</form>
