<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const showingSidebar = ref(false); // Default false untuk mobile-first
const isMobile = ref(false);
const page = usePage();

const user = page.props.auth.user;

// Check if device is mobile
const checkMobile = () => {
  isMobile.value = window.innerWidth < 1024; // Changed to lg breakpoint
  if (window.innerWidth >= 1024) {
    showingSidebar.value = true; // Auto show on desktop
  } else {
    showingSidebar.value = false; // Auto hide on mobile/tablet
  }
};

// Toggle sidebar
const toggleSidebar = () => {
  showingSidebar.value = !showingSidebar.value;
};

// Close sidebar when clicking outside on mobile
const closeSidebarOnMobile = (event) => {
  if (isMobile.value && showingSidebar.value) {
    showingSidebar.value = false;
  }
};

onMounted(() => {
  checkMobile();
  window.addEventListener('resize', checkMobile);
});

onUnmounted(() => {
  window.removeEventListener('resize', checkMobile);
});
</script>

<template>
    <div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50">
        <!-- Mobile Overlay -->
        <div 
            v-if="showingSidebar && isMobile" 
            @click="closeSidebarOnMobile"
            class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
        ></div>

        <!-- Sidebar -->
        <aside 
            :class="[
                'fixed inset-y-0 left-0 z-50 bg-white border-r border-slate-200 shadow-xl transition-all duration-300 ease-in-out',
                // Mobile behavior
                isMobile && showingSidebar ? 'translate-x-0' : '',
                isMobile && !showingSidebar ? '-translate-x-full' : '',
                // Desktop behavior
                !isMobile ? 'lg:translate-x-0' : '',
                // Width classes
                isMobile ? 'w-80' : (showingSidebar ? 'w-72' : 'w-20')
            ]"
        >
            <div class="flex flex-col h-full">
                <!-- Logo Section -->
                <div class="flex items-center justify-between h-16 lg:h-20 px-6 border-b border-slate-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-lg">T</span>
                        </div>
                        <!-- Fixed: Only show text when sidebar is expanded -->
                        <div v-if="showingSidebar" class="min-w-0">
                            <h2 class="text-xl font-bold text-slate-800 truncate">Tatakode</h2>
                            <p class="text-xs text-slate-500">Admin Panel</p>
                        </div>
                    </div>
                    <!-- Close button for mobile -->
                    <button 
                        v-if="isMobile && showingSidebar"
                        @click="toggleSidebar"
                        class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg transition-colors lg:hidden"
                    >
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <!-- Main Navigation -->
                    <div class="space-y-1">
                        <Link 
                            href="/dashboard" 
                            @click="isMobile ? toggleSidebar() : null"
                            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-700 transition-all duration-200 border border-transparent hover:border-blue-100"
                            :title="!showingSidebar ? 'Dashboard' : ''"
                        >
                            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v2H8V5z" />
                            </svg>
                            <!-- Fixed: Only show text when sidebar is expanded -->
                            <span v-if="showingSidebar">Dashboard</span>
                        </Link>

                        <Link 
                            href="/admin-projects" 
                            @click="isMobile ? toggleSidebar() : null"
                            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-700 transition-all duration-200 border border-transparent hover:border-blue-100"
                            :title="!showingSidebar ? 'Projects' : ''"
                        >
                            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            <!-- Fixed: Only show text when sidebar is expanded -->
                            <span v-if="showingSidebar">Projects</span>
                        </Link>

                        <Link 
                            href="/users" 
                            @click="isMobile ? toggleSidebar() : null"
                            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-700 transition-all duration-200 border border-transparent hover:border-blue-100"
                            :title="!showingSidebar ? 'Users' : ''"
                        >
                            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                            </svg>
                            <!-- Fixed: Only show text when sidebar is expanded -->
                            <span v-if="showingSidebar">Users</span>
                        </Link>

                        <Link 
                            href="/roles" 
                            @click="isMobile ? toggleSidebar() : null"
                            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-700 transition-all duration-200 border border-transparent hover:border-blue-100"
                            :title="!showingSidebar ? 'Roles' : ''"
                        >
                            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <!-- Fixed: Only show text when sidebar is expanded -->
                            <span v-if="showingSidebar">Roles</span>
                        </Link>
                    </div>

                    <!-- Settings Section -->
                    <div v-if="showingSidebar" class="pt-6">
                        <p class="px-4 text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Settings</p>
                        <Link 
                            href="/settings" 
                            @click="isMobile ? toggleSidebar() : null"
                            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl text-slate-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-700 transition-all duration-200 border border-transparent hover:border-blue-100"
                        >
                            <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span >Settings</span>
                        </Link>
                    </div>
                </nav>

                <!-- User Profile (Bottom) -->
                <!-- Fixed: Only show user profile when sidebar is expanded -->
                <div v-if="showingSidebar" class="p-4 border-t border-slate-100 bg-slate-50/50">
                    <div class="bg-white rounded-xl p-4 border border-slate-200 shadow-sm">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-medium text-sm">{{ user.name.charAt(0).toUpperCase() }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-slate-900 truncate">{{ user.name }}</p>
                                <p class="text-xs text-slate-500">Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <div 
            :class="[
                'min-h-screen transition-all duration-300',
                {
                    'lg:ml-72': showingSidebar && !isMobile,
                    'lg:ml-20': !showingSidebar && !isMobile
                }
            ]"
        >
            <!-- Top Header -->
            <header class="bg-white/80 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-30">
                <div class="flex justify-between items-center px-4 lg:px-6 py-4">
                    <div class="flex items-center">
                        <button 
                            @click="toggleSidebar" 
                            class="p-2 text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-lg transition-all duration-200 mr-3"
                        >
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                        <div>
                            <h1 class="text-xl lg:text-2xl font-bold bg-gradient-to-r from-slate-800 to-slate-600 bg-clip-text text-transparent">
                                <slot name="title">Dashboard</slot>
                            </h1>
                            <p class="text-sm text-slate-500 mt-1 hidden sm:block">Welcome back, manage your system</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <!-- User info - hidden on very small screens -->
                        <span class="text-sm font-medium text-slate-700 hidden md:inline">{{ user.name }}</span>
                        <Link 
                            href="/logout" 
                            method="post" 
                            class="px-3 lg:px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-800 hover:bg-slate-100 rounded-lg transition-all duration-200"
                        >
                            <span class="hidden sm:inline">Logout</span>
                            <svg class="w-4 h-4 sm:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </Link>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-4 lg:p-6">
                <slot />
            </main>
        </div>
    </div>
</template>