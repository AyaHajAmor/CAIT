@extends('layouts.master')
@section('title', 'CAIT | Contact')
@section('content')
  <style>
  .error{
    color:red;
    font-size:10px;
    margin-top:-18px;
  }
  </style>
        <div class="row back" id="contatti" style="background-image: url('assets/images/background/diamond_upholstery.png'); ">
                <div class="container mt-5" >
                    <div class="row" style="height:550px;" >
                      <div class="col-md-6 maps" >
                         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                     
                      <div class="col-md-6 bg-white mt-2" >
                          @if( ! session()->has('message'))
                            <h3 class="text-center">Contact Form</h3>

                            <div class="container">
                                
                                    <form action="{{ route('contact.store') }}" method="POST" >
                                      <div class="form-group ">
                                            <label for="fname">Nom</label>
                                            <input type="text" id="fname" name="name" placeholder="Votre nom" value="{{ old('name')}}">
                                            <small class="error">{{ $errors->first('name') }}</small>
                                      </div>
                                      <div class="form-group ">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" placeholder="Votre Email" value="{{ old('email' )}}">
                                            <small class="error">{{ $errors->first('email') }}</small>
                                      </div>

                                      <div class="form-group ">
                                            <label for="subject">Sujet</label>
                                            <textarea id="subject" name="msg" placeholder="Ecrire un message " style="height:200px" value="{{ old('email')}}"></textarea>
                                            <small class="error">{{ $errors->first('msg') }}</small>
                                      </div>
                                        @csrf
                                            <input type="submit" value="Envoyer">
                                      </form>
                                    @endif
                                    @if (session()->has('message'))
                      <div class="alert alert-success " role="alert" style="margin-top:200px;">
                          Votre message a été envoyé avec <strong> succès! </strong><i class="fa fa-check-square-o" style="font-size:24px;color:green"></i>
                      </div>
                  
                  @endif
                              
                            </div>
                 
                      </div>
                
                    </div>
                </div>
        </div>
        
            
@endsection
 