<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(): View
    {
        $softwarecourses=Course::where('category','software')->count();
        $managementecourses=Course::where('category','Management')->count();
        $developementcourses=Course::where('category','Development')->count();
        $othercourses=Course::whereNotIn('category',['software','hardware','networking'])->count();
        $totalcourses=Course::count();

        $totalexpenses=DB::table('courses')->sum('payment');

        $softwareExpenses=DB::table('courses')
        ->where('category', 'software')
        ->sum('payment');

        $managementExpenses=DB::table('courses')
        ->where('category', 'Management')
        ->sum('payment');

        $developmentExpenses=DB::table('courses')
        ->where('category', 'Development')
        ->sum('payment');

        $otherExpenses=DB::table('courses')
        ->whereNotIn('category',['software','hardware','networking'])
        ->sum('payment');

       // dd($otherExpenses,$developmentExpenses,$managementExpenses,$softwareExpenses);
        // Get recent coursess
        $recentcoursess = Course::with('user')
            ->latest()
            ->limit(3)
            ->get();



        return view('dashboard', compact(
            'softwarecourses',
            'managementecourses',
            'developementcourses',
            'othercourses',
            'totalcourses',
            'totalexpenses',
            'softwareExpenses',
            'managementExpenses',
            'developmentExpenses',
            'otherExpenses',
            'recentcoursess',


        ));
    }
}
