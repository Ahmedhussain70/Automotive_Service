<?php

namespace App\Charts;

use Illuminate\Database\Eloquent\Model;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\purshasesmodel;
use App\Models\productmodel;
use Illuminate\Support\Facades\DB;

class MonthlySalesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {               
        // $totalSales = productmodel::select(DB::raw(' MONTH(purchases.pur_date) AS Month, SUM(price * qty) AS Total_Sales'))
        //     ->join('purchases', 'purchases.pro_id', '=', 'product.proID')
        //     ->groupBy(DB::raw('MONTH(purchases.pur_date)'))
        //     ->get();

        // $data = [];
        // $months = [];
        // foreach ($totalSales as $sale) {
        //     $data[] = $sale->Total_Sales;
        //     $months[] = 'Month ' . $sale->Month;
        // }
        
        // return $this->chart->barChart()
        // ->setTitle('Monthly Sales')
        // ->addData('Sales', $data)
        // ->setXAxis($months)
        // ->setColors(['#5D87FF']);

        // return $chart;
        $totalSales = productmodel::select(DB::raw(' 
        YEAR(purchases.pur_date) AS Year, 
        MONTH(purchases.pur_date) AS Month, 
        SUM(price * qty) AS Total_Sales'))
            ->join('purchases', 'purchases.pro_id', '=', 'product.proID')
            ->where(DB::raw('YEAR(purchases.pur_date)'), '=', date('Y'))
            ->groupBy(DB::raw('YEAR(purchases.pur_date), MONTH(purchases.pur_date)'))
            ->get();

        $data = [];
        $labels = [];
        foreach ($totalSales as $sale) {
            $data[] = $sale->Total_Sales;
            $labels[] ='Month'. $sale->Month;
        }

        return $this->chart->barChart()
            ->setTitle('Monthly Sales')
            ->addData('Sales', $data)
            ->setXAxis($labels)
            ->setColors(['#5D87FF']);

            return $chart;
    }
}
