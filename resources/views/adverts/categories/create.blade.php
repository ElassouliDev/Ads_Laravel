@extends('layouts.app')

@section('content')

  <h2> Create advert category  <a href="{{route('advert.category.index')}}" class="btn btn-primary">All Category</a></h2>
    <form method="post" action="{{route('advert.category.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Type</label>
            <input type="text" name="type" class="form-control">
        </div>
        <div class="form-group">
            <label for="Width">Width</label>
            <input type="number"  name="width" class="form-control" placeholder="Width">
        </div>
        <div class="form-group">
            <label for="Height">Height</label>
            <input type="number"  name="height" class="form-control" placeholder="Height">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
