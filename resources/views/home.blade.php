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
            <section id="seccion-3">
                <div class="contenedorlista">
                    <div class="izzilogoscontenedor">
                        <div class="izzicontenedor1">
                            <div class="izzipatro1">
                                <img src="images/logoslogin/CORNING.png" alt="CORNING" class="imgemp1">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/EYENET.png" alt="EYENET" class="imgemp2">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/FIBRAS.png" alt="FIBRAS" class="imgemp3">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/IKUSI.png" alt="IKUSI" class="imgemp4">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/KIO.png" alt="KIO" class="imgemp5">
                            </div>
                        </div>
                        <div class="izzicontenedor2">
                            <div class="izzipatro11">
                                <img src="images/logoslogin/MICROSOFT1.png" alt="MICROSOFT" class="imgemp6">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/MIRADA.png" alt="MIRADA" class="imgemp7">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/RGO.png" alt="RGO" class="imgemp8">
                            </div>
                            <div class="izzipatro1">
                                <img src="images/logoslogin/TREKTEL1.png" alt="TREKTEL"  class="imgemp9">
                            </div>
                            <div class="izzipatro1">
                                <div class="imagennula"></div>
                            </div>
                        </div>
                    </div>
                    <div id="main-container-agent">
                        <div class="title-tabla">
                            <h2>AGENDA</h2>
                        </div>
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
            <div class="contenidosec2title">
                <div class="contpatro">
                    <h2>PATROCINADORES</h2>
                </div>
            </div>
            <div class="container-empresasnew">
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/CORNING.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#CORNING1">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/EYENET.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#EYENET">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresasnew">
                              <img src="{{ asset('images/empresas/FIBRASOPTICAS.png') }}" alt="" class="item-img-empresas" style="width: 90px; margin: auto;">
                              
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#FIBRASOPTICAS">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/IKUSI.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#IKUSI">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/KIO.png') }}" alt="" class="item-img-empresas" style="width: 90px; margin: auto;">
                               
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#KIO">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/logoslogin/MICROSOFT.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#microsoft">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
    
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/MIRADA.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#MIRADA">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                              
                              <div class="item-empresasnew">
                                <img src="{{ asset('images/empresas/RGO.png') }}" alt="" class="item-img-empresas" style="width: 50px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#RGO">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                              
                            <div class="item-empresasnew">
                                <img src="{{ asset('images/logoslogin/TREKTEL.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
                                
                                <div class="buttonconf-patrocinadornew">
                                    <a href="#TREKTEL">
                                        <button type="submit" class="buttonpatrocinadornew">
                                            <span class="patrocinador-namenew">Ver info</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                          </div>
    </section>

            <section class="hero-wrap degree-right js-fullheight" id="home">
                <div class="contenidosec2title">
                    <div class="contpatro">
                        <h2>SESI&Oacute;N</h2>
                    </div>
                </div>
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
                              <img src="{{ asset('images/empresas/FIBRASOPTICAS.png') }}" alt="" class="item-img-empresas" style="width: 90px; margin: auto;">
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
                                <img src="{{ asset('images/empresas/KIO.png') }}" alt="" class="item-img-empresas" style="width: 90px; margin: auto;">
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
                                <img src="{{ asset('images/logoslogin/MICROSOFT.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
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
                                <img src="{{ asset('images/empresas/RGO.png') }}" alt="" class="item-img-empresas" style="width: 50px; margin: auto;">
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
                                <img src="{{ asset('images/logoslogin/TREKTEL.png') }}" alt="" class="item-img-empresas" style="width: 130px; margin: auto;">
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
            
            


        

        <!-- Sección 4 -->
        <section id="seccion-4">
            <div class="video-conferencia" style="width: 100%; height: 100vh;">
                <iframe allow="camera; microphone; fullscreen; display-capture; autoplay" src="https://8x8.vc/cwamx/jrivera" style="height: 100%; width: 100%; border: 0px;"></iframe>
            </div>
        </section>



        {{-- SECCION DE MODALES EMPRESAS --}}
        <div id="CORNING1" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>CORNING</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BL_tf7IS3dM?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Corning es una de las principales innovadoras del mundo en ciencias de materiales. Durante casi 170 años, hemos estado colaborando con nuestros clientes para resolver desafíos tecnológicos complicados, a través de nuestra incomparable experiencia en ciencia del vidrio, de la cerámica y en física óptica para desarrollar productos que transforman las industrias y la vida de las personas. “Conectando Personas, Conectamos el Mundo”.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="EYENET" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>EYENET</h4>
                </div>
               <div style="text-align: center">
                   <img src="images/magenyenetmodal.png" alt="EYENET" width="180">
               </div>
                <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Ofrecemos distintos tipos de asesorías
                            Esta es el área precursora y desde la cual surgieron los procesos y organización actual,
                            nuestro enfoque es ayudarlo a mejorar sus procesos de negocio para contar con una infraestructura rápida, segura y disponible. El área de consultoría principal es la Seguridad Informática.
                            Proporcionamos asesoría desde el diseño de infraestructuras para cumplir con criterios óptimos de seguridad, máxima disponibilidad y optimización. En este marco se lleva a cabo la protección de plataformas y servicios y, en particular, la invulnerabilidad de infraestructuras corporativas, redes y accesos a Internet principalmente en entornos de servicios financieros.
                            </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="FIBRASOPTICAS" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>Fibras &Oacute;pticas</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XAhQgrg5mYk?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Somos Fibras Ópticas de México, única empresa de origen Latinoamericano que fabrica, desarrolla y comercializa soluciones completas en redes pasivas de fibra óptica.
                            Somos una empresa certificada en ISO 9001:2015, con nuestras marcas desde hace más de 15 años nos hemos especializado en brindar soluciones de innovación para la industria de las telecomunicaciones a través de un equipo comprometido con la satisfacción de nuestros clientes.
                            </p>
                    </div>
                    <a href="pdfempresas/fibrasopticas.pdf" download="Fibras &Oacute;pticas" class="descragarpdf">Descargar Archivo</a>
                </div>
            </div>
        </div>

        <div id="IKUSI" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>IKUSI</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/vvVeLUczzvA?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                 <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Ikusi, Soluciones para la transformación digital de tu organización.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="KIO" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>KIO</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/eYBnAbCzqcE?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                 <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>En KIO Networks todos vivimos con un mismo propósito: Usar la tecnología en beneficio de los demás.
 
                            Para KIO Networks la dependencia de las organizaciones está ligada a la tecnología y hoy deben operar de manera 100% distribuida, lo cual genera necesidad de cambios de aplicaciones, ciberseguridad, migración a la nube, entre otros procesos.
                            </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="microsoft" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>Microsoft</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/297lKGQBBZA?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                 {{-- <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Corning es una de las principales innovadoras del mundo en ciencias de materiales. Durante casi 170 años, hemos estado colaborando con nuestros clientes para resolver desafíos tecnológicos complicados, a través de nuestra incomparable experiencia en ciencia del vidrio, de la cerámica y en física óptica para desarrollar productos que transforman las industrias y la vida de las personas. “Conectando Personas, Conectamos el Mundo”.</p>
                    </div>
                </div> --}}
            </div>
        </div>

        <div id="MIRADA" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>mirada</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lP-t_Jlrv7s?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Mirada es un proveedor líder de soluciones de software integradas, que
                            ofrece una experiencia de visualización avanzada en todos los dispositivos
                            de los usuarios, con la que los operadores y broadcasters de televisión de
                            pago se posicionarán a la cabeza del sector.</p>
                    </div>
                </div>
            </div>
        </div>
       
    
        <div id="RGO" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>RGO</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tY1i-mN8bqI?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                 <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>RGO es una empresa mexicana con cobertura nacional,
                            especializada en comercialización de productos y servicios,
                            que contribuye al crecimiento de las compañías incrementando sus ventas a corto plazo, 
                            capaz de proporcionar valor agregado para sus socios de negocio y colaboradores.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="TREKTEL" class="modalDialog">
            <div class="card-container">
                <a href="#close" title="Close" class="close">X</a>
                <div class="titulopatrocinadores">
                    <h4>Trektel</h4>
                </div>
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/56Fs_EIQGtY?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
                <div class="contenidopatrocinadoresmodal">
                    <div class="contenidoempresas">
                        <p>Digital Network Transformation. Trektel is a reliable and trusted integrator of respected and strong key technology vendors, while providing unmatched customer care, with a true sense of dedication and loyalty. We
                            excel in everything we do, beyond our engagement and obligation towards the customers, looking to simplify and streamline their operations and bring new alternatives to their most
                            important business objectives. </p>
                    </div>
                </div>
            </div>
        </div>


        


    {{-- VIDEO DE ENTRADA A LA PAGINA --}}
    <input type="checkbox" id="cerrar">
		<label for="cerrar" id="btn-cerrar">X</label>
		<div class="modal-videointro">
			<div class="contenido">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/LlZ0EyElvD4?autoplay=1&mute=1&loop=1" frameborder="0" allow="autoplay" encrypted-media allowfullscreen></iframe>
            </div>
		</div>         

    @if (auth()->user()->acl_level < 100)
        <div class="btn-opc">
            <img class="img-opc" src="{{ url('images/iconsignoizzi.png') }}" alt="">
        </div>
        <div class="btn-opc2 d-none">
            <img class="img-opc" src="{{ url('images/icons/respuesta.svg') }}" alt="">
        </div>
    @endif

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


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>
@endsection
