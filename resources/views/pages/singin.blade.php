@extends('layouts.master')
@section('title', 'CAIT | SingIn')
@section('content')
    <div class="canvas-wrapper" id="canvas-wrapper" style="margin-top:-120px;">

 
        <div class="sections-wrapper" style="background-image: url('assets/images/background/diamond_upholstery.png');">
            
        
            
            <!-- ******Benefit-2 Section****** -->
            <section id="benefit-2" class="benefit-2 section " >
                <div class="section-inner">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="content col-lg-7 col-md-6 col-12 order-md-12">
                                <form id="msform" >
                                   
                                      <h1 class="text-center" style="color:#5a6cae"><b>S'inscrire</b></h1>
                                      <h2 class="fs-title">Créez votre compte</h2>
                                      <input type="text" name="email" placeholder="Email" />
                                      <input type="text" name="email" placeholder="Confirmer votre Email" />
                                      <input type="password" name="pass" placeholder="Password" />
                                      <input type="password" name="cpass" placeholder="Confirm Password" />
                                      

                                      <input type="text" name="fname" placeholder="Votre nom & prénom" />
                                      {{-- <input type="text" name="phone" placeholder="Phone" />
                                      <textarea name="address" placeholder="Votre description"></textarea>
                                      <select value="Votre naionlité" class="national">
                                        <option type="text" checked>votre nationalite</option>
                                        <option type="checkbox">Afghane</option>
                                        <option type="checkbox">Albanaise</option>
                                        <option type="checkbox">Algerienne</option>
                                        <option type="checkbox">Allemande</option>
                                        <option type="checkbox">Americaine</option>
                                        <option type="checkbox">Andorrane</option>
                                        <option type="checkbox">angolaise</option>
                                        <option type="checkbox">Antiguaise et Barbuddienne</option>
                                        <option type="checkbox">Argentine</option>
                                        <option type="checkbox">Armenienne</option>
                                        <option type="checkbox">Australienne</option>
                                        <option type="checkbox">Autrichienne</option>
                                        <option type="checkbox">Azerbaïdjanaise</option>
                                        <option type="checkbox">Bahamienne</option>
                                        <option type="checkbox">Bahreienienne</option>
                                        <option type="checkbox">Bangladaise</option>
                                        <option type="checkbox">Barbadienne</option>
                                        <option type="checkbox">Belge</option>
                                        <option type="checkbox">Belizienne</option>
                                        <option type="checkbox">Beninoise</option>
                                        <option type="checkbox">Bhoutanaise</option>
                                        <option type="checkbox">Bielorusse</option>
                                        <option type="checkbox">Birmane</option>
                                        <option type="checkbox">Bissau-guinéenne</option>
                                        <option type="checkbox">Bolivienne</option>
                                        <option type="checkbox">Bosnienne</option>
                                        <option type="checkbox">Botswanaise</option>
                                        <option type="checkbox">Bresilienne</option>
                                        <option type="checkbox">Britannique</option>
                                        <option type="checkbox">Bruneienne</option>
                                        <option type="checkbox">Bulgare</option>
                                        <option type="checkbox">Burkinnabe</option>
                                        <option type="checkbox">Burundaise</option>
                                        <option type="checkbox">Cambodgienne</option>
                                        <option type="checkbox">Camerounaise</option>
                                        <option type="checkbox">Canadienne</option>
                                        <option type="checkbox">cap-Verdienne</option>
                                        <option type="checkbox">Centrafricaine</option>
                                        <option type="checkbox">Chilienne</option>
                                        <option type="checkbox">Chinoise</option>
                                        <option type="checkbox">Chypriote</option>
                                        <option type="checkbox">Colombienne</option>
                                        <option type="checkbox">Comorienne</option>
                                        <option type="checkbox">Congolaise</option>
                                        <option type="checkbox">Costaricaine</option>
                                        <option type="checkbox">Croate</option>
                                        <option type="checkbox">cubaine</option>
                                        <option type="checkbox">Curaçaoane</option>
                                        <option type="checkbox">Danoise</option>
                                        <option type="checkbox">Djiboutienne</option>
                                        <option type="checkbox">Doominicaine</option>
                                        <option type="checkbox">Doominiquaise</option>
                                        <option type="checkbox">Egyptienne</option>
                                        <option type="checkbox">Emirienne</option>
                                        <option type="checkbox">Equoato-guineenne</option>
                                        <option type="checkbox">Equatorienne</option>
                                        <option type="checkbox">Erythreenne</option>
                                        <option type="checkbox">Espagnole</option>
                                        <option type="checkbox">Est-timoraise</option>
                                        <option type="checkbox">Estonienne</option>
                                        <option type="checkbox">Ethiopienne</option>
                                        <option type="checkbox">Fidjienne</option>
                                        <option type="checkbox">Finlandaise</option>
                                        <option type="checkbox">Française</option>
                                        <option type="checkbox">Gabonaise</option>
                                        <option type="checkbox">Gombienne</option>
                                        <option type="checkbox">Georgienne</option>
                                        <option type="checkbox">Ghanienne</option>
                                        <option type="checkbox">Grenadienne</option>
                                        <option type="checkbox">Guatemalteque</option>
                                        <option type="checkbox">Guineenne</option>
                                        <option type="checkbox">Guyanienne</option>
                                        <option type="checkbox">Haïtienne</option>
                                        <option type="checkbox">Hellenique</option>
                                        <option type="checkbox">Hondurienne</option>
                                        <option type="checkbox">Hongroise</option>
                                        <option type="checkbox">Indienne</option>
                                        <option type="checkbox">Indonesienne</option>
                                        <option type="checkbox">Irakienne</option>
                                        <option type="checkbox">Irlandaise</option>
                                        <option type="checkbox">Islandaise</option>
                                        <option type="checkbox">Italienne</option>
                                        <option type="checkbox">Ivoirienne</option>
                                        <option type="checkbox">jamaïcaine</option>
                                        <option type="checkbox">Japonaise</option>
                                        <option type="checkbox">Jodanienne</option>
                                        <option type="checkbox">KAzakhstanaise</option>
                                        <option type="checkbox">Kenyane</option>
                                        <option type="checkbox">Kittitienne-et-nevicenne</option>
                                        <option type="checkbox">Kossovienne</option>
                                        <option type="checkbox">Koweitienne</option>
                                        <option type="checkbox">Laotienne</option>
                                        <option type="checkbox">Lesothane</option>
                                        <option type="checkbox">Lettone</option>
                                        <option type="checkbox">Libanaise</option>
                                        <option type="checkbox">Liberienne</option>
                                        <option type="checkbox">Libyenne</option>
                                        <option type="checkbox">Liechtensteinoise</option>
                                        <option type="checkbox">Lituanienne</option>
                                        <option type="checkbox">Luxembourgeoise</option>
                                        <option type="checkbox">Macedonienne</option>
                                        <option type="checkbox">Malaisienne</option>
                                        <option type="checkbox">Malawienne</option>
                                        <option type="checkbox">Maldivienne</option>
                                        <option type="checkbox">Maldivienne</option>
                                        <option type="checkbox">Malgache</option>
                                        <option type="checkbox">Malienne</option>
                                        <option type="checkbox">Maltaise</option>
                                        <option type="checkbox">Marocaine</option>
                                        <option type="checkbox">Marshallaise</option>
                                        <option type="checkbox">Mauricienne</option>
                                        <option type="checkbox">Mauritanienne</option>
                                        <option type="checkbox">Mexicaine</option>
                                        <option type="checkbox">Moldave</option>
                                        <option type="checkbox">Monegasque</option>
                                        <option type="checkbox">Mongale</option>
                                        <option type="checkbox">Montenegrine</option>
                                        <option type="checkbox">Mozambicaine</option>
                                        <option type="checkbox">Namibienne</option>
                                        <option type="checkbox">Nauruane</option>
                                        <option type="checkbox">Neerlandaise</option>
                                        <option type="checkbox">Neo-zelandaise</option>
                                        <option type="checkbox">Nepalaise</option>
                                        <option type="checkbox">Nicaraguayenne</option>
                                        <option type="checkbox">Nigeriane</option>
                                        <option type="checkbox">Nigerienne</option>
                                        <option type="checkbox">Nord-coréenne</option>
                                        <option type="checkbox">Norvegienne</option>
                                        <option type="checkbox">Omanaise</option>
                                        <option type="checkbox">Ougandaise</option>
                                        <option type="checkbox">Ouzbeke</option>
                                        <option type="checkbox">Pakistanaise</option>
                                        <option type="checkbox">Palau</option>
                                        <option type="checkbox">Palestinienne</option>
                                        <option type="checkbox">Pakistanaise</option>
                                        <option type="checkbox">Palau</option>
                                        <option type="checkbox">Panameenne</option>
                                        <option type="checkbox">Papouane-neoguineenne</option>
                                        <option type="checkbox">Paraguayenne</option>
                                        <option type="checkbox">Peruvienne</option>
                                        <option type="checkbox">Philippine</option>
                                        <option type="checkbox">Plonaise</option>
                                        <option type="checkbox">Portoricaine</option>
                                        <option type="checkbox">Portugaise</option>
                                        <option type="checkbox">Qatarienne</option>
                                        <option type="checkbox">Roumaine</option>
                                        <option type="checkbox">Russe</option>
                                        <option type="checkbox">Rwandaise</option>
                                        <option type="checkbox">Saint-Lucienne</option>
                                        <option type="checkbox">Saint-Marinaise</option>
                                        <option type="checkbox">Sainr-Marinoise</option>
                                        <option type="checkbox">Saint-Vincentaise-et-Grenadine</option>
                                        <option type="checkbox">Salomonaise</option>
                                        <option type="checkbox">Salvadorienne</option>
                                        <option type="checkbox">Samoane</option>
                                        <option type="checkbox">Santomeene</option>
                                        <option type="checkbox">Saoudienne</option>
                                        <option type="checkbox">Senegalaise</option>
                                        <option type="checkbox">Serbe</option>
                                        <option type="checkbox">Seychelloise</option>
                                        <option type="checkbox">Sierra-leonaise</option>
                                        <option type="checkbox">Singapourienne</option>
                                        <option type="checkbox">Slovaque</option>
                                        <option type="checkbox">Slovene</option>
                                        <option type="checkbox">Somalienne</option>
                                        <option type="checkbox">Soudanaise</option>
                                        <option type="checkbox">Sri-Soudanaise</option>
                                        <option type="checkbox">Sri-lankaise</option>
                                        <option type="checkbox">Sud-Soudanaise</option>
                                        <option type="checkbox">Sud-africaine</option>
                                        <option type="checkbox">Sud-coréenne</option>
                                        <option type="checkbox">Suedoise</option>
                                        <option type="checkbox">Suisse</option>
                                        <option type="checkbox">Surinamaise</option>
                                        <option type="checkbox">Swazie</option>
                                        <option type="checkbox">Syrienne</option>
                                        <option type="checkbox">Tadjike</option>
                                        <option type="checkbox">Taiwanaise</option>
                                        <option type="checkbox">Tanzanienne</option>
                                        <option type="checkbox">Tchadienne</option>
                                        <option type="checkbox">Tcheque</option>
                                        <option type="checkbox">Thaïlandaise</option>
                                        <option type="checkbox">Togolaise</option>
                                        <option type="checkbox">Tonguienne</option>
                                        <option type="checkbox">Trinidadienne</option>
                                        <option type="checkbox">Tunisienne</option>
                                        <option type="checkbox">Turkmene</option>
                                        <option type="checkbox">Turque</option>
                                        <option type="checkbox">Tuvaluane</option>
                                        <option type="checkbox">Ukrainienne</option>
                                        <option type="checkbox">Uruguayenne</option>
                                        <option type="checkbox">Vanuatuane</option>
                                        <option type="checkbox">Vaticane</option>
                                        <option type="checkbox">Venezuelienne</option>
                                        <option type="checkbox">Vaticane</option>
                                        <option type="checkbox">Venezulienne</option>
                                        <option type="checkbox">Vietnamienne</option>
                                        <option type="checkbox">Yemenite</option>
                                        <option type="checkbox">Zambienne</option>
                                        <option type="checkbox">Zimbabweenne</option>
                                      </select>
                                      <select value="Votre naionlité" class="national">
                                        <option type="text" checked>Langue parlées</option>
                                        <option type="checkbox">Allemand</option>
                                        <option type="checkbox">Anglais</option>
                                        <option type="checkbox">Arabe</option>
                                        <option type="checkbox">Bulgare</option>
                                        <option type="checkbox">Croate</option>
                                        <option type="checkbox">Danois</option>
                                        <option type="checkbox">Espagnol</option>
                                        <option type="checkbox">Estonien</option>
                                        <option type="checkbox">Finnois</option>
                                        <option type="checkbox">Français</option>
                                        <option type="checkbox">Grec</option>
                                        <option type="checkbox">Hongrois</option>
                                        <option type="checkbox">Irlandais</option>
                                        <option type="checkbox">Italien</option>
                                        <option type="checkbox">Letton</option>
                                        <option type="checkbox">Lituanien</option>
                                        <option type="checkbox">Maltais</option>
                                        <option type="checkbox">Néerlandais</option>
                                        <option type="checkbox">Polonais</option>
                                        <option type="checkbox">Portugais</option>
                                        <option type="checkbox">Roumain</option>
                                        <option type="checkbox">Russe</option>
                                        <option type="checkbox">Slovaque</option>
                                        <option type="checkbox">Slovéne</option>
                                        <option type="checkbox">Suédois</option>
                                        <option type="checkbox">Tchèque</option>
                                      </select>
                                      <select value="Votre naionlité" class="national">
                                        <option type="text" checked>Ce qui vous intéresse</option>
                                        <option type="checkbox">#partagetaxi</option>
                                        <option type="checkbox">#hebergement</option>
                                        <option type="checkbox">#bonplan</option>
                                        <option type="checkbox">#festival</option>
                                        <option type="checkbox">#soirée</option>
                                        <option type="checkbox">#visites</option>
                                        <option type="checkbox">#musée</option>
                                        <option type="checkbox">#natioslangues</option>
                                        <option type="checkbox">#escale</option>
                                        <option type="checkbox">#discuter</option>
                                        <option type="checkbox">#roadtrip</option>
                                        <option type="checkbox">#conseils</option>
                                        <option type="checkbox">"tourdumonde"</option>
                                        <option type="checkbox">#rando</option>
                                        <option type="checkbox">#vanilife</option>
                                        <option type="checkbox">#expatrier</option>
                                        <option type="checkbox">#famille</option>
                                        <option type="checkbox">#urbex</option>
                                        <option type="checkbox">#photo</option>
                                      </select> --}}
                                      <hr>
                                      <a href="#" class="text-center" style="color:#5a6cae" >VOUS AVEZ UN COMPTE ?</a>
                                      <br><input type="button" name="login" class="next action-button" value="Se connecter" />
                                    
                                </form>  
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
        