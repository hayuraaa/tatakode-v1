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
          Solusi digital komprehensif untuk semua kebutuhan teknologi Anda
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
      </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 px-4 bg-gradient-to-b from-black/10 to-black/30">
      <div class="container mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-white mb-4">
            How We
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Work</span>
          </h2>
          <p class="text-white/70 text-lg max-w-2xl mx-auto">
            Proses kerja yang terstruktur dan transparan untuk hasil yang maksimal
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="relative text-center group">
            <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">1</span>
            </div>
            <h3 class="text-white font-semibold mb-2">Konsultasi</h3>
            <p class="text-white/70 text-sm">Diskusi kebutuhan dan requirement project secara detail</p>
          </div>

          <!-- Step 2 -->
          <div class="relative text-center group">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">2</span>
            </div>
            <h3 class="text-white font-semibold mb-2">Planning</h3>
            <p class="text-white/70 text-sm">Perencanaan arsitektur, timeline, dan milestone project</p>
          </div>

          <!-- Step 3 -->
          <div class="relative text-center group">
            <div class="w-16 h-16 bg-gradient-to-r from-pink-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">3</span>
            </div>
            <h3 class="text-white font-semibold mb-2">Development</h3>
            <p class="text-white/70 text-sm">Implementasi dengan update progress berkala</p>
          </div>

          <!-- Step 4 -->
          <div class="relative text-center group">
            <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <span class="text-white font-bold text-xl">4</span>
            </div>
            <h3 class="text-white font-semibold mb-2">Delivery</h3>
            <p class="text-white/70 text-sm">Testing, deployment, dan handover project</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section with Accordion -->
    <section class="py-20 px-4">
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

            <!-- FAQ Item 6 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl overflow-hidden">
              <button 
                @click="toggleFaq(6)"
                class="w-full px-6 py-5 text-left focus:outline-none"
              >
                <div class="flex items-center justify-between">
                  <h3 class="text-lg font-semibold text-white">Teknologi apa saja yang digunakan?</h3>
                  <svg 
                    class="w-5 h-5 text-cyan-400 transform transition-transform duration-200"
                    :class="{ 'rotate-180': openFaq === 6 }"
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                  >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg>
                </div>
              </button>
              <div 
                v-show="openFaq === 6"
                class="px-6 pb-5 text-white/70 leading-relaxed"
              >
                Kami menggunakan teknologi terkini seperti React/Next.js, Vue.js, Node.js, Laravel, Python, 
                PostgreSQL, MySQL, dan cloud services seperti AWS/GCP. Pemilihan teknologi disesuaikan 
                dengan kebutuhan dan scalability project.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 px-4 bg-gradient-to-r from-cyan-500/10 to-purple-500/10 border-t border-cyan-500/20">
      <div class="container mx-auto text-center">
        <div class="max-w-3xl mx-auto">
          <h2 class="text-4xl font-bold text-white mb-6">
            Ready to Start Your
            <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">Project?</span>
          </h2>
          <p class="text-xl text-white/70 mb-8">
            Konsultasi gratis untuk project pertama Anda. Mari diskusikan kebutuhan dan wujudkan ide digital Anda!
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contact" 
              class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-8 py-4 text-lg rounded-lg font-medium transition-all inline-flex items-center justify-center group">
              Konsultasi Gratis
              <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </a>
            <a href="tel:+6281377747843" 
              class="border border-white/30 text-white hover:bg-white/10 px-8 py-4 text-lg rounded-lg font-medium transition-all inline-flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Hubungi Kami
            </a>
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