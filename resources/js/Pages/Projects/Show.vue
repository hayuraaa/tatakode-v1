<template>
  <AppLayout>
    <Head :title="`${project.title} - Tatakode`" />
    
    <div class="pt-32 pb-20 px-4">
      <div class="container mx-auto max-w-7xl">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-white/60 mb-8 text-sm">
          <Link href="/" class="hover:text-white transition-colors">Home</Link>
          <span>/</span>
          <Link href="/projects" class="hover:text-white transition-colors">Projects</Link>
          <span>/</span>
          <span class="text-white">{{ project.title }}</span>
        </nav>

        <div class="grid lg:grid-cols-3 gap-12">
          <!-- Main Content -->
          <div class="lg:col-span-2">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
              {{ project.title }}
            </h1>

            <!-- Main Image -->
            <div class="mb-8">
              <div class="aspect-video bg-white/5 border border-white/10 rounded-lg overflow-hidden">
                <img
                  v-if="project.image"
                  :src="project.image"
                  :alt="project.title"
                  class="w-full h-full object-cover"
                />
                <div
                  v-else
                  class="w-full h-full bg-gradient-to-br from-cyan-500/20 to-purple-500/20 flex items-center justify-center"
                >
                  <svg class="w-16 h-16 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </div>
              </div>
            </div>

            <!-- Description -->
            <div class="mb-8">
              <h2 class="text-2xl font-bold text-white mb-4">About This Project</h2>
              <p class="text-white/80 text-lg leading-relaxed">
                {{ project.description }}
              </p>
            </div>

            <!-- Gallery -->
            <div v-if="project.gallery && project.gallery.length > 0" class="mb-8">
              <h2 class="text-2xl font-bold text-white mb-4">Gallery</h2>
              <div class="grid md:grid-cols-2 gap-4">
                <div
                  v-for="(image, index) in project.gallery"
                  :key="index"
                  class="aspect-video bg-white/5 border border-white/10 rounded-lg overflow-hidden cursor-pointer hover:opacity-80 transition-opacity"
                  @click="openImageModal(image)"
                >
                  <img
                    :src="image"
                    :alt="`${project.title} gallery ${index + 1}`"
                    class="w-full h-full object-cover"
                  />
                </div>
              </div>
            </div>

          </div>

          <!-- Sidebar -->
          <div class="lg:col-span-1">
            <div class="space-y-6">
              <!-- Project Info -->
              <div class="bg-white/5 border border-white/10 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-white mb-4">Project Details</h3>
                <div class="space-y-3">
                  <div>
                    <span class="text-white/60 text-sm">Category</span>
                    <div class="mt-1">
                      <span :class="`px-2 py-1 rounded text-sm ${project.categoryColor}`">
                        {{ project.category }}
                      </span>
                    </div>
                  </div>
                  <div>
                    <span class="text-white/60 text-sm">Status</span>
                    <p class="text-white font-medium capitalize">{{ project.status }}</p>
                  </div>
                  <div>
                    <span class="text-white/60 text-sm">Date</span>
                    <p class="text-white font-medium">{{ project.date }}</p>
                  </div>
                </div>
              </div>

              <!-- Technologies Used -->
              <div class="bg-white/5 border border-white/10 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-white mb-4">Technologies Used</h3>
                <div class="flex flex-wrap gap-2">
                  <span
                    v-for="tech in project.techStack"
                    :key="tech"
                    class="bg-white/10 text-white/80 px-3 py-1 rounded-full text-sm border border-white/20"
                  >
                    {{ tech }}
                  </span>
                </div>
              </div>

              <!-- Contact CTA -->
              <div class="bg-gradient-to-r from-cyan-500/20 to-purple-500/20 border border-cyan-500/30 rounded-lg p-6">
                <h3 class="text-white font-semibold mb-2">Need Similar Project?</h3>
                <p class="text-white/70 text-sm mb-4">
                  Let's discuss your project requirements.
                </p>
                <button class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 hover:from-cyan-600 hover:to-purple-600 text-white py-2 rounded-lg font-medium transition-all">
                  Contact Us
                </button>
              </div>

              <!-- Other Projects -->
              <div v-if="otherProjects.length > 0" class="bg-white/5 border border-white/10 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-white mb-4">Other Projects</h3>
                <div class="space-y-4">
                  <div
                    v-for="otherProject in otherProjects"
                    :key="otherProject.id"
                    class="group"
                  >
                    <Link
                      :href="`/projects/${otherProject.slug}`"
                      class="block hover:bg-white/5 p-3 rounded-lg transition-colors"
                    >
                      <div class="flex space-x-3">
                        <div class="w-16 h-16 bg-gradient-to-br from-cyan-500/20 to-purple-500/20 rounded-lg overflow-hidden flex-shrink-0">
                          <img
                            v-if="otherProject.image"
                            :src="otherProject.image"
                            :alt="otherProject.title"
                            class="w-full h-full object-cover"
                          />
                          <div
                            v-else
                            class="w-full h-full flex items-center justify-center"
                          >
                            <svg class="w-6 h-6 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                          </div>
                        </div>
                        <div class="flex-1 min-w-0">
                          <h4 class="text-white font-medium text-sm group-hover:text-cyan-400 transition-colors line-clamp-2">
                            {{ otherProject.title }}
                          </h4>
                          <p class="text-white/60 text-xs mt-1">{{ otherProject.date }}</p>
                          <div class="flex items-center mt-1">
                            <span :class="`px-2 py-0.5 rounded text-xs ${otherProject.categoryColor}`">
                              {{ otherProject.category }}
                            </span>
                          </div>
                        </div>
                      </div>
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Image Modal -->
    <div
      v-if="selectedImage"
      class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4"
      @click="closeImageModal"
    >
      <div class="relative max-w-4xl max-h-full">
        <img
          :src="selectedImage"
          :alt="project.title"
          class="w-full h-full object-contain rounded-lg"
        />
        <button
          @click="closeImageModal"
          class="absolute top-4 right-4 bg-black/50 text-white p-2 rounded-full hover:bg-black/70 transition-colors"
        >
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
  project: Object,
  otherProjects: Array
})

const selectedImage = ref(null)

const openImageModal = (image) => {
  selectedImage.value = image
}

const closeImageModal = () => {
  selectedImage.value = null
}
</script>