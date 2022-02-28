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
                        <div class="card-header bg-primary text-white text-uppercase text-center font-weight-bolder">All Product</div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <table class="table table-bordered table-dark table-hover">
                                <thead>
                                <tr class="font-weight-bolder text-white text-center text-uppercase ">
                                    <th>SL NO</th>
                                    <th>Prodcut ID</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Brand</th>
                                    <th>Product Price</th>
                                    <th>Product Decsription</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Products as $product)
                                    <tr class="text-justify">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->brand}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td><img src="{{asset($product->image)}}"  height="100px" width="100px" alt=""></td>
                                        <td>
                                            <a href="{{route('edit-product',['id'=> $product->id])}}" class="btn btn-success btn-sm "><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm float-right" onclick="deleteProduct({{$product->id}})"><i class="fa fa-trash"></i></a>
                                            <form action="{{route('delete-product',['id'=> $product->id])}}" id="deleteProductForm{{$product->id}}" method="POST">
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
    <script>
        function deleteProduct(id)
        {
            event.preventDefault();
            var check=confirm('Are you sure to delete this Product ?');
            if (check)
            {
                document.getElementById('deleteProductForm'+id).submit();
            }
        }

    </script>
@endsection
