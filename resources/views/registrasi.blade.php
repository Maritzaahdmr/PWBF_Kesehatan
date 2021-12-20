@extends('layout.main')
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
                        <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Form Registrasi</h3>
                        <div id="errormessage"></div>
                      </div>
                      <div class="panel-body">
                        <div id="sendmessage">Form Registrasi</div>
                          <form class="/registrasi" role="form" action="#" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Username</label>
                                @error('name')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                <input type="text" name="name" id="name" class="form-control input-md" data-rule="minlen:3" value="{{ old('name') }}" data-msg="Please enter at least 3 chars">
                                <div class="@error('name') validation @enderror"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Alamat Email</label>
                                @error('email')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                <input  type="text" name="email" id="email"  value="{{ old('email') }}" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                <div class="@error('email')validation @enderror"></div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Peran</label>
                            <select name="id_role" class="form-control">
                              <option value="">-pilih-</option>
                                  @foreach ($roles as $data)
                              <option value="{{ $data->ID_ROLE }}">{{ $data->ROLE }}</option>
                              @endforeach
                            </select>
                            </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                <input  type="password" name="password" id="password"  value="" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                <div class="@error('password') validation @enderror"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                <label>Repeat password</label>
                                @error('password')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                <input  type="password" name="remember_token" id="password"  value="" class="form-control input-md" data-rule="required" data-msg="The phone number is required">
                                <div class="@error('password') validation @enderror"></div>
                              </div>
                            </div>
                          </div>
                          <input type="submit" name="login-button" <a href="index" value="Register" id="login-button" class="btn btn-skin btn-block btn-lg">
  
                          <!-- <p class="lead-footer">* We'll contact you by phone & email later</p> -->
  
                        </form>
                        <hr>
                        <div class="text">
                          <a class="small" href="/login">Back to Login?</a>
                      </div>
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
    