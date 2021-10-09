@extends('layout.main')
@extends('layout.footer')
@section('nav')

	  <!-- Section: intro -->
      <section id="intro" class="intro">
        <div class="intro-content">
          <div class="container">
          
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <div class="form-wrapper">
                  <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
  
                    <div class="panel panel-skin">
                      <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Login</h3>
                        <div id="errormessage"></div>
                      </div>
                      <div class="panel-body">
                        <div id="sendmessage">Login</div>
  
                                <form class="contactForm lead" role="form" method="post">
                          <div class="row">
  
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="username" class="form-control input-md" data-rule="minlen:3" value="" data-msg="Please enter at least 3 chars">
                                <div class="validation"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Password</label>
                                <input  type="password" name="password" id="password"  value="" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                <div class="validation"></div>
                              </div>
                            </div>
                          </div>
  
                          <input type="submit" name="login-button" value="Masuk" id="login-button" class="btn btn-skin btn-block btn-lg">
  
                          <!-- <p class="lead-footer">* We'll contact you by phone & email later</p> -->
  
                        </form>
                      </div>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @section('footer')
        @endsection
      </section>
    