@extends('layouts.app')

@section('content')
    @foreach($blogs as $blog)
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->body }}</p>
    @endforeach
@endsection