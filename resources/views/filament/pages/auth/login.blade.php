<x-filament::page>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">

        <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8 space-y-6">

            <!-- Logo / Title -->
            <div class="text-center">
                <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-500 text-sm">Sign in to continue</p>
            </div>

            <!-- Login Form -->
            <div>
                {{ $this->form }}
            </div>

            <!-- Divider -->
            <div class="flex items-center gap-3">
                <div class="flex-1 h-px bg-gray-200"></div>
                <span class="text-xs text-gray-400">OR</span>
                <div class="flex-1 h-px bg-gray-200"></div>
            </div>

            <!-- Google Login -->
            <a href="{{ route('google.login') }}"
               class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition">

                <!-- Google Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" viewBox="0 0 24 24">
                    <path d="M21.35 11.1h-9.18v2.98h5.3c-.23 1.2-.92 2.22-1.96 2.9v2.4h3.17c1.86-1.72 2.94-4.25 2.94-7.28 0-.62-.06-1.22-.17-1.8z"/>
                    <path d="M12.17 21c2.65 0 4.87-.88 6.49-2.4l-3.17-2.4c-.88.6-2 .96-3.32.96-2.55 0-4.7-1.72-5.47-4.04H3.4v2.54A9.83 9.83 0 0012.17 21z"/>
                    <path d="M6.7 13.12A5.91 5.91 0 016.4 12c0-.39.07-.77.2-1.12V8.34H3.4A9.83 9.83 0 002.17 12c0 1.57.38 3.05 1.23 4.34l3.3-2.54z"/>
                    <path d="M12.17 6.96c1.44 0 2.73.5 3.75 1.48l2.8-2.8C17.03 3.98 14.8 3 12.17 3A9.83 9.83 0 003.4 8.34l3.3 2.54c.77-2.32 2.92-3.92 5.47-3.92z"/>
                </svg>

                Continue with Google
            </a>

        </div>

    </div>
</x-filament::page>