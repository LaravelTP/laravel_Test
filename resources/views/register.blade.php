{{--  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">  --}}
   <script src="https://cdn.tailwindcss.com"></script>

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

                <!-- Navigation Links -->
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Home</a>
                    <a href="{{ url('/login') }}" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="relative z-10 flex items-center justify-center min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full space-y-8">
            <!-- Header -->
            <div class="text-center">
                {{--  <div class="mx-auto w-16 h-16 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-user-plus text-white text-2xl"></i>
                </div>  --}}
                <h2 class="text-3xl font-bold text-gray-900 mb-1">Join Eat Today!</h2>
                <p class="text-gray-600">Create your account and start discovering amazing food experiences</p>
            </div>

            <!-- Registration Form -->
            <div class="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl p-8 border border-purple-100">
                <form class="space-y-6" action="{{ url('/regUser') }}" method="POST" id="registerForm">
                    <!-- Name Fields -->
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                                Name
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    id="firstName" 
                                    name="name" 
                                    type="text" 
                                    value="{{ old('name') }}"
                                    class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 @error('name') border-red-500 @enderror"
                                    placeholder="John"
                                >
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                Business Name
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input 
                                    id="lastName" 
                                    name="nom_entreprise" 
                                    type="text" 
                                    value="{{ old('nom_entreprise') }}"
                                    class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 @error('nom_entreprise') border-red-500 @enderror"
                                    placeholder="Lyte Food"
                                >
                                @error('nom_entreprise')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

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
                                value="{{ old('email') }}"
                                class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 @error('email') border-red-500 @enderror"
                                placeholder="john@example.com"
                            >
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{--  <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input 
                                id="phone" 
                                name="phone" 
                                type="tel" 
                                class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300"
                                placeholder="+1 (555) 123-4567"
                            >
                        </div>
                    </div>  --}}

                    <!-- Password Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                    class="w-full pl-12 pr-12 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 @error('password') border-red-500 @enderror"
                                    placeholder="Create password"
                                >
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    id="confirmPassword" 
                                    name="password_confirmation" 
                                    type="password" 
                                    class="w-full pl-12 pr-12 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 @error('password_confirmation') border-red-500 @enderror"
                                    placeholder="Confirm password"
                                >
                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                
                    <!-- Sign Up Button -->
                    <div>
                        <!-- Profile Image Upload -->
                        <div class="mb-4">
                            <label for="profile_image" class="block text-sm font-medium text-gray-700 mb-2">
                                Profile Image
                            </label>
                            <div class="relative flex items-center">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                                <input 
                                    id="profile_image" 
                                    name="profile_image" 
                                    type="file" 
                                    accept="image/*"
                                    class="w-full pl-12 pr-4 py-4 border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/70 backdrop-blur-sm transition-all duration-300 file:bg-purple-100 file:border-0 file:rounded-xl file:py-2 file:px-4 file:text-purple-700 file:font-semibold @error('profile_image') border-red-500 @enderror"
                                >
                            </div>
                            @error('profile_image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button 
                            type="submit" 
                            class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-medium rounded-2xl text-white bg-gradient-to-r from-purple-500 to-fuchsia-500 hover:from-purple-600 hover:to-fuchsia-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all duration-300 shadow-lg hover:shadow-xl"
                        >
                            <span class="absolute left-0 inset-y-0 flex items-center pl-4">
                                <i class="fas fa-user-plus text-purple-200 group-hover:text-purple-100"></i>
                            </span>
                            Create your account
                        </button>
                    </div>

                </form>
            </div>

            <!-- Sign In Link -->
            <div class="text-center">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="{{ url('/login') }}" class="font-medium text-purple-600 hover:text-fuchsia-500 transition-colors ml-1">
                        Sign in here
                    </a>
                </p>
            </div>

            <!-- Benefits Preview -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-purple-100">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-search text-purple-500"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Discover</h3>
                    <p class="text-sm text-gray-600">Find amazing restaurants and hidden gems in your area</p>
                </div>
                <div class="p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-purple-100">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-heart text-purple-500"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Save</h3>
                    <p class="text-sm text-gray-600">Create lists of your favorite restaurants and recipes</p>
                </div>
                <div class="p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-purple-100">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-users text-purple-500"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Connect</h3>
                    <p class="text-sm text-gray-600">Share experiences with fellow food enthusiasts</p>
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

    {{--  <script>
        // Toggle password visibility
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(iconId);
            
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

        // Password strength checker
        function checkPasswordStrength(password) {
            let strength = 0;
            const checks = {
                length: password.length >= 8,
                lowercase: /[a-z]/.test(password),
                uppercase: /[A-Z]/.test(password),
                numbers: /\d/.test(password),
                special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
            };

            Object.values(checks).forEach(check => {
                if (check) strength++;
            });

            return { strength, checks };
        }

        // Update password strength indicator
        function updatePasswordStrength(password) {
            const { strength, checks } = checkPasswordStrength(password);
            const strengthBars = ['strength1', 'strength2', 'strength3', 'strength4'];
            const strengthText = document.getElementById('strengthText');

            // Reset all bars
            strengthBars.forEach(bar => {
                document.getElementById(bar).className = 'h-1 w-1/4 bg-gray-200 rounded-full';
            });

            // Update bars based on strength
            const colors = ['bg-red-400', 'bg-yellow-400', 'bg-blue-400', 'bg-green-400'];
            const labels = ['Very Weak', 'Weak', 'Good', 'Strong'];

            if (strength > 0) {
                for (let i = 0; i < Math.min(strength, 4); i++) {
                    document.getElementById(strengthBars[i]).className = `h-1 w-1/4 ${colors[Math.min(strength - 1, 3)]} rounded-full`;
                }
                strengthText.textContent = labels[Math.min(strength - 1, 3)];
                strengthText.className = `text-xs mt-1 ${strength < 2 ? 'text-red-500' : strength < 3 ? 'text-yellow-500' : strength < 4 ? 'text-blue-500' : 'text-green-500'}`;
            } else {
                strengthText.textContent = 'Password strength';
                strengthText.className = 'text-xs text-gray-500 mt-1';
            }
        }

        // User type selection
        function updateUserTypeSelection() {
            const radioButtons = document.querySelectorAll('input[name="userType"]');
            const options = document.querySelectorAll('.user-type-option');

            radioButtons.forEach((radio, index) => {
                radio.addEventListener('change', function() {
                    options.forEach(option => {
                        option.classList.remove('border-purple-500', 'bg-purple-50');
                        option.classList.add('border-purple-200');
                    });

                    if (this.checked) {
                        options[index].classList.remove('border-purple-200');
                        options[index].classList.add('border-purple-500', 'bg-purple-50');
                    }
                });

                // Set initial state
                if (radio.checked) {
                    options[index].classList.remove('border-purple-200');
                    options[index].classList.add('border-purple-500', 'bg-purple-50');
                }
            });
        }

        // Form validation and submission
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const emailFeedback = document.getElementById('emailFeedback');
            const passwordMatch = document.getElementById('passwordMatch');

            // Initialize user type selection
            updateUserTypeSelection();

            // Email validation
            emailInput.addEventListener('blur', function() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (this.value) {
                    if (emailRegex.test(this.value)) {
                        this.classList.remove('border-red-500');
                        this.classList.add('border-green-500');
                        emailFeedback.textContent = 'Email looks good!';
                        emailFeedback.className = 'mt-1 text-sm text-green-600';
                        emailFeedback.classList.remove('hidden');
                    } else {
                        this.classList.add('border-red-500');
                        this.classList.remove('border-green-500');
                        emailFeedback.textContent = 'Please enter a valid email address';
                        emailFeedback.className = 'mt-1 text-sm text-red-600';
                        emailFeedback.classList.remove('hidden');
                    }
                } else {
                    this.classList.remove('border-red-500', 'border-green-500');
                    emailFeedback.classList.add('hidden');
                }
            });

            // Password strength checking
            passwordInput.addEventListener('input', function() {
                updatePasswordStrength(this.value);
                checkPasswordMatch();
            });

            // Password confirmation
            confirmPasswordInput.addEventListener('input', checkPasswordMatch);

            function checkPasswordMatch() {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;

                if (confirmPassword) {
                    if (password === confirmPassword) {
                        confirmPasswordInput.classList.remove('border-red-500');
                        confirmPasswordInput.classList.add('border-green-500');
                        passwordMatch.textContent = 'Passwords match!';
                        passwordMatch.className = 'mt-1 text-sm text-green-600';
                        passwordMatch.classList.remove('hidden');
                    } else {
                        confirmPasswordInput.classList.add('border-red-500');
                        confirmPasswordInput.classList.remove('border-green-500');
                        passwordMatch.textContent = 'Passwords do not match';
                        passwordMatch.className = 'mt-1 text-sm text-red-600';
                        passwordMatch.classList.remove('hidden');
                    }
                } else {
                    confirmPasswordInput.classList.remove('border-red-500', 'border-green-500');
                    passwordMatch.classList.add('hidden');
                }
            }

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(form);
                const data = Object.fromEntries(formData);

                {{--  // Basic validation
                if (!data.firstName || !data.lastName || !data.email || !data.password || !data.confirmPassword) {
                    alert('Please fill in all  fields');
                    return;
                }

                if (data.password !== data.confirmPassword) {
                    alert('Passwords do not match');
                    return;
                }

                if (!data.terms) {
                    alert('Please accept the Terms of Service and Privacy Policy');
                    return;
                }  --}}

                // Simulate registration process
                const submitButton = form.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Creating account...';
                submitButton.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert('Registration successful! Welcome to Eat! (This is a demo)');
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                    // In a real app, you would redirect to dashboard or email verification
                    // window.location.href = 'dashboard.html';
                }, 2000);
            });
        });
    </script>  --}}