@extends('layouts.app')

@section('content')

    <h2> View list of Advert Category  <a href="{{route('advert.category.create')}}" class="btn btn-primary">create</a></h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Type</th>
            <th scope="col">Width</th>
            <th scope="col">Height</th>
            <th scope="col">setting</th>
        </tr>
        </thead>
        <tbody>


        @foreach($advert_categories  as $category)
            <tr>
                <th scope="row">{{$loop->index++}}</th>
                <td>{{$category->type}}</td>
                <td>{{$category->width}}</td>
                <td>{{$category->height}}</td>
                <td><a href="{{route('advert.category.show',$category->id)}}" >Show</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
