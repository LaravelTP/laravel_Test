@extends('basiclayout')

@section('title','Home-page')

<x-header color='bg-purple-600'/>

@section('content')
    <section class="relative bg-gradient-to-br from-purple-50 via-white to-fuchsia-50 py-20 overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-gradient-to-r from-purple-200 to-fuchsia-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
        <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-r from-fuchsia-200 to-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse animation-delay-2000"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Discover Amazing
                        <span class="bg-gradient-to-r from-purple-600 to-fuchsia-600 bg-clip-text text-transparent block">
                            Food Experiences
                        </span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-2xl">
                        Find the best restaurants, discover new recipes, and connect with fellow food lovers in your area. Your culinary journey starts here.
                    </p>

                    <!-- Search Bar -->
                    {{--  <div class="flex flex-col sm:flex-row gap-4 mb-8 max-w-2xl">
                        <div class="relative flex-1">
                            <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input 
                                type="text" 
                                placeholder="Search restaurants, cuisines, or dishes..." 
                                class="w-full pl-12 pr-4 py-4 text-lg border border-purple-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-white/80 backdrop-blur-sm"
                            >
                        </div>
                        <button class="bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white px-8 py-4 rounded-2xl font-medium hover:from-purple-600 hover:to-fuchsia-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Search
                        </button>
                    </div>  --}}

                    <!-- Stats -->
                    <div class="flex flex-wrap justify-center lg:justify-start gap-8 text-sm text-gray-600">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-purple-500"></i>
                            <span>500+ Locations</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-utensils text-purple-500"></i>
                            <span>1000+ Restaurants</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-users text-purple-500"></i>
                            <span>50k+ Users</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="relative">
                    <div class="relative z-10">
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1681406994502-bb673c265877?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="Delicious food spread" 
                            class="rounded-3xl shadow-2xl w-full"
                        >
                    </div>
                    
                    <!-- Floating Card -->
                    
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Restaurants</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Discover the most popular and highly-rated restaurants in your area
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                {{--  Ici tu dois prendre l'exemple du component et faire en sorte de publier les 3 meilleurs stands --}}
                <!-- Restaurant Card 1 -->
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-purple-50">
                    <div class="relative overflow-hidden">
                        <img 
                            src="/placeholder.svg?height=240&width=400" 
                            alt="The Garden Bistro" 
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                        >
                        <div class="absolute top-4 right-4">
                            <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full hover:bg-white transition-colors">
                                <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">The Garden Bistro</h3>
                            <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full text-sm font-medium">Mediterranean</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="font-medium">4.8</span>
                                <span>(324)</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <i class="far fa-clock text-purple-500"></i>
                                <span>25-35 min</span>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white py-3 rounded-2xl font-medium hover:from-purple-600 hover:to-fuchsia-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            View Menu
                        </button>
                    </div>
                </div>

                <!-- Restaurant Card 2 -->
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-purple-50">
                    <div class="relative overflow-hidden">
                        <img 
                            src="/placeholder.svg?height=240&width=400" 
                            alt="Spice Route" 
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                        >
                        <div class="absolute top-4 right-4">
                            <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full hover:bg-white transition-colors">
                                <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Spice Route</h3>
                            <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full text-sm font-medium">Indian</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="font-medium">4.7</span>
                                <span>(256)</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <i class="far fa-clock text-purple-500"></i>
                                <span>30-40 min</span>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white py-3 rounded-2xl font-medium hover:from-purple-600 hover:to-fuchsia-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            View Menu
                        </button>
                    </div>
                </div>

                <!-- Restaurant Card 3 -->
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-purple-50">
                    <div class="relative overflow-hidden">
                        <img 
                            src="/placeholder.svg?height=240&width=400" 
                            alt="Ocean's Catch" 
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                        >
                        <div class="absolute top-4 right-4">
                            <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full hover:bg-white transition-colors">
                                <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute top-4 left-4">
                            <span class="bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                Featured
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Ocean's Catch</h3>
                            <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded-full text-sm font-medium">Seafood</span>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                            <div class="flex items-center space-x-1">
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="font-medium">4.9</span>
                                <span>(189)</span>
                            </div>
                            <div class="flex items-center space-x-1">
                                <i class="far fa-clock text-purple-500"></i>
                                <span>20-30 min</span>
                            </div>
                        </div>

                        <button class="w-full bg-gradient-to-r from-purple-500 to-fuchsia-500 text-white py-3 rounded-2xl font-medium hover:from-purple-600 hover:to-fuchsia-600 transition-all duration-300 shadow-lg hover:shadow-xl">
                            View Menu
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gradient-to-br from-purple-50 via-white to-fuchsia-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Eat?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    We make discovering and enjoying great food simple and delightful
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-search text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Smart Discovery</h3>
                    <p class="text-gray-600 leading-relaxed">Find exactly what you're craving with our intelligent search and recommendation system.</p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-star text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Verified Reviews</h3>
                    <p class="text-gray-600 leading-relaxed">Read authentic reviews from real customers to make informed dining decisions.</p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-clock text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Real-time Updates</h3>
                    <p class="text-gray-600 leading-relaxed">Get live updates on wait times, availability, and special offers from restaurants.</p>
                </div>

                <!-- Feature 4 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-map-marker-alt text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Location-based</h3>
                    <p class="text-gray-600 leading-relaxed">Discover great food options near you with precise location-based recommendations.</p>
                </div>

                <!-- Feature 5 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-users text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Community Driven</h3>
                    <p class="text-gray-600 leading-relaxed">Join a community of food lovers sharing experiences and recommendations.</p>
                </div>

                <!-- Feature 6 -->
                <div class="text-center p-8 bg-white/80 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 border border-purple-100">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-100 to-fuchsia-100 rounded-2xl mb-6">
                        <i class="fas fa-utensils text-2xl bg-gradient-to-r from-purple-500 to-fuchsia-500 bg-clip-text text-transparent"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Chef Insights</h3>
                    <p class="text-gray-600 leading-relaxed">Get exclusive recipes and cooking tips from professional chefs and food experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 via-fuchsia-600 to-purple-600 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/10 rounded-full mix-blend-overlay filter blur-3xl"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Ready to Start Your Food Journey?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
                Join thousands of food lovers who trust Eat to discover amazing dining experiences every day.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="border-2 border-white text-white px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:text-purple-600 transition-all duration-300">
                    Explore Restaurants
                </button>
            </div>
        </div>
    </section>


    <script>
        // Simple mobile menu toggle (you can expand this)
        document.addEventListener('DOMContentLoaded', function() {
            // Add any interactive JavaScript here
            console.log('Eat app loaded successfully!');
        });
    </script>
@endsection
