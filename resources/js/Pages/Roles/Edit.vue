<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';

const props = defineProps({
    role: Object,
    permissions: Array,
});

const form = useForm({
    name: props.role.name,
    permissions: props.role.permissions ? props.role.permissions.map(permission => permission.name) : [],
});

const submit = () => {
    form.put(`/roles/${props.role.id}`);
};
</script>

<template>
    <Head title="Edit Role" />

    <AdminLayout>
        <template #title>Edit Role</template>

        <!-- Breadcrumb -->
        <div class="mb-6 md:mb-8">
            <nav class="flex items-center space-x-2 text-sm">
                <Link href="/roles" class="text-slate-500 hover:text-slate-700 transition-colors">Roles</Link>
                <svg class="w-4 h-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-slate-900 font-medium">Edit Role</span>
            </nav>
        </div>

        <!-- Form Container -->
        <div class="max-w-2xl">
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <!-- Form Header -->
                <div class="px-6 py-4 border-b border-slate-200 bg-gradient-to-r from-blue-50 to-green-50">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-green-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-slate-800">Edit Role Information</h3>
                            <p class="text-sm text-slate-600">Update role details and permissions</p>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <form @submit.prevent="submit" class="p-6 space-y-6">
                    <!-- Role Name Field -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-700 mb-2">
                            Role Name
                        </label>
                        <input
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200"
                            :class="{ 'border-red-300 focus:ring-red-500 focus:border-red-500': form.errors.name }"
                            placeholder="e.g., manager, editor, etc."
                        />
                        <div v-if="form.errors.name" class="mt-2 text-sm text-red-600">
                            {{ form.errors.name }}
                        </div>
                    </div>

                    <!-- Permissions Selection -->
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-3">
                            Permissions
                        </label>
                        <div v-if="permissions.length > 0" class="grid grid-cols-1 sm:grid-cols-2 gap-3 max-h-80 overflow-y-auto border border-slate-200 rounded-xl p-4">
                            <div v-for="permission in permissions" :key="permission.id" class="flex items-center p-3 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors duration-200">
                                <input
                                    :id="`permission-${permission.id}`"
                                    v-model="form.permissions"
                                    :value="permission.name"
                                    type="checkbox"
                                    class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500"
                                />
                                <label :for="`permission-${permission.id}`" class="ml-3 text-sm text-slate-700 cursor-pointer">{{ permission.name }}</label>
                            </div>
                        </div>
                        <div v-else class="bg-yellow-50 border border-yellow-200 rounded-xl p-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-yellow-600 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.081 16.5c-.77.833.192 2.5 1.732 2.5z" />
                                </svg>
                                <div>
                                    <h4 class="text-sm font-medium text-yellow-800">No permissions available</h4>
                                    <p class="text-sm text-yellow-700 mt-1">Please run the permission seeder first to create available permissions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between pt-6 border-t border-slate-200 gap-3">
                        <Link 
                            href="/roles" 
                            class="inline-flex items-center justify-center px-4 py-2.5 border border-slate-300 text-slate-700 font-medium text-sm rounded-xl hover:bg-slate-50 transition-colors duration-200"
                        >
                            Cancel
                        </Link>

                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="inline-flex items-center justify-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-green-600 text-white font-medium text-sm rounded-xl hover:from-blue-700 hover:to-green-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            <span v-if="form.processing">Updating...</span>
                            <span v-else>Update Role</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AdminLayout>
</template>