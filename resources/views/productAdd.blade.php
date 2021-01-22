@extends('layouts.memberApp')
@section('content')
    <br><br><br><br>
    <div class="text-center">
        <div class="row">

            <div class="col-12">
                <h1>Add Product</h1>
                <form method="post" action="save-product" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="pro_name" placeholder="Enter product name"><br>
                    <input type="text" class="form-control" name="pro_price" placeholder="Enter product price"><br>

                    <select name="cat_id">
                        @foreach ($categaries as $category)
                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                        @endforeach
                    </select>
                    <br>

                    <div class="form-group">
                        <input type="file" id="dropify" accept="image/x-png,image/gif,image/jpeg" name="image">
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                </form>
            </div>
        </div>
    </div>
@endsection
