<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Data Kelurahan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend\AdminLTE-master') }}/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> Laporan Kelurahan
          <small class="float-right">Date: {{ date('d-M-Y') }}</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <address>
          <strong>Admin, Posyandu Pusat.</strong><br>
          ASIPS Posyandu Universitas Airlangga<br>
          Senin - Jumat, 8.00 Sampai 16.00 WIB<br>
          Jl Darmawangsa 5 No 12A<br>
          Phone: (031) 73732451<br>
          Email: assips.posyandunair@gmail.com
        </address>
      </div>
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>NO</th>
            <th>ID Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
          </tr>
          </thead>
          <tbody>
            <?php $no=1 ?>
          @foreach ($data as $kelurahan)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $kelurahan->ID_KELURAHAN }}</td>
            <td>{{ $kelurahan->KECAMATAN }}</td>
            <td>{{ $kelurahan->KELURAHAN }}</td>
          </tr>
          @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  
    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
