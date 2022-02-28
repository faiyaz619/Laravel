@extends('master')
@section('title')
    Edit Student Page
@endsection()
@section('body')
    <section class="py-5 bg-info h-550">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card bg-dark text-white">
                    <div class="card-header text-center font-weight-bolder text-uppercase">Edit Product Details</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('update-product',['id' =>$product->id])}}" method="POST">
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
                                <label for="" class="col-md-3">Product Description:</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" value="" name="description">{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" value="{{asset($product->image)}}"class="form-control-file"/>
                                    <img src="{{asset($product->image)}}" width="100px" height="100px" alt="" class="pt-2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Update Product"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


