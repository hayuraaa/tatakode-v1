<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    statuses: Object,
    categories: Array,
    technologies: Array,
});

const form = useForm({
    title: '',
    description: '',
    status: 'draft',
    category: '',
    technologies: [],
    image: null,
    gallery: []
});

const selectedTechnologies = ref([]);
const imagePreview = ref(null);
const galleryPreviews = ref([]);

const addTechnology = (tech) => {
    if (!selectedTechnologies.value.includes(tech)) {
        selectedTechnologies.value.push(tech);
        form.technologies = selectedTechnologies.value;
    }
};

const removeTechnology = (tech) => {
    const index = selectedTechnologies.value.indexOf(tech);
    if (index > -1) {
        selectedTechnologies.value.splice(index, 1);
        form.technologies = selectedTechnologies.value;
    }
};

const handleImageChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        form.image = file;
        
        // Create preview
        const reader = new FileReader();
        reader.onload = (e) => {
            imagePreview.value = {
                file: file,
                url: e.target.result,
                name: file.name
            };
        };
        reader.readAsDataURL(file);
    }
};

const removeImage = () => {
    form.image = null;
    imagePreview.value = null;
    document.getElementById('image').value = '';
};

const handleGalleryChange = (event) => {
    const files = Array.from(event.target.files);
    
    // Add new files to existing gallery
    const existingFiles = Array.from(form.gallery || []);
    const newFiles = [...existingFiles, ...files];
    form.gallery = newFiles;
    
    // Create previews for new files
    files.forEach(file => {
        const reader = new FileReader();
        reader.onload = (e) => {
            galleryPreviews.value.push({
                file: file,
                url: e.target.result,
                name: file.name
            });
        };
        reader.readAsDataURL(file);
    });
    
    // Reset input
    event.target.value = '';
};

const removeGalleryImage = (index) => {
    galleryPreviews.value.splice(index, 1);
    const filesArray = Array.from(form.gallery);
    filesArray.splice(index, 1);
    form.gallery = filesArray;
};

const submit = () => {
    form.post('/admin-projects', {
        forceFormData: true,
    });
};
</script>

