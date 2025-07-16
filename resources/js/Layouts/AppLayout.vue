<template>
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/20 backdrop-blur-md border-b border-white/10">
      <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </div>
          <span class="text-xl font-bold text-white">Tatakode</span>
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a href="#services" class="text-white/80 hover:text-white transition-colors">Services</a>
          <a href="#products" class="text-white/80 hover:text-white transition-colors">Products</a>
          <a href="#about" class="text-white/80 hover:text-white transition-colors">About</a>
          <a href="#contact" class="text-white/80 hover:text-white transition-colors">Contact</a>
        </div>
        <button class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 px-6 py-2 rounded-lg text-white font-medium transition-all">
          Get Started
        </button>
      </div>
    </nav>

    <!-- Main Content -->
    <main>
      <slot />
    </main>

    <!-- Footer -->
    <footer class="py-12 px-4 border-t border-white/10">
      <div class="container mx-auto">
        <div class="grid md:grid-cols-4 gap-8">
          <div>
            <div class="flex items-center space-x-2 mb-4">
              <div class="w-8 h-8 bg-gradient-to-r from-cyan-400 to-purple-400 rounded-lg flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </div>
              <span class="text-xl font-bold text-white">Tatakode</span>
            </div>
            <p class="text-white/60 mb-4">
              Partner Digitalmu yang selalu ada. Solusi teknologi terpercaya untuk bisnis modern.
            </p>
          </div>

          <div>
            <h4 class="text-white font-semibold mb-4">Services</h4>
            <ul class="space-y-2 text-white/60">
              <li>Website Development</li>
              <li>Data Processing</li>
              <li>AI/ML Solutions</li>
              <li>Academic Support</li>
            </ul>
          </div>

          <div>
            <h4 class="text-white font-semibold mb-4">Products</h4>
            <ul class="space-y-2 text-white/60">
              <li>Source Code Templates</li>
              <li>Admin Dashboards</li>
              <li>E-commerce Solutions</li>
              <li>API Boilerplates</li>
            </ul>
          </div>

          <div>
            <h4 class="text-white font-semibold mb-4">Company</h4>
            <ul class="space-y-2 text-white/60">
              <li>About Us</li>
              <li>Portfolio</li>
              <li>Blog</li>
              <li>Contact</li>
            </ul>
          </div>
        </div>

        <div class="border-t border-white/10 mt-8 pt-8 text-center">
          <p class="text-white/60">© 2024 Tatakode. All rights reserved. Made with ❤️ in Indonesia</p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'

defineProps({
  title: {
    type: String,
    default: 'Tatakode - Digital Solutions & Code Products'
  }
})
</script>