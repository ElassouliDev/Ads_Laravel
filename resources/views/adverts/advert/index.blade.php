@extends('layouts.app')

@section('content')

    <h2> View list of Advert   <a href="{{route('advert.create')}}" class="btn btn-primary">create</a></h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">image</th>
            <th scope="col">Alt</th>
            <th scope="col">Link</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>


        @foreach($adverts  as $ad)
            <tr>
                <th scope="row"><img src=" {{url('storage/').'/'.$ad->image_path}}"></th>
                <td>{{$ad->alt}}</td>
                <td>{{$ad->url}}</td>
                <td>{{$ad->advert_category->type}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
