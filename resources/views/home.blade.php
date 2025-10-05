<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  
  <!-- Hero Section -->
  <div class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-24 sm:px-6 lg:px-8">
      <div class="text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
          Welcome to <span class="text-yellow-300">My Blog</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90">
          Discover amazing stories, insights, and knowledge shared by passionate writers from around the world.
        </p>
        <div class="space-x-4">
          <a href="/posts" class="inline-block bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300 transform hover:scale-105">
            Explore Posts
          </a>
          <a href="/about" class="inline-block border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition duration-300">
            About Me
          </a>
        </div>
      </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
      <div class="absolute -top-10 -right-10 w-40 h-40 bg-yellow-300 rounded-full opacity-20 animate-pulse"></div>
      <div class="absolute top-1/2 -left-20 w-60 h-60 bg-purple-400 rounded-full opacity-10 animate-pulse delay-1000"></div>
      <div class="absolute bottom-10 right-1/4 w-32 h-32 bg-blue-300 rounded-full opacity-15 animate-pulse delay-500"></div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Our Blog?</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          We provide high-quality content that inspires, educates, and entertains our readers.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality Content</h3>
          <p class="text-gray-600">Well-researched and thoughtfully written articles that provide real value to our readers.</p>
        </div>
        
        <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Fresh Updates</h3>
          <p class="text-gray-600">Regular updates with new content covering the latest trends and insights in various topics.</p>
        </div>
        
        <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Community</h3>
          <p class="text-gray-600">Join our growing community of readers and writers sharing knowledge and experiences.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA Section -->
  <div class="bg-gray-900 text-white py-16">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold mb-4">Ready to Start Reading?</h2>
      <p class="text-xl mb-8 opacity-90">
        Join thousands of readers who trust us for quality content and insights.
      </p>
      <a href="/posts" class="inline-block bg-yellow-400 text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-yellow-300 transition duration-300 transform hover:scale-105">
        Browse All Posts
      </a>
    </div>
  </div>
</x-layout>