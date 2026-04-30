@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Buku</h4>
        </div>

        <div class="card-body">

            <form action="/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Genre</label>
                    <input type="text" name="genre" class="form-control">
                </div>

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>
    </div>
@endsection
