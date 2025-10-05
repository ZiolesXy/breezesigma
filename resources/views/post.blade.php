<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="bg-white">
    <!-- Navigation -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
      <a href="/posts" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition-colors">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Posts
      </a>
    </div>

    <!-- Hero Image -->
    <div class="w-full h-64 md:h-96 bg-gradient-to-br from-indigo-500 to-purple-600 relative overflow-hidden">
      @if(isset($post->image))
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
      @else
        <div class="w-full h-full flex items-center justify-center">
          <svg class="w-24 h-24 text-white opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
          </svg>
        </div>
      @endif
      
      <!-- Category Badge -->
      <div class="absolute top-6 left-6">
        <a href="/posts?categories/{{ $post->category->slug }}" 
           class="bg-white bg-opacity-90 text-gray-800 text-sm font-semibold py-2 px-4 rounded-full hover:bg-opacity-100 transition-all duration-200">
          {{ $post->category->name }}
        </a>
      </div>
    </div>

    <!-- Article Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Article Header -->
      <div class="py-8 border-b border-gray-200">
        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
          {{ $post->title }}
        </h1>
        
        <!-- Author Info -->
        <div class="flex items-center justify-between flex-wrap gap-4">
          <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-lg mr-4">
              {{ substr($post->author->name, 0, 1) }}
            </div>
            <div>
              <h3 class="text-lg font-semibold text-gray-900">
                <a href="/posts?author={{ $post->author->username }}" class="hover:text-indigo-600 transition-colors">
                  {{ $post->author->name }}
                </a>
              </h3>
              <div class="flex items-center text-gray-500 text-sm">
                <span>{{ $post->created_at->format('M d, Y') }}</span>
                <span class="mx-2">•</span>
                <span>{{ ceil(str_word_count($post->body) / 200) }} min read</span>
              </div>
            </div>
          </div>
          
          <!-- Social Share Buttons -->
          <div class="flex items-center space-x-3">
            <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" title="Share on Twitter">
              <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </button>
            <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" title="Share on Facebook">
              <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </button>
            <button class="p-2 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors" title="Copy Link">
              <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Article Body -->
      <div class="py-12">
        <div class="prose prose-lg max-w-none">
          <div class="text-gray-700 leading-relaxed text-lg">
            {!! nl2br(e($post->body)) !!}
          </div>
        </div>
      </div>

      <!-- Article Footer -->
      <div class="py-8 border-t border-gray-200">
        <!-- Engagement Stats -->
        <div class="flex items-center justify-between mb-8">
          <div class="flex items-center space-x-6">
            <button class="flex items-center text-gray-500 hover:text-red-500 transition-colors">
              <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
              <span class="font-medium">42 Likes</span>
            </button>
            <button class="flex items-center text-gray-500 hover:text-blue-500 transition-colors">
              <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
              <span class="font-medium">18 Comments</span>
            </button>
          </div>
          
          <div class="flex items-center space-x-2 text-gray-500">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <span>1.2k views</span>
          </div>
        </div>

        <!-- Author Bio -->
        <div class="bg-gray-50 rounded-xl p-6">
          <div class="flex items-start">
            <div class="w-16 h-16 rounded-full bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white font-bold text-xl mr-4 flex-shrink-0">
              {{ substr($post->author->name, 0, 1) }}
            </div>
            <div class="flex-1">
              <h4 class="text-xl font-semibold text-gray-900 mb-2">
                <a href="/posts?author={{ $post->author->username }}" class="hover:text-indigo-600 transition-colors">
                  {{ $post->author->name }}
                </a>
              </h4>
              <p class="text-gray-600 mb-3">
                Passionate writer and developer sharing insights about technology, programming, and digital innovation. 
                Always exploring new ways to create meaningful content.
              </p>
              <a href="/posts?author={{ $post->author->username }}" 
                 class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition-colors">
                View all posts
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Related Posts -->
      <div class="py-12 border-t border-gray-200">
        <h3 class="text-2xl font-bold text-gray-900 mb-8">You might also like</h3>
        <div class="grid md:grid-cols-2 gap-6">
          <!-- This would typically show related posts, for now showing placeholder -->
          <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
            <h4 class="font-semibold text-gray-900 mb-2">Related Article 1</h4>
            <p class="text-gray-600 text-sm">Discover more insights in this related article...</p>
          </div>
          <div class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
            <h4 class="font-semibold text-gray-900 mb-2">Related Article 2</h4>
            <p class="text-gray-600 text-sm">Continue your reading journey with this post...</p>
          </div>
        </div>
      </div>
    </div>
  </article>
</x-layout>