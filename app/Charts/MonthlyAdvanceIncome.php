<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use App\Models\Order;
use Carbon\Traits\Week;

class MonthlyAdvanceIncome
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        //dd(Order::whereDate('pickup_date', '=', Carbon::today())->get());
        return $this->chart->areaChart()
            ->addData([Order::whereDate('pickup_date', '=', Carbon::today())->get()])
            ->setXAxis(['days of this this week'])
            ->setFontFamily('Inter')
            ->setSparkline();
    }
}
