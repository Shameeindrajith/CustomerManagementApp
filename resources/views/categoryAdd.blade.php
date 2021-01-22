@extends('layouts.memberApp')

@section('content')
    <br><br><br>
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <h1>Add Category</h1>
                <form method="post" action="save-category">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="cat_name" placeholder="Enter category name">
                    <br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                </form>
            </div>
        </div>
    </div>
@endsection
