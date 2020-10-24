@extends('layouts.master')
@section('title', 'CAIT | LogIn')
@section('content')

    <div class="canvas-wrapper" id="canvas-wrapper" style="margin-top:-100px;">

 
        <div class="sections-wrapper" style="background-image: url('assets/images/background/diamond_upholstery.png');">
            <section id="benefit-2" class="benefit-2 section " style="margin:-50px;">
                <div class="section-inner">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="content col-lg-7 col-md-6 col-12 order-md-12">
                              <div id="msform">
                                {!! Form::open(array('route'=>'index')) !!}
                                      <h1 class="text-center" style="color:#5a6cae"><b>S'inscrire</b></h1>
                                      <h2 class="fs-title">Créez votre compte</h2>
                                      <input type="text" name="email" placeholder="Email" />
                                      <input type="password" name="pass" placeholder="Password" />
                                      
                                      
                                      
                                      {!! Form::token() !!}
                                            {!! Form::submit(null, ['class' => 'next action-button'] ) !!}
                                            
                                    <hr>
                                    <a href="/singin" class="text-center" style="color:#5a6cae" >Vous n'avez pas de compte ?</a>
                                 {!! Form::close() !!}
                                </div>
                            </div><!--//content-->
                            <div class="device device-iphone col-lg-4 col-md-6 col-12 order-md-1" style="margin:50px -20px 0px 0px;"> 
                                    <img src="assets/images/background/logo.png" style="width:180px;height:200px;margin:-50px 20% 10px 20%" >    
                                <div class="device-holder iphone-holder iphone-grey-holder offset-top">                 
                                    
                                    <div class="device-holder-inner">
                                        <img class="img-fluid" src="assets/images/devices/screenshots/iphone6-screen-3.jpg" alt="">
                                    </div><!--//device-holder-inner-->  
                                </div><!--//device-holder-->                  
                            </div><!--//phone-holder-->                         
                        </div><!--//row-->
                    </div><!--//container-->
                </div><!--//section-inner-->
            </section><!--//benefit-2-->
                 
        </div><!--//sections-wrapper-->
       



@endsection
        