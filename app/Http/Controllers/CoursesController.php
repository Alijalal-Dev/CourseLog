<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CoursesController extends Controller
{
    public function index(): View
    {
        $courses = auth()->user()->courses()->latest()->get();
        return view('courses.index', compact('courses'));
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'platform' => 'required',
            'payment_date' => 'required|date',
            'note' => 'nullable|string',
            'payment' => 'required|numeric|min:0',
            'category' => 'required|string|max:255'
        ]);

        $validated['user_id'] = auth()->id();
        Course::create($validated);

        return redirect()->route('courses.index')
            ->with('success', 'course created successfully.');
    }

    public function edit(Course $course): View
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request,Course $course): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'platform' => 'required',
            'payment_date' => 'required|date',
            'note' => 'nullable|string',
            'payment' => 'required|numeric|min:0',
            'category' => 'required|string|max:255'
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')
            ->with('success', 'course updated successfully.');
    }

    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'course deleted successfully.');
    }
}
