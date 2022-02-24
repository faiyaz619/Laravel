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
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table class="table table-bordered table-dark table-hover">
                            <thead>
                            <tr class="font-weight-bolder text-white text-center text-uppercase ">
                                <th>SL NO</th>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Student Mobile</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                            <tr class="text-justify">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->mobile}}</td>
                                <td>
                                    <a href="{{route('edit-student',['id'=> $student->id])}}" class="btn btn-success btn-sm "><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger btn-sm float-right" onclick="event.preventDefault();document.getElementById('deleteStudentForm{{$student->id}}').submit();"><i class="fa fa-trash"></i></a>
                                    <form action="{{route('delete-student',['id'=> $student->id])}}" id="deleteStudentForm{{$student->id}}" method="POST">
                                        @csrf
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
    </div>
</section>
@endsection
