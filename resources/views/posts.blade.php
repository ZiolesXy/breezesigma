<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  {{-- Searchbar --}}
  <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
    <div class="mx-auto max-w-screen-md sm:text-center">
        <form>
          @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
          @endif
            <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                <div class="relative w-full">
                    <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input name="search" class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search..." type="search" id="search" name="search" autocomplete="off">
                </div>
                <div>
                    <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-600 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">search</button>
                </div>
            </div>
        </form>
    </div>
</div>

  
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">{{ $title }}</h1>

    <div class="grid gap-6 md:grid-cols-2">
      @forelse ($posts as $post)
        <article class="border border-gray-200 rounded-lg p-6 bg-white hover:border-gray-300 transition-colors duration-150 flex flex-col h-full">
          @if(isset($post->image))
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-40 object-cover rounded-md mb-4">
          @endif

          <div class="text-xs text-gray-600 mb-2">
            <a href="/posts?category={{ $post->category->slug }}" class="text-blue-600 hover:text-blue-800">{{ $post->category->name }}</a>
            • {{ $post->created_at->format('M j, Y') }}
          </div>

          <h2 class="text-xl font-semibold mb-2 leading-snug">
            <a href="/posts/{{ $post->slug }}" class="hover:text-blue-700">{{ $post->title }}</a>
          </h2>

          <p class="text-gray-700 mb-4">
            {{ Str::limit($post->body, 160) }}
          </p>

          <div class="mt-auto flex items-center justify-between text-sm">
            <a href="/posts?author={{ $post->author->username }}" class="text-gray-600 hover:text-gray-800">{{ $post->author->name }}</a>
            <a href="/posts/{{ $post->slug }}" class="text-blue-600 hover:text-blue-800 font-medium">Read more →</a>
          </div>
        </article>
      @empty
        <p class="font-semibold text-xl my-4">No posts found.</p>
        <a href="/posts" class="text-blue-600 hover:text-blue-800 font-medium">&laquo; Back to all</a>
      @endforelse
    </div>
  </div>
</x-layout>