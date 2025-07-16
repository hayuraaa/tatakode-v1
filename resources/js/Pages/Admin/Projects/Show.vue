<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    project: Object,
});

const deleteProject = () => {
    if (confirm('Are you sure you want to delete this project?')) {
        router.delete(`/admin-projects/${props.project.id}`);
    }
};

const getStatusColor = (status) => {
    const colors = {
        active: 'bg-green-100 text-green-800',
        completed: 'bg-blue-100 text-blue-800',
        in_progress: 'bg-yellow-100 text-yellow-800',
        draft: 'bg-gray-100 text-gray-800'
    };
    return colors[status] || 'bg-gray-100 text-gray-800';
};

const getStatusText = (status) => {
    const texts = {
        active: 'Active',
        completed: 'Completed',
        in_progress: 'In Progress',
        draft: 'Draft'
    };
    return texts[status] || 'Unknown';
};

const formatDate = (dateString) => {
    return new Date(dateString).toLocaleDateString('id-ID', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
    });
};

const selectedImage = ref(null);
const showImageModal = ref(false);

const openImageModal = (imageUrl) => {
    selectedImage.value = imageUrl;
    showImageModal.value = true;
};

const closeImageModal = () => {
    showImageModal.value = false;
    selectedImage.value = null;
};
</script>

<template>
    <Head :title="project.title" />

    <AdminLayout>
        <template #title>Project Details</template>

        <!-- Header Section -->
        <div class="mb-6 md:mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800">{{ project.title }}</h2>
                    <p class="text-sm text-slate-600 mt-1">Project details and information</p>
                </div>
                <div class="flex items-center gap-3">
                    <Link 
                        href="/admin-projects" 
                        class="inline-flex items-center px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium text-sm rounded-xl transition-colors duration-200"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Projects
                    </Link>
                    <Link 
                        :href="`/admin-projects/${project.id}/edit`" 
                        class="inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium text-sm rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-sm hover:shadow-md"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit Project
                    </Link>
                </div>
            </div>
        </div>

        <!-- Project Information -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Project Overview -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Project Overview</h3>
                    </div>
                    <div class="p-6 space-y-6">
                        <!-- Title & Description -->
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 mb-3">{{ project.title }}</h4>
                            <div class="prose prose-slate max-w-none">
                                <p class="text-slate-600 leading-relaxed">{{ project.description }}</p>
                            </div>
                        </div>

                        <!-- Status & Category -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Status</label>
                                <span :class="getStatusColor(project.status)" 
                                      class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium">
                                    {{ getStatusText(project.status) }}
                                </span>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Category</label>
                                <span class="inline-flex items-center px-3 py-1.5 bg-slate-100 text-slate-800 rounded-full text-sm font-medium">
                                    {{ project.category }}
                                </span>
                            </div>
                        </div>

                        <!-- Technologies -->
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-3">Technologies Used</label>
                            <div class="flex flex-wrap gap-2">
                                <span 
                                    v-for="tech in project.technologies" 
                                    :key="tech"
                                    class="inline-flex items-center px-3 py-1.5 bg-blue-100 text-blue-800 text-sm font-medium rounded-full"
                                >
                                    {{ tech }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thumbnail Image -->
                <div v-if="project.image" class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Thumbnail Image</h3>
                    </div>
                    <div class="p-6">
                        <div class="relative group cursor-pointer" @click="openImageModal(`/storage/${project.image}`)">
                            <img 
                                :src="`/storage/${project.image}`" 
                                :alt="project.title"
                                class="w-full max-w-md h-64 object-cover rounded-lg border border-slate-200 group-hover:opacity-90 transition-opacity"
                            />
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-25 rounded-lg">
                                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                <div v-if="project.gallery && project.gallery.length > 0" class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Gallery ({{ project.gallery.length }} images)</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                            <div 
                                v-for="(image, index) in project.gallery" 
                                :key="index"
                                class="relative group cursor-pointer"
                                @click="openImageModal(`/storage/${image}`)"
                            >
                                <img 
                                    :src="`/storage/${image}`" 
                                    :alt="`${project.title} - Image ${index + 1}`"
                                    class="w-full h-32 object-cover rounded-lg border border-slate-200 group-hover:opacity-90 transition-opacity"
                                />
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black bg-opacity-25 rounded-lg">
                                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Project Meta -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Project Information</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Created Date</label>
                            <p class="text-sm text-slate-600">{{ formatDate(project.created_at) }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Last Updated</label>
                            <p class="text-sm text-slate-600">{{ formatDate(project.updated_at) }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-1">Project ID</label>
                            <p class="text-sm text-slate-600 font-mono">#{{ project.id }}</p>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Quick Actions</h3>
                    </div>
                    <div class="p-6 space-y-3">
                        <Link 
                            :href="`/admin-projects/${project.id}/edit`" 
                            class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200"
                        >
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Edit Project
                        </Link>
                        <button 
                            @click="deleteProject" 
                            class="w-full inline-flex items-center justify-center px-4 py-2.5 bg-red-600 hover:bg-red-700 text-white font-medium text-sm rounded-lg transition-colors duration-200"
                        >
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete Project
                        </button>
                    </div>
                </div>

                <!-- Project Stats -->
                <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                        <h3 class="text-lg font-semibold text-slate-800">Statistics</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-600">Technologies</span>
                            <span class="text-sm font-medium text-slate-900">{{ project.technologies ? project.technologies.length : 0 }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-600">Gallery Images</span>
                            <span class="text-sm font-medium text-slate-900">{{ project.gallery ? project.gallery.length : 0 }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-600">Has Thumbnail</span>
                            <span class="text-sm font-medium text-slate-900">{{ project.image ? 'Yes' : 'No' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Modal -->
        <div v-if="showImageModal" class="fixed inset-0 z-50 overflow-y-auto" @click="closeImageModal">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>

                <!-- Modal content -->
                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full" @click.stop>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-slate-900">{{ project.title }}</h3>
                            <button @click="closeImageModal" class="text-slate-400 hover:text-slate-600">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-center">
                            <img 
                                :src="selectedImage" 
                                :alt="project.title"
                                class="max-w-full max-h-96 mx-auto rounded-lg shadow-lg"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>