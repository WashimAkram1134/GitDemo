<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Campus Buddy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #dff0f8;
            min-height: 100vh;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }
        .btn-signin {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            transition: all 0.3s ease;
        }
        .btn-signin:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
        }
        .logo-text {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <h1 class="logo-text text-3xl font-bold text-white">Campus Buddy</h1>
        </div>

        <!-- Signup Card -->
        <div class="login-card rounded-2xl p-8">
            <!-- Welcome Title -->
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Join us Buddy!</h2>
                <p class="text-gray-600">Create an account to get started</p>
            </div>

            <!-- Signup Form -->
            <form action="{{ route('register.post') }}" method="POST" class="space-y-4">
                @csrf
                
                <!-- Full Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                        Full Name
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        class="input-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        required
                    >
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        Email Address
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        class="input-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        required
                    >
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Student ID Field -->
                <div>
                    <label for="student_id" class="block text-sm font-medium text-gray-700 mb-1">
                        Student ID
                    </label>
                    <input 
                        type="text" 
                        id="student_id" 
                        name="student_id" 
                        value="{{ old('student_id') }}"
                        placeholder="Enter your student ID"
                        class="input-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        required
                    >
                    @error('student_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Create a password"
                        class="input-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        required
                    >
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                        Confirm Password
                    </label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="Confirm your password"
                        class="input-field w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                        required
                    >
                </div>

                <!-- Sign Up Button -->
                <button 
                    type="submit" 
                    class="btn-signin w-full py-3 px-4 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mt-4"
                >
                    Sign Up
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Already a Buddy?</span>
                </div>
            </div>

            <!-- Sign In Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-medium hover:underline">
                        Sign In here
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-white/80 text-sm">
                © 2024 Campus Buddy. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
