@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Available Blogs</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">New Blog</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif













                        <form>
                            <div class="form-group">
                                <input type="text" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                            </div>
                            <div class="form-group">
                                <textarea required class="form-control" id="exampleTextarea" rows="3">Blog Content</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">ADD BLOG</button>
                        </form>









                </div>
            </div>
        </div>
    </div>
</div>
@endsection
