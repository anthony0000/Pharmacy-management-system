@extends('admin.layouts.app')

<x-assets.datatables />

@push('page-css')
    <link rel="stylesheet" href="{{asset('assets/plugins/chart.js/Chart.min.css')}}">
    <style>
        .dashboard-card{
            border: none;
            border-radius: 0px !important;
            cursor: pointer;
            transition: all .3s ease
        }
        .dashboard-card:hover{
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.098)
        }
    </style>
@endpush

@push('page-header')
<div class="col-sm-12">
	<h3 class="page-title" style="font-weight: bolder; color: rgb(96, 96, 96)">Welcome {{auth()->user()->name}}!</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item active">Dashboard</li>
	</ul>
</div>
@endpush

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body dashboard-card">
                <div class="dash-widget-header d-flex justify-content-center">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fe fe-money"></i>
                    </span>
                </div>
                <div class="dash-count text-center">
                    <h3>{{AppSettings::get('app_currency', '$')}} {{$today_sales}}</h3>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted text-center">Today Sales Cash</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body dashboard-card">
                <div class="dash-widget-header d-flex justify-content-center">
                    <span class="dash-widget-icon text-success">
                        <i class="fe fe-credit-card"></i>
                    </span>
                </div>
                <div class="dash-count text-center">
                    <h3>{{$total_categories}}</h3>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted text-center">Product Categories</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body dashboard-card">
                <div class="dash-widget-header d-flex justify-content-center">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fe fe-folder"></i>
                    </span>
                </div>
                <div class="dash-count text-center">
                    <h3>{{$total_expired_products}}</h3>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted text-center">Expired Products</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body dashboard-card">
                <div class="dash-widget-header d-flex justify-content-center">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fe fe-users"></i>
                    </span>
                </div>
                <div class="dash-count text-center">
                    <h3>{{\DB::table('users')->count()}}</h3>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted text-center">System Users</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6">
        <div class="card card-table p-3">
            <div class="card-header">
                <h4 class="card-title ">Today Sales</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sales-table" class="datatable table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>Medicine</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                                                                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-6">
                    
        <!-- Pie Chart -->
        <div class="card card-chart">
            <div class="card-header">
                <h4 class="card-title text-center">Resources</h4>
            </div>
            <div class="card-body">
                <div style="">
                    {!! $pieChart->render() !!}
                </div>
            </div>
        </div>
        <!-- /Pie Chart -->
        
    </div>	
    
    
</div>

@endsection

@push('page-js')
<script>
    $(document).ready(function() {
        var table = $('#sales-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('sales.index')}}",
            columns: [
                {data: 'product', name: 'product'},
                {data: 'quantity', name: 'quantity'},
                {data: 'total_price', name: 'total_price'},
				{data: 'date', name: 'date'},
            ]
        });
        
    });
</script> 
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endpush