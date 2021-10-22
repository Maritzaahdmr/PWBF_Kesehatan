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
        {{-- <p><a href="{{route('kecamatan.create') }}"<button type="button" class="btn btn-primary">Tambah Data</button></a></p> --}}
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID History Posyandu</th>
            <th>ID Balita</th>
            <th>Tgl Posyandu</th>
            <th>Berat Badan Balita</th>
            <th>Tinggi Badan</th>
            {{-- <th>Created_At</th>
            <th>Updated_At</th> --}}
            {{-- <th>Aksi</th> --}}
          </tr>
          </thead>
          @foreach($data as $history_posyandu )
          <tbody>
          <tr>
            <td>{{ $history_posyandu->ID_HISTORY_POSYANDU }}</td>
            <td>{{ $history_posyandu->ID_BALITA }}</td>
            <td>{{ $history_posyandu->TGL_POSYANDU }}</td>
            <td>{{ $history_posyandu->BERAT_BADAN_BALITA }}</td>
            <td>{{ $history_posyandu->TINGGI_BADAN }}</td>
            <td>{{ $history_posyandu->CREATED_AT }}</td>
            <td>{{ $history_posyandu->UPDATED_AT }}</td>
              {{-- <a href="#"><i class="far fa-edit"></i></a> |  <a href="#"><i class="fas fa-trash-alt" style="color :red"></i></a> --}}
            </td>

          </tr>
          @endforeach
   
          </tbody>
         
        </table>
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