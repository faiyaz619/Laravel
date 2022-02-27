@extends('master')
@section('title')
    Add blog
@endsection
@section('body')
    <section class="py-5 bg-info h-550" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center font-weight-bolder text-uppercase">Add New BLOG</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('new-blog')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Blog Title  :</label>
                                <div class="col-md-9">

                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Author Name :</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Blog Description :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description"/></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create New Blog"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
