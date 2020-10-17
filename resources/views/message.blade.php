@extends('layouts.app')

@section('content')
    <form action="" method="post" class="container">
        {{ csrf_field() }}

        <input type="text" name="title" class="form-control" placeholder="Title">
        <textarea name="body" id="" cols="30" rows="10" class="form-control" placeholder="Message...">

        </textarea>
        <input type="submit" value="Send" class="btn btn-primary">
    </form>
@endsection
