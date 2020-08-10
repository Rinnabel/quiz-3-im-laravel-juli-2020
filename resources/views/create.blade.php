@extends('layouts.master')

@section('content')
    
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Proyek Baru</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/proyek" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Nama Proyek</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', '') }}" placeholder="Tulis Nama Proyek">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Tanggal Proyek</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', '') }}" placeholder="Tulis Tanggal Proyek">
                        @error('tanggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isi">Deadline Proyek</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" value="{{ old('deadline', '') }}" placeholder="Tulis Deadline Proyek">
                        @error('deadline')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

@endsection