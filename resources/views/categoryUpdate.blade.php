@extends('layouts.memberApp')
@section('content')
    <br><br><br><br>
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('update-category-part') }}" method="post">
                    {{ csrf_field() }}
                    <input class="form-control" name="cat_name" type="text" value="{{ $update_categories_data->cat_name }}">
                    <input name="id" type="hidden" value="{{ $update_categories_data->id }}">
                    <br>
                    <input type="submit" class="btn btn-success" value="UPDATE">
                    <a href="category-all" class="btn btn-warning">CANCEL</a>
                </form>
            </div>
        </div>
    </div>

@endsection
