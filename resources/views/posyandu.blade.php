<!DOCTYPE html>
<html>
    @extends('home')
    @section('container')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Posyandu</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <div class="card-body">
            <p><a href="createposyandu"<button type="button" class="btn btn-primary">Tambah Data</button></a></p>
          <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID POSYANDU</th>
            <th>ID KELURAHAN</th>
            <th>NAMA POSYANDU</th>
            <th>ALAMAT POSYANDU</th>
            {{-- <th>CREATED AT</th>
            <th>UPDATED AT</th> --}}
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach($data as $posyandu )
          <tbody>
          <tr>
            <td>{{ $posyandu->ID_POSYANDU }}</td>
            <td>{{ $posyandu->ID_KELURAHAN }}</td>
            <td>{{ $posyandu->NAMA_POSYANDU }}</td>
            <td>{{ $posyandu->ALAMAT_POSYANDU }}</td>
            {{-- <td>{{ $posyandu->CREATED_AT }}</td>
            <td>{{ $posyandu->UPDATED_AT }}</td> --}}
            <td>
              <a href="#"><i class="far fa-edit"></i></a> |  <a href="#"><i class="fas fa-trash-alt" style="color :red"></i></a>
            </td>
          </tr>
          @endforeach
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