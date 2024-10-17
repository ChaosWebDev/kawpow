<x-layout title="Admin Login">
    <main id="admin-login">
        <header>
            <h2>Administration Login Portal</h2>
        </header>
        <form action="{{ route('admin.login') }}" method="post">
            @csrf

            <input type="text" name="username" id="username" placeholder="username" autocomplete='username' autofocus>
            @error('username')
                <div>{{ $message }}</div>
            @enderror

            <input type="password" name="password" id="password" placeholder="password" autocomplete='off'>

            <button type='submit'>Login</button>
        </form>
    </main>
</x-layout>
