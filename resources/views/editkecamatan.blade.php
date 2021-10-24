<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    <div class="card">
        @foreach($kecamatan as $data )
      <div class="card-header">
        <div class ="pull-left">
        <strong>Edit Data Kecamatan</strong>
        </div>
      <div class="pull-left">
        <a href="/kecamatan" class="btn btn-secondary btn-sm">
          <i class= "fa fa-undo"></i>Back
        </a>
      </div>
    </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-md-4 offset-md-4">
        <form action="/kecamatan/update" method="post">
          @csrf
            {{-- <div class="form-group">
            <label class="">id_kecamatan</label>
              <input type="number" name="id_kecamatan"  required="required" ></td>
            </div> --}}
            <div class="form-group">
                <label class="">Kecamatan</label>
                  <input type="text" name="Kecamatan" class="form-control" value="{{ $data->KECAMATAN }}" required="required"  ></td>
                  <input type="hidden" name="id" class="form-control" value="{{ $data->ID_KECAMATAN }}" value=""/>
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
  @endforeach
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