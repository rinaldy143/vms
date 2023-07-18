@extends('layouts.master')

@section('content')


<div class="container">
    <div class="content mb-10">
        <div class="heading-3">Dashboard</div>
        <br>
        <div class="d-flex flex-row">
            <div class="flex-column">
                <div class="card" style="width: 500px; height: 500px; margin-right: 40px">
                    <div class="card-body">
                        <div class="heading-4">Report Maintenances</div>
                        <hr>
                        <!-- Tambahkan elemen canvas untuk menggambar diagram garis -->
                        <canvas id="lineChart" width="350" height="300"></canvas>
                        {{-- <img class="card-img" src="img/Group 2283.png" alt=""> --}}
                    </div>
                </div>
            </div>
            <div class="flex-column">
                <div class="card" style="width: 500px; height: 500px">
                    <div class="card-body">
                        <div class="heading-4">Total Users : {{$totaluser}}</div>
                        <hr>
                        <div class="chart-container">
                            {{-- <img class="card-img" src="img/Frame 2282.png" alt=""> --}}
                            <canvas id="myPieChart" width="350" height="350"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="flex-column" style="margin-right: 40px">

                <div class="mt-10">
                    <div class="flex-column">
                        <div class="card w-100 h-300px position-relative">
                            <div class="heading-4 mt-10" style="margin-left: 40px">Report Vehicle</div>
                            <div style="position: absolute; right: 40px; top: 45px;">
                                <a href="/list-maintenance">
                                    <img src="img/Stroke-1.svg" alt="Image">
                                </a>
                                                            </div>
                            <div class="d-flex" style="margin-left: 40px">
                                <div class="d-flex flex-column" style="margin-top: 42px">
                                    <div class="d-flex align-items-center">
                                        <h1 style="color: #EF3434; font-size: 48px">{{$totalvehicle}}</h1>
                                        <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Vehicle</p>
                                    </div>
                                </div>
                                <div style="border: 1px solid #CFCCCC; margin-left: 60px; margin-top: 24px"></div>
                                <div class="w-100" style="margin-top: 24px; margin-left:40px">
                                    <h1 class="w-75" style="font-size: 16px; line-height: 24px">vehicles that require approval</h1>
                                    <div style="border: 1px solid #CFCCCC; width: 95%; margin-top:7px;"></div>
                                    <table class="table">
                                        @if ($rm->count())

                                        <tbody>
                                            <tr>
                                                <th class="col-2">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">plat number</h1>
                                                    </div>
                                                </th>
                                                <th class="col-4">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">Tipe</h1>
                                                    </div>
                                                </th>
                                                <th class="col-4">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">Priority</h1>
                                                    </div>
                                                </th>
                                            </tr>

                                            @foreach($rm as $item)
                                            <tr>
                                                <td>{{ $item->Vehicle->plat_number}}</td>
                                                <td>{{ $item->Vehicle->TypeVehicle->vehicle_type }}</td>
                                                <td>{{ $item->priority }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        @else
                                        <h3 class="text-success">
                                            there are currently no vehicles that require approval
                                        </h3>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <div class="flex-column">
                        <div class="card w-100 h-300px position-relative">
                            <div class="heading-4 mt-10" style="margin-left: 40px">Stock Spareparts</div>
                            <div style="position: absolute; right: 40px; top: 45px;">
                                <a href="/spareparts">
                                    <img src="img/Stroke-1.svg" alt="Image">
                                </a>
                                                            </div>
                            <div class="d-flex" style="margin-left: 40px">
                                <div class="d-flex flex-column" style="margin-top: 42px">
                                    <div class="d-flex align-items-center">
                                        <h1 style="color: #EF3434; font-size: 48px">{{$totalsparepart}}</h1>
                                        <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Sparepart</p>
                                    </div>
                                </div>
                                <div style="border: 1px solid #CFCCCC; margin-left: 60px; margin-top: 24px"></div>
                                <div class="w-100" style="margin-top: 24px; margin-left:40px">
                                    <h1 class="w-75" style="font-size: 16px; line-height: 24px">Sparepart will need restock</h1>
                                    <div style="border: 1px solid #CFCCCC; width: 95%; margin-top:7px;"></div>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th class="col-2">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">ID</h1>
                                                    </div>
                                                </th>
                                                <th class="col-4">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">Name</h1>
                                                    </div>
                                                </th>
                                                <th class="col-4">
                                                    <div class="d-flex">
                                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">stock</h1>
                                                        <div style="margin-left: 9px">
                                                            <img src="img/panahbawah.svg" alt="">
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                            @foreach($sparepart as $item)
                                            <tr>
                                                <td>{{ $item->id_sparepart}}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->count }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .chart-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Data dari hasil query (misalkan telah diberikan nilai berikut)
        var data = @json($users);

        // Ambil elemen canvas untuk menggambar pie chart
        var ctx = document.getElementById('myPieChart').getContext('2d');

        // Pisahkan label dan data dari data hasil query
        var labels = Object.keys(data);
        var values = Object.values(data);

        // Konfigurasi data untuk pie chart
        var pieData = {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    // Tambahkan warna lain sesuai jumlah data yang dihasilkan
                ],
                borderWidth: 1
            }]
        };

        // Konfigurasi opsi untuk pie chart
        var pieOptions = {
            responsive: false,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom'
            },
            title: {
                display: true,
                text: 'Jumlah Pengguna per Peran'
            }
        };

        // Gambar pie chart
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    </script>



<script type="text/javascript">

    var labels =  {{ Js::from($labelsJSON) }};
    var users =  {{ Js::from($dataJSON) }};

    const datas = {
        labels: labels,
        datasets: [{
            label: 'Finish',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };

    const config = {
        type: 'line',
        data: datas,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('lineChart'),
        config
    );

</script>

@endsection

