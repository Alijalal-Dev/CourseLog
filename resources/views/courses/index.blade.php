<x-layouts.app>
    <!-- Header Section with Gradient Background -->
    <div class="bg-gradient-to-br bg-sky-50 via-sky-50 to-sky-50 text-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
                <div>
                    <h1 class="text-4xl font-bold tracking-tight text-sky-700">My Courses</h1>
                    <p class="text-indigo-100 mt-2 text-lg text-sky-600">Keep an eye on every Course and control your spending with ease</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('courses.create') }}"
                        class="inline-flex items-center px-6 py-3 bg-sky-700 hover:bg-sky-600 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Add New course
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-12">
        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4 mb-8">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-emerald-800 font-medium">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <!-- courses Grid -->
        @if ($courses->count() > 0)
            <!-- Table View for Desktop -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-semibold text-gray-900">Detailed View</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Course</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Platform</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Payment date</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Amount</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Category</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($courses as $course)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="font-semibold text-gray-900">{{ $course->name }}</div>
                                        @if ($course->note)
                                            <div class="text-sm text-gray-500 truncate max-w-xs">
                                                {{ $course->note }}</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                            {{ ucfirst($course->platform) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        {{ $course->payment_date->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-lg font-bold text-gray-900">
                                            ${{ number_format($course->payment, 2) }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                            @if ($course->category === 'Software') bg-purple-100 text-purple-800
                                            @elseif($course->category === 'Hardware') bg-blue-100 text-blue-800
                                            @elseif($course->category === 'Maths') bg-green-100 text-green-800
                                            @elseif($course->category === 'Economy') bg-red-100 text-red-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ ucfirst($course->category) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex items-center space-x-3">
                                            <a href="{{ route('courses.edit', $course) }}"
                                                class="text-indigo-600 hover:text-indigo-900 font-medium">Edit</a>

                                            <button type="submit" class="text-red-600 hover:text-red-900 font-medium"
                                                onclick="openDeleteModal({{ $course->id }})">
                                                Delete
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Delete Confirmation Modal -->
                    <div id="deleteModal" class="fixed inset-0 z-50 hidden items-center justify-center  bg-opacity-40">
                        <div class="bg-white rounded-xl shadow-xl max-w-md w-full p-6 text-center">
                            <h3 class="text-lg font-semibold mb-4 text-gray-900">Are you sure you want to delete?</h3>
                            <p class="text-gray-500 mb-6">This action cannot be undone.</p>
                            <form id="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="flex justify-center space-x-4">
                                    <button type="button" onclick="closeDeleteModal()"
                                        class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold">
                                        Cancel
                                    </button>
                                    <button type="submit"
                                        class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white font-semibold">
                                        Confirm Delete
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-12 text-center">

                <h3 class="text-xl font-semibold text-gray-900 mb-2">No courses yet</h3>
                <p class="text-gray-500 mb-6 max-w-md mx-auto">Start tracking your recurring payments by adding your
                    first course.</p>
                <a href="{{ route('courses.create') }}"
                    class="inline-flex items-center px-6 py-3 bg-sky-700 hover:bg-sky-600  text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Your First course
                </a>
            </div>
        @endif
    </div>
</x-layouts.app>
<script>
    function openDeleteModal(courseId) {
        const modal = document.getElementById('deleteModal');
        const form = document.getElementById('deleteForm');
        form.action = '/courses/' + courseId; // Adjust if your route prefix changes
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
</script>
