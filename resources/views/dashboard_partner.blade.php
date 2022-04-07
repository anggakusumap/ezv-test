@extends('layouts.admin_layout')

@section('title', 'Dashboard - EZV2')

@section('content_admin')
<header class="page-header page-header-dark bg-gradient-primary-to-secondary">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-3 mt-2">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        Today
                    </h1>
                    <div class="col-xxl-4 col-xl-12 mt-4">
                        <div class="card1">
                            <div class="card-body1">
                                <div class="col-12">
                                    <b class="text-primary" style="font-size: 14px;">Confirm Important
                                        Details</b>
                                    <p class="text-gray-600" style="font-size: 14px">Required to Publish</p>
                                    <p class="text-gray-600" style="font-size: 14px">Test Again Villa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main page content-->
<div class="container mt-10">
    <div class="row align-items-center justify-content-between">
        <h1 style="font-weight: bold; color: #000;">
            Your Reservation
        </h1>
        <h5 style="text-decoration: underline; color: #000;">All reservations(0)</h5>
    </div>
    <div class="row align-items-center justify-content-between">
        <ul class="ml-n5 mt-2">
            <li type="button" class="btn btn-light"
                style="color: #000; border-radius: 20px; border: 2px solid black; background-color:#fff;">Currently
                Hosting (0)</li>
            <li type="button" class="btn btn-light"
                style="color: #000; border-radius: 20px; border: 1px solid #DDDDDD; background-color:#fff;">Arriving
                Soon (0)</li>
            <li type="button" class="btn btn-light"
                style="color: #000; border-radius: 20px; border: 1px solid #DDDDDD; background-color:#fff;">Checking Out
                (0)</li>
            <li type="button" class="btn btn-light"
                style="color: #000; border-radius: 20px; border: 1px solid #DDDDDD; background-color:#fff;">Upcoming (0)
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-xxl-4 col-xl-12 mt-5 mb-4">
            <div class="card h-100">
                <div class="card-body2 ">
                    <center>
                        <p>
                            <i class="fa fa-edit" style="color: #000; font-size: 30px;" aria-hidden="true"></i>
                        </p>
                        <p class="text-gray-700 mb-0 mt-3">You don’t have any guests staying with you right
                            now..
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-header page-header-dark" style="background-color: #f7f7f7">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-3 mt-2">
                    <h1 style="font-weight:bold; color: #000">
                        Next step for you
                    </h1>
                    <div class="col-xxl-4 col-xl-12 mt-4">
                        <div class="card1">
                            <div class="card-body1">
                                <div class="col-12">
                                    <b class="text-primary" style="font-size: 14px;">Confirm Important
                                        Details</b>
                                    <p class="text-gray-600" style="font-size: 14px">Required to Publish</p>
                                    <p class="text-gray-600" style="font-size: 14px">Test Again Villa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')

@endsection
