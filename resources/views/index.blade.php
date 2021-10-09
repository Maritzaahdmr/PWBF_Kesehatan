 <!-- Section: intro -->
 @extends('layout.main')
 @extends('layout.footer')
 @section('nav')
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

 <nav>
    <section id="intro" class="intro">
     <div class="intro-content">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 mb-3">
             <div class="wow fadeInDown" data-wow-offset="5" data-wow-delay="0.1s">
               <h2 class="h-ultra">Kegiatan Utama Posyandu</h2>
             </div>
             <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
               <!-- <h4 class="h-light">merupakan salah satu bentuk Upaya Kesehatan Berbasis Masyarakat (UKBM) yang dikelola dan diselenggarakan dari, oleh, untuk dan bersama masyarakat dalam penyelenggaraan pembangunan.</h4> -->
             </div>
             <div class="well well-trans">
               <div class="wow fadeInRight" data-wow-delay="0.1s">

                 <ul class="lead-list">
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Program kesehatan ibu hamil.</strong></li>
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Program kesehatan anak.</strong></li>
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Keluarga berencana atau KB.</strong></li>
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Imunisasi.</strong></li>
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pemantauan status gizi.</strong></li>
                   <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pencegahan dan penanggulangan diare.</strong></li>
               </ul>
               </div>
             </div>  
      </div>
           <div class="col-lg-6">
             <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
               <img src="img/gmb1.png" class="img-responsive" alt="" />
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- /Section: intro -->

   <!-- Section: boxes -->
   <section id="boxes" class="home-section paddingtop-80">

     <div class="container">
       <div class="row">
         <div class="col-sm-3 col-md-3">
           <div class="wow fadeInUp" data-wow-delay="0.2s">
             <div class="box text-center">
             
               <i class="fab fa-accessible-icon fa-3x circled bg-skin"></i>
               <h4 class="h-bold">Memperoleh kemudahan pelayanan kesehatan bagi ibu dan balita</h4>
               <!-- <p>
                 Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
               </p> -->
             </div>
           </div>
         </div>
         <div class="col-sm-3 col-md-3">
           <div class="wow fadeInUp" data-wow-delay="0.2s">
             <div class="box text-center">
              
               <i class="fab fa-servicestack fa-3x circled bg-skin"></i>
               <h4 class="h-bold">Pertumbuhan anak balita terpantau sehingga tidak menderita kurang gizi </h4>
               <!-- <p>
                 Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
               </p> -->
             </div>
           </div>
         </div>
         <div class="col-sm-3 col-md-3">
           <div class="wow fadeInUp" data-wow-delay="0.2s">
             <div class="box text-center">
               <i class="fa fa-user fa-3x circled bg-skin"></i>
               <h4 class="h-bold">Meningkatkan Kesejahteraan Sosial Masyarakat</h4>
               <!-- <p>
                 Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
               </p> -->
             </div>
           </div>
         </div>
         <div class="col-sm-3 col-md-3">
           <div class="wow fadeInUp" data-wow-delay="0.2s">
             <div class="box text-center">

               <i class="fa fa-tree fa-3x circled bg-skin"></i>
               <h4 class="h-bold">Meningkatkan Kelestarian Lingkungan Hidup</h4>
               <!-- <p>
                 Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
               </p> -->
             </div>
           </div>
         </div>
       </div>
     </div>

   </section>
   <!-- /Section: boxes -->


   <section id="callaction" class="home-section paddingtop-40">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="callaction bg-gray">
             <div class="row">
           
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>


   <!-- Section: services -->
   
   <!-- /Section: team -->



   <!-- Section: works -->
   <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
     <div class="container marginbot-50">
       <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
           <div class="wow fadeInDown" data-wow-delay="0.1s">
             <div class="section-heading text-center">
               <h2 class="h-bold" style="color:white;">POSYANDU ASIPS</h2>
               <p style="color:white;">Mari posyandu rutin, Agar terjaga kesehatan ibu dan anak</p>
             </div>
           </div>
           <div class="divider-short"></div>
         </div>
       </div>
     </div>

     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
           <div class="wow bounceInUp" data-wow-delay="0.2s">
             <div id="owl-works" class="owl-carousel">

             

             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- /Section: works -->

   {{-- <!-- Section: pricing -->
   <section id="pricing" class="home-section bg-gray paddingbot-60">
     <div class="container marginbot-50">
       <div class="row">
         <div class="col-lg-8 col-lg-offset-2">
           <div class="wow lightSpeedIn" data-wow-delay="0.1s">
             <div class="section-heading text-center">
               <h2 class="h-bold">Statistik</h2>
               <p>Data Statistik Data Bayi dan Balita</p>
             </div>
           </div>
           <div class="divider-short"></div>
         </div>
       </div>
     </div>

     <div class="container">

     <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">


                 <div id="accordion" class="panel panel-success">
                   <div class="card">
                     <div class="card-header" id="headingOne">
                       <h5 class="mb-0">
                       <div class="panel panel-success">
                         <div class="panel-heading">
                           <button class="btn" style="background-color:#dff0d8; color:green; border-color:#dff0d8;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Data Perkembangan Berat Badan Bayi
                           </button>
                         </div>
                       </div>
                         
                       </h5>
                     </div>

                     <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                       <div class="card-body">
                       <div class="panel-body">
                         <div class="table-responsive">
                         <table class="table table-striped table-bordered" id="bayi">
                                   <thead>
                                       <tr>
                                           <th>#</th>
                                           <th>Nama</th>
                                           <th>Tempat Tanggal Lahir</th>
                                           <th>Nama Ibu</th>
                                            <th>Nama Bapak</th>
                                            <th>Diagram</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr><td>1</td><td>Shazio Kurniawan</td><td>17/08/2020</td><td>Nurcahyati</td><td>Didik Kurniawan</td><td><a href='https://posyandu.bandungkab.go.id/welcome/detail_bayi/1283'><center><i class='icon icon-chart'></i></center></a></td></tr>                                    </tbody>
                               </table>
                               </div>
                               </div>
                       </div>
                     </div>
                   </div>
                   <div class="card">
                     <div class="card-header" id="headingTwo">
                       <h5 class="mb-0">
                       <div class="panel panel-success">
                         <div class="panel-heading">
                           <button class="btn" style="background-color:#dff0d8; color:green; border-color:#dff0d8;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                             Data Perkembangan Berat Badan Balita
                           </button>
                         </div>
                       </div>
                       </h5>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                       <div class="card-body">
                         <div class="panel-body">
                         <div class="table-responsive">
                       <table class="table table-striped table-bordered" id="balita">
                                   <thead>
                                       <tr>
                                           <th>#</th>
                                           <th>Nama</th>
                                           <th>Tempat Tanggal Lahir</th>
                                           <th>Nama Ibu</th>
                                            <th>Nama Bapak</th>
                                            <th>Diagram</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                                                           </tbody>
                               </table>
                               </div>
                               </div>
                       </div>
                     </div>
                   </div>
                 </div>
            </div>

            </div>

     </div>
   </section>
   <!-- /Section: pricing --> --}}


   <script>
    $(document).ready(function() {
       $('#bayi').DataTable();
   } );

   $(document).ready(function() {
       $('#balita').DataTable();
   } );
   
   </script>
   @section('footer')
   @endsection

</body>

</html>