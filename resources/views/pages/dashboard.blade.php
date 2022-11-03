@extends('layouts.master')

@section('content')
<div class="content mb-10">
    <div class="heading-3">Dashboard</div>
    <br>
    <div class="d-flex flex-row">
        <div class="flex-column">
            <div class="card" style="width: 450px; height: 383px; margin-right: 40px">
                <div class="card-body">
                    <div class="heading-4">Report Maintenances</div>
                    <hr>
                    <img class="card-img" src="img/Group 2283.png" alt="">
                </div>
            </div>
        </div>
        <div class="flex-column">
            <div class="card" style="width: 500px; height: 383px">
                <div class="card-body">
                    <div class="heading-4">Users</div>
                    <hr>
                    <img class="card-img" src="img/Frame 2282.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-row">
        <div class="flex-column">
            <div class="d-flex flex-row mt-10">
                <div class="flex-column">
                    <div class="card w-700px h-300px">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Report Vehicles</div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row mt-10">
                <div class="flex-column">
                    <div class="card w-700px h-300px">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Stock Spareparts</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-column">
            <div class="d-flex flex-row mt-10 me-10 mx-10">
                <div class="flex-column">
                    <div class="card w-300px h-630px">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Stock Spareparts</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
