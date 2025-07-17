<template>
  <AppLayout>
    <Head title="Our Projects - Tatakode" />
    
    <!-- Hero Section -->
    <section class="pt-32 pb-12 px-4 text-center">
      <div class="container mx-auto">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          Our
          <span class="bg-gradient-to-r from-cyan-400 to-purple-400 bg-clip-text text-transparent"> Projects</span>
        </h1>
        <p class="text-xl text-white/70 max-w-2xl mx-auto mb-8">
          Jelajahi portfolio project-project terbaik yang telah kami kerjakan untuk berbagai klien
        </p>
        
        <!-- Search and Filter -->
        <div class="max-w-4xl mx-auto">
          <div class="flex flex-col md:flex-row gap-4 mb-8">
            <div class="flex-1 relative">
              <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-white/40 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
              <input
                v-model="searchTerm"
                @keyup.enter="handleSearch"
                type="text"
                placeholder="Cari project..."
                class="w-full pl-10 pr-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder:text-white/50 focus:outline-none focus:ring-2 focus:ring-cyan-500"
              />
            </div>
            <div class="relative">
              <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-white/40 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
              </svg>
              <select
                v-model="selectedCategory"
                @change="handleCategoryChange"
                class="pl-10 pr-8 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 appearance-none"
                style="color-scheme: dark;"
              >
                <option value="all" class="bg-slate-800 text-white">All Categories</option>
                <option v-for="category in categories" :key="category" :value="category" class="bg-slate-800 text-white">{{ category }}</option>
              </select>
            </div>
            <button
              @click="handleSearch"
              class="px-8 py-3 bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white rounded-lg font-medium transition-all"
            >
              Search
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-8 px-4 pb-20">
      <div class="container mx-auto">
        <div v-if="projects.data.length === 0" class="text-center py-16">
          <div class="w-24 h-24 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-12 h-12 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-white mb-2">No Projects Found</h3>
          <p class="text-white/60">Try adjusting your search or filter criteria</p>
        </div>

        <div v-else>
          <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <div
              v-for="project in projects.data"
              :key="project.id"
              class="bg-white/5 border border-white/10 backdrop-blur-sm hover:bg-white/10 transition-all duration-300 group hover:scale-[1.02] rounded-lg overflow-hidden"
            >
              <!-- Project Image -->
              <div class="relative h-48 bg-gradient-to-br from-cyan-500/20 to-purple-500/20 overflow-hidden">
                <img
                  v-if="project.image"
                  :src="project.image"
                  :alt="project.title"
                  class="w-full h-full object-cover"
                />
                <div
                  v-else
                  class="w-full h-full bg-gradient-to-br from-cyan-500/30 to-purple-500/30 flex items-center justify-center"
                >
                  <svg class="w-16 h-16 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                  </svg>
                </div>
                
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                  <Link
                    :href="`/projects/${project.slug}`"
                    class="bg-white/20 backdrop-blur-sm border border-white/30 text-white p-3 rounded-full hover:bg-white/30 transition-all"
                  >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </Link>
                </div>
                
                <!-- Category Badge -->
                <div class="absolute top-4 left-4">
                  <span :class="`px-3 py-1 text-xs font-medium rounded-full border ${project.categoryColor}`">
                    {{ project.category }}
                  </span>
                </div>
              </div>

              <!-- Project Info -->
              <div class="p-6">
                <div class="flex items-center justify-between mb-3">
                  <h3 class="text-white font-semibold text-lg truncate">{{ project.title }}</h3>
                  <div class="flex items-center text-cyan-400 text-sm">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ project.date }}
                  </div>
                </div>

                <p class="text-white/70 mb-4 text-sm line-clamp-3">{{ project.description }}</p>

                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mb-4">
                  <span
                    v-for="(tech, index) in project.techStack.slice(0, 3)"
                    :key="index"
                    class="bg-white/10 text-white/80 px-2 py-1 rounded text-xs border border-white/20"
                  >
                    {{ tech }}
                  </span>
                  <span
                    v-if="project.techStack.length > 3"
                    class="bg-white/10 text-white/80 px-2 py-1 rounded text-xs border border-white/20"
                  >
                    +{{ project.techStack.length - 3 }} more
                  </span>
                </div>

                <!-- View Button -->
                <Link
                  :href="`/projects/${project.slug}`"
                  class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white py-2 rounded-lg font-medium transition-all flex items-center justify-center group"
                >
                  View Project
                  <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                  </svg>
                </Link>
              </div>
            </div>
          </div>

          <!-- Pagination -->
          <div v-if="projects.prev_page_url || projects.next_page_url" class="flex justify-center items-center mt-12 space-x-4">
            <Link
              v-if="projects.prev_page_url"
              :href="projects.prev_page_url"
              class="px-6 py-3 bg-white/10 border border-white/20 text-white rounded-lg hover:bg-white/20 transition-all"
            >
              Previous
            </Link>
            
            <div class="flex space-x-2">
              <Link
                v-for="page in Array.from({ length: projects.last_page }, (_, i) => i + 1)"
                :key="page"
                :href="`/projects?page=${page}`"
                :class="[
                  'px-4 py-2 rounded-lg font-medium transition-all',
                  page === projects.current_page
                    ? 'bg-gradient-to-r from-cyan-500 to-purple-500 text-white'
                    : 'bg-white/10 text-white/80 hover:bg-white/20'
                ]"
              >
                {{ page }}
              </Link>
            </div>

            <Link
              v-if="projects.next_page_url"
              :href="projects.next_page_url"
              class="px-6 py-3 bg-white/10 border border-white/20 text-white rounded-lg hover:bg-white/20 transition-all"
            >
              Next
            </Link>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { Head, Link, router } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
  projects: Object,
  categories: Array,
  filters: Object
})

const searchTerm = ref(props.filters.search || '')
const selectedCategory = ref(props.filters.category || 'all')

const handleSearch = () => {
  router.get('/projects', {
    search: searchTerm.value,
    category: selectedCategory.value !== 'all' ? selectedCategory.value : undefined,
  }, {
    preserveState: true,
    preserveScroll: true,
  })
}

const handleCategoryChange = () => {
  router.get('/projects', {
    search: searchTerm.value,
    category: selectedCategory.value !== 'all' ? selectedCategory.value : undefined,
  }, {
    preserveState: true,
    preserveScroll: true,
  })
}
</script>