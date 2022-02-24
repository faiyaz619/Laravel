@extends('master')
@section('title')
    Manage Students
@endsection
@section('body')
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-dark text-white">
                        <div class="card-header bg-primary text-white text-uppercase text-center font-weight-bolder">All Student</div>
                        <div class="card-body">
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                <tr class="font-weight-bolder text-white text-center text-uppercase ">
                                    <th>SL NO</th>
                                    <th>Blog Title</th>
                                    <th>Author Name :</th>
                                    <th>Blog Description :</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr class="text-justify">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->author}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm "><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger btn-sm float-right"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

