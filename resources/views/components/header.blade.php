@props(['color' => 'bg-purple-600'])
<nav class="bg-white/95 backdrop-blur-sm border-b border-purple-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-fuchsia-500 rounded-lg flex items-center justify-center">
                        <i class="fas fa-utensils text-white text-sm"></i>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-fuchsia-600 bg-clip-text text-transparent">Eat</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="{{ $color }}font-medium hover:text-fuchsia-500 transition-colors">Home</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Restaurants</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Recipes</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">About</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Contact</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-700 hover:text-purple-600 font-medium transition-colors">Sign In</button>
                    <button class="bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white px-6 py-2 rounded-full font-medium hover:from-purple-600 hover:to-fuchsia-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Get Started
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="text-gray-700 hover:text-purple-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>