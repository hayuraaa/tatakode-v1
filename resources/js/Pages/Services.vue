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

    <!-- Services Cards -->
    <section class="py-16 px-4">
      <div class="container mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Website Development -->
          <div class="bg-white/5 border border-white/10 rounded-lg p-6 hover:bg-white/10 transition-all">
            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Website Development</h3>
            <p class="text-white/60 mb-4">Frontend, Backend, eCommerce, UMKM, Admin Panel</p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                React/Next.js
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Node.js/Laravel
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Database Design
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                API Integration
              </li>
            </ul>
          </div>

          <!-- Data & AI Solutions -->
          <div class="bg-white/5 border border-white/10 rounded-lg p-6 hover:bg-white/10 transition-all">
            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Data & AI Solutions</h3>
            <p class="text-white/60 mb-4">Data Processing, AI/ML, Dashboard, Web Scraping</p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Data Visualization
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Machine Learning
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Web Scraping
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Automation
              </li>
            </ul>
          </div>

          <!-- Design Services -->
          <div class="bg-white/5 border border-white/10 rounded-lg p-6 hover:bg-white/10 transition-all">
            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 21h12a2 2 0 002-2v-4a2 2 0 00-2-2H7m0-5h10a2 2 0 012 2v1a2 2 0 01-2 2H7m0 0V9a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H9a2 2 0 01-2-2z"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Design Services</h3>
            <p class="text-white/60 mb-4">UI/UX Design, Social Media, Poster, Branding</p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                UI/UX Design
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Social Media Feed
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Poster Design
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Brand Identity
              </li>
            </ul>
          </div>

          <!-- Academic Support -->
          <div class="bg-white/5 border border-white/10 rounded-lg p-6 hover:bg-white/10 transition-all">
            <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2">Academic Support</h3>
            <p class="text-white/60 mb-4">Bantuan Skripsi, Jurnal, Tugas Akhir IT</p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Research Guidance
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Code Review
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Documentation
              </li>
              <li class="flex items-center text-white/70">
                <svg class="w-4 h-4 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Presentation
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4 bg-black/20">
      <div class="container mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold text-white mb-4">
            Frequently Asked
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Questions</span>
          </h2>
          <p class="text-white/70">
            Pertanyaan yang sering diajukan tentang layanan kami
          </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
          <div class="bg-white/5 border border-white/10 rounded-lg p-6">
            <h3 class="text-white font-semibold mb-2">Berapa lama waktu pengerjaan project?</h3>
            <p class="text-white/70 text-sm">
              Waktu pengerjaan bervariasi: website sederhana 2-4 minggu, e-commerce 6-8 minggu, 
              dan aplikasi custom 8-12 minggu.
            </p>
          </div>

          <div class="bg-white/5 border border-white/10 rounded-lg p-6">
            <h3 class="text-white font-semibold mb-2">Apakah ada garansi untuk project?</h3>
            <p class="text-white/70 text-sm">
              Ya, kami memberikan garansi bug-fix selama 3 bulan setelah project selesai.
            </p>
          </div>

          <div class="bg-white/5 border border-white/10 rounded-lg p-6">
            <h3 class="text-white font-semibold mb-2">Bagaimana sistem pembayaran?</h3>
            <p class="text-white/70 text-sm">
              Pembayaran bertahap: 50% di awal, 30% saat development, 20% setelah selesai.
            </p>
          </div>

          <div class="bg-white/5 border border-white/10 rounded-lg p-6">
            <h3 class="text-white font-semibold mb-2">Apakah source code diberikan?</h3>
            <p class="text-white/70 text-sm">
              Ya, source code lengkap diberikan setelah project selesai dan pembayaran lunas.
            </p>
          </div>

          <div class="bg-white/5 border border-white/10 rounded-lg p-6">
            <h3 class="text-white font-semibold mb-2">Apakah menerima project dari luar kota?</h3>
            <p class="text-white/70 text-sm">
              Ya, kami melayani client dari seluruh Indonesia dengan komunikasi online.
            </p>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
</script>