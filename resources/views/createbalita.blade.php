<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    <div class="card">
      <div class="card-header">
        <div class ="pull-left">
        <strong>Tambah Data Balita</strong>
        </div>
      <div class="pull-left">
        <a href="/balita" class="btn btn-secondary btn-sm">
          <i class= "fa fa-undo"></i>Back
        </a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
        <form action="/balita/store" method="post">
          @csrf
            <div class="form-group">
            <label class="">id_posyandu</label>
            <select name="id_pos" class="form-control">
              <option value="">-pilih-</option>
                  @foreach ($posyandus as $data)
              <option value="{{ $data->ID_POSYANDU }}">{{ $data->NAMA_POSYANDU }}</option>
              @endforeach
            </select>
            </div>
            <div class="form-group">
                <label class="">Nama Balita</label>
                  <input type="text" name="balita"  required="required"  ></td>
             </div>
           <div class="form-group">
            <label class="">NIK</label>
              <input type="number" name="NIK"  required="required"  ></td>
            </div>
              <div class="form-group">
                <label class="">NAMA ORANG TUA</label>
                  <input type="text" name="nama" required="required"  ></td>
            </div>
            <div class="form-group">
              <label class="">TGL LAHIR BALITA</label>
                <input type="datetime-local" name="tgl"  required="required"  ></td>
            </div>
            <div class="form-group">
              <label class="">JENIS KELAMIN</label>
                <input type="text" name="jk"  required="required"  ></td>
          </div>
          <div class="form-group">
            <label class="">STATUS</label>
              <input type="text" name="status"  required="required"  ></td>
        </div>
             {{-- <div class="form-group">
              <label class="">Created_At</label>
                <input type="datetime-local" name="Created_At" required="required"></td>
              </div>
              <div class="form-group">
                <label class="">Updated_At</label>
                  <input type="datetime-local" name="Updated_At" required="required"></td>
             </div>
             --}}
          
            
                <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
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
 </html>