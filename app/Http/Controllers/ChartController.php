<?php

namespace App\Http\Controllers;

use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\Sparepart;
use Illuminate\Http\Request;
use App\Models\Entity\User;
use App\Models\Entity\Vehicle;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function index()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), 'role')
        // ->whereYear('created_at', date('Y'))
        ->groupBy('role')
        ->orderBy('role', 'ASC')
        ->pluck('count', 'role');

        $totaluser = User::count();
        $totalsparepart = Sparepart::count();
        $totalvehicle = Vehicle::count();
        $sparepart = Sparepart::where('count', '<', 50)->get();
        $rm = RequestMaintenance::where('aprove_by', null)->get();
        // ->whereYear('created_at', date('Y'))

        // Mengambil data jumlah kendaraan yang sudah dimaintenance setiap bulan
        // $vehicleCounts = DB::table('request_maintenances')
        //     ->join('work_orders', 'request_maintenances.wo_id', '=', 'work_orders.id')
        //     ->whereNotNull('work_orders.photo')
        //     ->select(DB::raw("COUNT(*) as count"), DB::raw("DATE_FORMAT(request_maintenances.created_at, '%Y-%m') as month"))
        //     ->groupBy('month')
        //     ->orderBy('month', 'ASC')
        //     ->get();

        // // Inisialisasi array untuk data yang akan digunakan di Chart.js
        // $labels = [];
        // $data = [];

        // // Iterasi data kendaraan yang sudah dimaintenance setiap bulan
        // foreach ($vehicleCounts as $vehicle) {
        //     // Mendapatkan bulan dan tahun dari kolom 'month'
        //     list($year, $month) = explode('-', $vehicle->month);
        //     // Format bulan dan tahun menjadi 'Jan 2022', 'Feb 2022', dan seterusnya
        //     $labels[] = date('M Y', mktime(0, 0, 0, $month, 1, $year));
        //     // Jumlah kendaraan yang sudah dimaintenance pada bulan tersebut
        //     $data[] = $vehicle->count;
        // }

        // Query to get the count of maintenance for each month
// $vehicleCounts = DB::table('request_maintenances')
//     ->join('work_orders', 'request_maintenances.wo_id', '=', 'work_orders.id')
//     ->whereNotNull('work_orders.photo')
//     ->select(DB::raw("COUNT(*) as count"), DB::raw("DATE_FORMAT(request_maintenances.created_at, '%Y-%m') as month"))
//     ->groupBy('month')
//     ->orderBy('month', 'ASC')
//     ->get();

//         // Initialize arrays for data to be used in Chart.js
//         $labels = [];
//         $data = [];

//         // Variables to keep track of the current year and maintenance count for each year
//         $currentYear = null;
//         $maintenanceCount = 0;

//         // Iterating through the maintenance data for each month
//         foreach ($vehicleCounts as $vehicle) {
//             // Get the year and month from the 'month' column
//             list($year, $month) = explode('-', $vehicle->month);

//             // If the year changes, add the maintenance count for the current year to the data
//             if ($currentYear !== $year && $currentYear !== null) {
//                 $labels[] = $currentYear; // Add the year to the labels
//                 $data[] = $maintenanceCount; // Add the maintenance count for the current year to the data
//                 $maintenanceCount = 0; // Reset the maintenance count for the new year
//             }

//             // Accumulate the maintenance count for each month within the current year
//             $maintenanceCount += $vehicle->count;
//             $currentYear = $year; // Update the current year for the next iteration
//         }

//         // Add the last year and its maintenance count to the data
//         if ($currentYear !== null) {
//             $labels[] = $currentYear;
//             $data[] = $maintenanceCount;
//         }

//         // Convert data to JSON format for Chart.js
//         $labelsJSON = json_encode($labels);
//         $dataJSON = json_encode($data);


// dd($labelsJSON);
// Menggunakan Eloquent ORM untuk mengambil data dari model 'RequestMaintenance'
        // $vehicleCounts = RequestMaintenance::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        //     ->whereNotNull('work_orders.photo')
        //     ->whereYear('created_at', date('Y'))
        //     ->groupBy(DB::raw("month_name"))
        //     ->orderBy('id', 'ASC')
        //     ->pluck('count', 'month_name');
            // Menggunakan Eloquent ORM untuk mengambil data dari model 'RequestMaintenance'
        $vehicleCounts = RequestMaintenance::join('work_orders', 'request_maintenances.wo_id', '=', 'work_orders.id')
        ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(work_orders.updated_at) as month_name"))
        ->whereNotNull('work_orders.photo')
        ->whereYear('request_maintenances.created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('request_maintenances.id', 'ASC')
        ->pluck('count', 'month_name');


        // $vehicleCounts = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        // ->whereYear('created_at', date('Y'))
        // ->groupBy(DB::raw("month_name"))
        // ->orderBy('id','ASC')
        // ->pluck('count', 'month_name');

        $labelsJSON = $vehicleCounts->keys();
        $dataJSON = $vehicleCounts->values();

        // Konversi data ke format JSON untuk digunakan di Chart.js
        // $labelsJSON = json_encode($labels);
        // $dataJSON = json_encode($data);
        // $labelsJSON = $vehicleCounts->keys();
        // $dataJSON = $vehicleCounts->values();
        // dd($vehicleCounts);
        return view('pages.dashboard', compact('users','totaluser','sparepart','totalsparepart','totalvehicle','rm','labelsJSON','dataJSON'));
    }
}
