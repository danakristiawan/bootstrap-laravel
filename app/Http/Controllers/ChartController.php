<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class ChartController extends Controller
{
    public function index()
    {
        $data = User::selectRaw("strftime('%m', birth_date) as date, count (*) as aggregate")
        ->groupBy('date')
        ->get();
        
        $chart = Chartjs::build()
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
         ->labels($data->map(fn ($data) => $data->date)->toArray())
         ->datasets([
             [
                 "label" => "My First dataset",
                 'data' => $data->map(fn ($data) => $data->aggregate)->toArray()
             ],
             [
                 "label" => "My First dataset",
                 'data' => $data->map(fn ($data) => $data->aggregate)->toArray()
             ],
         ])
         ->options([
            "scales" => [
                "y" => [
                    "beginAtZero" => true
                    ]
                ]
         ]);

        return view('new_chart', compact('chart'));
    }
}
