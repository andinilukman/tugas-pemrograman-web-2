@extends('layouts.app')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Edit Buku</h4>
        </div>

        <div class="card-body">

            <form action="/update/{{ $buku->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}">
                </div>

                <div class="mb-3">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}">
                </div>

                <div class="mb-3">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}">
                </div>

                <div class="mb-3">
                    <label>Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}">
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <input type="text" name="genre" class="form-control" value="{{ $buku->genre }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>

    </div>
@endsection
