<template>
  <AppLayout>
    <Head title="Our Services - Tatakode" />
    
    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-4">
      <div class="container mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          Our
          <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            Services
          </span>
        </h1>
        <p class="text-xl text-white/70 max-w-2xl mx-auto">
          Solusi digital lengkap untuk kebutuhan bisnis dan akademik Anda
        </p>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4">
      <div class="container mx-auto max-w-6xl">
        <!-- Service Cards with New Layout -->
        <div class="grid lg:grid-cols-2 gap-8 mb-16">
          <!-- Website Development -->
          <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500/10 to-cyan-500/10 border border-blue-500/20 rounded-2xl p-8 hover:scale-[1.02] transition-all duration-300">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-cyan-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative">
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-white">Website Development</h3>
                  <p class="text-blue-300">Frontend, Backend, eCommerce, UMKM</p>
                  <div class="mt-2">
                    <span class="text-sm text-blue-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500K</span>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">React/Next.js</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Node.js/Laravel</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Database Design</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">API Integration</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Data & AI Solutions -->
          <div class="group relative overflow-hidden bg-gradient-to-br from-green-500/10 to-emerald-500/10 border border-green-500/20 rounded-2xl p-8 hover:scale-[1.02] transition-all duration-300">
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-emerald-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative">
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-white">Data & AI Solutions</h3>
                  <p class="text-green-300">Data Processing, AI/ML, Dashboard</p>
                  <div class="mt-2">
                    <span class="text-sm text-green-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500k</span>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Data Visualization</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Machine Learning</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Web Scraping</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Automation</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Design Services -->
          <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500/10 to-pink-500/10 border border-purple-500/20 rounded-2xl p-8 hover:scale-[1.02] transition-all duration-300">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative">
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h12a2 2 0 002-2v-4a2 2 0 00-2-2H7m0-5h10a2 2 0 012 2v1a2 2 0 01-2 2H7m0 0V9a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H9a2 2 0 01-2-2z"/>
                  </svg>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-white">Design Services</h3>
                  <p class="text-purple-300">UI/UX, Social Media, Branding</p>
                  <div class="mt-2">
                    <span class="text-sm text-purple-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 300K</span>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">UI/UX Design</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Social Media</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Poster Design</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Brand Identity</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Academic Support -->
          <div class="group relative overflow-hidden bg-gradient-to-br from-orange-500/10 to-red-500/10 border border-orange-500/20 rounded-2xl p-8 hover:scale-[1.02] transition-all duration-300">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-red-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <div class="relative">
              <div class="flex items-center mb-6">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  </svg>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-white">Academic Support</h3>
                  <p class="text-orange-300">Bantuan Skripsi, Jurnal, Tugas Akhir</p>
                  <div class="mt-2">
                    <span class="text-sm text-orange-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500k</span>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-orange-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Research Guidance</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-orange-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Code Review</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-orange-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Documentation</span>
                  </div>
                </div>
                <div class="bg-white/5 rounded-lg p-4">
                  <div class="flex items-center mb-2">
                    <svg class="w-4 h-4 text-orange-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-sm text-white/90">Presentation</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section with Accordion -->
    <section class="py-20 px-4 bg-gradient-to-b from-black/10 to-black/30">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-white mb-4">
            Frequently Asked
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Questions</span>
          </h2>
          <p class="text-white/70 text-lg">
            Pertanyaan yang sering diajukan tentang layanan kami
          </p>
        </div>

        <div class="max-w-4xl mx-auto">
          <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(1)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Berapa lama waktu pengerjaan project?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 1 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 1"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Waktu pengerjaan bervariasi tergantung kompleksitas project: website sederhana sekitar 3-4 hari, 
                e-commerce 1-2 minggu, dan aplikasi custom 4-6 minggu. Kami akan memberikan timeline 
                yang jelas setelah analisis requirements.
              </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(2)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Apakah ada garansi untuk project?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 2 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 2"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Ya, kami memberikan garansi bug-fix dan maintenance selama 3 bulan setelah project selesai. 
                Garansi ini mencakup perbaikan bug, optimasi performa, dan update minor.
              </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(3)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Bagaimana sistem pembayaran?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 3 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 3"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Sistem pembayaran bertahap untuk memudahkan cash flow: 50% down payment di awal project, 
                30% saat tahap development mencapai 70%, dan 20% sisanya setelah project selesai dan testing.
              </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(4)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Apakah source code diberikan?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 4 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 4"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Ya, source code lengkap beserta dokumentasi teknis akan diberikan setelah project selesai 
                dan pembayaran lunas. Kami juga menyediakan panduan deployment dan maintenance.
              </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(5)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Apakah menerima project dari luar kota?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 5 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 5"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Ya, kami melayani client dari seluruh Indonesia dengan sistem komunikasi online yang efektif. 
                Kami menggunakan tools seperti Slack, Zoom, dan project management tools untuk koordinasi yang lancar.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import { ref } from 'vue'

const openFaq = ref(null)

const toggleFaq = (index) => {
  openFaq.value = openFaq.value === index ? null : index
}
</script>