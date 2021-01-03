@extends('layouts.admin.master')
@section('title', 'Service List')
@section('table_css')
    <!-- DataTables -->
    <link href="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/admin/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Service</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Service List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Service List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 7px">SL#</th>
                            <th class="text-center" >Title</th>
                            <th class="text-center" >Provider</th>
                            <th class="text-center " style="width: 30%">Description</th>
                            <th class="text-center" >Unit Price</th>
                            <th class="text-center" >Status</th>
                            <th class="text-center" style="width: 20%">Image</th>
                            <th class="text-center" style="width: 24%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td>{{$serial++ }}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->provider_id}}</td>
                                <td>{{$service->description}}</td>
                                <td>{{$service->unit_price}}</td>
                                <td>{{ucfirst($service->status)}}</td>
                                <td class="text-center">
                                    <div style="max-width: 70px; max-height:70px;overflow:hidden">
                                        <img src="{{ asset($service->image) }}" class="img-fluid img-rounded" alt="">
                                    </div>
                                </td>
                                <td class="d-flex">
                                    <a class="btn btn-success d-inline-block" href="{{ route('admin.service.show', $service->id) }}">Show</a>
                                    @if(!$service->is_approve)
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('admin.service.approve', $service->id) }}">
                                        @csrf
                                        @method('put')
                                        &nbsp;&nbsp;
                                        <button class="btn btn-warning" onclick="return confirm('Are you confirm to approve?')">Approve</button>
                                    </form>
                                    @else

                                        <form class="d-inline-block pull-right" method="post" action="{{ route('admin.service.unapprove', $service->id) }}">
                                            @csrf
                                            @method('put')
                                            &nbsp;
                                            <button class="btn btn-info" onclick="return confirm('Are you confirm to un approve?')">Un Approve</button>
                                        </form>
                                    @endif

                                    <form class="d-inline-block pull-right" method="post" action="{{ route('admin.service.destroy', $service->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you confirm to delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection

@section('table_script')
    <!-- Datatables-->
    <script src="{{asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/plugins/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('assets/admin/pages/datatables.init.js')}}"></script>

@endsection
