<!DOCTYPE html>
<html>
    @extends('home')
    @section('container')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Kelurahan Terhapus</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <p><a href="kelurahan"<button type="button" class="btn btn-secondary btn-sm"> 
            <i class="fas fa-angle-left"></i> Back</button>
            </a> | 
            <a href="/restorekelurahan"<button type="button" class="btn btn-warning btn-sm">
                <i class= "fa fa-undo"></i> Restore All</button>
            </a> 
        </p>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>ID KELURAHAN</th>
            <th>ID KECAMATAN</th>
            <th>KELURAHAN</th>
            {{-- <th>CREATED AT</th>
            <th>UPDATED AT</th> --}}
            <th>Aksi</th>
          </tr>
          </thead>
          @if($kelurahan->count() > 0)
          @foreach($kelurahan as $data )
          <tbody>
          <tr>
            <td>{{ $data->ID_KELURAHAN }}</td>
            <td>{{ $data->ID_KECAMATAN }}</td>
            <td>{{ $data->KELURAHAN }}</td>
            {{-- <td>{{ $kelurahan->CREATED_AT }}</td>
            <td>{{ $kelurahan->UPDATED_AT }}</td> --}}
            <td>
              <a href="/restorekelurahan{{ $data->ID_KELURAHAN }}"class="btn btn-info btn-sm"> Restore </a>
            </td>
          </tr>
          @endforeach
          @else
            <tr>
                <td colspan='4' class='text-center'>Data Kosong</td>
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