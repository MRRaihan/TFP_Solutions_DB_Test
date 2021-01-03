@extends('layouts.provider.master')
@section('title', 'Update Service')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Replay Comment</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Replay Comment</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Comment</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-2 control-label">User Name</label>
                            <div class="col-md-10">
                                <input value="{{$comment->user->name}}" name="title" type="text" id="title" class="form-control" placeholder="Service title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Comment</label>
                            <div class="col-md-10">
                                <input value="{{$comment->comment}}" name="title" type="text" id="title" class="form-control" placeholder="Service title">
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" action="{{route('provider.commentReplay', $comment->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="provider_id" value="{{$comment->provider_id}}">
                        <div class="form-group">
                            <label for="replay" class="col-md-2 control-label">Replay</label>
                            <div class="col-md-10">
                                <textarea name="replay" class="form-control" rows="5" placeholder="Replay here"></textarea>
                                @error('replay')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Replay</button>
                        </div>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
