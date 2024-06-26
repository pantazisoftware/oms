<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Akaunting\Apexcharts\Chart;
use App\Charts\MonthlyAdvanceIncome;
use App\Charts\MonthlyOrdersChart;
use App\Models\Order;
use Carbon\Carbon;

class AnalyticsController extends Controller
{
    //
    public function index(MonthlyOrdersChart $chart)
    {

    $totalOrders = Order::get()->count();
    $totalWeight = Order::get()->sum('weight');
    $totalClients = Order::distinct('phone')->count('phone');

    $currentWeekOrder = Order::where('created_at', '>', Carbon::now()->startOfWeek())
                                ->where('created_at', '<', Carbon::now()->endOfWeek())
                                ->get()->count();
    $totalWeekWeight = Order::where('created_at', '>', Carbon::now()->startOfWeek())
                                ->where('created_at', '<', Carbon::now()->endOfWeek())
                                ->get()->sum('weight');

    $pastWeekOrder = Order::where('created_at', '>', Carbon::now()->startOfWeek()->subWeek())
        ->where('created_at', '<', Carbon::now()->endOfWeek()->subWeek())
        ->get()->count();
    $pastWeekWeight = Order::where('created_at', '>', Carbon::now()->startOfWeek()->subWeek())
            ->where('created_at', '<', Carbon::now()->endOfWeek()->subWeek())
            ->get()->sum('weight');

        if ($pastWeekOrder == 0) {
            $pastWeekOrder++;
            $currentWeekOrder++;
        }

        $change = (($currentWeekOrder - $pastWeekOrder) / $pastWeekOrder) * 100;

        $change = round($change, 2);


        if ($pastWeekWeight == 0) {
            $pastWeekWeight++;
            $totalWeekWeight++;
        }

        $change2 = (($totalWeekWeight - $pastWeekWeight) / $pastWeekWeight) * 100;

        $change2 = round($change2, 2);
        $commonWeight = Order::select('weight')
            ->selectRaw('COUNT(*) AS count')
            ->groupBy('weight')
            ->orderByDesc('count')
            ->limit(1)
            ->get();
        return view('analytics', ['chart' => $chart->build(), 'commonWeight' => $commonWeight, 'currentWeekOrder' => $currentWeekOrder, 'totalWeekWeight' => $totalWeekWeight, 'pastWeekWeight' => $pastWeekWeight, 'pastWeekOrder' => $pastWeekOrder, 'change' => $change, 'changeWeight' => $change2, 'totalWeight' => $totalWeight, 'totalOrders' => $totalOrders, 'totalClients' => $totalClients]);
    }


    public function dashboard()
    {
        $data = Order::get();
        $events = [];
        foreach ($data as $order) {
            $events[] = [
                'title' => $order->name . " - " . $order->weight . " kg",
                'start' => $order->pickup_date,
            ];
        }
        $today = Order::whereDate('pickup_date', '=', Carbon::today());
        $upcoming7days = Order::whereBetween('pickup_date', [Carbon::today(), Carbon::today()->addDays(7)])->get();
        $allupcoming = Order::whereDate('pickup_date', '>=', Carbon::today());
        $last7days = Order::whereDate('created_at', '>', Carbon::now()->subDays(7))->get();
        //return view('dashboard', compact('events'));
        return view('dashboard', ['events' => $events, 'upcoming' => $upcoming7days, 'latest' => $last7days, 'today' => $today]);
    }
}
