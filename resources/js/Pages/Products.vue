<template>
  <AppLayout>
    <Head title="Our Products - Tatakode" />
    
    <!-- Hero Section -->
    <section class="pt-32 pb-16 px-4">
      <div class="container mx-auto text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          Digital
          <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            Products
          </span>
        </h1>
        <p class="text-xl text-white/70 max-w-2xl mx-auto">
          Koleksi produk digital berkualitas tinggi untuk mempercepat development project Anda
        </p>
      </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8 px-4">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
            <button 
                @click="activeFilter = 'all'"
                :class="['px-6 py-2 rounded-full text-sm font-medium transition-all', 
                        activeFilter === 'all' ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white' : 'bg-white/10 text-white/70 hover:bg-white/20']"
            >
                All Products
            </button>
            <button 
                @click="activeFilter = 'laravel'"
                :class="['px-6 py-2 rounded-full text-sm font-medium transition-all', 
                        activeFilter === 'laravel' ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white' : 'bg-white/10 text-white/70 hover:bg-white/20']"
            >
                Laravel Projects
            </button>
            <button 
                @click="activeFilter = 'python'"
                :class="['px-6 py-2 rounded-full text-sm font-medium transition-all', 
                        activeFilter === 'python' ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white' : 'bg-white/10 text-white/70 hover:bg-white/20']"
            >
                Python Projects
            </button>
            <button 
                @click="activeFilter = 'design'"
                :class="['px-6 py-2 rounded-full text-sm font-medium transition-all', 
                        activeFilter === 'design' ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white' : 'bg-white/10 text-white/70 hover:bg-white/20']"
            >
                Social Media Design
            </button>
            <button 
                @click="activeFilter = 'academic'"
                :class="['px-6 py-2 rounded-full text-sm font-medium transition-all', 
                        activeFilter === 'academic' ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white' : 'bg-white/10 text-white/70 hover:bg-white/20']"
            >
                Academic Reports
            </button>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-12 px-4">
      <div class="container mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Product Card -->
          <div v-for="product in filteredProducts" :key="product.id"
               class="bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group hover:scale-105 rounded-lg overflow-hidden">
            
            <!-- Product Image -->
            <div class="relative h-48 bg-gradient-to-br from-cyan-500/20 to-purple-500/20 overflow-hidden">
              <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors duration-300"></div>
              <div class="absolute inset-0 flex items-center justify-center">
                <svg class="w-16 h-16 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path v-if="product.icon === 'template'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  <path v-else-if="product.icon === 'component'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                  <path v-else-if="product.icon === 'system'" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                  <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </div>
              
              <!-- Category Badge -->
              <div class="absolute top-4 left-4">
                <span :class="['px-3 py-1 text-xs font-medium rounded-full', product.categoryColor]">
                  {{ product.category }}
                </span>
              </div>
              
              <!-- Price Badge -->
              <div class="absolute top-4 right-4">
                <span class="bg-gradient-to-r from-cyan-500 to-purple-500 text-white px-3 py-1 text-sm font-semibold rounded-full">
                  {{ product.price }}
                </span>
              </div>
            </div>

            <!-- Product Info -->
            <div class="p-6">
              <h3 class="text-white font-semibold text-xl mb-2">{{ product.name }}</h3>
              <p class="text-white/70 mb-4 text-sm line-clamp-3">{{ product.description }}</p>

              <!-- Features -->
              <div class="mb-4">
                <h4 class="text-white/90 font-medium text-sm mb-2">Features:</h4>
                <ul class="space-y-1">
                  <li v-for="feature in product.features" :key="feature" class="flex items-center text-white/70 text-sm">
                    <svg class="w-3 h-3 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    {{ feature }}
                  </li>
                </ul>
              </div>

              <!-- Tech Stack -->
              <div class="flex flex-wrap gap-2 mb-4">
                <span v-for="tech in product.techStack" :key="tech"
                      class="bg-white/10 text-white/80 px-2 py-1 rounded text-xs">
                  {{ tech }}
                </span>
              </div>

              <!-- Action Buttons -->
              <div class="flex gap-2">
                <button class="flex-1 bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white py-2 px-4 rounded-lg font-medium transition-all flex items-center justify-center group">
                  <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 1.5M7 13l-1.5-1.5M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z" />
                  </svg>
                  Order Now
                </button>
                <button class="border border-white/30 text-white hover:bg-white/10 py-2 px-4 rounded-lg transition-all">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 bg-gradient-to-r from-cyan-500/10 to-purple-500/10">
      <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-6">
          Need Custom
          <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent">
            Development?
          </span>
        </h2>
        <p class="text-xl text-white/70 max-w-2xl mx-auto mb-8">
          Tidak menemukan produk yang sesuai? Kami siap mengembangkan solusi custom sesuai kebutuhan Anda
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="#contact" class="bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white px-8 py-3 text-lg rounded-lg font-medium transition-all flex items-center justify-center">
            Get Custom Quote
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
          <a href="/services" class="border border-white/30 text-white hover:bg-white/10 px-8 py-3 text-lg rounded-lg font-medium transition-all">
            View Services
          </a>
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
            Tertarik dengan produk kami? Hubungi tim untuk konsultasi dan pemesanan
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
                <select v-model="form.product" 
                        class="w-full bg-white/10 border border-white/20 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500">
                  <option value="">Select Product</option>
                  <option v-for="product in products" :key="product.id" :value="product.name">
                    {{ product.name }} - {{ product.price }}
                  </option>
                </select>
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
                Tim kami siap merespon inquiry produk Anda dalam 24 jam. Untuk order urgent, hubungi WhatsApp kami.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, computed } from 'vue'
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const activeFilter = ref('all')

