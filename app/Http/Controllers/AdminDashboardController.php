<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $memberCount = User::count();
        $feesCount = Fee::count();
        $totalEarn = Fee::sum('amount');
        $totalEarnByMonth = Fee::selectRaw('SUM(amount) as total_earn, YEAR(date) as year, MONTH(date) as month')
            ->groupBy('year', 'month')
            ->get();

        return view('admin.dashboard', compact('memberCount', 'feesCount', 'totalEarn', 'totalEarnByMonth'));
    }
}
