<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>IIMK Admin Login</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body
    class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-100 via-white to-slate-200 overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute w-80 h-80 bg-teal-300 rounded-full blur-3xl opacity-30 top-10 left-10"></div>
    <div class="absolute w-80 h-80 bg-blue-300 rounded-full blur-3xl opacity-30 bottom-10 right-10"></div>

    <!-- Login Card -->
    <div
        class="relative w-full max-w-md bg-white/80 backdrop-blur-xl shadow-2xl rounded-2xl p-10 space-y-6 border border-gray-200">

        <!-- Logo -->
        <div class="text-center space-y-3">

            <div
                class="mx-auto w-26 h-16 bg-white rounded-xl flex items-center justify-center shadow-md border border-gray-200">
                <img src="{{ asset('images/iim_logo.png') }}" alt="IIMK Logo" class="w-22 h-16 object-contain">
            </div>
            <br>
            <h1 class="text-2xl font-bold text-gray-800">
                Indian Institute of Management Kozhikode (IIMK)
            </h1>

            <p class="text-sm text-gray-500">
                Secure access for authorized users only
            </p>
        </div>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl text-sm shadow-sm">
                @foreach ($errors->all() as $error)
                    <p>⚠ {{ $error }}</p>
                @endforeach
            </div>
        @endif
        <!-- Divider -->
        <div class="flex items-center gap-3">
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="text-xs text-gray-400 uppercase">Sign in</span>
            <div class="flex-1 h-px bg-gray-200"></div>
        </div>

        <!-- Google Login Button -->
        <a href="{{ route('google.login') }}" class="group relative w-full flex items-center justify-center gap-3 px-5 py-3
                  bg-gradient-to-r from-teal-500 via-cyan-500 to-blue-500
                  hover:from-teal-600 hover:via-cyan-600 hover:to-blue-600
                  text-white font-semibold rounded-xl shadow-lg
                  transition-all duration-300 transform hover:scale-[1.02]">

            <!-- Glow overlay -->
            <span class="absolute inset-0 rounded-xl bg-white opacity-10 group-hover:opacity-20 transition"></span>

            <!-- Google Icon -->
            <svg class="relative z-10" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48">
                <path fill="#fff"
                    d="M44.5 20H24v8.5h11.8C34.5 33.8 29.8 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 6 1.1 8.2 3l6.2-6.2C34.7 4.6 29.6 2.5 24 2.5 11.5 2.5 1.5 12.5 1.5 25S11.5 47.5 24 47.5c12.3 0 22.5-10 22.5-22 0-1.5-.2-3-.5-4.5z" />
            </svg>

            <span class="relative z-10">Continue with Google</span>
        </a>

        <!-- Footer -->
        <p class="text-center text-xs text-gray-400">
            © {{ date('Y') }} IIMK Admin System
        </p>

    </div>

</body>

</html>
