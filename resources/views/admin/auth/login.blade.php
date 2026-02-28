<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - SidodadiDigital Admin</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-950 text-white font-sans antialiased min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md px-6">
        {{-- Logo --}}
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-2">
                <div class="w-10 h-10 rounded-xl bg-brand-500 flex items-center justify-center">
                    <span class="text-white font-bold text-lg">S</span>
                </div>
                <span class="text-xl font-bold text-white">SidodadiDigital</span>
            </a>
            <p class="mt-2 text-sm text-gray-400">Admin Panel</p>
        </div>

        {{-- Login Card --}}
        <div class="bg-surface border border-surface-border rounded-2xl p-6 sm:p-8">
            <h1 class="text-xl font-semibold text-white mb-6">Sign In</h1>

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500/10 border border-red-500/20 rounded-xl">
                    @foreach ($errors->all() as $error)
                        <p class="text-sm text-red-400">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm text-gray-400 mb-1.5">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
                           placeholder="admin@sidodadidigital.com">
                </div>

                <div>
                    <label for="password" class="block text-sm text-gray-400 mb-1.5">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 text-sm bg-dark-800 border border-surface-border rounded-xl text-white placeholder-gray-500 focus:border-brand-500 focus:ring-1 focus:ring-brand-500 outline-none transition-colors"
                           placeholder="••••••••">
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember"
                           class="w-4 h-4 rounded border-surface-border bg-dark-800 text-brand-500 focus:ring-brand-500 focus:ring-offset-0">
                    <label for="remember" class="text-sm text-gray-400">Remember me</label>
                </div>

                <button type="submit"
                        class="w-full px-6 py-3 text-sm font-semibold text-white bg-brand-500 rounded-xl hover:bg-brand-400 transition-colors shadow-lg shadow-brand-500/25">
                    Sign In
                </button>
            </form>
        </div>

        <p class="mt-6 text-center text-xs text-gray-500">&copy; {{ date('Y') }} SidodadiDigital. All rights reserved.</p>
    </div>

</body>
</html>
