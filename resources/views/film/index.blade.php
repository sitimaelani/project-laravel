@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="{{ asset('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table Film</h3>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Tahun</th>
                  <th>Genre</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($films as $key => $value)
                  <form action="{{ route('film.destroy', $value->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->judul }}</td>
                    <td>{{ $value->tahun }}</td>
                    <td>{{ $value->genre[0]->nama }}</td>
                    <td>
                      <a href="{{ route('film.show', $value->id) }}" class="btn btn-sm btn-info">Show</a>
                      <a href="{{ route('film.edit', $value->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="row justify-content-between">
                    <div class="col-3">
                        <a href="{{ route('film.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus"></i>
                        Add Film</a>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  </div>
  
@endsection

@push('script')
  <!-- DataTables  & Plugins -->
<script src="{{ asset('Template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('Template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('Template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $('#dataTables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush