@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->judul }}</h1>
        <p>{{ $post->deskripsi }}</p>
    </div>
@endsection