@extends('layouts.memberApp')
@section('content')
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('update-product-part') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input class="form-control" name="pro_name" type="text" value="{{ $products->pro_name }}">
                    <input class="form-control" name="pro_price" type="text" value="{{ $products->pro_price }}">
                    <input name="id" type="hidden" value="{{ $products->id }}">
                    <select name="cat_id">
                        @foreach ($categaries as $category)
                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                        @endforeach
                    </select>
                    <br>

                    <div class="form-group">
                        <input type="file" id="dropify" accept="image/x-png,image/gif,image/jpeg" name="image">
                    </div>
                    <input type="submit" class="btn btn-success" value="UPDATE">
                    <a href="product-all" class="btn btn-warning">CANCEL</a>
                </form>
            </div>
        </div>
    </div>
    @endsecion
