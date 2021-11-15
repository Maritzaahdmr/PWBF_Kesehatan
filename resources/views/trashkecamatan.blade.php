<!DOCTYPE html>
<html>
     @extends('home')
    @section('container')
    
<!-- DataTales Example -->
<div class="row">
  <div class="col-12">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Kecamatan Terhapus</h3>
  </div>
  <div class="card-body ">
    <p><a href="kecamatan"<button type="button" class="btn btn-secondary btn-sm"> 
        <i class="fas fa-angle-left"></i> Back</button>
        </a> | 
        <a href="/restorekecamatan"<button type="button" class="btn btn-warning btn-sm">
            <i class= "fa fa-undo"></i> Restore All</button>
        </a> 
    </p>
    {{-- <div class="card-body table-responsive">
          <table class="table table-bordered"  > --}}
            <table id="example1" class="table table-bordered table-striped">
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
                @if ($kecamatan->count() > 0)
                  @foreach($kecamatan as $data )
                    <tbody>
                      <tr>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ $data->ID_KECAMATAN }}</td>
                        <td>{{ $data->KECAMATAN }}</td>
                        {{-- <td>{{ $kecamatan->CREATED_AT }}</td> --}}
                        {{-- <td>{{ $kecamatan->UPDATED_AT }}</td> --}}
                        <td>
                          <a href="/restorekecamatan{{ $data->ID_KECAMATAN }}" class="btn btn-info btn-sm"> Restore</a>    
                          {{-- <a href="deletekecamatan{{ $data->ID_KECAMATAN }}"><i class="fas fa-trash-alt" style="color :red"></i></a> --}}
                        </td>
                          {{-- <form action ="{{ url("kecamatans/".$data->id )}}" method="post" class="d-inline" onsubmit="return confirm('yakin akan dihapus?')">
                          
                            @method('hapus')
                            @csrf
                        
                            <i class="fas fa-trash-alt" style="color :red"></i></a>
                        </td>
                      </tr> --}}
                  @endforeach                    
                @else
                      <tr>
                          <td colspan='4' class='text-center'>Data Kosong</td>
                @endif
                    </tbody>
               
              </table>
            {{-- <div>
                Showing 
                {{ $data->firstdata() }}
                to
                {{ $data->lastdata() }}
                of
                {{ $data->total() }}
                entries
            </div> --}}

      </div>
      {{-- <div class="pull-right">
        {{ $kecamatan->links() }}
  </div> --}}
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

{{-- <!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
  <span>Copyright &copy; Your Website 2020</span>
</div>
</div>
</footer>
<!-- End of Footer --> --}}

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


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

@section('scripts')
<script>
  $(function handleDelete(id)
  {
    $('hapuskecamatan').modal('show')
  }
</script>
@endsection
{{-- </html> --}}