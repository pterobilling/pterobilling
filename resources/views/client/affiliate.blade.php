@extends('layouts.client')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>10</h3>
                    <p>Clicks</p>
                </div>
                <div class="icon">
                    <i class="far fa-hand-point-up"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>5</h3>
                    <p>Sign-ups</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>2</h3>
                    <p>Purchases</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>$10.00 USD</h3>
                    <p>Commissions</p>
                </div>
                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card col-12">
            <div class="card-body row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h5 class="card-title">Your Referral Link:</h5>
                    <a href="{{ config('app.url') }}/a/123456" class="float-right" target="_blank">{{ config('app.url') }}/a/123456</a>
                </div>
            </div>
        </div>
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">Your Earnings</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-default btn-sm float-right">View Credit Balance <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th style="width:5%">ID</th>
                            <th style="width:36%">Product</th>
                            <th style="width:12%">Commission</th>
                            <th style="width:12%">Conversion</th>
                            <th style="width:10%">Status</th>
                            <th style="width:25%">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</a></td>
                            <td>Server - Plan 1</td>
                            <td>$5.00 USD</td>
                            <td>50%</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>Jan 1, 2021 13:30 (UTC)</td>
                        </tr>
                        <tr>
                            <td>1</a></td>
                            <td>Server - Plan 1</td>
                            <td>$5.00 USD</td>
                            <td>50%</td>
                            <td><span class="badge bg-success">Accepted</span></td>
                            <td>Jan 1, 2021 13:30 (UTC)</td>
                        </tr>
                        <tr>
                            <td>1</a></td>
                            <td>Server - Plan 1</td>
                            <td>$10.00 USD</td>
                            <td>50%</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                            <td>Jan 1, 2021 13:30 (UTC)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection