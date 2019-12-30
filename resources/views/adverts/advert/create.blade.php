@extends('layouts.app')

@section('content')

    <h2> Create advert  <a href="{{route('advert.index')}}" class="btn btn-primary">All Ads</a>
    </h2>
    <form method="post" action="{{route('advert.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Alt</label>
            <input type="text" name="alt" class="form-control">
        </div>
        <div class="form-group">
            <label>Url Page</label>
            <input type="text" name="url" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-group" name="advert_category_id">
                <option> -- select category --</option>
                @foreach($advert_categories as $advert_category)
                    <option value="{{$advert_category->id}}"> {{$advert_category->type}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Active">Active</label>
            <input type="radio" name="active" value="1"> True
            <input type="radio" name="active" value="0"> False
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
