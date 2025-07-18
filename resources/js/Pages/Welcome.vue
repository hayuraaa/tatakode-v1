<template>
  <AppLayout>

    <Head title="Welcome to Tatakode" />

    <!-- Hero Section -->
    <section class="pt-32 pb-20 px-4 relative">
      <div class="container mx-auto text-center">
        <div
          :class="['transition-all duration-1000', isVisible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10']">
          <div
            class="mb-6 inline-block bg-gradient-to-r from-cyan-500/20 to-purple-500/20 text-cyan-300 border border-cyan-500/30 px-4 py-2 rounded-full text-sm">
            🚀 Partner Digitalmu yang selalu ada
          </div>
          <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
            <span class="bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
              Tatakode
            </span>
            <br />
            <span class="text-3xl md:text-4xl text-white/90">Digital Solutions & Code Products</span>
          </h1>
          <p class="text-xl text-white/70 mb-8 max-w-3xl mx-auto leading-relaxed">
            Kami menyediakan solusi digital lengkap mulai dari pengembangan website, data processing, AI/ML, hingga
            bantuan akademik. Plus produk source code berkualitas tinggi untuk mempercepat project Anda.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#services"
              class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-8 py-3 text-lg rounded-lg font-medium group transition-all flex items-center">
              Mulai Project
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
            <button
              class="border border-white/30 text-white hover:bg-white/10 px-8 py-3 text-lg rounded-lg font-medium transition-all">
              Lihat Portfolio
            </button>
          </div>
        </div>

        <!-- Floating Elements -->
        <div
          class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-cyan-400/20 to-purple-400/20 rounded-full blur-xl animate-pulse">
        </div>
        <div
          class="absolute top-40 right-10 w-32 h-32 bg-gradient-to-r from-purple-400/20 to-pink-400/20 rounded-full blur-xl animate-pulse"
          style="animation-delay: 1s"></div>
        <div
          class="absolute bottom-20 left-1/4 w-16 h-16 bg-gradient-to-r from-green-400/20 to-cyan-400/20 rounded-full blur-xl animate-pulse"
          style="animation-delay: 0.5s"></div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 px-4">
      <div class="container mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div v-for="(stat, index) in stats" :key="index"
            class="text-center group hover:scale-105 transition-transform duration-300">
            <div
              class="w-16 h-16 bg-gradient-to-r from-cyan-500/20 to-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:from-cyan-500/30 group-hover:to-purple-500/30 transition-colors">
              <svg v-if="stat.icon === 'users'" class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
              </svg>
              <svg v-else-if="stat.icon === 'code'" class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
              <svg v-else-if="stat.icon === 'award'" class="w-8 h-8 text-cyan-400" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
              </svg>
              <svg v-else-if="stat.icon === 'star'" class="w-8 h-8 text-cyan-400" fill="currentColor"
                viewBox="0 0 24 24">
                <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
              </svg>
            </div>
            <div class="text-3xl font-bold text-white mb-2">{{ stat.number }}</div>
            <div class="text-white/60">{{ stat.label }}</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 px-4">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Our
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
              Services
            </span>
          </h2>
          <p class="text-xl text-white/70 max-w-2xl mx-auto">
            Solusi digital komprehensif untuk semua kebutuhan teknologi Anda
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div v-for="(service, index) in services" :key="index"
            class="bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20 rounded-lg p-6"
            @mouseenter="activeService = index">
            <div class="mb-4">
              <div
                :class="['w-12 h-12 bg-gradient-to-r rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform', service.color]">
                <svg v-if="service.icon === 'code'" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                <svg v-else-if="service.icon === 'chart'" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
                <svg v-else-if="service.icon === 'design'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h12a2 2 0 002-2v-4a2 2 0 00-2-2H7m0-5h10a2 2 0 012 2v1a2 2 0 01-2 2H7m0 0V9a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H9a2 2 0 01-2-2z"/>
                </svg>
                <svg v-else-if="service.icon === 'graduation'" class="w-6 h-6 text-white" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
              </div>
              <h3 class="text-white text-xl font-semibold mb-2">{{ service.title }}</h3>
              <p class="text-white/60 mb-4">{{ service.description }}</p>
            </div>
            <ul class="space-y-2">
              <li v-for="(feature, idx) in service.features" :key="idx" class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{ feature }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest Projects Section -->
    <section id="projects" class="py-20 px-4 bg-black/20">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Latest
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
              Projects
            </span>
          </h2>
          <p class="text-xl text-white/70 max-w-2xl mx-auto">
            Showcase project-project terbaru yang telah kami kerjakan dengan kebutuhan Client
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div v-for="(project, index) in latestProjects" :key="index"
            class="bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group hover:scale-105 rounded-lg overflow-hidden">

            <!-- Project Image -->
            <div class="relative h-48 bg-gradient-to-br from-cyan-500/20 to-purple-500/20 overflow-hidden">
              <img 
                v-if="project.image" 
                :src="project.image" 
                :alt="project.title"
                class="w-full h-full object-cover"
              />
              <div
                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </div>
              <!-- Project Category Badge -->
              <div class="absolute top-4 left-4">
                <span :class="['px-3 py-1 text-xs font-medium rounded-full', project.categoryColor]">
                  {{ project.category }}
                </span>
              </div>
            </div>

            <!-- Project Info -->
            <div class="p-6">
              <div class="flex items-center justify-between mb-3">
                <h3 class="text-white font-semibold text-lg">{{ project.title }}</h3>
                <span class="text-cyan-400 text-sm font-medium">{{ project.date }}</span>
              </div>

              <p class="text-white/70 mb-4 text-sm line-clamp-3">{{ project.description }}</p>

              <!-- Tech Stack -->
              <div class="flex flex-wrap gap-2 mb-4">
                <span v-for="tech in project.techStack" :key="tech"
                  class="bg-white/10 text-white/80 px-2 py-1 rounded text-xs">
                  {{ tech }}
                </span>
              </div>

              <!-- Action Button -->
              <button @click="viewProjectDetail(project.slug)"
                class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white py-2 rounded-lg font-medium transition-all flex items-center justify-center group">
                Lihat Detail
                <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- View All Projects Button -->
        <div class="text-center mt-12">
          <Link href="/projects"
            class="border border-white/30 text-white hover:bg-white/10 px-8 py-3 text-lg rounded-lg font-medium transition-all">
            Lihat Semua Project
          </Link>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 px-4">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            What Our
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
              Clients Say
            </span>
          </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div v-for="(testimonial, index) in testimonials" :key="index"
            class="bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 rounded-lg p-6">
            <div class="flex mb-4">
              <svg v-for="star in testimonial.rating" :key="star" class="w-5 h-5 text-yellow-400 fill-current"
                viewBox="0 0 24 24">
                <path
                  d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
              </svg>
            </div>
            <p class="text-white/80 mb-4 italic">"{{ testimonial.content }}"</p>
            <div>
              <div class="font-semibold text-white">{{ testimonial.name }}</div>
              <div class="text-white/60 text-sm">{{ testimonial.role }}</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 px-4 bg-black/20">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Get In
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Touch</span>
          </h2>
          <p class="text-xl text-white/70 max-w-2xl mx-auto">
            Siap memulai project digital Anda? Mari diskusikan kebutuhan Anda dengan tim expert kami
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
          <div>
            <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-6">
              <h3 class="text-white text-2xl font-semibold mb-6">Send us a message</h3>
              <form @submit.prevent="submitForm" class="space-y-4">
                <input v-model="form.name" type="text" placeholder="Your Name"
                  class="w-full bg-white/10 border border-white/20 text-white placeholder:text-white/50 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                <input v-model="form.email" type="email" placeholder="Your Email"
                  class="w-full bg-white/10 border border-white/20 text-white placeholder:text-white/50 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                <input v-model="form.subject" type="text" placeholder="Subject"
                  class="w-full bg-white/10 border border-white/20 text-white placeholder:text-white/50 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                <textarea v-model="form.message" placeholder="Your Message" rows="4"
                  class="w-full bg-white/10 border border-white/20 text-white placeholder:text-white/50 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 resize-none"></textarea>
                <button type="submit"
                  class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white py-3 rounded-lg font-medium transition-all">
                  Send Message
                </button>
              </form>
            </div>
          </div>

          <div class="space-y-8">
            <div>
              <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>
              <div class="space-y-4">
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-cyan-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  <span class="text-white/80">yunandaharis@gmail.com</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-cyan-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  <span class="text-white/80">+62 813 7774 7843</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-cyan-400 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <span class="text-white/80">Medan, Indonesia</span>
                </div>
              </div>
            </div>

            <div>
              <h3 class="text-xl font-bold text-white mb-4">Follow Us</h3>
              <div class="flex space-x-4">
                <!-- Instagram Button -->
                <a href="https://www.instagram.com/tatakode.id/" target="_blank" rel="noopener noreferrer" 
                  class="border border-white/30 text-white hover:bg-white/10 p-3 rounded-lg transition-all">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                  </svg>
                </a>
                
                <!-- YouTube Button -->
                <a href="https://www.youtube.com/@hayura-dev" target="_blank" rel="noopener noreferrer" 
                  class="border border-white/30 text-white hover:bg-white/10 p-3 rounded-lg transition-all">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                  </svg>
                </a>
              </div>
            </div>

            <div class="bg-gradient-to-r from-cyan-500/20 to-purple-500/20 border border-cyan-500/30 rounded-lg p-6">
              <div class="flex items-center mb-4">
                <svg class="w-6 h-6 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <span class="text-white font-semibold">Quick Response</span>
              </div>
              <p class="text-white/80">
                Tim kami siap merespon inquiry Anda dalam 24 jam. Untuk project urgent, hubungi WhatsApp kami.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Head, Link, router } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

