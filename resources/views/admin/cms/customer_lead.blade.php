@extends('admin.include.master')
@section('title', 'Customer Lead List')
@section('content')

<!-- Page Header -->
<div class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
    <div>
        <h4 class="fw-medium mb-2">Customer Lead</h4>
        <div class="ms-sm-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Customer Lead</a></li>
                    <li class="breadcrumb-item active fw-normal" aria-current="page">Customer Lead List</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="d-flex my-auto">
        <div class=" d-sm-flex right-page">
            <div class="d-flex justify-content-sm-center me-3 mb-3 mb-sm-0">
                <div class="">
                    <span class="d-block">
                        <span class="label ">EXPENSES</span>
                    </span>
                    <span class="value">
                        $53,000
                    </span>
                </div>
                <div class="ms-1 mt-1">
                    <!-- <span class="sparkline_bar"></span> -->
                    <span id="profit-bar1"></span>
                </div>
            </div>
            <div class="d-flex justify-content-sm-center">
                <div class="">
                    <span class="d-block">
                        <span class="label">PROFIT</span>
                    </span>
                    <span class="value">
                        $34,000
                    </span>
                </div>
                <div class="ms-1 mt-1">
                    <span id="profit-bar"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Close -->



<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">


       <!-- Start:: row-2 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        Customer Lead
                    </div>
                </div>
                <div class="card-body">

                    <table id="responsiveDataTable" class="table table-bordered text-nowrap mt-3" style="width:100%">
                        <<thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Conatct</th>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->contact }}</td>
                                <td>{{ $value->message }}</td>
                                <td>{{ convert_datetime_to_date_format($value->created_at, 'd M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->



    </div>
</div>
<!--APP-CONTENT CLOSE-->

@endsection

