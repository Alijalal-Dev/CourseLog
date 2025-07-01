<x-layouts.app>
    <!-- Header Section -->
    <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-700 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-full mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold tracking-tight mb-2">Edit course</h1>
                <p class="text-orange-100 text-lg">Update your course details</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-12">
        <div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden">
            <!-- Form Header -->
            <div class="bg-gray-50 px-8 py-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-2 bg-orange-100 rounded-lg mr-4">
                            <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900">Update course</h2>
                            <p class="text-gray-500 text-sm">Modify your course information</p>
                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium
                            @if($course->category === 'entertainment') bg-purple-100 text-purple-800
                            @elseif($course->category === 'utilities') bg-blue-100 text-blue-800
                            @elseif($course->category === 'software') bg-green-100 text-green-800
                            @elseif($course->category === 'streaming') bg-red-100 text-red-800
                            @else bg-gray-100 text-gray-800
                            @endif">
                            {{ ucfirst($course->category) }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <form action="{{ route('courses.update', $course) }}" method="POST" class="p-8">
                @csrf
                @method('PUT')

                <div class="space-y-8">
                    <!-- Service Information Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <div class="w-2 h-6 bg-orange-600 rounded-full mr-3"></div>
                            Service Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Service Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           value="{{ old('name', $course->name) }}"
                                           placeholder="e.g., Netflix, Spotify, Adobe Creative Cloud"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors @error('name') border-red-300 @enderror">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Category <span class="text-red-500">*</span>
                                </label>
                                <select name="category"
                                        id="category"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors @error('category') border-red-300 @enderror">
                                    <option value="">Select a category</option>
                                    <option value="Software" {{ old('category', $course->category) == 'Software' ? 'selected' : '' }}>Software</option>
                                    <option value="Hardware" {{ old('category', $course->category) == 'Hardware' ? 'selected' : '' }}>Hardware</option>
                                    <option value="Maths" {{ old('category', $course->category) == 'Maths' ? 'selected' : '' }}>Maths</option>
                                    <option value="Economy" {{ old('category', $course->category) == 'Economy' ? 'selected' : '' }}>Economy</option>
                                </select>
                                @error('category')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="type" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Course Platform <span class="text-red-500">*</span>
                                </label>
                               <input type="text"
                                           name="platform"
                                           id="platform"
                                           value="{{ old('platform', $course->platform) }}"
                                           placeholder="e.g., Netflix, Spotify, Adobe Creative Cloud"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors @error('name') border-red-300 @enderror">
                                @error('platform')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Payment Information Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <div class="w-2 h-6 bg-green-600 rounded-full mr-3"></div>
                            Payment Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="payment" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Payment Amount <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">$</span>
                                    </div>
                                    <input type="number"
                                           step="0.01"
                                           name="payment"
                                           id="payment"
                                           value="{{ old('payment', $course->payment) }}"
                                           placeholder="0.00"
                                           class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors @error('payment') border-red-300 @enderror">
                                </div>
                                @error('payment')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="payment_date" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Next Payment Date <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="date"
                                           name="payment_date"
                                           id="payment_date"
                                           value="{{ old('payment_date', $course->payment_date->format('Y-m-d')) }}"
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors @error('payment_date') border-red-300 @enderror">
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('payment_date')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <div class="w-2 h-6 bg-purple-600 rounded-full mr-3"></div>
                            Additional Information
                        </h3>
                        <div>
                            <label for="note" class="block text-sm font-semibold text-gray-700 mb-2">
                                Notes
                                <span class="text-sm font-normal text-gray-500">(Optional)</span>
                            </label>
                            <div class="relative">
                                <textarea name="note"
                                          id="note"
                                          rows="4"
                                          placeholder="Add any additional notes about this course..."
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors resize-none @error('note') border-red-300 @enderror">{{ old('note', $course->note) }}</textarea>
                                <div class="absolute bottom-3 right-3">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </div>
                            </div>
                            @error('note')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-between pt-8 mt-8 border-t border-gray-200 space-y-4 sm:space-y-0">
                    <div class="text-sm text-gray-500">
                        <span class="text-red-500">*</span> Required fields
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('courses.index') }}"
                           class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Cancel
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transform hover:-translate-y-0.5 transition-all duration-200">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update course
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
