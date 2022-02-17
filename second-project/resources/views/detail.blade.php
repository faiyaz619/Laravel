@extends('master')
@section('title')
    Product-Details
@endsection

@section('body')
    <section class="py-5 bg-secondary ">
        <div class="container">
            <div class="row">
                    <div class="col-md-6">
                        <div class="card card-header">
                            <img src="{{$data['image']}}" alt="" class="card-img-top h-300"/>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card card-body">
                           <h3>{{$data['name']}}</h3>
                           <span> TK .{{$data['price']}}</span>
                           <p>{{$data['description']}}</p>
                            <hr/>
                            <button type="button" class="btn btn-outline-success">Add to cart</button>
                            <button type="button" class="btn btn-outline-danger">Remove from cart</button>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
