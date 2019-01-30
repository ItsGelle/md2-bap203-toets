@extends('layouts.master')

@section('content')

    <form action="{{ route('handleForm') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="title"> <br> <br>
        @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
        @endif
        <input type="text" name="description" placeholder="description"> <br> <br>
        @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
        @endif
        <input type="text" name="url" placeholder="url"> <br> <br>
        @if($errors->has('url'))
            <p class="text-danger">{{$errors->first('url')}}</p>
        @endif
        <input type="submit" name="submit">
    </form>
    
@endsection