<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $orders_count = DB::table('orders')->count();

        //Thống kê theo tháng
        $totals = Order::where('status', 0)->select(DB::raw("SUM(total_price) as sum"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('sum');
                    //dd($totals);
        $months = Order::where('status', 0)->select(DB::raw("Month(created_at) as month"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('month');
        $data = [0,0,0,0,0,0,0,0,0,0,0,0];
        $growthRate = 0;
        foreach ($months as $index => $month)
        {
            --$month;
            $data[$month] = $totals[$index];
            if ($month == 0)
            {
                $growthRate = 1;
            }
            else
            {
                $growthRate = $data[$month] / $data[$month - 1];
            }
        }
        $Jdata = json_encode($data);
        //$Jmonth = json_encode($havmonth, JSON_UNESCAPED_UNICODE);
        $Jmonth = json_encode($months);

        // Thống kê thoe ngày
        $totalsDay = Order::where('status', 0)->select(DB::raw("SUM(total_price) as sumDay"))
                    ->whereYear('created_at', date('Y'))->whereMonth('created_at', date('m'))
                    ->groupBy(DB::raw("Day(created_at)"))
                    ->pluck('sumDay');
                    //dd($totalsDay);
        $days = Order::where('status', 0)->select(DB::raw("Day(created_at) as day"))
                    ->whereMonth('created_at', date('m'))
                    ->groupBy(DB::raw("Day(created_at)"))
                    ->pluck('day');
                    //dd($days);
        $dataDay = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($days as $index => $day)
        {
            --$day;
            $dataDay[$day] = $totalsDay[$index];
            // if ($month == 0)
            // {
            //     $growthRate = 1;
            // }
            // else
            // {
            //     $growthRate = $data[$month] / $data[$month - 1];
            // }
        }
        //dd($dataDay);
        $JdataDay = json_encode($dataDay);
        $Jday = json_encode($days);
        //dd($Jday);

        return view('admin.index', compact('orders_count', 'Jdata', 'growthRate', 'Jmonth', 'JdataDay', 'Jday', ));


    }


}
