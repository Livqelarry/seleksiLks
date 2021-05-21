@extends('layouts.app', ['title'=>'Memperbarui Buku'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Memperbarui Buku {{ $post->judul }}</div>
                <div class="card-body">
                    <form action="/admin/{{$post->slug}}/edit" method="post">
                        @method('patch')
                        @csrf

                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" value="{{ old('judul') ?? $post->judul }}" id="judul" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea type="text" name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') ?? $post->deskripsi }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection