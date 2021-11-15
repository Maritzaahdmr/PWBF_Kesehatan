<!DOCTYPE html>
<html>
    @extends('home')
    @section('container')
    <div class="card me-5">
      <div class="card-header">
        <h3 class="card-title">Data History Posyandu Terhapus</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <p><a href="history_posyandu"<button type="button" class="btn btn-secondary btn-sm"> 
            <i class="fas fa-angle-left"></i> Back</button>
            </a> | 
            <a href="/restorehistory_posyandu"<button type="button" class="btn btn-warning btn-sm">
                <i class= "fa fa-undo"></i> Restore All</button>
            </a> 
        </p>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID History Posyandu</th>
            <th>ID Balita</th>
            <th>Tgl Posyandu</th>
            <th>Berat Badan Balita (Kg)</th>
            <th>Tinggi Badan (Cm)</th>
            {{-- <th>Created_At</th>
            <th>Updated_At</th> --}}
            <th>Aksi</th>
          </tr>
          </thead>
          @if ($history_posyandu->count() > 0)
          @foreach($history_posyandu as $data )
          <tbody>
          <tr>
            <td>{{ $data->ID_HISTORY_POSYANDU }}</td>
            <td>{{ $data->ID_BALITA }}</td>
            <td>{{ $data->TGL_POSYANDU }}</td>
            <td>{{ $data->BERAT_BADAN_BALITA }}</td>
            <td>{{ $data->TINGGI_BADAN }}</td>
            {{-- <td>{{ $history_posyandu->CREATED_AT }}</td>
            <td>{{ $history_posyandu->UPDATED_AT }}</td> --}}
            <td>
              <a href="/restorehistory_posyandu{{ $data->ID_HISTORY_POSYANDU }}"class="btn btn-info btn-sm"> Restore</a>
            </td>

          </tr>
          @endforeach 
        @else
        <tr>
            <td colspan='10' class='text-center'>Data Kosong</td>
        @endif
          </tbody>
         
        </table>
        <br>
        {{-- <div class="pull-right">
          {{ $data->links() }}
    </div> --}}
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