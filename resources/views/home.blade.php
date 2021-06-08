@extends('template')

@section('javascripts')
    <script src="{{ url('js/main.v2.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/JQuery3.3.1.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/lightslider.js') }}"></script>    
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#exampleModalCenter').modal('show');
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href=" {{ asset('css/stylescrollet.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lightslider.css') }}"/>
@endsection


@section('content')
        <!-- Sección 1 -->
    {{-- <section id="seccion-1">
        <div class="nomove"> --}}
            <section class="hero-wrap degree-right js-fullheight" id="home">
                        <div class="container-empresas">
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/CORNING.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>9:50 – 10:30</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    {{-- <p class="mb-0"><a href="https://8x8.vc/cwamx/jrivera" class="playbutton img-video popup-vimeo d-flex align-items-center justify-content-center" data-autoplay="true" data-vbtype="video">
                                        <span class="patrocinador-name">INGRESE AQUI</span>
                                    </a></p> --}}
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/EYENET.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>10:40 – 11:20</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresas">
                              <img src="{{ asset('images/empresas/FIBRASOPTICAS.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                              <div class="details">
                                <p>11:30 – 12:10</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/IKUSI.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>12:20 – 13:00</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/KIO.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>13:10 – 13:50</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/MICROSOFT.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>14:00 – 14:40</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
    
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/MIRADA.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>14:50 – 15:30</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                              
                              <div class="item-empresas">
                                <img src="{{ asset('images/empresas/RGO.png') }}" alt="" class="item-img-empresas" style="width: 70px; margin: auto;">
                                <div class="details">
                                    <p>15:40 – 16:20</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                              
                            <div class="item-empresas">
                                <img src="{{ asset('images/empresas/TREKTEL.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                <div class="details">
                                    <p>16:30 – 17:10</p>
                                </div>
                                <div class="buttonconf-patrocinador">
                                    <a href="#seccion-4">
                                        <button type="submit" class="buttonpatrocinador">
                                            <span class="patrocinador-name">INGRESE AQUI</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                          </div>
            </section>
            
            <section id="seccion-3">
                <div class="contenedorlista">
                    <div id="main-container-agent">
                        <table>
                            <thead>
                                <tr>
                                    <th style="border-radius: 20px 0px 0px 0px;">Horario</th>
                                    <th>Actividad</th>
                                    <th style="border-radius: 0px 20px 0px 0px;">Tema y expositor</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>9:00 – 9:40</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>9:50 – 10:30</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>10:40 – 11:20</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11:30 – 12:10</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12:20 – 13:00</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>13:10 – 13:50</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:00 – 14:40</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14:50 – 15:30</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>15:40 – 16:20</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>16:30 – 17:10</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
            </div>
        </section>


        <!-- Sección 2 -->
        <section id="seccion-2">
                <div class="container-empresas">
                    <div class="item-empresas">
                        <img src="{{ asset('images/empresas/CORNING.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </div>
                    
                    <div class="item-empresas">
                        <img src="{{ asset('images/empresas/EYENET.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </div>
                    
                    <div class="item-empresas">
                    <img src="{{ asset('images/empresas/FIBRASOPTICAS.png') }}" alt="" class="item-img-empresas" style="width: 170px;">
                    </div>

                    <a href="#opc1" class="item-empresas">
                        <img src="{{ asset('images/empresas/IKUSI.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </a>
                    
                    <div class="item-empresas">
                    <img src="{{ asset('images/empresas/KIO.png') }}" alt="" class="item-img-empresas" style="width: 142px;">
                    </div>
                    
                    <a href="#microsoft" class="item-empresas">
                        <img src="{{ asset('images/empresas/MICROSOFT.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </a>

                    <div class="item-empresas">
                        <img src="{{ asset('images/empresas/MIRADA.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </div>
                    
                    <div class="item-empresas">
                        <img src="{{ asset('images/empresas/RGO.png') }}" alt="" class="item-img-empresas" style="width: 100px;">
                    </div>
                    
                    <div class="item-empresas">
                        <img src="{{ asset('images/empresas/TREKTEL.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                    </div>
                </div>
        </section>

        <!-- Sección 3 -->

        <section id="seccion-4">
            <div class="video-conferencia" style="width: 100%; height: 100vh;">
                <iframe allow="camera; microphone; fullscreen; display-capture; autoplay" src="https://8x8.vc/cwamx/jrivera" style="height: 100%; width: 100%; border: 0px;"></iframe>
            </div>
        </section>
        
    


    {{-- <div class="fondo">
            <div class="container-arana">
                    <ul id="autoWidth" class="cs-hidden" style="width: 6460px; transform: translate3d(-1520px, 0px, 0px); height: 521px; padding-bottom: 0%;">
                <li class="item-a">
                    <div class="box">
                        <img src="{{ asset('images/empresas/CORNING.png') }}" class="model" style="width: 220px; margin: auto;">
                        <div class="details">
                            <p>9:50 – 10:30</p>
                        </div>
                        <div class="buttonconf">
                            <a href="{{ route('conferencia') }}">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">INGRESE AQUI</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="box">
                        <img src="{{ asset('images/empresas/EYENET.png') }}" class="model" style="width: 200px; margin: auto;">
                        <div class="details">
                            <p>10:40 – 11:20</p>
                        </div>
                        <div class="buttonconf">
                            <a href="{{ route('conferencia') }}">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">INGRESE AQUI</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="item-a">
                    <div class="box">
                        <img src="{{ asset('images/empresas/FIBRASOPTICAS.png') }}" class="model" style="width: 170px; margin: auto;">
                        <div class="details">
                            <p>11:30 – 12:10</p>
                        </div>
                        <div class="buttonconf">
                            <a href="{{ route('conferencia') }}">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">INGRESE AQUI</span>
                                </button>
                            </a>
                        </div>
                    </div>
                    </li>
                <li class="item-a">
                    <div class="box">
                    <img src="{{ asset('images/empresas/IKUSI.png') }}" class="model" style="width: 200px; margin: auto;">
                    <div class="details">
                    <P>12:20 – 13:00</P>
                </div>
                <div class="buttonconf">
                    <a href="{{ route('conferencia') }}">
                        <button type="submit" class="login100-form-btn">
                            <span class="bob">INGRESE AQUI</span>
                        </button>
                    </a>
                </div>
                    
                    </div>
                </li>
                <li class="item-a">
                    <div class="box">
                    <img src="{{ asset('images/empresas/KIO.png') }}" class="model" style="width: 142px; margin: auto;">
                    <div class="details">
                        <P>13:10 – 13:50</P>
                </div>
                <div class="buttonconf">
                    <a href="{{ route('conferencia') }}">
                        <button type="submit" class="login100-form-btn">
                            <span class="bob">INGRESE AQUI</span>
                        </button>
                    </a>
                </div>
                    
                    </div>
                    </li>
                <li class="item-a">
                    <div class="box">
                    <img src="{{ asset('images/empresas/MICROSOFT.png') }}" class="model" style="width: 200px; margin: auto;">
                    <div class="details">
                        <P>14:00 – 14:40</P>
                </div>
                <div class="buttonconf">
                    <a href="{{ route('conferencia') }}">
                        <button type="submit" class="login100-form-btn">
                            <span class="bob">INGRESE AQUI</span>
                        </button>
                    </a>
                </div>
                    
                    </div>
                </li>

                <li class="item-a">
                    <div class="box">
                      <img src="{{ asset('images/empresas/MIRADA.png') }}" class="model" style="width: 200px; margin: auto;">
                      <div class="details">
                        <P>14:50 – 15:30</P>
                      </div>
                      <div class="buttonconf">
                        <a href="{{ route('conferencia') }}">
                            <button type="submit" class="login100-form-btn">
                                <span class="bob">INGRESE AQUI</span>
                            </button>
                        </a>
                    </div>
                    </div>
                </li>

                <li class="item-a">
                      <div class="box">
                        <img src="{{ asset('images/empresas/RGO.png') }}" class="model" style="width: 100px; margin: auto;">
                        <div class="details">
                            <P>15:40 – 16:20</P>
                        </div>
                        <div class="buttonconf">
                            <a href="{{ route('conferencia') }}">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">INGRESE AQUI</span>
                                </button>
                            </a>
                        </div>
                      </div>
                </li>

                <li class="item-a">
                      <div class="box">
                        <img src="{{ asset('images/empresas/TREKTEL.png') }}" class="model" style="width: 200px; margin: auto;">
                        <div class="details">
                            <P>16:30 – 17:10</P>
                        </div>
                        <div class="buttonconf">
                            <a href="{{ route('conferencia') }}">
                                <button type="submit" class="login100-form-btn">
                                    <span class="bob">INGRESE AQUI</span>
                                </button>
                            </a>
                        </div>
                      </div>
                  </li>
                </ul>           
            </div>
    </div> --}}

    {{-- <section class="ftco-section bg-light" id="new3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Agenda</h2>
                </div>
            </div>
            <div class="timeline  ftco-animate">
                <ul>
                    <li>
                        <div class="content">
                            <h3>Registro de Participantes</h3>
                        </div>
                        <div class="time">
                            <h4>9:30</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Bienvenida</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>10:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Plática con Directores Regionales</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>10:05</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación DGA: Resultados y Retos</h3>
                            <p>Fernando Quesada  </p>
                        </div>
                        <div class="time">
                            <h4>10:30</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Entorno Económico</h3>
                            <p>Luis Flores</p>
                        </div>
                        <div class="time">
                            <h4>11:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Captación y Seguros Emp.</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>11:45</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje RRHH</h3>
                            <p>Juan Ignacio Echeverría  </p>
                        </div>
                        <div class="time">
                            <h4>11:55</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación ROF y Nómina</h3>
                            <p>Iván Riva Palacio</p>
                        </div>
                        <div class="time">
                            <h4>12:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Sol Financieras</h3>
                            <p>Martin Villareal</p>
                        </div>
                        <div class="time">
                            <h4>12:15</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje PyP</h3>
                            <p>Pablo Elek  </p>
                        </div>
                        <div class="time">
                            <h4>12:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Neg. Int y Agro</h3>
                            <p>Rodolfo Hernandez Sada </p>
                        </div>
                        <div class="time">
                            <h4>12:25</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Banca Transaccional</h3>
                            <p>Marcos Abal  </p>
                        </div>
                        <div class="time">
                            <h4>12:35</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Plática entre DGA´s</h3>
                            <p>Fernando Quesada y Ricardo Alonso </p>
                        </div>
                        <div class="time">
                            <h4>12:40</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Arrendadora</h3>
                            <p>Michael Goeters </p>
                        </div>
                        <div class="time">
                            <h4>12:55</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Inst. y SP.</h3>
                            <p>Pilar Herrera </p>
                        </div>
                        <div class="time">
                            <h4>13:00</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CFO</h3>
                            <p>Didier Mena </p>
                        </div>
                        <div class="time">
                            <h4>13:05</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Grandes Empresas</h3>
                            <p>Antonio Basagoiti</p>
                        </div>
                        <div class="time">
                            <h4>13:15</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Presentación Segmento Empresas</h3>
                            <p>Javier Rodriguez </p>
                        </div>
                        <div class="time">
                            <h4>13:20</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Mensaje CIB</h3>
                            <p>Octaviano Couttolenc</p>
                        </div>
                        <div class="time">
                            <h4>13:30</h4>
                        </div>
                    </li>


                    <li>
                        <div class="content">
                            <h3>Mensaje presidencia y DGA</h3>
                            <p>Héctor Grisi y Fernando Quesada </p>
                        </div>
                        <div class="time">
                            <h4>13:35</h4>
                        </div>
                    </li>

                    <li>
                        <div class="content">
                            <h3>Reconocimientos</h3>
                            <p>Fernando Quesada</p>
                        </div>
                        <div class="time">
                            <h4>13:50</h4>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <h3>Fin del evento </h3>
                            <p></p>
                        </div>
                        <div class="time">
                            <h4>14:00</h4>
                        </div>
                    </li>
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </div>
        <div class="degree-left-footer"></div>
    </section> --}}

    <div id="opc1" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <video src="videos/ikusi.mp4" controls style="width: 100%; height: 100%;" muted></video>
            {{-- <iframe allow="camera; microphone; fullscreen; display-capture; autoplay" src="https://8x8.vc/cwamx/jrivera" style="height: 100%; width: 100%; border: 0px;"></iframe> --}}
        </div>
    </div>


    <div id="microsoft" class="modalDialog">
        <div class="card-container">
            <a href="#close" title="Close" class="close">X</a>
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/297lKGQBBZA?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
        </div>
    </div>

    {{-- VIDEO DE ENTRADA A LA PAGINA --}}
    <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal-videointro">
			<div class="contenido">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/6Y0PMYwAH78?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
            </div>
		</div>

        
          
          <!-- Modal -->
         


    @if (auth()->user()->acl_level < 100)
        <div class="btn-opc">
            <img class="img-opc" src="{{ url('images/iconsignoizzi.png') }}" alt="">
        </div>
        <div class="btn-opc2 d-none">
            <img class="img-opc" src="{{ url('images/icons/respuesta.svg') }}" alt="">
        </div>
    @endif

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    @if (auth()->user()->acl_level < 100)
        <div class="chat-popup" id="chat-popup" data-sync="{{ route('read_messages') }}" data-sender="{{ auth()->user()->id }}" data-from="0" data-to="{{ date('U') }}">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="chat-container"></div>
            <div class="mt-1 chat-control">
                <form action="{{ route('send_message') }}" class="form-container">
                    <input placeholder="Ingrese su mensaje.." name="message" required></textarea>
                    <button type="submit" class="btn"><i class="fa fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="response-popup" id="response-popup">
            <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="/receiver_sync.php" class="form-container">
                <div class="response-container">
                    <h4>Respuestas</h4>
                    <div class="response-row">
                        <div>1:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>2:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" data-mark="1" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>3:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn" data-mark="1">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>4:</div>
                        <div>
                            <button type="button" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                    <div class="response-row">
                        <div>5:</div>
                        <div>
                            <button type="button" data-mark="1" class="btn">A</button>
                        </div>
                        <div>
                            <button type="button" class="btn">B</button>
                        </div>
                        <div>
                            <button type="button" class="btn">C</button>
                        </div>
                        <div>
                            <button type="button" class="btn">D</button>
                        </div>
                    </div>
                </div>
                <div class="mt-1 chat-control">
                    <button type="submit" class="btn w-100">Enviar</button>
                </div>
            </form>

            <div class="alert alert-success" style="display: none;">
                <strong>Gracias por comunicarse!</strong> Hemos registrado su pregunta.
            </div>
        </div>
    @endif
@endsection
