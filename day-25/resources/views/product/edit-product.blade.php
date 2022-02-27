@extends('master')
@section('title')
    Edit Student Page
@endsection()
@section('body')
    <section class="py-5 bg-info h-550">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center font-weight-bolder text-uppercase">Edit Student Form</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('edit-product',['id' =>$product->id])}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-3">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" value="{{$product->name}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Category</label>
                                <div class="col-md-9">
                                    <input type="text" name="category" value="{{$product->category}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="brand"  value="{{$product->brand}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input type="number" name="price" value="{{$product->price}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Product Description :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" value="{{$product->description}}" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" value="{{$product->image}}"class="form-control-file"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-outline-success" name="submit-btn" value="Create New Prouct"/></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


