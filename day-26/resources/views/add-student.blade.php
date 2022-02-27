@extends('master')
@section('title')
    Add Student Page
@endsection()
@section('body')
    <section class="py-5 bg-info h-550">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center font-weight-bolder text-uppercase">Add Student Form</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('new-student')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Name :</label>
                                <div class="col-md-9">

                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Email :</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3">Mobile :</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Create New Student"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

