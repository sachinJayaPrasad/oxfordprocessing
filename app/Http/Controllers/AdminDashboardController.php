<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Service;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $statusCounts = Enquiry::query()
            ->selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('admin.dashboard', [
            'totalEnquiries' => Enquiry::count(),
            'newEnquiries' => $statusCounts['new'] ?? 0,
            'inProgressEnquiries' => $statusCounts['in_progress'] ?? 0,
            'respondedEnquiries' => $statusCounts['responded'] ?? 0,
            'closedEnquiries' => $statusCounts['closed'] ?? 0,
            'serviceCount' => Service::count(),
            'recentEnquiries' => Enquiry::query()->latest()->limit(5)->get(),
        ]);
    }
}
