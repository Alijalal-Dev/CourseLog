<x-layouts.app>
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pb-12">
        <div class="bg-white rounded-2xl shadow-2xl border border-sky-100 overflow-hidden">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-sky-700 to-sky-600 px-8 py-8 border-b border-sky-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="p-3 bg-white/20 backdrop-blur-sm rounded-xl mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Edit Course</h2>
                            <p class="text-sky-100 text-sm mt-1">Update your course information</p>
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

                <div class="space-y-10">
                    <!-- Service Information Section -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            Service Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="category" class="block text-sm font-bold text-gray-700 mb-3">
                                    Category <span class="text-red-500">*</span>
                                </label>
                                <select name="category"
                                        id="category"
                                        class="w-full px-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 @error('category') border-red-300 @enderror bg-sky-50 hover:bg-sky-100 text-black">
                                    <option value="">Select a category</option>
                                    <option value="Software" {{ old('category', $course->category) == 'Software' ? 'selected' : '' }}>Software</option>
                                    <option value="Hardware" {{ old('category', $course->category) == 'Hardware' ? 'selected' : '' }}>Hardware</option>
                                    <option value="Maths" {{ old('category', $course->category) == 'Maths' ? 'selected' : '' }}>Maths</option>
                                    <option value="Economy" {{ old('category', $course->category) == 'Economy' ? 'selected' : '' }}>Economy</option>
                                </select>
                                @error('category')
                                    <p class="mt-3 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="platform" class="block text-sm font-bold text-gray-700 mb-3">
                                    Platform <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text"
                                           name="platform"
                                           id="platform"
                                           value="{{ old('platform', $course->platform) }}"
                                           placeholder="e.g., Udemy, Coursera, Khan Academy"
                                           class="w-full px-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 @error('platform') border-red-300 @enderror text-black bg-sky-50 hover:bg-sky-100">
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('platform')
                                    <p class="mt-3 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div class="md:col-span-2">
                                <label for="name" class="block text-sm font-bold text-gray-700 mb-3">
                                    Course Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           value="{{ old('name', $course->name) }}"
                                           placeholder="e.g., Complete Web Development Bootcamp, Advanced JavaScript"
                                           class="w-full px-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 @error('name') border-red-300 @enderror text-black bg-sky-50 hover:bg-sky-100">
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('name')
                                    <p class="mt-3 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
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
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            Payment Information
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="payment_date" class="block text-sm font-bold text-gray-700 mb-3">
                                    Payment Date <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <input type="date"
                                           name="payment_date"
                                           id="payment_date"
                                           value="{{ old('payment_date', $course->payment_date->format('Y-m-d')) }}"
                                           class="w-full px-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 @error('payment_date') border-red-300 @enderror bg-sky-50 hover:bg-sky-100 text-black">
                                </div>
                                @error('payment_date')
                                    <p class="mt-3 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <div>
                                <label for="payment" class="block text-sm font-bold text-gray-700 mb-3">
                                    Payment Amount <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <span class="text-sky-600 font-bold text-lg">$</span>
                                    </div>
                                    <input type="number"
                                           step="0.01"
                                           name="payment"
                                           id="payment"
                                           value="{{ old('payment', $course->payment) }}"
                                           placeholder="0.00"
                                           class="w-full pl-10 pr-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 @error('payment') border-red-300 @enderror bg-sky-50 hover:bg-sky-100 text-black">
                                </div>
                                @error('payment')
                                    <p class="mt-3 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
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
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            Additional Information
                        </h3>
                        <div>
                            <label for="note" class="block text-sm font-bold text-gray-700 mb-3">
                                Notes
                                <span class="text-sm font-normal text-gray-500">(Optional)</span>
                            </label>
                            <div class="relative">
                                <textarea name="note"
                                          id="note"
                                          rows="5"
                                          placeholder="Add any additional notes about this course..."
                                          class="w-full px-5 py-4 border-2 border-sky-200 rounded-xl shadow-sm focus:ring-3 focus:ring-sky-200 focus:border-sky-700 transition-all duration-300 resize-none @error('note') border-red-300 @enderror bg-sky-50 hover:bg-sky-100 text-black">{{ old('note', $course->note) }}</textarea>
                                <div class="absolute bottom-4 right-4">
                                    <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                    </svg>
                                </div>
                            </div>
                            @error('note')
                                <p class="mt-3 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-between pt-10 mt-10 border-t-2 border-sky-200 space-y-4 sm:space-y-0">
                    <div class="text-sm text-gray-500">
                        <span class="text-red-500">*</span> Required fields
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="{{ route('courses.index') }}"
                           class="inline-flex items-center px-8 py-4 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 hover:border-gray-400 focus:ring-3 focus:ring-gray-200 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Cancel
                        </a>
                        <button type="submit"
                                class="inline-flex items-center px-10 py-4 bg-gradient-to-r from-sky-700 to-sky-600 hover:from-sky-800 hover:to-sky-700 text-white font-bold rounded-xl shadow-xl hover:shadow-2xl focus:ring-3 focus:ring-sky-200 focus:ring-offset-2 transform hover:scale-105 transition-all duration-300">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Update Course
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Help Section -->
        <div class="mt-10 bg-gradient-to-r from-sky-50 to-sky-100 rounded-2xl p-8 border-2 border-sky-200 shadow-lg">
            <h3 class="text-xl font-bold text-gray-800 mb-5 flex items-center">
                <svg class="w-6 h-6 text-sky-700 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Quick Tips
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700">
                <div class="flex items-start">
                    <div class="w-3 h-3 bg-sky-400 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                    <p class="font-medium">Use descriptive names like "Complete JavaScript Course" instead of just "JavaScript"</p>
                </div>
                <div class="flex items-start">
                    <div class="w-3 h-3 bg-sky-400 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                    <p class="font-medium">Categories help you analyze your learning spending patterns</p>
                </div>
                <div class="flex items-start">
                    <div class="w-3 h-3 bg-sky-400 rounded-full mt-2 mr-4 flex-shrink-0"></div>
                    <p class="font-medium">Add notes for course details or completion goals</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
