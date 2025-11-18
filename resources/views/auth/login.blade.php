<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('login.post') }}" class="bg-white p-6 rounded shadow w-80">
        @csrf
        <h1 class="text-xl font-bold mb-4 text-center">Login</h1>

        <input type="email" name="email" class="w-full border p-2 mb-3 rounded" placeholder="Email" required>
        <input type="password" name="password" class="w-full border p-2 mb-3 rounded" placeholder="Password" required>

        @if ($errors->any())
            <div class="text-red-600 text-sm mb-3">{{ $errors->first() }}</div>
        @endif

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Masuk
        </button>
    </form>
</body>
</html>
