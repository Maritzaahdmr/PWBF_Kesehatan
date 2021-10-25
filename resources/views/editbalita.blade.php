<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    <div class="card">
        @foreach($balita as $data)
      <div class="card-header">
        <div class ="pull-left">
        <strong>Edit Data Balita</strong>
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
        <form action="/balita/update" method="post">
          @csrf
            <div class="form-group">
              <label class="">ID Posyandu</label>
                <input type="number" name="id_pos" class="form-control" value="{{ $data->NAMA_BALITA }}" required="required"  ></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>    
            </div>
            <div class="form-group">
                <label class="">Nama Balita</label>
                  <input type="text" name="balita"  class="form-control" value="{{ $data->NAMA_BALITA }}" required="required" axlegenght="30" size="50"  ></td>
                  <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>    
                </div>
           <div class="form-group">
            <label class="">NIK</label>
              <input type="number" name="NIK" class="form-control" value="{{ $data->NIK_ORANG_TUA }}" required="required"  axlegenght="30" size="50" ></td>
              <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>    
            </div>
              <div class="form-group">
                <label class="">NAMA ORANG TUA</label>
                  <input type="text" name="nama" class="form-control" value="{{ $data->NAMA_ORANG_TUA }}" required="required"  axlegenght="30" size="50"   ></td>
                  <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>    
            </div>
            <div class="form-group">
              <label class="">TGL LAHIR BALITA</label>
                <input type="datetime-local" name="tgl" class="form-control" value="{{ $data->TGL_LAHIR_BALITA }}" required="required"  axlegenght="30" size="50"    ></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>  
            </div>
            <div class="form-group">
              <label class="">JENIS KELAMIN</label>
                <input type="text" name="jk"  class="form-control" value="{{ $data->JENIS_KELAMIN_BALITA }}" required="required"  axlegenght="30" size="50"      ></td>
                <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>  
            </div>
          <div class="form-group">
            <label class="">STATUS</label>
              <input type="text" name="status"  class="form-control" value="{{ $data->STATUS }}" required="required"  axlegenght="30" size="50"      ></td>
              <input type="hidden" name="id" class="form-control" value="{{ $data->ID_BALITA }}" value=""/>  
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