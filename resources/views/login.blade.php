@extends('basiclayout')

@section('title','login')

@section('content')

        <div class="fixed top-0 left-0 w-96 h-96 bg-gradient-to-r from-purple-200 to-fuchsia-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="fixed top-0 right-0 w-96 h-96 bg-gradient-to-r from-fuchsia-200 to-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse animation-delay-2000"></div>
    <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse animation-delay-4000"></div>

    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-sm border-b border-purple-100 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-utensils text-white text-sm"></i>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-fuchsia-600 bg-clip-text text-transparent">Eat</span>
                </div>

                <!-- Back to Home -->
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-purple-600 font-medium transition-colors flex items-center space-x-2">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to Home</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="relative z-10 flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Header -->
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome back!</h2>
                <p class="text-gray-600">Sign in to your account to continue your food journey</p>
            </div>

            <!-- Login Form -->
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border border-purple-100">
                <form class="space-y-6" action="#" method="POST">
                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                autocomplete="email" 
                                required 
                                class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300"
                                placeholder="Enter your email"
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                autocomplete="current-password" 
                                required 
                                class="w-full pl-12 pr-12 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300"
                                placeholder="Enter your password"
                            >
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none" onclick="togglePassword()">
                                    <i class="fas fa-eye" id="toggleIcon"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember-me" 
                                name="remember-me" 
                                type="checkbox" 
                                class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-purple-300 rounded"
                            >
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-purple-600 hover:text-fuchsia-500 transition-colors">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <!-- Sign In Button -->
                    <div>
                        <button 
                            type="submit" 
                            class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-medium rounded-2xl text-white bg-gradient-to-r from-purple-500 to-fuchsia-500 hover:from-purple-600 hover:to-fuchsia-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all duration-300 shadow-lg hover:shadow-xl"
                        >
                            <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                                <i class="fas fa-sign-in-alt text-purple-200 group-hover:text-purple-100"></i>
                            </span>
                            Sign in to your account
                        </button>
                    </div>

                    
                </form>
            </div>

            <!-- Sign Up Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="register.html" class="font-medium text-purple-600 hover:text-fuchsia-500 transition-colors ml-1">
                        Sign up for free
                    </a>
                </p>
            </div>

            <!-- Features Preview -->
            <div class="mt-12 grid grid-cols-3 gap-4 text-center">
                <div class="p-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                        <i class="fas fa-utensils text-purple-500"></i>
                    </div>
                    <p class="text-xs text-gray-600">1000+ Restaurants</p>
                </div>
                <div class="p-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                        <i class="fas fa-star text-purple-500"></i>
                    </div>
                    <p class="text-xs text-gray-600">Verified Reviews</p>
                </div>
                <div class="p-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                        <i class="fas fa-heart text-purple-500"></i>
                    </div>
                    <p class="text-xs text-gray-600">Save Favorites</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="relative z-10 bg-white/50 backdrop-blur-sm border-t border-purple-100 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-6 h-6 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-utensils text-white text-xs"></i>
                    </div>
                    <span class="text-lg font-bold bg-gradient-to-r from-purple-600 to-fuchsia-600 bg-clip-text text-transparent">Eat</span>
                </div>
                
                <div class="flex items-center space-x-6 text-sm text-gray-600">
                    <a href="#" class="hover:text-purple-600 transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-purple-600 transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-purple-600 transition-colors">Help Center</a>
                </div>
            </div>
            
            <div class="mt-4 pt-4 border-t border-purple-100 text-center text-sm text-gray-500">
                <p>© 2024 Eat. All rights reserved. Built with HTML & Tailwind CSS.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        // Form validation and submission
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Basic validation
                if (!emailInput.value || !passwordInput.value) {
                    alert('Please fill in all fields');
                    return;
                }

                // Email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(emailInput.value)) {
                    alert('Please enter a valid email address');
                    return;
                }

                // Simulate login process
                const submitButton = form.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Signing in...';
                submitButton.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert('Login successful! (This is a demo)');
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                    // In a real app, you would redirect to dashboard
                    // window.location.href = 'dashboard.html';
                }, 2000);
            });

            // Real-time validation feedback
            emailInput.addEventListener('blur', function() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (this.value && !emailRegex.test(this.value)) {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-purple-200');
                } else {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-purple-200');
                }
            });

            passwordInput.addEventListener('input', function() {
                if (this.value.length > 0 && this.value.length < 6) {
                    this.classList.add('border-yellow-500');
                    this.classList.remove('border-purple-200', 'border-red-500');
                } else if (this.value.length >= 6) {
                    this.classList.add('border-green-500');
                    this.classList.remove('border-purple-200', 'border-yellow-500');
                } else {
                    this.classList.add('border-purple-200');
                    this.classList.remove('border-yellow-500', 'border-green-500');
                }
            });
        });
    </script>

@endsection