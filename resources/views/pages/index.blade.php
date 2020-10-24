@extends('layouts.master')
@section('title', 'CAIT | Accueil')
@section('content')   
 
    <div class="sections-wrapper" style="margin-top:-20px;">
            
            <!-- ******Promo Section****** -->
            <section id="promo" class="promo section ">
                <div class="container">
                    <div class="row">                                      
                        <div class="intro-area col-lg-4 col-12 text-center">
                                <img src="assets/images/background/logo.png" style="width:170px;height:200px;margin:-30px 20% 0px 20%" >                                  
                                <h2 class="title">Bienvenue</h2>
                                <p class="intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam natus corporis nisi obcaecati quae facilis voluptate beatae velit fuga soluta?</p>      
                               
                        </div><!--//intro-area-->
                        <div class="clearfix d-none d-sm-block d-md-block"></div>
                        <div class="download-area col-lg-4 col-md-6 col-12 order-md-12 " style="margin:130px 0px 40px 0px;">
                            <ul class="list-unstyled download-buttons">
                                    <b style="font-size:14px;">Télécharger l'application</b><br>
                                <li class="google-play"><a href="https://play.google.com/store/apps/details?id=com.cait.app"><img class="img-fluid d-block" src="assets/images/buttons/btn-google-play.png" alt="Download from Google Play" style="background-color:black;" /></a></li>
                            </ul><!--//list-unstyled-->
                        </div><!--//download-area--> 
                        <div class="clearfix d-md-block d-none"></div>
                        <div class="device device-iphone text-center col-lg-4 col-md-6 col-12 order-md-5">     
                            <div class="device-holder android-holder offset-top">                 
                                <div class="device-holder-inner">
                                    <div id="home-slideshow" class="owl-carousel owl-theme"> 
                                      <div class="item"><img class="img-fluid" src="assets/images/devices/screenshots/android-screen-1.1.jpg" alt=""></div>
                                      <div class="item"><img class="img-fluid" src="assets/images/devices/screenshots/android-screen-1.2.jpg" alt=""></div>
                                      <div class="item"><img class="img-fluid" src="assets/images/devices/screenshots/android-screen-1.3.jpg" alt=""></div>                         
                                    </div><!--//slideshow-->
                                </div><!--//device-holder-inner-->  
                            </div><!--//device-holder-->                  
                        </div><!--//phone-holder--> 
                    </div><!--//row-->
                    
                </div><!--//container-->            
            </section><!--//promo-->
@stop
            