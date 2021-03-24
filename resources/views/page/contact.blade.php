@extends('layouts.default')
@section('content')
    <cart-blade></cart-blade>
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Locales y Contacto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="panel-group accordion" id="accordion0">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseOne" href="#" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Garcilaso
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion0" style="">
                                    <div class="panel-body">
                                        Av. Prolongación Garcilaso N°700 <br> Wanchaq - Cusco
{{--                                        <div class="color-pink">Tel: 0000-000-000</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Cultura
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Av de la Cultura Urb. Santa Rosa F-1 <br>
                                        Wanchaq - Cusco
{{--                                        <div class="color-pink">Tel: 0000-000-000</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Huayruropata
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Av. Huayruropata N° 931 <br> Wanchaq
{{--                                        <div class="color-pink">Tel: 0000-000-000</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfour">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#" aria-expanded="false" aria-controls="collapsefour">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Unión
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Calle Unión N°117 <br> Cusco - Cusco
{{--                                        <div class="color-pink">Tel: 0000-000-000</div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfive">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#" aria-expanded="false" aria-controls="collapsefive">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Matará
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Calle Matará N°271 <br> Cusco - Cusco
                                        <div class="color-pink">Tel: 0000-000-000</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingsix">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsesix" href="#" aria-expanded="false" aria-controls="collapsesix">
                                            <i class="uil uil-location-point chck_icon"></i>Orion Regional
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion0">
                                    <div class="panel-body">
                                        Av.de La Cultura N°1404 <br> Urb. Chachacomayoc - Wanchaq - Cusco.
{{--                                        <div class="color-pink">Tel: 0000-000-000</div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-title">
                            <h2>Atención al cliente</h2>
                            <p>Si tiene alguna pregunta sobre nuestro servicio o tiene un problema que informar, envíe una solicitud y nos comunicaremos con usted lo antes posible.</p>
                        </div>
                        @if (session('status'))
                            <div class="bg-primary text-white p-4 mt-4 rounded shadow-sm">
                                Su mensaje se envío correctamente. Gracias por contactar con nosotros.
                            </div>
                        @endif
                        <div class="contact-form">
                            <form method="post" action="{{route('formulario')}}">
                                @csrf
                                <div class="form-group mt-1">
                                    <label class="control-label">Nombre Completo*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendername" id="sendername" required="" placeholder="Nombre Completo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Email*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="email" name="emailaddress" id="emailaddress" required="" placeholder="Tu Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <label class="control-label">Asunto*</label>
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh19">
                                            <input class="prompt srch_explore" type="text" name="sendersubject" id="sendersubject" required="" placeholder="Asunto">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-1">
                                    <div class="field">
                                        <label class="control-label">Mensaje*</label>
                                        <textarea rows="2" class="form-control" id="sendermessage" name="sendermessage" required="" placeholder="Escriba su mensaje"></textarea>
                                    </div>
                                </div>
                                <button class="next-btn16 hover-btn mt-3" type="submit" data-btntext-sending="Sending...">Enviar Solicitud</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
