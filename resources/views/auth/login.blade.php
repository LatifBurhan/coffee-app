<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SARONE Coffee</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-[#1f1b18] flex items-center justify-center h-screen font-sans text-gray-300">

    <div class="bg-[#2a2623] p-8 md:p-10 rounded-2xl shadow-2xl w-full max-w-md border border-orange-900/30 relative overflow-hidden">

        <div class="absolute -top-10 -right-10 w-32 h-32 bg-orange-600 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-orange-800 rounded-full blur-3xl opacity-20"></div>

        <div class="relative z-10 text-center mb-8">
            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center text-white text-2xl mx-auto mb-4 shadow-lg shadow-orange-500/20">
                <i class="fas fa-mug-hot"></i>
            </div>
            <h2 class="text-2xl font-bold text-white tracking-widest font-serif">SARONE</h2>
            <p class="text-sm text-gray-500 mt-1">Admin Dashboard Access</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 bg-red-500/10 border border-red-500/50 text-red-400 px-4 py-3 rounded-xl text-sm text-center">
                <i class="fas fa-exclamation-circle mr-2"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST" class="space-y-5 relative z-10">
            @csrf

            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-2 ml-1">Email Address</label>
                <div class="relative">
                    <i class="fas fa-envelope absolute left-4 top-3.5 text-gray-500"></i>
                    <input type="email" name="email" required autofocus placeholder="admin@sarone.id"
                        class="w-full pl-11 pr-4 py-3 bg-[#181512] border border-gray-700 rounded-xl focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition text-white placeholder-gray-600">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-500 uppercase mb-2 ml-1">Password</label>
                <div class="relative">
                    <i class="fas fa-lock absolute left-4 top-3.5 text-gray-500"></i>
                    <input type="password" name="password" required placeholder="••••••••"
                        class="w-full pl-11 pr-4 py-3 bg-[#181512] border border-gray-700 rounded-xl focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 transition text-white placeholder-gray-600">
                </div>
            </div>

            <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-orange-600 to-orange-700 text-white font-bold rounded-xl hover:from-orange-500 hover:to-orange-600 transition shadow-lg shadow-orange-900/40 transform hover:-translate-y-0.5">
                Masuk Dashboard
            </button>
        </form>

        <div class="mt-8 text-center relative z-10">
            <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-orange-400 transition flex items-center justify-center gap-2">
                <i class="fas fa-arrow-left"></i> Kembali ke Website
            </a>
        </div>
    </div>

</body>
</html>
