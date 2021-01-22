@extends('layouts.memberApp')
@section('content')
    <br><br><br>

    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <h1>product</h1>
                <br>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Category</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Update</th>

                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->CategoryDetails->cat_name }}</td>
                            <td>{{ $product->pro_name }}</td>
                            <td>{{ $product->pro_price }}</td>
                            <td><img src="{{ asset('uploads/' . $product->images->name) }}" style="max-width:60px;">
                            </td>
                            <td>
                                <a href="delete-product/{{ $product->id }}" class="btn btn-danger">DELETE</a>
                            </td>
                            <td>
                                <a href="update-product/{{ $product->id }}" class="btn btn-warning">UPDATE</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <a href="add-product">Add New</a>
@endsection

@section('css')
    <style>
        #probtn {
            background-color: #B1E1EF !important;
        }

    </style>
@endsection
