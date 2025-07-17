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

    <!-- Main Content -->
    <section class="py-16 px-4">
      <div class="container mx-auto max-w-4xl">
        <!-- Our Story -->
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

        <!-- What We Do -->
        <div class="bg-white/5 border border-white/10 backdrop-blur-sm rounded-lg p-8 mb-12">
          <h2 class="text-3xl font-bold text-white mb-6">What We Do</h2>
          <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-white mb-2">Website Development</h3>
                <p class="text-white/70">Kami mengembangkan website modern dan responsif mulai dari frontend yang interaktif menggunakan teknologi terbaru, hingga backend yang kuat dan skalable untuk memenuhi kebutuhan bisnis Anda.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2-2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-white mb-2">Data & AI Solutions</h3>
                <p class="text-white/70">Solusi komprehensif untuk transformasi data bisnis Anda menjadi insights yang actionable. Kami menggabungkan data, AI, dan teknologi terbaru untuk meningkatkan efisiensi dan kinerja bisnis Anda.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-white mb-2">Design Services</h3>
                <p class="text-white/70">Layanan desain visual yang komprehensif untuk membangun identitas brand yang kuat dan komunikasi visual yang efektif. Kami menggabungkan desain, interaksi, dan teknologi untuk menciptakan pengalaman visual yang memukau.</p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-semibold text-white mb-2">Academic Support</h3>
                <p class="text-white/70">Pendampingan akademik khusus untuk mahasiswa IT yang sedang menyelesaikan studi akhir mereka. Kami menyediakan layanan dan sumber daya untuk membantu mereka mencapai tujuan mereka.</p>
              </div>
            </div>
          </div>
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