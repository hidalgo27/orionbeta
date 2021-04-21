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
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Preguntas Frecuentes</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="default-title mt-4">
                            <h2>Preguntas Frecuentes</h2>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="panel-group accordion pt-1" id="accordion0">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingTwo">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" href="#" aria-expanded="false" aria-controls="collapseTwo">
                                            ¿Donde están ubicados?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Buen día, puede visitarnos en nuestros 6 locales:</p>

                                        <h3>Orion Garcilaso</h3>
                                        <p>Av. Prolongación Garcilaso N°700 Wanchaq – Cusco</p>

                                        <h3>Orion Cultura</h3>
                                        <p>Av de la Cultura Urb. Santa Rosa F-1Wanchaq – Cusco</p>

                                        <h3>Orion Huayruropata</h3>
                                        <p>Av. Huayruropata N° 931 Wanchaq</p>

                                        <h3>Orion Union</h3>
                                        <p>Calle Unión N°117 Cusco – Cusco</p>

                                        <h3>Orion matara</h3>
                                        <p>Calle Matará N°271 Cusco – Cusco</p>

                                        <h3>Orion Cultura</h3>
                                        <p>Av.de La Cultura N°1404 Urb. Chachacomayoc - Wanchaq – Cusco</p>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingThree">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" href="#" aria-expanded="false" aria-controls="collapseThree">
                                            ¿Qué productos puedo comprar en orion.com.pe?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Puedes encontrar productos que tenemos exhibidos en  todos nuestros locales.</p>
                                        <p>Para nosotros, es muy importante saber cuáles son tus necesidades en cada pedido, de modo de cumplir cada vez mejor con tus expectativas. Agradecemos que  puedas mencionarnos qué productos no encuentras, para incluirlos a la brevedad.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfour">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefour" href="#" aria-expanded="false" aria-controls="collapsefour">
                                            ¿Por qué comprar en Orion Supermercados?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Porque podrás recibir un servicio de calidad, puntualidad y personalizado desde el punto donde te encuentres, ahorrando tiempo y dinero accediendo a nuestras ofertas y promociones exclusivas en orion.com.pe. Compra fácilmente desde nuestra plataforma fácil y rápida.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingfive">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsefive" href="#" aria-expanded="false" aria-controls="collapsefive">
                                            ¿Qué pasa si no logro hacer la compra? / ¿Qué pasa si no entiendo algo?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Para obtener mayor información podrás comunicarte con uno de nuestros asesores. Srta. Eneida Coiso CEL: 965 642 784</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingsix">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapsesix" href="#" aria-expanded="false" aria-controls="collapsesix">
                                            ¿Qué medios de pago puedo utilizar en Orion Supermercados?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Los medios de pago que tenemos disponibles para ti son: Visa, Mastercard, American Express y Diners Club International.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingseven">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseseven" href="#" aria-expanded="false" aria-controls="collapseseven">
                                            ¿Es resguardada la confidencialidad de mis datos?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Sí. Garantizamos que los datos ingresados son utilizados exclusivamente para generar tu pedido y lograr una comunicación personal contigo, con el objetivo de brindar un mejor servicio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseeight" href="#" aria-expanded="false" aria-controls="collapseeight">
                                            ¿Es seguro ingresar los datos de mi tarjeta de crédito?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Sí, orion.com.pe protege la confidencialidad de los datos de tu tarjeta a través de dos formas: encriptación SSL entre tu navegador y el sitio de orion.com.pe</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse9" href="#" aria-expanded="false" aria-controls="collapse9">
                                            ¿Hay gastos de envío?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Sí, hay gastos de envíos, cuyo valor dependerá del día y del horario que elijas para tu despacho.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse10" href="#" aria-expanded="false" aria-controls="collapse10">
                                            El producto no es de mi agrado, ¿Lo puedo devolver?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Sí. Debes solicitar la devolución dentro de las primeras 24 horas y presentar la boleta o guía de despacho. El producto debe conservar las mismas características de cuando fue entregado* y considerar los accesorios respectivos, de modo de hacer el retiro más eficiente. * No debe ser abierto, ni probado ni usado. * Debe estar sellado, con sus embalajes originales completos. * No pueden estar rotos los sellos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse11" href="#" aria-expanded="false" aria-controls="collapse11">
                                            ¿Cómo comprar en orion.com.pe?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Una vez registrado, agrega al carro los productos seleccionados, que se encuentran ordenados por categorías. Finalizada la compra, presiona pagar y selecciona los criterios de sustitución y forma de pago. Luego, indica la dirección de despacho y el día y horario en que quieres recibir la compra. Para finalizar, revisa el total y confirma tu pago.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse12" href="#" aria-expanded="false" aria-controls="collapse12">
                                            ¿Por qué puedo comprar máximo 5 unidades por producto?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Orion.com.pe está orientado al consumo familiar, siendo 20 unidades un estándar considerado como uso personal. Si desea adquirir mayor cantidad, se sugiere comunicarse con la asesora. Srta. Eneida Coiso CEL: 965 642 784
                                            Hay productos que utilizan otra unidad de medición, como la carne, en cuyo caso se considera un máximo de gramaje, información que puede ser consultada en nuestro call center 965 642 784.
                                        </p>
                                    </div>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse13a" href="#" aria-expanded="false" aria-controls="collapse13a">
                                            Si no encuentro un producto ¿Qué puedo hacer?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse13a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Puedes envíanos un correo a info@orion.com.pe mencionando cuáles fueron los productos no encontrados, de modo de trabajar en sumarlos a nuestro surtido.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse13" href="#" aria-expanded="false" aria-controls="collapse13">
                                            ¿Cómo saber el estado de mi pedido?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Podrás comunicarte con uno de nuestros asesores.
                                            Srta. Eneida Coiso CEL: 965 642 784
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse14" href="#" aria-expanded="false" aria-controls="collapse14">
                                            ¿Cómo saber si estoy dentro de la cobertura para realizar un pedido?
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Podrás comunicarte con uno de nuestros asesores.
                                            Srta. Eneida Coiso CEL: 965 642 784
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingeight">
                                    <div class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapse15" href="#" aria-expanded="false" aria-controls="collapse15">
                                            Cobros y reclamos
                                        </a>
                                    </div>
                                </div>
                                <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion0">
                                    <div class="panel-body">
                                        <p>Podras escribirnos y enviaros todos tus datos para poder comunicaros contigo a la dirección info@orion.com.pe, en breve nos comunicaremos contigo.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
