@extends('layouts.master')

@section('content')
    
<div class="col-md-6" style="margin-left: 30px; margin-top: 30px">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Pertanyaan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <a class="btn btn-info mb-3" href="/proyek/create">Add new proyek</a>
        <table class="table table-bordered">
          <thead>                  
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama Proyek</th>
              <th>Tanggal Proyek</th>
              <th>Deadline Proyek</th>
              <th>status</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse($proyek as $key => $proyek)
              <tr>
                <td> {{ $key + 1 }} </td>
                <td> {{ $proyek->nama_proyek }} </td>
                <td> {{ $proyek->tanggal_proyek }} </td>
                <td> {{ $proyek->deadline_proyek }} </td>
                <td> {{ $proyek->status }} </td>
                <td>
                  <a class="btn btn-info btn-sm" href="/pertanyaan/{{$pertanyaan->id}}">Show</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" align="center">Tak ada proyek</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
      <!-- /.card-body -->
      <!-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div> -->
    </div>
    <!-- /.card -->
  </div>


@endsection