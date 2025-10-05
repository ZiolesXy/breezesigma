<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  
  <!-- Hero Section -->
  <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 text-white py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="w-32 h-32 rounded-full bg-white bg-opacity-20 flex items-center justify-center text-4xl font-bold mx-auto mb-6">
        {{ substr($nama, 0, 1) }}
      </div>
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Hi, I'm {{ $nama }}</h1>
      <p class="text-xl md:text-2xl opacity-90 mb-8">
        Students
      </p>
      <p class="text-lg opacity-80 max-w-2xl mx-auto">
        Bersemangat dalam menciptakan pengalaman digital yang bermakna dan berbagi pengetahuan melalui kode.
      </p>
    </div>
  </div>

  <!-- About Content -->
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left Column - Text Content -->
      <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-6">About Me</h2>
        <div class="space-y-4 text-gray-700 leading-relaxed">
          <p>
            Halo! Saya {{ $nama }}, seorang Siswa SMKN 1 Jakarta yang bersemangat.
            Saya masih belajar dalam membangun aplikasi web modern menggunakan teknologi seperti Laravel, React, dll.
          </p>
          <p>
            Perjalanan saya di dunia pemrograman dimulai saat saya kuliah di Rekayasa Perangkat Lunak (RPL). Sejak saat itu, saya terus belajar dan mengeksplorasi teknologi baru untuk menciptakan solusi digital yang lebih baik.
          </p>
        </div>
      </div>

      <!-- Right Column - Skills & Stats -->
      <div>
        <div class="bg-gray-50 rounded-2xl p-8">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Skills & Technologies</h3>
          
          <!-- Skills Grid -->
          <div class="grid grid-cols-2 gap-4 mb-8">
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
              <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/>
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-700">HTML/CSS</span>
            </div>
            
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
              <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/>
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-700">JavaScript</span>
            </div>
            
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
              <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.02c-.01.003-.021.003-.032.005-.05.008-.103-.002-.15-.026a.33.33 0 01-.083-.06l-9.01-5.198a.38.38 0 01-.189-.327V5.773c0-.04.006-.08.016-.117a.363.363 0 01.055-.13.361.361 0 01.08-.1c.028-.024.058-.045.091-.06l9.01-5.198a.375.375 0 01.374 0L19.059.086a.375.375 0 01.066.047c.025.018.049.04.07.066.016.02.03.042.041.066.012.025.02.052.024.08.005.028.006.057.005.086zM9.204 16.696l4.12-2.374V7.85l-4.12 2.372v6.474zm.566-7.467l4.458-2.571-4.458-2.571-4.458 2.571 4.458 2.571zm-.566 1.781l-4.12-2.372v6.474l4.12 2.374V10.01zm8.365-9.21L13.94 4.374l4.628 2.671 3.629-2.09v-3.655z"/>
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-700">Laravel</span>
            </div>
            
            <div class="text-center p-4 bg-white rounded-lg shadow-sm">
              <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.083.342-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                </svg>
              </div>
              <span class="text-sm font-medium text-gray-700">Database</span>
            </div>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-4 text-center">
            <div>
              <div class="text-2xl font-bold text-indigo-600">2+</div>
              <div class="text-sm text-gray-600">Years Experience</div>
            </div>
            <div>
              <div class="text-2xl font-bold text-indigo-600">15+</div>
              <div class="text-sm text-gray-600">Projects</div>
            </div>
            <div>
              <div class="text-2xl font-bold text-indigo-600">50+</div>
              <div class="text-sm text-gray-600">Articles</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Education & Experience -->
  <div class="bg-gray-50 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-center">
      <div class="grid  gap-12">
        <!-- Education -->
        <div class="">
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Education</h3>
          <div class="">
            <div class="grid lg:grid-cols-2 gap-12">

              {{-- data pertama --}}
              <div class="space-y-6 mb-8">
                <div class="bg-white rounded-lg p-6 shadow-sm">
                  <div class="flex items-start">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                      <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                      </svg>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900">Sekolah Dasar</h4>
                      <p class="text-indigo-600 text-sm">SDS Kencana</p>
                      <p class="text-gray-600 text-sm">2014 - 2020</p>
                    </div>
                  </div>
                </div>
              </div>
    
              {{-- Edu kedua --}}
              <div class="space-y-6 mb-8">
                <div class="bg-white rounded-lg p-6 shadow-sm">
                  <div class="flex items-start">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                      <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                      </svg>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900">Sekolah Menengah Pertama</h4>
                      <p class="text-indigo-600 text-sm">SMP Negeri 269 Jakarta</p>
                      <p class="text-gray-600 text-sm">2021 - 2024</p>
                    </div>
                  </div>
                </div>
              </div>

              {{-- Edu ketiga --}}
              <div class="space-y-6 mb-8">
                <div class="bg-white rounded-lg p-6 shadow-sm">
                  <div class="flex items-start">
                    <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                      <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                      </svg>
                    </div>
                    <div>
                      <h4 class="font-semibold text-gray-900">Sekolah Menengah Kejuruan</h4>
                      <p class="text-indigo-600 text-sm">SMKN 1 Jakarta</p>
                      <p class="text-gray-600 text-sm">2024 - sekarang</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          {{-- Data Pertama --}}
          

        <!-- Experience -->
        {{-- <div>
          <h3 class="text-2xl font-bold text-gray-900 mb-6">Experience</h3>
          <div class="space-y-6">
            <div class="bg-white rounded-lg p-6 shadow-sm">
              <div class="flex items-start">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                  <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Full Stack Developer</h4>
                  <p class="text-green-600 text-sm">Freelance</p>
                  <p class="text-gray-600 text-sm">2022 - Present</p>
                  <p class="text-gray-700 text-sm mt-2">
                    Developing web applications using Laravel, PHP, JavaScript, and modern frameworks.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-sm">
              <div class="flex items-start">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                  <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                  </svg>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900">Content Creator</h4>
                  <p class="text-purple-600 text-sm">Personal Blog</p>
                  <p class="text-gray-600 text-sm">2023 - Present</p>
                  <p class="text-gray-700 text-sm mt-2">
                    Writing technical articles and tutorials about web development and programming.
                  </p>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="bg-indigo-600 text-white py-16">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <h3 class="text-3xl font-bold mb-4">Let's Work Together</h3>
      <p class="text-xl opacity-90 mb-8">
        I'm always interested in new opportunities and collaborations.
      </p>
      <div class="space-x-4">
        <a href="/contact" class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">
          Get In Touch
        </a>
        <a href="/posts" class="inline-block border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-indigo-600 transition duration-300">
          Read My Blog
        </a>
      </div>
    </div>
  </div>
</x-layout>