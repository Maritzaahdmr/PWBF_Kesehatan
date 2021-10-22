<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    <div class="card me-10">
      <div class="card-header">
        <h3 class="card-title">Data Kecamatan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <p><a href="createkecamatan"<button type="button" class="btn btn-primary">Tambah Data</button></a></p>
        {{-- <table id="example1" class="table table-bordered table-striped"> --}}
        <table id="bootstrap-data-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>NO</th>
            {{-- <th>ID</th> --}}
            <th>Kecamatan</th>
            {{-- <th>Created_At</th>
            <th>Upadate_At</th> --}}
            <th>Aksi</th>
          </tr>
          </thead>
          @foreach($data as $kecamatan )
          <tbody>
          <tr>
            <td>{{ $loop->iteration }}</td>
            {{-- <td>{{ $kecamatan->ID_KECAMATAN }}</td> --}}
            <td>{{ $kecamatan->KECAMATAN }}</td>
            {{-- <td>{{ $kecamatan->CREATED_AT }}</td> --}}
            {{-- <td>{{ $kecamatan->UPDATED_AT }}</td> --}}
            <td>
              <a href="#"><i class="far fa-edit"></i></a> |  <a href="hapuskec{{ $kecamatan->ID_KECAMATAN }}"><i class="fas fa-trash-alt" style="color :red"></i></a>
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