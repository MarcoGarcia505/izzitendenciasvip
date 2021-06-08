@extends('template')

@section('javascripts')
    <script src="{{ url('js/main.v2.js') }}"></script>
@endsection

@section('content')
    <div class="nomove">
        <section class="hero-wrap degree-right js-fullheight" id="new">
            <div class="fondopatrocinador">
                <div class="slider-item js-fullheight">
                    <a href="{{ route('conferencia') }}">
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
                        
                        <div class="item-empresas">
                          <img src="{{ asset('images/empresas/IKUSI.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                        </div>
                        
                        <div class="item-empresas">
                          <img src="{{ asset('images/empresas/KIO.png') }}" alt="" class="item-img-empresas" style="width: 142px;">
                        </div>
                        
                        <div class="item-empresas">
                          <img src="{{ asset('images/empresas/MICROSOFT.png') }}" alt="" class="item-img-empresas" style="width: 200px;">
                        </div>

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
                    </a>
                </div>
            </div>
        </section>
    </div>

    @if (auth()->user()->acl_level < 100)
        <div class="btn-opc">
            {{-- <img class="img-opc" src="{{ url('images/icons/conversacion.svg') }}" alt=""> --}}
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
