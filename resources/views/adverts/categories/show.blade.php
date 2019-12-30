@extends('layouts.app')

@section('content')
    {{ AdvMng::getHTML($advert_category->type) }}
@endsection
