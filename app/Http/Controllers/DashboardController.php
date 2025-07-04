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
        // Get courses statistics
        $coursesStats = [
            'total_coursess' => Course::count(),
            'total_users' => User::count(),
        ];


        // Get upcoming payments
        $upcomingPayments = Course::where('payment_date', '>=', now())
            ->where('payment_date', '<=', now()->addDays(30))
            ->orderBy('payment_date')
            ->get();



        // Get recent coursess
        $recentcoursess = Course::with('user')
            ->latest()
            ->limit(5)
            ->get();



        return view('dashboard', compact(
            'coursesStats',
            'upcomingPayments',
            'recentcoursess',
        ));
    }
}
