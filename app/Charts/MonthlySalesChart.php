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
        
            // ->setTitle('Sales Overview.')
            // ->setSubtitle('Wins during season 2021.')
            // ->addData('Sales', purshasesmodel::query()->limit(6)->pluck('pur_date')->toArray())
            
            $totalSales = productmodel::select(DB::raw('MONTH(purchases.pur_date) AS Month, SUM(price * qty) AS Total_Sales'))
            ->join('purchases', 'purchases.pro_id', '=', 'product.proID')
            ->whereMonth('purchases.pur_date', '=', 4)
            ->groupBy(DB::raw('MONTH(purchases.pur_date)'))
            ->get();

        $data = [];
        foreach ($totalSales as $sale) {
            $data[] = [
                'name' => 'Month ' . $sale->Month,
                'y' => $sale->Total_Sales,
            ];
        }
        
        // $chart = new BarChart();
        return $this->chart->barChart()
        ->setTitle('Monthly Sales')
        ->addData('Sales', $data)
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
        // $chart->addYAxis('y', 'Sales');

        return $chart;
    }
}
