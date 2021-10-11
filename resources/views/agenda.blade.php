@extends('layout.main')
@extends('layout.footer')
@section('nav')

<section id="pricing" class="home-section bg-gray paddingbot-60">
    <div class="container marginbot-50">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s">
            <div class="section-heading text-center">
              <h2 class="h-bold">Agenda</h2>
              <p>Jadwal Posyandu Balita dan Ibu hamil</p>
            </div>
          </div>
          <div class="divider-short"></div>
        </div>
      </div>
    </div>

    <div class="container">

        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                    <thead>
                        <tr>
                          <th>HARI</th>
                          <th>JAM</th>
                          <th>KETERANGAN</th>
                         </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>Senin</td>
                          <td>08.00-12.00</td>
                          <td>Balita</td>
                        </tr>
                        <tr>
                            <td>Senin</td>
                            <td>13.00-16.00</td>
                            <td>Ibu Hamil</td>
                          </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>08.00-12.00</td>
                            <td>Balita</td>
                          </tr>
                          <tr>
                            <td>Selasa</td>
                            <td>13.00-16.00</td>
                            <td>Ibu Hamil</td>
                          </tr>
                          <tr>
                            <td>Rabu</td>
                            <td>08.00-12.00</td>
                            <td>Balita</td>
                          </tr>
                          <tr>
                            <td>Rabu</td>
                            <td>13.00-16.00</td>
                            <td>Ibu Hamil</td>
                          </tr>
                          <tr>
                            <td>Kamis</td>
                            <td>08.00-12.00</td>
                            <td>Ibu Hamil</td>
                          </tr>
                          <tr>
                            <td>Jumaat</td>
                            <td>08.00-11.00</td>
                            <td>Balita</td>
                          </tr>
              
                        </tbody>
                      </table>
                    </div>
    </div>
</section>
                    @section('footer')
                    @endsection
                    
  <!-- /Section: pricing -->