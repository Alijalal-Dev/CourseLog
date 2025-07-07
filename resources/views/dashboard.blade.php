<x-layouts.app>
    <!-- Header Section with Gradient Background -->
    <div class="relative mb-8 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-700 opacity-5"></div>
        <div
            class="relative z-10 p-6 bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm rounded-xl border border-gray-200/50 dark:border-gray-700/50">
            <div class="flex items-center justify-between">
                <div>
                    <h1
                        class="text-3xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 dark:from-gray-100 dark:to-gray-400 bg-clip-text text-transparent">
                        {{ __('Course Analytics Dashboard') }}
                    </h1>
                    <p class="text-gray-600 dark:text-gray-400 mt-2 text-lg">
                        {{ __('Track your learning journey and course investments') }}</p>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Last updated: {{ now()->format('M d, Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Grid with Enhanced Design -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Other Courses Card -->
        <div
            class="group relative bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl shadow-lg p-6 border border-blue-200/50 dark:border-blue-700/50 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-transparent rounded-xl"></div>
            <div class="relative flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <p class="text-sm font-semibold text-blue-700 dark:text-blue-300 uppercase tracking-wide">
                            {{ __('Other Courses') }}</p>
                    </div>
                    <p class="text-3xl font-bold text-blue-900 dark:text-blue-100 mb-1">{{ $othercourses }}</p>
                    <div class="flex items-center text-xs text-blue-600 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="font-medium">{{ __('Active Learning') }}</span>
                    </div>
                </div>
                <div
                    class="bg-blue-500/10 dark:bg-blue-500/20 p-4 rounded-xl group-hover:bg-blue-500/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 dark:text-blue-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 18h6m-3 0v-1m0-2a5 5 0 10-5-5c0 1.657.895 3.108 2.243 4.001A1 1 0 0010 16v1h4v-1a1 1 0 00-.243-.999A4.992 4.992 0 0012 10z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Software Courses Card -->
        <div
            class="group relative bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl shadow-lg p-6 border border-green-200/50 dark:border-green-700/50 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-green-600/5 to-transparent rounded-xl"></div>
            <div class="relative flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <p class="text-sm font-semibold text-green-700 dark:text-green-300 uppercase tracking-wide">
                            {{ __('Software Courses') }}</p>
                    </div>
                    <p class="text-3xl font-bold text-green-900 dark:text-green-100 mb-1">{{ $softwarecourses }}</p>
                    <div class="flex items-center text-xs text-green-600 dark:text-green-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="font-medium">{{ __('Tech Focus') }}</span>
                    </div>
                </div>
                <div
                    class="bg-green-500/10 dark:bg-green-500/20 p-4 rounded-xl group-hover:bg-green-500/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600 dark:text-green-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <rect x="9" y="9" width="6" height="6" rx="1" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 9v6M20 9v6M9 4h6M9 20h6" />
                    </svg>

                </div>
            </div>
        </div>

        <!-- Management Courses Card -->
        <div
            class="group relative bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl shadow-lg p-6 border border-purple-200/50 dark:border-purple-700/50 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/5 to-transparent rounded-xl"></div>
            <div class="relative flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <p class="text-sm font-semibold text-purple-700 dark:text-purple-300 uppercase tracking-wide">
                            {{ __('Management') }}</p>
                    </div>
                    <p class="text-3xl font-bold text-purple-900 dark:text-purple-100 mb-1">{{ $managementecourses }}
                    </p>
                    <div class="flex items-center text-xs text-purple-600 dark:text-purple-400">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="font-medium">{{ __('Leadership Skills') }}</span>
                    </div>
                </div>
                <div
                    class="bg-purple-500/10 dark:bg-purple-500/20 p-4 rounded-xl group-hover:bg-purple-500/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600 dark:text-purple-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 12h.01M4 7h16v10H4V7zM9 7V5h6v2" />
                    </svg>

                </div>
            </div>
        </div>

        <!-- Development Courses Card -->
        <div
            class="group relative bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl shadow-lg p-6 border border-orange-200/50 dark:border-orange-700/50 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
            <div class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-transparent rounded-xl"></div>
            <div class="relative flex items-center justify-between">
                <div class="flex-1">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <p class="text-sm font-semibold text-orange-700 dark:text-orange-300 uppercase tracking-wide">
                            {{ __('Development') }}</p>
                    </div>
                    <p class="text-3xl font-bold text-orange-900 dark:text-orange-100 mb-1">{{ $developementcourses }}
                    </p>
                    <div class="flex items-center text-xs text-orange-600 dark:text-orange-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="font-medium">{{ __('Code & Build') }}</span>
                    </div>
                </div>
                <div
                    class="bg-orange-500/10 dark:bg-orange-500/20 p-4 rounded-xl group-hover:bg-orange-500/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-600 dark:text-orange-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                    </svg>

                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Analytics Section -->
    <div class="col-span-full grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Total Expenses Card -->
        <div
            class="bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-xl shadow-lg p-8 border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">{{ __('Total Investment') }}
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Your learning budget overview') }}</p>
                </div>
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-4 rounded-xl shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-baseline">
                    <p
                        class="text-4xl font-bold bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        ${{ number_format($totalexpenses, 2) }}
                    </p>
                    <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">USD</span>
                </div>
                <div class="flex items-center text-sm text-gray-600 dark:text-gray-400">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                    {{ __('Investment in your future') }}
                </div>
            </div>
        </div>

        <!-- Enhanced Expenses Chart -->
        <div
            class="bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 rounded-xl shadow-lg p-8 border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">
                        {{ __('Investment Breakdown') }}</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Distribution by category') }}</p>
                </div>
            </div>
            <div class="relative h-64">
                <canvas id="expensesChart"></canvas>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('expensesChart').getContext('2d');
            const isDark = document.documentElement.classList.contains('dark');

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Software', 'Development', 'Management', 'Other'],
                    datasets: [{
                        data: [
                            {{ $softwareExpenses }},
                            {{ $developmentExpenses }},
                            {{ $managementExpenses }},
                            {{ $otherExpenses }}
                        ],
                        backgroundColor: [
                            'rgba(99, 102, 241, 0.8)',
                            'rgba(34, 197, 94, 0.8)',
                            'rgba(168, 85, 247, 0.8)',
                            'rgba(251, 191, 36, 0.8)'
                        ],
                        borderColor: [
                            'rgba(99, 102, 241, 1)',
                            'rgba(34, 197, 94, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(251, 191, 36, 1)'
                        ],
                        borderWidth: 2,
                        hoverBackgroundColor: [
                            'rgba(99, 102, 241, 0.9)',
                            'rgba(34, 197, 94, 0.9)',
                            'rgba(168, 85, 247, 0.9)',
                            'rgba(251, 191, 36, 0.9)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: isDark ? '#F3F4F6' : '#1F2937',
                                usePointStyle: true,
                                pointStyle: 'circle',
                                padding: 20,
                                font: {
                                    size: 12,
                                    weight: '500'
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: isDark ? '#1F2937' : '#FFFFFF',
                            titleColor: isDark ? '#F3F4F6' : '#1F2937',
                            bodyColor: isDark ? '#D1D5DB' : '#4B5563',
                            borderColor: isDark ? '#374151' : '#E5E7EB',
                            borderWidth: 1,
                            cornerRadius: 8,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': $' + context.parsed.toLocaleString();
                                }
                            }
                        }
                    },
                    cutout: '65%'
                }
            });
        </script>
    @endpush

    <!-- Enhanced Recent Courses Section -->
    <div class="col-span-full">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2">{{ __('Recent Courses') }}</h2>
                <p class="text-gray-600 dark:text-gray-400">{{ __('Your latest learning investments') }}</p>
            </div>
            <div class="hidden md:flex items-center space-x-4">
                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                    {{ $recentcoursess->count() }} {{ __('courses') }}
                </div>
            </div>
        </div>

        @if ($recentcoursess->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($recentcoursess as $course)
                    <div
                        class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200/50 dark:border-gray-700/50 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
                        <div class="p-6">
                            <!-- Category Badge -->
                            <div class="flex items-center justify-between mb-4">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                                    @if ($course->category === 'Software') bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 dark:from-purple-900/50 dark:to-purple-800/50 dark:text-purple-200
                                    @elseif($course->category === 'Development') bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 dark:from-blue-900/50 dark:to-blue-800/50 dark:text-blue-200
                                    @elseif($course->category === 'Data Science') bg-gradient-to-r from-green-100 to-green-200 text-green-800 dark:from-green-900/50 dark:to-green-800/50 dark:text-green-200
                                    @elseif($course->category === 'Management') bg-gradient-to-r from-red-100 to-red-200 text-red-800 dark:from-red-900/50 dark:to-red-800/50 dark:text-red-200
                                    @else bg-gradient-to-r from-gray-100 to-gray-200 text-gray-800 dark:from-gray-700/50 dark:to-gray-600/50 dark:text-gray-200 @endif">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{ ucfirst($course->category) }}
                                </span>
                                <span
                                    class="text-xs font-medium px-3 py-1 bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-300 rounded-full border border-gray-200 dark:border-gray-600">
                                    {{ ucfirst($course->platform) }}
                                </span>
                            </div>

                            <!-- Course Name -->
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-3 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                {{ $course->name }}
                            </h3>

                            <!-- Payment Info -->
                            <div class="space-y-4 mb-6">
                                <div
                                    class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                                    <span
                                        class="text-gray-500 dark:text-gray-400 text-sm font-medium">Investment</span>
                                    <span
                                        class="text-2xl font-bold bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">
                                        ${{ number_format($course->payment, 2) }}
                                    </span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-500 dark:text-gray-400 text-sm">Date payment</span>
                                    <div
                                        class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                        <svg class="w-4 h-4 mr-1 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ $course->payment_date->format('M d, Y') }}
                                    </div>
                                </div>
                            </div>

                            <!-- Note -->
                            @if ($course->note)
                                <div
                                    class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border-l-4 border-blue-500 mb-4">
                                    <p class="text-gray-700 dark:text-gray-300 text-sm line-clamp-2">
                                        {{ $course->note }}</p>
                                </div>
                            @endif

                            <!-- Progress Bar (Visual Enhancement) -->
                            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                <div
                                    class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400 mb-2">
                                    <span>Course Progress</span>
                                    <span>{{ rand(20, 95) }}%</span>
                                </div>
                                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-2 rounded-full transition-all duration-500"
                                        style="width: {{ rand(20, 95) }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.app>
