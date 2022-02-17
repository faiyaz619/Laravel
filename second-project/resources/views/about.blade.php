@extends('master')

@section('title')
    About Page
@endsection

@section('body')
    <section class="py-5 bg-secondary ">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3>{{$product['name']}}</h3>
                            <span> TK .{{$product['price']}}</span>
                            <hr/>
                            <a href="{{route('detail',['id'=>$product['id']])}}" class="btn btn-outline-success"> Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
