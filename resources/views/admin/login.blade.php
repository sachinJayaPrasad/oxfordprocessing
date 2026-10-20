<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Oxford Processing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-900 flex items-center justify-center p-6">
    <main class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl">
        <div class="mb-8">
            <p class="text-sm font-semibold uppercase tracking-widest text-blue-800">Oxford Processing</p>
            <h1 class="mt-2 text-2xl font-bold">Admin sign in</h1>
            <p class="mt-2 text-sm text-slate-600">Sign in with your administrator account to manage the site.</p>
        </div>

        <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="mb-1 block text-sm font-medium">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 focus:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200">
                @error('email')
                    <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="mb-1 block text-sm font-medium">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                    class="w-full rounded-lg border border-slate-300 px-3 py-2.5 focus:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-200">
                @error('password')
                    <p class="mt-1 text-sm text-red-700">{{ $message }}</p>
                @enderror
            </div>
            <label class="flex items-center gap-2 text-sm text-slate-700">
                <input type="checkbox" name="remember" value="1" class="rounded border-slate-300">
                Remember me
            </label>
            <button type="submit" class="w-full rounded-lg bg-blue-900 px-4 py-3 font-semibold text-white hover:bg-blue-800">
                Sign in
            </button>
        </form>
    </main>
</body>
</html>
