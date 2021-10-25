<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    <div class="card me-5">
      <div class="card-header">
        <h3 class="card-title">Data Balita</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <p><a href="createbalita"<button type="button" class="btn btn-primary">Tambah Data</button></a></p>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID Balita</th>
            <th>ID Posyandu</th>
            <th>Nama Balita</th>
            <th>NIK</th>
            <th>Nama Ortu</th>
            <th>TGL Lahir Balita</th>
            <th>JK Balita</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach($data as $balita )
          <tbody>
          <tr>
            <td>{{ $balita->ID_BALITA }}</td>
            <td>{{ $balita->ID_POSYANDU }}</td>
            <td>{{ $balita->NAMA_BALITA }}</td>
            <td>{{ $balita->NIK_ORANG_TUA }}</td>
            <td>{{ $balita->NAMA_ORANG_TUA }}</td>
            <td>{{ $balita->TGL_LAHIR_BALITA }}</td>
            <td>{{ $balita->JENIS_KELAMIN_BALITA }}</td>
            <td>{{ $balita->STATUS }}</td>
            <td>
              <a href="/editbalita{{ $balita->ID_BALITA }}"><i class="far fa-edit"></i></a> |  <a href="#"><i class="fas fa-trash-alt" style="color :red"></i></a>
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