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
        
        // dd($data->map(fn ($data) => $data->date);

        $chart = Chartjs::build()
         ->name('barChartTest')
         ->type('bar')
         ->size(['width' => 400, 'height' => 200])
        //  ->labels($data->map(fn ($data) => $data->date))
         ->labels(['s','s','s','s','s','s'])
         ->datasets([
             [
                 "label" => "My First dataset",
                 'data' => $data->map(fn ($data) => $data->aggregate)
             ]
         ])
        //  ->datasets([
        //      [
        //          "label" => "My First dataset",
        //          'data' => [23,34,46,44,46,2]
        //      ],
        //      [
        //          "label" => "My Second dataset",
        //          'data' => [67,4,32,67,89,43]
        //      ]
        //  ])
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
