<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MonthlyOrdersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {

        $orders = Order::select('id', 'pickup_date')
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->pickup_date)->format('m');
        });

        $ordercount = [];
        $ordersum = [];
        $orderArr = [];

        foreach ($orders as $key => $value) {
            $ordercount[(int)$key] = count($value);
        }
        // dd($ordercount);
        $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // sum
        $sums = Order::select('id', 'weight', 'pickup_date',
            DB::raw("(sum(weight)) as weight"),
            DB::raw("(DATE_FORMAT(pickup_date, '%m')) as month")
        )
            ->whereYear('pickup_date', Carbon::now()->format('Y'))
            ->groupBy(DB::raw("DATE_FORMAT(pickup_date, '%m')"))
            ->get();
        // dd($sums);


        foreach ($sums as $key => $value) {
            $ordersum[(int)$value['month']] = ['weight' => $value['weight']];
        }
        // dd($ordersum);

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($ordersum[$i]['weight']) && !empty($ordercount[$i])) {
                $orderArr[$i]['count'] = $ordercount[$i];
                $orderArr[$i]['sum'] = $ordersum[$i]['weight'];
            } else {
                $orderArr[$i]['sum'] = 0;
                $orderArr[$i]['count'] = 0;
            }
            $orderArr[$i]['month'] = $month[$i - 1];
        }

        // dd($orderArr);
        //end sum

        return $this->chart->barChart()
            ->addData('Orders', [$orderArr[1]['count'], $orderArr[2]['count'], $orderArr[3]['count'], $orderArr[4]['count'], $orderArr[5]['count'], $orderArr[6]['count'], $orderArr[7]['count'], $orderArr[8]['count'], $orderArr[9]['count'], $orderArr[10]['count'], $orderArr[11]['count'], $orderArr[12]['count']])
            ->addData('Weight (kg)', [$orderArr[1]['sum'], $orderArr[2]['sum'], $orderArr[3]['sum'], $orderArr[4]['sum'], $orderArr[5]['sum'], $orderArr[6]['sum'], $orderArr[7]['sum'], $orderArr[8]['sum'], $orderArr[9]['sum'], $orderArr[10]['sum'], $orderArr[11]['sum'], $orderArr[12]['sum']])
            ->setXAxis([$orderArr[1]['month'], $orderArr[2]['month'], $orderArr[3]['month'], $orderArr[4]['month'], $orderArr[5]['month'], $orderArr[6]['month'], $orderArr[7]['month'], $orderArr[8]['month'], $orderArr[9]['month'], $orderArr[10]['month'], $orderArr[11]['month'], $orderArr[12]['month']])
            ->setColors(['#84cc16', '#4f46e5'])
            ->setFontFamily('Inter')
            ->setGrid();
    }
}
