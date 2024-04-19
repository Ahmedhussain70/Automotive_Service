<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\productmodel;
use Illuminate\Support\Facades\DB;

class YearlySalesChart
{
    protected $chart;

    public function __construct(LarapexChart $yearlySales)
    {
        $this->chart = $yearlySales;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        // return $this->chart->donutChart()
        $totalSales = productmodel::select(DB::raw('YEAR(purchases.pur_date) AS YEAR, SUM(price * qty) AS Total_Sales'))
        ->join('purchases', 'purchases.pro_id', '=', 'product.proID')
        ->groupBy(DB::raw('YEAR(purchases.pur_date)'))
        ->get();

    $year = [];
    $data = [];
    foreach ($totalSales as $sale) {
        $data[] = $sale->Total_Sales;
        $year[] = $sale->YEAR;
    }
    
    // $chart = new BarChart();
    return $this->chart->donutChart()
    ->addData($data)
    ->setLabels($year);
    // ->setColors(['#5D87FF']);
    // $chart->addYAxis('y', 'Sales');

    return $chart;
    }
}