const form = ref({
  name: '',
  email: '',
  product: '',
  message: ''
})

const products = ref([
  {
    id: 1,
    name: 'Sistem Manajemen Sekolah Laravel',
    description: 'Aplikasi web lengkap untuk manajemen sekolah dengan fitur absensi, nilai, jadwal, dan laporan akademik siswa.',
    price: 'Rp 3.500K',
    category: 'Laravel Project',
    categoryColor: 'bg-red-500/20 text-red-300',
    icon: 'system',
    features: ['Manajemen Siswa', 'Sistem Absensi', 'Input Nilai', 'Laporan Akademik'],
    techStack: ['Laravel 10', 'MySQL', 'Bootstrap', 'jQuery'],
    type: 'laravel'
  },
  {
    id: 2,
    name: 'E-Commerce Multi Vendor Laravel',
    description: 'Platform jual beli online dengan sistem multi vendor, payment gateway, dan dashboard admin yang lengkap.',
    price: 'Rp 4.200K',
    category: 'Laravel Project',
    categoryColor: 'bg-red-500/20 text-red-300',
    icon: 'system',
    features: ['Multi Vendor', 'Payment Gateway', 'Order Management', 'Commission System'],
    techStack: ['Laravel 10', 'MySQL', 'Midtrans', 'Livewire'],
    type: 'laravel'
  },
  {
    id: 3,
    name: 'Sistem Inventory & POS Laravel',
    description: 'Aplikasi point of sale dan manajemen inventory untuk toko dengan fitur barcode, laporan penjualan, dan stok.',
    price: 'Rp 2.800K',
    category: 'Laravel Project',
    categoryColor: 'bg-red-500/20 text-red-300',
    icon: 'system',
    features: ['Barcode Scanner', 'POS System', 'Inventory Management', 'Sales Report'],
    techStack: ['Laravel 10', 'MySQL', 'Vue.js', 'Inertia.js'],
    type: 'laravel'
  },
  {
    id: 4,
    name: 'Data Analysis & Visualization Python',
    description: 'Script Python untuk analisis data dengan visualisasi interaktif menggunakan pandas, matplotlib, dan seaborn.',
    price: 'Rp 1.500K',
    category: 'Python Project',
    categoryColor: 'bg-yellow-500/20 text-yellow-300',
    icon: 'template',
    features: ['Data Cleaning', 'Statistical Analysis', 'Interactive Charts', 'Export Reports'],
    techStack: ['Python', 'Pandas', 'Matplotlib', 'Seaborn'],
    type: 'python'
  },
  {
    id: 5,
    name: 'Web Scraping & Automation Python',
    description: 'Tools otomasi untuk web scraping, pengumpulan data, dan automation task menggunakan Selenium dan BeautifulSoup.',
    price: 'Rp 1.800K',
    category: 'Python Project',
    categoryColor: 'bg-yellow-500/20 text-yellow-300',
    icon: 'system',
    features: ['Web Scraping', 'Data Collection', 'Task Automation', 'Scheduled Jobs'],
    techStack: ['Python', 'Selenium', 'BeautifulSoup', 'Requests'],
    type: 'python'
  },
  {
    id: 6,
    name: 'Machine Learning Model Python',
    description: 'Model machine learning untuk prediksi dan klasifikasi data dengan preprocessing dan evaluation metrics.',
    price: 'Rp 2.500K',
    category: 'Python Project',
    categoryColor: 'bg-yellow-500/20 text-yellow-300',
    icon: 'system',
    features: ['Data Preprocessing', 'Model Training', 'Prediction System', 'Performance Metrics'],
    techStack: ['Python', 'Scikit-learn', 'TensorFlow', 'Jupyter'],
    type: 'python'
  },
  {
    id: 7,
    name: 'Template Desain Feed Instagram',
    description: 'Paket template desain untuk feed Instagram dengan berbagai tema bisnis, lifestyle, dan personal branding.',
    price: 'Rp 350K',
    category: 'Social Media Design',
    categoryColor: 'bg-pink-500/20 text-pink-300',
    icon: 'template',
    features: ['20+ Template Design', 'Editable PSD/AI', 'Multiple Themes', 'Brand Guidelines'],
    techStack: ['Photoshop', 'Illustrator', 'Figma', 'Canva'],
    type: 'design'
  },
  {
    id: 8,
    name: 'Desain Story Instagram & Facebook',
    description: 'Koleksi template story untuk Instagram dan Facebook dengan animasi dan elemen interaktif.',
    price: 'Rp 280K',
    category: 'Social Media Design',
    categoryColor: 'bg-pink-500/20 text-pink-300',
    icon: 'template',
    features: ['Animated Stories', 'Interactive Elements', 'Multiple Formats', 'Brand Consistency'],
    techStack: ['After Effects', 'Photoshop', 'Figma', 'Lottie'],
    type: 'design'
  },
  {
    id: 9,
    name: 'Content Plan & Calendar Design',
    description: 'Template perencanaan konten sosial media dengan calendar design dan panduan strategi konten.',
    price: 'Rp 450K',
    category: 'Social Media Design',
    categoryColor: 'bg-pink-500/20 text-pink-300',
    icon: 'template',
    features: ['Content Calendar', 'Strategy Guide', 'Hashtag Research', 'Analytics Template'],
    techStack: ['Excel', 'Google Sheets', 'Notion', 'Trello'],
    type: 'design'
  },
  {
    id: 10,
    name: 'Template Skripsi & Thesis',
    description: 'Template dokumen skripsi dan thesis sesuai format universitas dengan panduan penulisan ilmiah.',
    price: 'Rp 200K',
    category: 'Academic Report',
    categoryColor: 'bg-blue-500/20 text-blue-300',
    icon: 'template',
    features: ['University Format', 'Citation Style', 'Table of Contents', 'Reference Manager'],
    techStack: ['MS Word', 'LaTeX', 'Mendeley', 'Zotero'],
    type: 'academic'
  },
  {
    id: 11,
    name: 'Laporan Penelitian & Jurnal',
    description: 'Template laporan penelitian dan format jurnal ilmiah dengan panduan metodologi penelitian.',
    price: 'Rp 300K',
    category: 'Academic Report',
    categoryColor: 'bg-blue-500/20 text-blue-300',
    icon: 'template',
    features: ['Research Template', 'Journal Format', 'Methodology Guide', 'Statistical Analysis'],
    techStack: ['MS Word', 'LaTeX', 'SPSS', 'R Studio'],
    type: 'academic'
  },
  {
    id: 12,
    name: 'Proposal & Presentation Academic',
    description: 'Template proposal penelitian dan presentasi akademik dengan design profesional dan panduan penyusunan.',
    price: 'Rp 250K',
    category: 'Academic Report',
    categoryColor: 'bg-blue-500/20 text-blue-300',
    icon: 'template',
    features: ['Proposal Template', 'Presentation Slides', 'Budget Planning', 'Timeline Template'],
    techStack: ['MS Word', 'PowerPoint', 'Keynote', 'Prezi'],
    type: 'academic'
  }
])

// Update filter logic to include new categories
const filteredProducts = computed(() => {
  if (activeFilter.value === 'all') {
    return products.value
  }
  return products.value.filter(product => product.type === activeFilter.value)
})

const submitForm = () => {
  console.log('Form submitted:', form.value)
  // Handle form submission logic here
}
</script>