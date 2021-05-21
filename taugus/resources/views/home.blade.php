@extends('layouts.app', ['title'=>'Beranda Taugus'])
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            <h4>All post</h4>
            <hr>
        </div>
    </div>
    <div class="row">

        @forelse ($posts as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    {{$post->judul}}
                </div>
                <div class="card-body">
                    <div>
                        {{Str::limit($post->deskripsi,10)}}
                    </div>
                    <a href="/admin/{{ $post->slug }}">Read More</a>
                </div>
                <!-- <div class="card-footer d-flex flex-column">
                    Published on {{$post->created_at->diffForHumans()}}
                    <a href="/admin/{{ $post->slug }}/edit" class="btn btn-sm btn-success mt-2">Perbarui</a>
                    <a href="{{route('post.hapus',$post->slug)}}" class="btn btn-sm btn-danger mt-2">Hapus</a>
                </div> -->
            </div>
        </div>
        @empty
            <div class="col-md-6">
                <div class="alert alert-info">
                    There's no posts
                </div>
            </div>
        @endforelse
    </div>

    <div class="pt-4 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection