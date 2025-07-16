<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AdminLayout>
        <template #title>Dashboard</template>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
            <!-- Total Users Card -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-600">Total Users</p>
                        <p class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">1,247</p>
                        <div class="flex items-center mt-2">
                            <span class="text-sm text-green-600 font-medium">+12%</span>
                            <span class="text-sm text-slate-500 ml-2">vs last month</span>
                        </div>
                    </div>
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center ml-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Active Roles Card -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-600">Active Roles</p>
                        <p class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">24</p>
                        <div class="flex items-center mt-2">
                            <span class="text-sm text-blue-600 font-medium">+3</span>
                            <span class="text-sm text-slate-500 ml-2">new this week</span>
                        </div>
                    </div>
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center ml-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Permissions Card -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6 hover:shadow-md transition-shadow duration-200 sm:col-span-2 lg:col-span-1">
                <div class="flex items-center justify-between">
                    <div class="flex-1">
                        <p class="text-sm font-medium text-slate-600">Permissions</p>
                        <p class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">156</p>
                        <div class="flex items-center mt-2">
                            <span class="text-sm text-purple-600 font-medium">Active</span>
                            <span class="text-sm text-slate-500 ml-2">across system</span>
                        </div>
                    </div>
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center ml-4">
                        <svg class="w-6 h-6 md:w-8 md:h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
            <!-- Welcome Card -->
            <div class="lg:col-span-2">
                <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-purple-700 rounded-xl p-6 md:p-8 text-white">
                    <div class="flex flex-col md:flex-row items-start justify-between">
                        <div class="flex-1">
                            <h3 class="text-xl md:text-2xl font-bold mb-2">Selamat Datang di Tatakode Admin</h3>
                            <p class="text-blue-100 mb-4 md:mb-6 text-base md:text-lg">Partner Digitalmu yang selalu ada</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4 mb-4 md:mb-6">
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 md:p-4 border border-white/20">
                                    <h4 class="font-semibold mb-2 flex items-center text-sm md:text-base">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                        </svg>
                                        Produk Digital
                                    </h4>
                                    <p class="text-blue-100 text-xs md:text-sm">Source Code & Template</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 md:p-4 border border-white/20">
                                    <h4 class="font-semibold mb-2 flex items-center text-sm md:text-base">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9" />
                                        </svg>
                                        Jasa Website
                                    </h4>
                                    <p class="text-blue-100 text-xs md:text-sm">Website & eCommerce</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 md:p-4 border border-white/20">
                                    <h4 class="font-semibold mb-2 flex items-center text-sm md:text-base">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        Data & AI/ML
                                    </h4>
                                    <p class="text-blue-100 text-xs md:text-sm">Data Processing & Machine Learning</p>
                                </div>
                                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 md:p-4 border border-white/20">
                                    <h4 class="font-semibold mb-2 flex items-center text-sm md:text-base">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        Bantuan Akademik
                                    </h4>
                                    <p class="text-blue-100 text-xs md:text-sm">Support IT & Programming</p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block ml-8">
                            <div class="w-24 h-24 md:w-32 md:h-32 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20">
                                <svg class="w-12 h-12 md:w-16 md:h-16 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6">
                <div class="flex items-center justify-between mb-4 md:mb-6">
                    <h3 class="text-base md:text-lg font-semibold text-slate-800">Recent Activity</h3>
                    <button class="text-xs md:text-sm text-blue-600 hover:text-blue-700 font-medium">View All</button>
                </div>
                
                <div class="space-y-3 md:space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-slate-900">New user registered</p>
                            <p class="text-xs text-slate-500">John Doe joined the system</p>
                            <p class="text-xs text-slate-400 mt-1">2 minutes ago</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-slate-900">Role updated</p>
                            <p class="text-xs text-slate-500">Admin role permissions modified</p>
                            <p class="text-xs text-slate-400 mt-1">15 minutes ago</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.081 16.5c-.77.833.192 2.5 1.732 2.5z" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-slate-900">System backup</p>
                            <p class="text-xs text-slate-500">Daily backup completed successfully</p>
                            <p class="text-xs text-slate-400 mt-1">1 hour ago</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-slate-900">Report generated</p>
                            <p class="text-xs text-slate-500">Monthly analytics report ready</p>
                            <p class="text-xs text-slate-400 mt-1">3 hours ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Performance Chart Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6">
            <!-- System Performance -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 md:mb-6">
                    <h3 class="text-base md:text-lg font-semibold text-slate-800 mb-2 sm:mb-0">System Performance</h3>
                    <select class="text-sm text-slate-600 bg-slate-50 border border-slate-200 rounded-lg px-3 py-1">
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>Last 90 days</option>
                    </select>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-slate-600">CPU Usage</span>
                            <span class="font-medium text-slate-900">65%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full transition-all duration-300" style="width: 65%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-slate-600">Memory Usage</span>
                            <span class="font-medium text-slate-900">42%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-2 rounded-full transition-all duration-300" style="width: 42%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-slate-600">Storage</span>
                            <span class="font-medium text-slate-900">78%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-yellow-500 to-orange-500 h-2 rounded-full transition-all duration-300" style="width: 78%"></div>
                        </div>
                    </div>
                    
                    <div>
                        <div class="flex justify-between text-sm mb-2">
                            <span class="text-slate-600">Network</span>
                            <span class="font-medium text-slate-900">23%</span>
                        </div>
                        <div class="w-full bg-slate-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full transition-all duration-300" style="width: 23%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Growth -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-4 md:p-6">
                <div class="flex items-center justify-between mb-4 md:mb-6">
                    <h3 class="text-base md:text-lg font-semibold text-slate-800">User Growth</h3>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-green-600 font-medium">+12.5%</span>
                        <svg class="w-4 h-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                        </svg>
                    </div>
                </div>
                
                <div class="grid grid-cols-3 gap-2 md:gap-4 mb-4 md:mb-6">
                    <div class="text-center">
                        <p class="text-xl md:text-2xl font-bold text-slate-900">847</p>
                        <p class="text-xs text-slate-500">New Users</p>
                    </div>
                    <div class="text-center">
                        <p class="text-xl md:text-2xl font-bold text-slate-900">1,247</p>
                        <p class="text-xs text-slate-500">Total Users</p>
                    </div>
                    <div class="text-center">
                        <p class="text-xl md:text-2xl font-bold text-slate-900">89%</p>
                        <p class="text-xs text-slate-500">Active Rate</p>
                    </div>
                </div>

                <!-- Simple Chart Visualization -->
                <div class="h-24 md:h-32 flex items-end justify-between space-x-1">
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 40%"></div>
                        <span class="text-xs text-slate-500 mt-1">Jan</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 60%"></div>
                        <span class="text-xs text-slate-500 mt-1">Feb</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 75%"></div>
                        <span class="text-xs text-slate-500 mt-1">Mar</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 55%"></div>
                        <span class="text-xs text-slate-500 mt-1">Apr</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 80%"></div>
                        <span class="text-xs text-slate-500 mt-1">May</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-6 md:w-8 bg-gradient-to-t from-blue-400 to-blue-500 rounded-t transition-all duration-300" style="height: 95%"></div>
                        <span class="text-xs text-slate-500 mt-1">Jun</span>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>