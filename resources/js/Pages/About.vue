<template>
  <AppLayout>
    <Head title="About Us - Tatakode" />
    
    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-4 text-center">
      <div class="container mx-auto">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          About
          <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent"> Us</span>
        </h1>
        <p class="text-xl text-white/70 max-w-3xl mx-auto">
          Kami adalah tim developer yang berfokus pada pembuatan aplikasi web dan mobile yang inovatif dan berkualitas tinggi
        </p>
      </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4">
      <div class="container mx-auto max-w-6xl">
        <!-- Service Cards with Enhanced Layout -->
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
                  <p class="text-blue-300">Frontend, Backend, eCommerce, UMKM, Admin Panel</p>
                  <div class="mt-2">
                    <span class="text-sm text-blue-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500K</span>
                  </div>
                </div>
              </div>
              
              <!-- Service Description -->
              <div class="mb-6">
                <p class="text-white/70 text-sm leading-relaxed">
                  Kami mengembangkan website modern dan responsif menggunakan teknologi terkini. 
                  Dari landing page sederhana hingga e-commerce kompleks dengan sistem manajemen yang lengkap. 
                  Semua website dilengkapi dengan admin panel untuk kemudahan pengelolaan konten.
                </p>
              </div>

              <!-- Features Grid -->
              <div class="space-y-3">
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">UMKM Digital - Website untuk usaha kecil dan menengah</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Admin Panel - Dashboard untuk mengelola konten dan data</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Landing Page - Website profil perusahaan yang menarik</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">API Integration - Integrasi dengan sistem external</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Custom Web - Aplikasi web sesuai kebutuhan spesifik</span>
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
                  <p class="text-green-300">Data Processing, AI/ML, Dashboard, Web Scraping, Automation</p>
                  <div class="mt-2">
                    <span class="text-sm text-green-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500K</span>
                  </div>
                </div>
              </div>
              
              <!-- Service Description -->
              <div class="mb-6">
                <p class="text-white/70 text-sm leading-relaxed">
                  Solusi berbasis data dan kecerdasan buatan untuk mengoptimalkan bisnis Anda. 
                  Dari analisis data sederhana hingga machine learning yang kompleks, kami membantu 
                  mengubah data mentah menjadi insight yang actionable untuk pengambilan keputusan.
                </p>
              </div>

              <!-- Features Grid -->
              <div class="space-y-3">
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Classification - Pengelompokan data otomatis menggunakan AI</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Forecasting - Prediksi tren dan pattern untuk masa depan</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Image Processing - Analisis dan pengolahan gambar dengan AI</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Clustering - Segmentasi data untuk analisis yang lebih baik</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">NLP/Sentiment Analysis - Analisis teks dan sentimen otomatis</span>
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
                  <p class="text-purple-300">UI/UX Design, Social Media Graphics, Poster, Branding</p>
                  <div class="mt-2">
                    <span class="text-sm text-purple-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 300K</span>
                  </div>
                </div>
              </div>
              
              <!-- Service Description -->
              <div class="mb-6">
                <p class="text-white/70 text-sm leading-relaxed">
                  Layanan desain kreatif yang membantu membangun identitas visual yang kuat untuk brand Anda. 
                  Dari desain UI/UX yang user-friendly hingga materi marketing yang eye-catching, 
                  kami menciptakan desain yang tidak hanya indah tapi juga efektif.
                </p>
              </div>

              <!-- Features Grid -->
              <div class="space-y-3">
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">UI/UX Design - Desain interface yang intuitif dan user-friendly</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Social Media Feed - Konten visual untuk media sosial</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Poster Design - Desain poster untuk event dan promosi</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Brand Identity - Logo dan identitas visual yang konsisten</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Logo Design - Desain logo yang memorable dan timeless</span>
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
                  <p class="text-orange-300">Bantuan Skripsi, Jurnal, Tugas Akhir IT</p>
                  <div class="mt-2">
                    <span class="text-sm text-orange-200">Start from </span>
                    <span class="text-lg font-semibold text-white">Rp 500K</span>
                  </div>
                </div>
              </div>
              
              <!-- Service Description -->
              <div class="mb-6">
                <p class="text-white/70 text-sm leading-relaxed">
                  Dukungan akademik lengkap untuk mahasiswa IT dalam menyelesaikan tugas akhir. 
                  Dari konsultasi metodologi penelitian hingga implementasi teknis, kami membantu 
                  memastikan project akademik Anda berkualitas tinggi dan sesuai standar.
                </p>
              </div>

              <!-- Features Grid -->
              <div class="space-y-3">
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Research Guidance - Bimbingan metodologi dan riset</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Code Review - Review dan optimasi kode program</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Documentation - Pembuatan dokumentasi teknis yang lengkap</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Presentation - Persiapan presentasi dan defense</span>
                </div>
                <div class="flex items-center">
                  <svg class="w-4 h-4 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span class="text-sm text-white/90">Thesis Writing - Bantuan penulisan laporan tugas akhir</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-8 mb-12">
          <h2 class="text-3xl font-bold text-white mb-6">Our Story</h2>
          <p class="text-white/70 text-lg leading-relaxed mb-6">
            Tatakode didirikan dengan visi untuk membantu bisnis dan individu mewujudkan ide-ide digital mereka menjadi kenyataan. 
            Kami percaya bahwa teknologi yang baik harus mudah diakses dan memberikan nilai nyata bagi pengguna.
          </p>
          <p class="text-white/70 text-lg leading-relaxed">
            Dengan pengalaman bertahun-tahun dalam industri teknologi, kami menghadirkan solusi yang tidak hanya fungsional, 
            tetapi juga user-friendly dan scalable untuk masa depan.
          </p>
        </div>

        <!-- Our Values -->
        <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-8 mb-12">
          <h2 class="text-3xl font-bold text-white mb-6">Our Values</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-white mb-2">Quality</h3>
              <p class="text-white/70">Kami berkomitmen untuk memberikan hasil kerja berkualitas tinggi</p>
            </div>

            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-white mb-2">Innovation</h3>
              <p class="text-white/70">Selalu menggunakan teknologi terbaru untuk solusi terbaik</p>
            </div>

            <div class="text-center">
              <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-white mb-2">Collaboration</h3>
              <p class="text-white/70">Bekerja sama dengan klien untuk mencapai tujuan bersama</p>
            </div>
          </div>
        </div>

        <!-- Contact CTA -->
        <div class="text-center bg-gradient-to-r from-cyan-500/20 to-purple-500/20 border border-white/10 backdrop-blur-sm rounded-lg p-8">
          <h2 class="text-3xl font-bold text-white mb-4">Ready to Work Together?</h2>
          <p class="text-white/70 mb-6">
            Mari diskusikan proyek Anda dan wujudkan ide digital terbaik bersama kami
          </p>
          <a href="https://wa.me/6281377747843" class="inline-block bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 px-8 py-3 rounded-lg text-white font-medium transition-all">
            Get In Touch
          </a>
        </div>

      </div>
    </section>
    
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
</script>