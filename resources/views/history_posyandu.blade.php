<!DOCTYPE html>
<html>
    @extends('home')
    @section('container')
    <div class="card me-5">
      <div class="card-header">
        <h3 class="card-title">Data History Posyandu</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="card-body">
          <form action="/history_posyandu/cari" method="get">
           <div class="input-group input-group-sm">
               <input type="text" class="form-control form-control-navbar" name="cari" value="{{ request('cari') }}"
               placeholder="Ketikan sesuatu" aria-label="Search" >
               <div class="input-group-append">
               <button class="btn btn-navbar" type="submit">
                 <i class="fas fa-search"></i>
               </button>
               </div>
           </div>
              </form>
              <br>
        <p><a href="createhistory_posyandu"<button type="button" class="btn btn-primary">Tambah Data</button></a> | 
          <a href="/history_posyandu/printhistory_posyandu" target="_blank" class="btn btn-danger">Print PDF</a> | 
          <a href="trashhistory_posyandu"<button type="button" class="btn btn-warning">Sampah</button></a>
        </p>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID History Posyandu</th>
            <th>Nama Balita</th>
            <th>Tgl Posyandu</th>
            <th>Berat Badan Balita (Kg)</th>
            <th>Tinggi Badan (Cm)</th>
            {{-- <th>Created_At</th>
            <th>Updated_At</th> --}}
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach($data as $history_posyandu )
          <tbody>
          <tr>
            <td>{{ $history_posyandu->ID_HISTORY_POSYANDU }}</td>
            <td>{{ $history_posyandu->NAMA_BALITA }}</td>
            <td>{{ $history_posyandu->TGL_POSYANDU }}</td>
            <td>{{ $history_posyandu->BERAT_BADAN_BALITA }}</td>
            <td>{{ $history_posyandu->TINGGI_BADAN }}</td>
            {{-- <td>{{ $history_posyandu->CREATED_AT }}</td>
            <td>{{ $history_posyandu->UPDATED_AT }}</td> --}}
            <td>
              <a href="edithistory_posyandu{{ $history_posyandu->ID_HISTORY_POSYANDU }}"><i class="far fa-edit"></i></a> |
              <form action="{{ url('/hapus/history_posyandu'.$history_posyandu->ID_HISTORY_POSYANDU) }}" method="GET" class="d-inline" onsubmit="return confirm('Hapus Data ?')">
                @method('/hapus/history_posyandu')
                @csrf
                <button class="btn btn-danger btn-sm">
                  <i class="fas fa-trash-alt"></i></button>
                    {{-- <i class="fa fa-trash"></i></button> --}}
            </form>
            </td>

          </tr>
          @endforeach
   
          </tbody>
         
        </table>
        <br>
        <div class="pull-right">
          {{ $data->links() }}
    </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
@endsection 
{{-- </html> --}}