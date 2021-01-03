@extends('layouts.provider.master')
@section('title', 'Comment List')
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
                <h4 class="pull-left page-title">List Of comment</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('provider.dashboard')}}">Dashboard</a></li>
                    <li class="active">Comment List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">comment List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center">SL#</th>
                            <th class="text-center">Service Title</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center">Comment</th>
                            <th class="text-center" style="width: 15%">Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($comments as $key=>$comment)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$comment->service->title}}</td>
                                <td>{{$comment->user->name}}</td>
                                <td>{{$comment->comment}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('provider.commentReplay', $comment->id)}}">Replay</a>
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('provider.order') }}">
                                        @csrf
                                        <input type="hidden" name="service_id" value="{{$comment->service_id}}">
                                        <input type="hidden" name="user_id" value="{{$comment->user_id}}">
                                        <button class="btn btn-info" onclick="return confirm('Are you confirm?')">Confirm</button>
                                    </form>
                                </td>
                                {{--<td class="d-flex">
                                    <a class="btn btn-info d-inline-block" href="{{ route('provider.service.show', $service->id) }}">Show</a>
                                    <a class="btn btn-info d-inline-block" href="{{ route('provider.service.edit', $service->id) }}">Edit</a>
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('provider.service.destroy', $service->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you confirm to delete?')">Delete</button>
                                    </form>
                                </td>--}}
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
