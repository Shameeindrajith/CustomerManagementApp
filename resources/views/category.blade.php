@extends('layouts.memberApp')

@section('content')


    <br>
    <br><br>
    <div class="text-center">
        <div class="row">

            <div class="col-12">
                <h1>Category</h1>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Update</th>

                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->cat_name }}</td>
                            <td><a href="delete-category/{{ $category->id }}" class="btn btn-danger">DELETE</a></td>
                            <td><a href="update-category/{{ $category->id }}" class="btn btn-warning">UPDATE</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <a href="add-category">Add New</a>
@endsection

@section('css')
    <style>
        #catbtn {
            background-color: #B1E1EF !important;
        }

    </style>
@endsection
