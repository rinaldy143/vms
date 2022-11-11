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
                    <div class="card w-700px h-300px position-relative">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Report Vehicles</div>
                        <div style="position: absolute; right: 40px; top: 45px;">
                            <img src="img/Stroke-1.svg" alt="">
                        </div>
                        <div class="d-flex" style="margin-left: 40px">
                            <div class="d-flex flex-column" style="margin-top: 42px"> 
                                <div class="d-flex align-items-center">
                                    <h1 style="color: #EF3434; font-size: 48px">100</h1>
                                    <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Vehicles</p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 24px">
                                    <h1 style="color: #EF3434; font-size: 48px">40</h1>
                                    <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Trailer</p>
                                </div>
                            </div>
                            <div style="border: 1px solid #CFCCCC; margin-left: 60px; margin-top: 24px"></div>
                            <div class="" style="margin-top: 24px; margin-left:40px">
                                <div class="d-flex align-items-start">
                                    <h1 class="w-75" style="font-size: 16px; line-height: 24px">Vehicle will be repaired in the nearest</h1>
                                    <p class="fw-bold" style="color: #EF3434; font-size: 16px; margin-left: 20px">20 Oct</p>
                                </div>
                                <div style="border: 1px solid #CFCCCC; width: 355px; margin-top:7px;"></div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>D 1234 ABC</th>
                                            <th>Grand Max</th>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>T-01</th>
                                            <th>Tridem Axle 40FT</th>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>T-01</th>
                                            <th>Tridem Axle 40FT</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row mt-10">
                <div class="flex-column">
                    <div class="card w-700px h-300px position-relative">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Stock Spareparts</div>
                        <div style="position: absolute; right: 40px; top: 45px;">
                            <img src="img/Stroke-1.svg" alt="">
                        </div>
                        <div class="d-flex" style="margin-left: 40px">
                            <div class="d-flex flex-column" style="margin-top: 42px"> 
                                <div class="d-flex align-items-center">
                                    <h1 style="color: #EF3434; font-size: 48px">1200</h1>
                                    <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Sparepart</p>
                                </div>
                                <div class="d-flex align-items-center" style="margin-top: 24px">
                                    <h1 style="color: #EF3434; font-size: 48px">20</h1>
                                    <p class="fw-bold" style="font-size: 16px; margin-left: 24px">Type Sparepart</p>
                                </div>
                            </div>
                            <div style="border: 1px solid #CFCCCC; margin-left: 60px; margin-top: 24px"></div>
                            <div class="" style="margin-top: 24px; margin-left:40px">
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <h1 style="font-size: 16px; line-height: 24px; color: #EF3434;">Low Stock</h1>
                                        <div style="margin-left: 9px">
                                            <img src="img/panahbawah.svg" alt="">
                                        </div>
                                    </div>
                                    <div class="d-flex" style="margin-left: 65px">
                                        <h1 style="font-size: 16px; line-height: 24px; color: #2FA841;">Most Request</h1>
                                        <div style="margin-left: 9px">
                                            <img src="img/panahatas.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div style="border: 1px solid #CFCCCC; width: 315px;margin-top:7px"></div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>D 1234 ABC</th>
                                            <th>Grand Max</th>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>T-01</th>
                                            <th>Tridem Axle 40FT</th>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>T-01</th>
                                            <th>Tridem Axle 40FT</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-column">
            <div class="d-flex flex-row mt-10 me-10 mx-10">
                <div class="flex-column">
                    <div class="card w-300px h-630px">
                        <div class="heading-4 mt-10" style="margin-left: 40px">Activities</div>
                        <p style="margin-left: 40px; margin-top: 16px">20 oct</p>
                        <div style="border: 1px solid #CFCCCC;margin-left: 40px; margin-right: 40px"></div>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 24px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 16px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 16px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 16px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <div class="position-relative" style="transform: rotate(90deg);top: -85px ">
                            <div style="border: 1px solid #000000;position: relative;top: 125px; width: 46px"></div>
                            <div style="border: 1px solid #CFCCCC;position: relative;left: 45px;top: 123px; width: 430px"></div>
                        </div>
                        <div>
                            <p style="margin-left: 40px; margin-top: 16px">20 oct</p>
                            <div style="border: 1px solid #CFCCCC;margin-left: 40px; margin-right: 40px"></div>
                        </div>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 24px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 16px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                        <h1 class="w-75 fw-normal" style="font-size: 16px;margin-left: 40px;margin-top: 16px">Iaculis morbi nulla vel mattis mauris aliquam a.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