<template>
    <Head title="Create Project" />

    <AdminLayout>
        <template #title>Create New Project</template>

        <!-- Header Section -->
        <div class="mb-6 md:mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold text-slate-800">Create New Project</h2>
                    <p class="text-sm text-slate-600 mt-1">Add a new project to your portfolio</p>
                </div>
                <Link 
                    href="/admin-projects" 
                    class="inline-flex items-center px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium text-sm rounded-xl transition-colors duration-200"
                >
                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Projects
                </Link>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-slate-200 bg-slate-50">
                <h3 class="text-lg font-semibold text-slate-800">Project Information</h3>
            </div>

            <form @submit.prevent="submit" class="p-6 space-y-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-2">
                        Project Title <span class="text-red-500">*</span>
                    </label>
                    <input 
                        v-model="form.title"
                        type="text" 
                        id="title"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter project title"
                        required
                    />
                    <div v-if="form.errors.title" class="text-red-500 text-sm mt-1">{{ form.errors.title }}</div>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-slate-700 mb-2">
                        Description <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        v-model="form.description"
                        id="description"
                        rows="4"
                        class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Enter project description"
                        required
                    ></textarea>
                    <div v-if="form.errors.description" class="text-red-500 text-sm mt-1">{{ form.errors.description }}</div>
                </div>

                <!-- Status & Category -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="status" class="block text-sm font-medium text-slate-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select 
                            v-model="form.status"
                            id="status"
                            class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                            <option v-for="(label, value) in statuses" :key="value" :value="value">
                                {{ label }}
                            </option>
                        </select>
                        <div v-if="form.errors.status" class="text-red-500 text-sm mt-1">{{ form.errors.status }}</div>
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-slate-700 mb-2">
                            Category <span class="text-red-500">*</span>
                        </label>
                        <select 
                            v-model="form.category"
                            id="category"
                            class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                            <option value="">Select Category</option>
                            <option v-for="category in categories" :key="category" :value="category">
                                {{ category }}
                            </option>
                        </select>
                        <div v-if="form.errors.category" class="text-red-500 text-sm mt-1">{{ form.errors.category }}</div>
                    </div>
                </div>

                <!-- Technologies -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Technologies <span class="text-red-500">*</span>
                    </label>
                    
                    <!-- Selected Technologies -->
                    <div v-if="selectedTechnologies.length > 0" class="flex flex-wrap gap-2 mb-3">
                        <span 
                            v-for="tech in selectedTechnologies" 
                            :key="tech"
                            class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-800 text-sm font-medium rounded-full"
                        >
                            {{ tech }}
                            <button 
                                type="button"
                                @click="removeTechnology(tech)"
                                class="ml-2 text-blue-600 hover:text-blue-800"
                            >
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </span>
                    </div>

                    <!-- Available Technologies -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-2">
                        <button
                            v-for="tech in technologies"
                            :key="tech"
                            type="button"
                            @click="addTechnology(tech)"
                            :disabled="selectedTechnologies.includes(tech)"
                            class="px-3 py-2 text-sm border border-slate-300 rounded-lg hover:bg-slate-50 disabled:bg-slate-100 disabled:text-slate-400 disabled:cursor-not-allowed transition-colors"
                        >
                            {{ tech }}
                        </button>
                    </div>
                    <div v-if="form.errors.technologies" class="text-red-500 text-sm mt-1">{{ form.errors.technologies }}</div>
                </div>

                <!-- Thumbnail Image -->
                <div>
                    <label for="image" class="block text-sm font-medium text-slate-700 mb-2">
                        Thumbnail Image
                    </label>
                    <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center hover:border-slate-400 transition-colors">
                        <input
                            type="file"
                            id="image"
                            @change="handleImageChange"
                            accept="image/*"
                            class="hidden"
                        />
                        <div v-if="!imagePreview">
                            <label for="image" class="cursor-pointer">
                                <svg class="w-10 h-10 text-slate-400 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-slate-600 text-sm mb-1">Click to upload thumbnail</p>
                                <p class="text-slate-500 text-xs">PNG, JPG, GIF up to 2MB</p>
                            </label>
                        </div>
                        <div v-else class="relative">
                            <img 
                                :src="imagePreview.url" 
                                :alt="imagePreview.name"
                                class="w-32 h-32 object-cover rounded-lg mx-auto border border-slate-200"
                            />
                            <button
                                type="button"
                                @click="removeImage"
                                class="absolute top-2 right-2 w-6 h-6 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors flex items-center justify-center"
                            >
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <p class="text-xs text-slate-500 mt-2 truncate">{{ imagePreview.name }}</p>
                        </div>
                    </div>
                    <div v-if="form.errors.image" class="text-red-500 text-sm mt-1">{{ form.errors.image }}</div>
                </div>

                <!-- Gallery -->
                <div>
                    <label for="gallery" class="block text-sm font-medium text-slate-700 mb-2">
                        Gallery Images
                    </label>
                    <div class="border-2 border-dashed border-slate-300 rounded-lg p-6 text-center hover:border-slate-400 transition-colors">
                        <input
                            type="file"
                            id="gallery"
                            @change="handleGalleryChange"
                            multiple
                            accept="image/*"
                            class="hidden"
                        />
                        <label for="gallery" class="cursor-pointer">
                            <svg class="w-12 h-12 text-slate-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-slate-600 mb-2">Click to upload images or drag and drop</p>
                            <p class="text-slate-500 text-sm">PNG, JPG, GIF up to 2MB each</p>
                            <p class="text-slate-500 text-xs mt-1">You can select multiple images at once or add more later</p>
                        </label>
                    </div>
                    <div v-if="form.errors.gallery" class="text-red-500 text-sm mt-1">{{ form.errors.gallery }}</div>
                </div>

                <!-- Gallery Preview -->
                <div v-if="galleryPreviews.length > 0">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="text-sm font-medium text-slate-700">Gallery Images ({{ galleryPreviews.length }})</h4>
                        <label for="gallery" class="text-sm text-blue-600 hover:text-blue-800 cursor-pointer">
                            + Add more images
                        </label>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        <div 
                            v-for="(preview, index) in galleryPreviews" 
                            :key="index"
                            class="relative group"
                        >
                            <img 
                                :src="preview.url" 
                                :alt="preview.name"
                                class="w-full h-24 object-cover rounded-lg border border-slate-200"
                            />
                            <button
                                type="button"
                                @click="removeGalleryImage(index)"
                                class="absolute top-1 right-1 w-5 h-5 bg-red-500 text-white rounded-full hover:bg-red-600 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center"
                            >
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <p class="text-xs text-slate-500 mt-1 truncate">{{ preview.name }}</p>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-6 border-t border-slate-200">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium text-sm rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-sm hover:shadow-md disabled:opacity-50 disabled:cursor-not-allowed"
                    >
                        <svg v-if="form.processing" class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        {{ form.processing ? 'Creating...' : 'Create Project' }}
                    </button>
                </div>
            </form>
        </div>
    </AdminLayout>
</template>