// Props dari controller
const props = defineProps({
  latestProjects: {
    type: Array,
    default: () => []
  }
})

const isVisible = ref(false)
const activeService = ref(0)

const form = ref({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const stats = [
  {
    icon: 'users',
    number: '100+',
    label: 'Happy Clients'
  },
  {
    icon: 'code',
    number: '100+',
    label: 'Projects Done'
  },
  {
    icon: 'award',
    number: '50+',
    label: 'Source Codes'
  },
  {
    icon: 'star',
    number: '4.9',
    label: 'Average Rating'
  }
]

const services = [
  {
    icon: 'code',
    title: 'Website Development',
    description: 'Frontend, Backend, eCommerce, UMKM, Admin Panel',
    features: ['E-Commerce', 'Admin Panel', 'Landing Page', 'API Integration', 'Custom Web'],
    color: 'from-blue-500 to-cyan-500'
  },
  {
    icon: 'chart',
    title: 'Data & AI Solutions',
    description: 'Data Processing, AI/ML, Dashboard, Web Scraping, Automation',
    features: ['Classification', 'Forecasting', 'Image Processing', 'Clustering', 'NLP/Sentiment Analysis'],
    color: 'from-green-500 to-emerald-500'
  },
  {
    icon: 'design',
    title: 'Design Services',
    description: 'UI/UX Design, Social Media Graphics, Poster, Branding',
    features: ['UI/UX Design', 'Social Media Feed', 'Poster Design', 'Brand Identity', 'Logo Design'],
    color: 'from-purple-500 to-pink-500'
  },
  {
    icon: 'graduation',
    title: 'Academic Support',
    description: 'Bantuan Skripsi, Jurnal, Tugas Akhir IT',
    features: ['Research Guidance', 'Code Review', 'Documentation', 'Presentation', 'Thesis Writing'],
    color: 'from-orange-500 to-red-500'
  }
]

const testimonials = [
  {
    name: 'Andre Micola',
    role: 'Startup Founder',
    content: 'Tatakode membantu mengembangkan platform e-commerce kami dengan sangat profesional. Hasilnya melebihi ekspektasi!',
    rating: 5
  },
  {
    name: 'Sari Dewi',
    role: 'Mahasiswa IT',
    content: 'Bantuan untuk skripsi saya sangat membantu. Tim Tatakode sangat sabar dan detail dalam menjelaskan konsep.',
    rating: 5
  },
  {
    name: 'Aditya Putra',
    role: 'Business Owner',
    content: 'Dashboard analytics yang dibuat sangat membantu bisnis kami dalam mengambil keputusan berbasis data.',
    rating: 5
  }
]

const submitForm = () => {
  console.log('Form submitted:', form.value)
  // Handle form submission logic here
}

const viewProjectDetail = (slug) => {
  // Navigate to project detail page using Inertia router
  router.visit(`/projects/${slug}`)
}

onMounted(() => {
  setTimeout(() => {
    isVisible.value = true
  }, 100)
})
</script>