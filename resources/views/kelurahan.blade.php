<!DOCTYPE html>
<html>
    @extends('home')
    @section('container')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Kelurahan</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
         <form action="/kelurahan/cari" method="get">
          <div class="input-group input-group-sm">
              <input type="text" class="form-control form-control-navbar" name="cari" value="{{ request('cari') }}"
              placeholder="Ketikan sesuatu" aria-label="Search" >
              <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              </div>
            
              {{-- <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary">Cari</button>
              </span> --}}
          </div>
      </form>
      <br>
          <p><a href="createkelurahan"<button type="button" class="btn btn-primary">Tambah Data</button></a> |
            <a href="/kelurahan/printkelurahan" target="_blank" class="btn btn-danger">Print PDF</a> | 
            <a href="trashkelurahan"<button type="button" class="btn btn-warning">Sampah</button></a>
          </p>
          <div class="animated fadeIn">
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
          </div>
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
          @foreach($data as $kelurahan )
          <tbody>
          <tr>
            <td>{{ $kelurahan->ID_KELURAHAN }}</td>
            <td>{{ $kelurahan->ID_KECAMATAN }}</td>
            <td>{{ $kelurahan->KELURAHAN }}</td>
            {{-- <td>{{ $kelurahan->CREATED_AT }}</td>
            <td>{{ $kelurahan->UPDATED_AT }}</td> --}}
            <td>
              <a href="/editkelurahan{{ $kelurahan->ID_KELURAHAN }}"><i class="far fa-edit"></i></a> |  
              {{-- <a href="hapuskelurahan{{ $kelurahan->ID_KELURAHAN }}"><i class="fas fa-trash-alt" style="color :red"></i></a> --}}
              <form action="{{ url('hapus'.$kelurahan->ID_KELURAHAN) }}" method="GET" class="d-inline" onsubmit="return confirm('Hapus Data ?')">
                @method('hapus')
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