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
        {{-- <p><a href="{{route('kecamatan.create') }}"<button type="button" class="btn btn-primary">Tambah Data</button></a></p> --}}
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID_Balita</th>
            <th>ID_Posyandu</th>
            <th>Nama_Balita</th>
            <th>NIK_Orang_Tua</th>
            <th>Nama_Orang_Tua</th>
            <th>TGL_Lahir_Balita</th>
            <th>Jenis_Kelamin_Balita</th>
            <th>Status</th>
            {{-- <th>Aksi</th> --}}
          </tr>
          </thead>
          @foreach($data as $Balita )
          <tbody>
          <tr>
            <td>{{ $Balita->ID_BALITA }}</td>
            <td>{{ $Balita->ID_POSYANDU }}</td>
            <td>{{ $Balita->NAMA_BALITA }}</td>
            <td>{{ $Balita->NIK_ORANG_TUA }}</td>
            <td>{{ $Balita->NAMA_ORANG_TUA }}</td>
            <td>{{ $Balita->TGL_LAHIR_BALITA }}</td>
            <td>{{ $Balita->JENIS_KELAMIN_BALITA }}</td>
            <td>{{ $Balita->STATUS }}</td>
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