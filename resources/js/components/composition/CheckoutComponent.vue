<template>
  <!-- Share Icons Start-->
  <!--    <div class="icon-bar">-->
  <!--        <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>-->
  <!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
  <!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
  <!--        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>-->
  <!--        <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>-->
  <!--    </div>-->
  <!-- Share Icons End-->
  <!-- Cart Sidebar Offset Start-->
  <cart-component :cart="cart"></cart-component>
  <!-- Cart Sidebar Offsetl End-->

  <!-- Login Model Start-->
  <div
    id="session_model"
    class="header-cate-model main-gambo-model modal fade"
    tabindex="-1"
    role="dialog"
    aria-modal="true"
    v-if="modalShow"
  >
    <div
      class="modal-dialog category-area"
      role="document"
    >
      <div class="category-area-inner">
        <div class="modal-header">
          <button
            type="button"
            class="close btn-close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <i class="uil uil-multiply"></i>
          </button>
        </div>
        <div class="category-model-content modal-content">
          <div class="cate-header">
            <h4>Inicie Sesión</h4>
          </div>

          <div class="sign-form">
            <div class="sign-inner">
              <div class="mt-5 sign-logo">
                <a href="index.html"><img
                    src="/images/logo-orion.png"
                    alt=""
                  ></a>
                <a href="index.html"><img
                    class="logo-inverse"
                    src="/images/logo-orion-white.png"
                    alt=""
                  ></a>
              </div>
              <div class="form-dt">
                <div class="form-inpts checout-address-step">
                  <div v-if="error">
                    <p class="h5 text-danger">¡Ups! Algo salió mal.</p>
                    <ul class="mb-4">
                      <li class="text-danger">
                        <i class="fas fa-circle"></i> {{ error.message }}
                      </li>
                    </ul>
                  </div>
                  <form
                    method="post"
                    @submit.prevent="onSubmit"
                  >
                    <input
                      type="hidden"
                      name="_token"
                      v-model="token"
                    >
                    <div class="form-title">
                      <h6>Iniciar sesión</h6>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        name="email"
                        v-model="email"
                        type="text"
                        placeholder="Tu email"
                        class="form-control lgn_input"
                        required
                      >
                      <i class="uil uil-mobile-android-alt lgn_icon"></i>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        name="password"
                        v-model="password"
                        type="password"
                        placeholder="Tu contraseña"
                        class="form-control lgn_input"
                        required
                      >
                      <i class="uil uil-padlock lgn_icon"></i>
                    </div>
                    <button
                      class="login-btn hover-btn mb-21"
                      type="submit"
                    >Iniciar Sesión Ahora</button>
                  </form>
                </div>
                <!--                                <div class="password-forgor">-->
                <!--                                    <a href="forgot_password.html">Forgot Password?</a>-->
                <!--                                </div>-->
                <!--                                <div class="signup-link">-->
                <!--                                    <p>¿No tiene una cuenta? - <a href="sign_up.html">Registrarse</a></p>-->
                <!--                                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Model End-->

  <!-- Login Model Start-->
  <div
    id="register_model"
    class="header-cate-model main-gambo-model modal fade"
    tabindex="-1"
    role="dialog"
    aria-modal="true"
    v-if="modalShow"
  >
    <div
      class="modal-dialog category-area"
      role="document"
    >
      <div class="category-area-inner">
        <div class="modal-header">
          <button
            type="button"
            class="close btn-close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <i class="uil uil-multiply"></i>
          </button>
        </div>
        <div class="category-model-content modal-content">
          <div class="cate-header">
            <h4>Registro</h4>
          </div>

          <div class="sign-form">
            <div class="sign-inner">
              <div
                class="mt-5 sign-logo"
                id="logo"
              >
                <a href="/"><img
                    class="logo-inverse"
                    src="/images/logo-orion-white.png"
                    alt=""
                  ></a>
                <a href="/"><img
                    src="/images/logo-orion.png"
                    alt=""
                  ></a>
              </div>
              <div class="form-dt">
                <div class="form-inpts checout-address-step">
                  <div v-if="error">
                    <p class="h5 text-danger">¡Ups! Algo salió mal.</p>
                    <ul class="mb-4">

                      <li class="text-danger">
                        <i class="fas fa-circle"></i> {{ error.message }}
                      </li>
                      <li
                        class="text-danger"
                        v-for="(er, index) in error.errors.email"
                      >
                        <i class="fas fa-circle"></i> {{ er }}
                      </li>
                      <li
                        class="text-danger"
                        v-for="(er, index) in error.errors.password"
                      >
                        <i class="fas fa-circle"></i> {{ er }}
                      </li>
                    </ul>
                  </div>
                  <form
                    method="post"
                    @submit.prevent="onSubmitReg"
                  >
                    <input
                      type="hidden"
                      name="_token"
                      v-model="token"
                    >
                    <div class="form-title">
                      <h6>Nuevo Registro</h6>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        id="full[name]"
                        name="name"
                        type="text"
                        v-model="name"
                        placeholder="Nombre Completo"
                        class="form-control lgn_input"
                        required=""
                      >
                      <i class="uil uil-user-circle lgn_icon"></i>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        id="email[address]"
                        name="email"
                        v-model="email"
                        type="email"
                        placeholder="Email"
                        class="form-control lgn_input"
                        required=""
                      >
                      <i class="uil uil-envelope lgn_icon"></i>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        name="password"
                        v-model="password"
                        type="password"
                        placeholder="Ingrese Contraseña"
                        class="form-control lgn_input"
                        required=""
                      >
                      <i class="uil uil-padlock lgn_icon"></i>
                    </div>
                    <div class="form-group pos_rel">
                      <input
                        name="password_confirmation"
                        v-model="password_confirmation"
                        type="password"
                        placeholder="Confirmar Contraseña"
                        class="form-control lgn_input"
                        required=""
                      >
                      <i class="uil uil-padlock lgn_icon"></i>
                    </div>
                    <button
                      class="login-btn hover-btn mb-21"
                      type="submit"
                    >Registarme Ahora</button>
                  </form>
                </div>
                <!--                                <div class="signup-link">-->
                <!--                                    <p>I have an account? - <button type="button" data-toggle="modal" data-target="#session_model" title="Session">Sign In Now</button></p>-->
                <!--                                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Model End-->

  <!-- Header Start -->
  <!--    <header-component :cart = "cart.length" :user="user"></header-component>-->
  <div class="wrapper">
    <div class="gambo-Breadcrumb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li
                  class="breadcrumb-item active"
                  aria-current="page"
                >Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="all-product-grid">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div
              id="checkout_wizard"
              class="checkout accordion left-chck145"
            >
              <div class="checkout-step">
                <div
                  class="checkout-card"
                  id="headingOne"
                >
                  <span class="checkout-step-number">1</span>
                  <h4 class="checkout-step-title">
                    <button
                      class="wizard-btn"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    > Verificación de cuenta</button>
                  </h4>
                </div>
                <div
                  id="collapseOne"
                  class="collapse in"
                  data-parent="#checkout_wizard"
                  :class="{ show: user === 0 ? true : false  }"
                >
                  <div
                    class="checkout-step-body"
                    v-if="user === 0"
                  >
                    <p>Para poder proceder con la compra se requiere que acceda a su cuenta de Orion donde podrá hacer seguimiento a su pedido.</p>
                    <button
                      class="mr-3 hover-btn next-btn16"
                      data-toggle="modal"
                      data-target="#session_model"
                      title="Session"
                    >Iniciar Sesion</button>
                    <button
                      class="hover-btn save-btn14"
                      data-toggle="modal"
                      data-target="#register_model"
                      title="Register"
                    >Crear cuenta</button>
                  </div>
                  <div
                    class="checkout-step-body"
                    v-else
                  >
                    <p>Estas en tu cuenta de Orion <b>{{user.name}}</b>. Continua con el proceso de compra de su producto</p>
                  </div>
                </div>
              </div>

              <div class="checkout-step">
                <div
                  class="checkout-card"
                  id="headingTwo"
                >
                  <span class="checkout-step-number">2</span>
                  <h4 class="checkout-step-title">
                    <button
                      class="wizard-btn collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    > Dirección de entrega</button>
                  </h4>
                </div>
                <div
                  id="collapseTwo"
                  class="collapse"
                  aria-labelledby="headingTwo"
                  data-parent="#checkout_wizard"
                  :class="{ show: user === 0 ? false : true  }"
                >
                  <div class="checkout-step-body">
                    <div class="checout-address-step">
                      <div class="row">
                        <div class="col-12 mb-21">
                          <p class="font-weight-bold mb-21">Envié su pedido a un familiar, amigos...etc. Llevaremos su pedido a la dirección que proporcione previa validación de nuestros asesores de ventas.</p>
                        </div>
                        <div class="col-lg-12">
                          <form class="">
                            <!-- Multiple Radios (inline) -->
                            <!--                                                        <div class="form-group">-->
                            <!--                                                            <div class="product-radio">-->
                            <!--                                                                <ul class="product-now">-->
                            <!--                                                                    <li>-->
                            <!--                                                                        <input type="radio" id="ad1" name="address1" checked>-->
                            <!--                                                                        <label for="ad1">A una casa</label>-->
                            <!--                                                                    </li>-->
                            <!--                                                                    <li>-->
                            <!--                                                                        <input type="radio" id="ad2" name="address1">-->
                            <!--                                                                        <label for="ad2">A una oficina</label>-->
                            <!--                                                                    </li>-->
                            <!--                                                                    <li>-->
                            <!--                                                                        <input type="radio" id="ad3" name="address1">-->
                            <!--                                                                        <label for="ad3">Otros</label>-->
                            <!--                                                                    </li>-->
                            <!--                                                                </ul>-->
                            <!--                                                            </div>-->
                            <!--                                                        </div>-->
                            <div class="address-fieldset">
                              <div class="row">
                                <div class="col-lg-6 col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Nombre*</label>
                                    <input
                                      id="name"
                                      name="name"
                                      type="text"
                                      placeholder="Nombre Completo"
                                      class="form-control input-md"
                                      required
                                      v-model="d_name"
                                    >
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Email*</label>
                                    <input
                                      id="email1"
                                      name="email1"
                                      type="text"
                                      placeholder="Email"
                                      class="form-control input-md"
                                      required
                                      v-model="d_email"
                                    >
                                  </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Dirección de entrega*</label>
                                    <input
                                      id="flat"
                                      name="flat"
                                      type="text"
                                      placeholder="Dirección"
                                      class="form-control input-md"
                                      required
                                      v-model="direccion"
                                    >
                                  </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Referencia*</label>
                                    <input
                                      id="referencia"
                                      name="flat"
                                      type="text"
                                      placeholder="Referencia"
                                      class="form-control input-md"
                                      required
                                      v-model="referencia"
                                    >
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">Cusco/ <span class="text-muted">Distrito</span> *</label>
                                    <!--                                                                        <input id="street" name="distrito" v-model="distrito" type="text" placeholder="Ejm: Wanchaq" class="form-control input-md">-->
                                    <select
                                      class="form-select form-control"
                                      aria-label="Default select example"
                                      v-model="distrito"
                                      :change="distrito_ch(distrito)"
                                    >
                                      <option
                                        disabled
                                        value=""
                                      >Seleccione un distrito</option>
                                      <template v-for="options_t in options_tax">
                                        <option :value="options_t.price">
                                          {{ options_t.country }}</option>
                                      </template>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                  <div class="form-group">
                                    <label class="control-label">Número de Celular (whatsapp*</label>
                                    <input
                                      id="pincode"
                                      name="celular"
                                      v-model="celular"
                                      type="text"
                                      placeholder="Teléfono"
                                      class="form-control input-md"
                                      required=""
                                    >
                                  </div>
                                </div>
                                <!--                                                                <div class="col-lg-6 col-md-12">-->
                                <!--                                                                    <div class="form-group">-->
                                <!--                                                                        <label class="control-label">Locality*</label>-->
                                <!--                                                                        <input id="Locality" name="locality" type="text" placeholder="Enter City" class="form-control input-md" required="">-->
                                <!--                                                                    </div>-->
                                <!--                                                                </div>-->
                                <div class="col-lg-12 col-md-12">
                                  <div class="form-group">
                                    <div class="address-btns">
                                      <!--                                                                            <button class="save-btn14 hover-btn">Guardar</button>-->
                                      <a
                                        class="ml-auto collapsed next-btn16 hover-btn"
                                        role="button"
                                        data-toggle="collapse"
                                        data-parent="#checkout_wizard"
                                        href="#collapseThree"
                                      > Siguiente </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="checkout-step">
                <div
                  class="checkout-card"
                  id="headingThree"
                >
                  <span class="checkout-step-number">3</span>
                  <h4 class="checkout-step-title">
                    <button
                      class="wizard-btn collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    > Fecha y hora de entrega </button>
                  </h4>
                </div>
                <div
                  id="collapseThree"
                  class="collapse"
                  aria-labelledby="headingThree"
                  data-parent="#checkout_wizard"
                >
                  <div class="checkout-step-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label font-weight-bold">Seleccione la Fecha y Hora que enviaremos su pedido.</label>
                          <div class="date-slider-group">
                            <div class="owl-carousel date-slider owl-theme">
                              <div class="item">
                                <!--                                                                {{picked_fecha}}-->
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd1"
                                    name="address1"
                                    checked
                                    :value="today"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd1">Hoy</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd2"
                                    name="address1"
                                    :value="tomorrow"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd2">Mañana</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd3"
                                    name="address1"
                                    :value="today_3"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd3">{{ today_3 }}</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd4"
                                    name="address1"
                                    :value="today_4"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd4">{{ today_4 }}</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd5"
                                    name="address1"
                                    :value="today_5"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd5">{{ today_5 }}</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd6"
                                    name="address1"
                                    :value="today_6"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd6">{{ today_6 }}</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd7"
                                    name="address1"
                                    :value="today_7"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd7">{{ today_7 }}</label>
                                </div>
                              </div>
                              <div class="item">
                                <div class="date-now">
                                  <input
                                    type="radio"
                                    id="dd8"
                                    name="address1"
                                    :value="today_8"
                                    v-model="picked_fecha"
                                  >
                                  <label for="dd8">{{ today_8 }}</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="time-radio">
                            <div class="ui form">
                              <div class="grouped fields">
                                <div class="field">
                                  <div class="ui radio checkbox chck-rdio">
                                    <input
                                      type="radio"
                                      name="fruit"
                                      tabindex="0"
                                      checked
                                      class="hidden"
                                      value="8:00AM - 12:00PM"
                                      v-model="picked_hora"
                                    >
                                    <label>8:00AM - 12:00PM</label>
                                  </div>
                                </div>
                                <div class="field">
                                  <div class="ui radio checkbox chck-rdio">
                                    <input
                                      type="radio"
                                      name="fruit"
                                      tabindex="0"
                                      class="hidden"
                                      value="2:00PM - 6:00PM"
                                      v-model="picked_hora"
                                    >
                                    <label>2:00PM - 6:00PM</label>
                                  </div>
                                </div>
                                <!--                                                                <div class="field">-->
                                <!--                                                                    <div class="ui radio checkbox chck-rdio">-->
                                <!--                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="12.00PM - 2.00PM" v-model="picked_hora">-->
                                <!--                                                                        <label>12.00PM - 2.00PM</label>-->
                                <!--                                                                    </div>-->
                                <!--                                                                </div>-->
                                <!--                                                                <div class="field">-->
                                <!--                                                                    <div class="ui radio checkbox chck-rdio">-->
                                <!--                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="2.00PM - 4.00PM" v-model="picked_hora">-->
                                <!--                                                                        <label>2.00PM - 4.00PM</label>-->
                                <!--                                                                    </div>-->
                                <!--                                                                </div>-->
                                <!--                                                                <div class="field">-->
                                <!--                                                                    <div class="ui radio checkbox chck-rdio">-->
                                <!--                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="4.00PM - 6.00PM" v-model="picked_hora">-->
                                <!--                                                                        <label>4.00PM - 6.00PM</label>-->
                                <!--                                                                    </div>-->
                                <!--                                                                </div>-->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a
                      class="collapsed next-btn16 hover-btn"
                      role="button"
                      data-toggle="collapse"
                      href="#collapseFour"
                    > Proceso de pago </a>
                  </div>
                </div>
              </div>
              <div class="checkout-step">
                <div
                  class="checkout-card"
                  id="headingFour"
                >
                  <span class="checkout-step-number">4</span>
                  <h4 class="checkout-step-title">
                    <button
                      class="wizard-btn collapsed"
                      type="button"
                      data-toggle="collapse"
                      data-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                    >Pago</button>
                  </h4>
                </div>
                <div
                  id="collapseFour"
                  class="collapse"
                  aria-labelledby="headingFour"
                  data-parent="#checkout_wizard"
                >
                  <div class="checkout-step-body">
                    <div class="payment_method-checkout">
                      <div class="row">
                        <div class="col-md-12">
                          <p>Por le momento solo contamos con servicio contra entrega.</p>
                          <div class="rpt100">
                            <ul class="radio--group-inline-container_1">
                              <li>
                                <div class="radio-item_1">
                                  <input
                                    id="cashondelivery1"
                                    value="contraentrega"
                                    checked
                                    name="paymentmethod"
                                    type="radio"
                                    v-model="picked_metodo"
                                  >
                                  <label
                                    for="cashondelivery1"
                                    class="radio-label_1"
                                  >Pago Contra entrega</label>
                                </div>
                              </li>
                              <!--                                                            <li>-->
                              <!--                                                                <div class="radio-item_1">-->
                              <!--                                                                    <input id="card1" value="pagotarjeta" name="paymentmethod" type="radio" data-minimum="50.0" v-model="picked_metodo">-->
                              <!--                                                                    <label  for="card1" class="radio-label_1">Tarjeta de crédito / Tarjeta de débito </label>-->
                              <!--                                                                </div>-->
                              <!--                                                            </li>-->
                            </ul>
                          </div>
                          <div
                            class="form-group return-departure-dts"
                            data-method="cashondelivery"
                          >
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="pymnt_title">
                                  <h4>Pago Contraentrega</h4>
                                  <p>El pago contra entrega no estará disponible si el valor de su pedido supera los S/50.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="form-group return-departure-dts"
                            data-method="card"
                          >
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="mb-4 pymnt_title">
                                  <h4>Tarjeta de crédito / Tarjeta de débito</h4>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="mt-1 form-group">
                                  <label class="control-label">Nombre del Titular*</label>
                                  <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                      <input
                                        class="prompt srch_explore"
                                        type="text"
                                        name="holdername"
                                        value=""
                                        id="holder[name]"
                                        required=""
                                        maxlength="64"
                                        placeholder="Holder Name"
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="mt-1 form-group">
                                  <label class="control-label">Numero de tarjeta*</label>
                                  <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                      <input
                                        class="prompt srch_explore"
                                        type="text"
                                        name="cardnumber"
                                        value=""
                                        id="card[number]"
                                        required=""
                                        maxlength="64"
                                        placeholder="Card Number"
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mt-1 form-group">
                                  <label class="control-label">Mes de Expiración*</label>
                                  <select
                                    class="ui fluid search dropdown form-dropdown"
                                    name="card[expire-month]"
                                  >
                                    <option value="">Month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mt-1 form-group">
                                  <label class="control-label">Año de expiración*</label>
                                  <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                      <input
                                        class="prompt srch_explore"
                                        type="text"
                                        name="card[expire-year]"
                                        maxlength="4"
                                        placeholder="Year"
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mt-1 form-group">
                                  <label class="control-label">CVV*</label>
                                  <div class="ui search focus">
                                    <div class="ui left icon input swdh11 swdh19">
                                      <input
                                        class="prompt srch_explore"
                                        name="card[cvc]"
                                        maxlength="3"
                                        placeholder="CVV"
                                      >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="mb-4 custom-control custom-checkbox">
                            <input
                              type="checkbox"
                              class="custom-control-input"
                              name="terminos"
                              id="terminos"
                              v-model="terminos"
                            >
                            <label
                              class="custom-control-label"
                              for="terminos"
                            >He leído y acepto los
                              <a
                                href="/terminos-condiciones-orion.pdf"
                                target="_blank"
                              >Términos y Condiciones</a> de compra del sitio</label>
                          </div>

                          <button
                            type="button"
                            class="next-btn16 hover-btn"
                            @click="onSubmitAll()"
                          >Realizar Pedido</button>

                          <!-- Boton de pago con tarjeta -->
                          <button
                            class="btn btn-primary"
                            @click="PagoTarjeta()"
                          ><i
                              v-if="!loader"
                              class="fas fa-credit-card"
                            ></i>
                            <div
                              v-if="loader"
                              class="text-white spinner-border"
                              role="status"
                            >
                              <span class="sr-only">Loading...</span>
                            </div>
                            Pagar con tarjeta
                          </button>

                          <div
                            class="alert alert-danger mt-21"
                            v-if="error_v.length > 0"
                          >
                            <ul>
                              <li
                                v-for="er in error_v"
                                :key="er"
                              >
                                - {{er}}
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--                    <li v-for="errores in error_v">{{ errores }}</li>-->
          <!--                    <button @click="veri()">sd</button>-->
          <div class="col-lg-4 col-md-5">
            <div class="mt-0 pdpt-bg">
              <div class="pdpt-title">
                <h4>Resumen de pedido</h4>
              </div>
              <div
                class="right-cart-dt-body"
                v-for="(prodCart, index) in cart"
                :key="prodCart.id"
              >
                <div class="cart-item border_radius">
                  <div class="cart-product-img">
                    <!--                                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">-->
                    <!--                                            <img :src="photos.photo" alt="" v-if="index === 0">-->
                    <!--                                        </template>-->
                    <template
                      v-for="(photos, index) in prodCart.photos"
                      :key="prodCart.name"
                    >
                      <img
                        :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo"
                        alt=""
                        v-if="photos.state === 1"
                      >
                    </template>
                    <!--                                        <div class="offer-badge">4% OFF</div>-->
                  </div>
                  <div class="cart-text">
                    <h4>{{ prodCart.name }}</h4>
                    <template v-if="prodCart.price === 0">
                      <p class="small">Un asesor se contactara con ud. para fijar precio. precio por kilo S/{{ new Intl.NumberFormat("es-PE").format(prodCart.regular_price) }}</p>
                    </template>
                    <div class="cart-item-price">
                      <template v-if="prodCart.price === 0">
                        Precio por definir
                      </template>
                      <template v-else>
                        S/{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}
                      </template>
                      <!--                                            S/.{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}-->
                      <!--                                            <span>$18</span>-->
                    </div>
                    <button
                      type="button"
                      class="cart-close-btn"
                      @click="deleteToCart(prodCart)"
                    ><i class="uil uil-multiply"></i></button>
                  </div>
                </div>
              </div>

              <div class="total-checkout-group">
                <div class="cart-total-dil">
                  <h4>Orion Super Mercado</h4>
                  <span>S/{{ new Intl.NumberFormat("es-PE").format(parseFloat(total)) }}</span>
                </div>
                <div
                  class="pt-3 cart-total-dil"
                  v-if="tax.length != 0"
                >
                  <h4>Delivery</h4>
                  <span>S/{{tax}}</span>
                </div>
              </div>
              <!--                            <div class="cart-total-dil saving-total ">-->
              <!--                                <h4>Total Saving</h4>-->
              <!--                                <span>$3</span>-->
              <!--                            </div>-->
              <div
                class="main-total-cart"
                v-if="tax.length != 0"
              >
                <h2>Total</h2>
                <span>S/{{ new Intl.NumberFormat("es-PE").format(parseFloat(total) + parseFloat(tax)) }}</span>
              </div>
              <div class="payment-secure">
                <i class="uil uil-padlock"></i>Pago seguro
              </div>
            </div>

            <!--                        <a href="#" class="promo-link45">Have a promocode?</a>-->
            <div class="checkout-safety-alerts">
              <p><i class="uil uil-sync"></i>Reemplazo 100% garantizado</p>
              <p><i class="uil uil-check-square"></i>Productos 100% originales</p>
              <p><i class="uil uil-shield-check"></i>Pagos seguros</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>
<script>
import HeaderComponent from "./HeaderComponent";
import TopComponent from "./TopComponent";
import moment from "moment";
import CartComponent from "./CartComponent";
// import { useField, useForm } from "vee-validate"

import { ref, toRefs, reactive, computed, inject } from "vue";
import axios from "axios";
export default {
  components: { HeaderComponent, TopComponent, CartComponent },
  props: ["user"],
  setup(props) {
    const user = ref(props.user);
    const name = ref("");
    const email = ref("");
    const password = ref("");
    const password_confirmation = ref("");
    const csrf = ref(
      document.querySelector('meta[name="csrf-token"]').getAttribute("content")
    );
    const token = ref(csrf);

    const modalShow = ref(true);
    const error = ref("");
    const emitter = inject("emitter");

    const today = moment().locale("es").format("DD MMMM YYYY");
    const tomorrow = moment().locale("es").add(1, "d").format("DD MMMM YYYY");
    const today_3 = moment().locale("es").add(2, "d").format("DD MMMM YYYY");
    const today_4 = moment().locale("es").add(3, "d").format("DD MMMM YYYY");
    const today_5 = moment().locale("es").add(4, "d").format("DD MMMM YYYY");
    const today_6 = moment().locale("es").add(5, "d").format("DD MMMM YYYY");
    const today_7 = moment().locale("es").add(6, "d").format("DD MMMM YYYY");
    const today_8 = moment().locale("es").add(7, "d").format("DD MMMM YYYY");

    const d_name = ref(props.user.name);
    const d_email = ref(props.user.email);
    const direccion = ref([]);
    const referencia = ref([]);
    const distrito = ref([]);
    const celular = ref([]);
    const picked_fecha = ref(today);
    const picked_hora = ref("8:00AM - 12:00PM");
    const picked_metodo = ref("contraentrega");

    const terminos = ref([]);

    const tax = ref("");

    const cartState = reactive({
      cartOpen: false,
      cart: [],
      o_ad: "asc",
      o_x: "name",
      error_v: [],
      total: computed(() => {
        return cartState.cart.reduce((prev, curr) => {
          const prevPrice = prev.price || prev;
          const prevQuantity = prev.quantity || 1;

          return prevPrice * prevQuantity + curr.price * curr.quantity;
        }, 0);
      }),
    });

    const options_tax = [
      { price: "5", country: "Cusco" },
      { price: "6", country: "Santiago" },
      { price: "7", country: "San Jeronimo" },
      { price: "7", country: "San Sebastian" },
      { price: "5", country: "Wanchaq" },
    ];
    // Variables para el pago por tarjeta
    const modalidadPago = ref(0);
    const configuration= {
        callbackurl: "",
        sessionkey: "",
        channel: "",
        merchantid: "",
        purchasenumber: "",
        amount: "",
        language: "",
        font: "",
        recurrencemaxamount: "",
      },
     const pay= ref(null),
     const  elementStyles= {
        base: {
          color: "#666666",
          fontWeight: 700,
          fontFamily: "'Montserrat', sans-serif",
          fontSize: "16px",
          fontSmoothing: "antialiased",
          placeholder: {
            color: "#999999",
          },
          autofill: {
            color: "#e39f48",
          },
        },
        invalid: {
          color: "#E25950",
          "::placeholder": {
            color: "#FFCCA5",
          },
        },
      },
      const loader = ref(false);

    function PagoTarjeta() {
      this.loader = true;
      this.PagoTarjetaPasoDos();
    }
    async function PagoTarjetaPasoDos() {
      await this.$loadScript(
        "https://static-content-qas.vnforapps.com/v2/js/checkout.js"
      )
        .then(res => {
          // Código en caso de que tu script cargue
          // primero enviamos a guardar la orden y recojemos el id de la orden
          cartState.error_v = [];

      if (!props.user.id) {
        cartState.error_v.push("Requiere iniciar sesión");
      }
      if (direccion.value.length === 0) {
        cartState.error_v.push("Dirección es obligatorio");
      }
      if (referencia.value.length === 0) {
        cartState.error_v.push("Referencia es obligatorio");
      }
      if (distrito.value.length === 0) {
        cartState.error_v.push("Distrito es obligatorio");
      }
      if (celular.value.length === 0) {
        cartState.error_v.push("Celular es obligatorio");
      }
      if (picked_fecha.value.length === 0) {
        cartState.error_v.push("Fecha de entrega es obligatorio");
      }
      if (picked_hora.value.length === 0) {
        cartState.error_v.push("Hora de entrega es obligatorio");
      }
      if (picked_metodo.value.length === 0) {
        cartState.error_v.push("Metodo de pago es obligatorio");
      }
      if (cartState.cart.length === 0) {
        cartState.error_v.push(
          "Requiere agregar productos para proceder con el pago"
        );
      }
      if (terminos.value.length === 0) {
        cartState.error_v.push("Acepte términos y condiciones");
      }
      if (cartState.error_v.length === 0) {
        let form = {
            id_user: props.user.id,
            direccion: direccion.value,
            referencia: referencia.value,
            distrito: distrito.value,
            celular: celular.value,
            picked_fecha: picked_fecha.value,
            picked_hora: picked_hora.value,
            picked_metodo: picked_metodo.value,
            tax: tax.value,
            total_price: cartState.total,
            };
            axios
          .post("https://sistemaorion.nebulaperu.com/api/v1/orders", {
            form_data: form,
            cart: cartState.cart,
          })
          .then(
            function (response) {
              console.log(response.data.status);
              if (response.data.code > 0) {
                // window.location = "/client/pedidos";
                sessionStorage.clear();
                let orderId = response.data.code;

                axios.get(
                    `https://sistemaorion.nebulaperu.com/api/v1/payment-desacoplado/${orderId}`
                )
                    .then(datos => {
                    // primero enviamos a guardar la orden y recojemos el id de la orden
                    console.log("rpt:", datos.data);
                    this.configuration = datos.data;
                    //   payform.setConfiguration(this.configuration);
                    VisanetCheckout.configure({
                        sessiontoken: this.configuration.sessionkey,
                        channel: this.configuration.channel,
                        merchantid: this.configuration.merchantid,
                        purchasenumber: this.configuration.purchasenumber,
                        amount: this.configuration.amount,
                        expirationminutes: "20",
                        timeouturl: "about:blank",
                        merchantlogo: "https://orion.com.pe/images/logo-orion.png",
                        formbuttoncolor: "#000000",
                        cardholdername: this.configuration.name,
                        cardholderlastname: this.configuration.lastname,
                        cardholderemail: this.configuration.email,
                        action: this.configuration.callbackurl,
                        complete: function(params) {
                        alert(JSON.stringify(params));
                        }
                    });
                    VisanetCheckout.open();

                    this.loader = false;
                    })
                    .catch(() => {
                    // Código en caso de que la carga de tu script fallé
                    });
              }
            },
            function (er) {
              error.value = er.response.data;
            }
          );
        }
        })
        .catch(() => {
          // Código en caso de que la carga de tu script fallé
        });
    }

    function distrito_ch(event) {
      // console.log(event);
      tax.value = event;
    }

    function onSubmitAll() {
      cartState.error_v = [];

      if (!props.user.id) {
        cartState.error_v.push("Requiere iniciar sesión");
      }
      if (direccion.value.length === 0) {
        cartState.error_v.push("Dirección es obligatorio");
      }
      if (referencia.value.length === 0) {
        cartState.error_v.push("Referencia es obligatorio");
      }
      if (distrito.value.length === 0) {
        cartState.error_v.push("Distrito es obligatorio");
      }
      if (celular.value.length === 0) {
        cartState.error_v.push("Celular es obligatorio");
      }
      if (picked_fecha.value.length === 0) {
        cartState.error_v.push("Fecha de entrega es obligatorio");
      }
      if (picked_hora.value.length === 0) {
        cartState.error_v.push("Hora de entrega es obligatorio");
      }
      if (picked_metodo.value.length === 0) {
        cartState.error_v.push("Metodo de pago es obligatorio");
      }
      if (cartState.cart.length === 0) {
        cartState.error_v.push(
          "Requiere agregar productos para proceder con el pago"
        );
      }
      if (terminos.value.length === 0) {
        cartState.error_v.push("Acepte términos y condiciones");
      }
      if (cartState.error_v.length === 0) {
        let form = {
          id_user: props.user.id,
          direccion: direccion.value,
          referencia: referencia.value,
          distrito: distrito.value,
          celular: celular.value,
          picked_fecha: picked_fecha.value,
          picked_hora: picked_hora.value,
          picked_metodo: picked_metodo.value,
          tax: tax.value,
          total_price: cartState.total,
        };

        axios
          .post("https://sistemaorion.nebulaperu.com/api/v1/orders", {
            form_data: form,
            cart: cartState.cart,
          })
          .then(
            function (response) {
              console.log(response.data.status);
              if (response.data.status > 0) {
                window.location = "/client/pedidos";
                sessionStorage.clear();
              }
            },
            function (er) {
              error.value = er.response.data;
            }
          );
      }
    }

    function onSubmit() {
      axios
        .post("/login", {
          email: email.value,
          password: password.value,
          _token: token.value,
        })
        .then(
          function (res) {
            modalShow.value = false;
            error.value = "";
            window.location = "/checkout";
          },
          function (er) {
            error.value = er.response.data;
          }
        );
    }
    function onSubmitReg() {
      axios
        .post("/register", {
          name: name.value,
          email: email.value,
          password: password.value,
          password_confirmation: password_confirmation.value,
          _token: token.value,
        })
        .then(
          function (res) {
            modalShow.value = false;
            error.value = "";
            window.location = "/checkout";
          },
          function (er) {
            // console.log(er.response.data)
            error.value = er.response.data;
          }
        );
    }

    let dataB = JSON.parse(sessionStorage.getItem("local-cart"));
    if (dataB === null) {
      cartState.cart = [];
    } else {
      cartState.cart = dataB;
    }

    function deleteToCart(product) {
      const cartIndex = cartState.cart.findIndex(
        (prod) => prod.id === product.id
      );
      // const prodIndex = products.value.findIndex(p => p.id === product.id);
      if (cartState.cart.length > 0) {
        let qua = cartState.cart[cartIndex].quantity;
        // console.log(product.name);
        cartState.cart.splice(cartIndex, 1);
        // products.value[prodIndex].quantity = 1;
        // products.value[prodIndex].stock += qua;
        sessionStorage.setItem("local-cart", JSON.stringify(cartState.cart));
        // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
      }
      // else {
      //     axios.post('/session/remove')
      //         .then((res) =>{
      //             // console.log(res)
      //             // cartState.cart.push(res);
      //         });
      // }
      // console.log(prodIndex);

      emitter.emit("myevent", cartState.cart.length);
    }

    return {
      ...toRefs(cartState),
      csrf,
      user,

      onSubmit,
      onSubmitReg,
      onSubmitAll,
      deleteToCart,

      name,
      email,
      password,
      password_confirmation,

      token,
      error,
      modalShow,

      today,
      tomorrow,
      today_3,
      today_4,
      today_5,
      today_6,
      today_7,
      today_8,

      d_name,
      d_email,
      direccion,
      referencia,
      distrito,
      celular,
      picked_fecha,
      picked_hora,
      picked_metodo,
      terminos,
      tax,
      options_tax,
      distrito_ch,
      emitter,
    };
  },
};
</script>
<style>
.modal-backdrop {
  display: none !important;
}
.checkout-wrapper {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fafbfa;
}

.checkout {
  background-color: #fff;
  box-shadow: 0 1px 2px 0 #e9e9e9;
  font-size: 14px;
  border-radius: 5px;
}

.checkout-card {
}

.checkout-step {
  border-top: 1px solid #f3f3f3;
  color: #2b2f4c;
  font-size: 14px;
  padding: 30px;
  position: relative;
}

.checkout-step:first-child {
  border-top: 0;
}

.checkout-step-number {
  border-radius: 50%;
  border: 1px solid #f55d2c;
  display: inline-block;
  font-size: 14px;
  font-weight: 600;
  height: 32px;
  margin-right: 20px;
  padding: 6px;
  text-align: center;
  width: 32px;
  color: #fff;
  background: #f55d2c;
}

.checkout-step-title {
  font-size: 18px;
  font-weight: 500;
  vertical-align: middle;
  display: inline-block;
  margin: 0px;
}

.wizard-btn {
  background: transparent;
  border: 0;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 18px;
  color: #2b2f4c;
}

.checout-address-step {
}

.checout-address-step .form-group {
  margin-bottom: 18px;
  display: inline-block;
  width: 100%;
}

.checkout-step-body {
  padding-left: 0;
  padding-top: 30px;
}

.checkout-step-active {
  display: block;
}

.checkout-step-disabled {
  display: none;
}

.checkout-login {
}

.login-phone {
  display: inline-block;
}

.login-phone:after {
  content: "+91 - ";
  font-size: 14px;
  left: 36px;
  top: 18px;
  font-family: "Rajdhani", sans-serif;
  font-weight: 600;
  color: #2b2f4c;
}

.login-phone:before {
  content: "";
  font-style: normal;
  color: #333;
  font-size: 18px;
  left: 12px;
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.login-phone:after,
.login-phone:before {
  position: absolute;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}

.login-phone .form-control {
  padding-left: 68px;
  font-size: 14px;
  font-family: "Rajdhani", sans-serif;
  font-weight: 600;
  color: #2b2f4c;
  border: 1px solid #efefef;
}

.checkout-login .btn {
  height: 42px;
  line-height: 1.8;
}

.otp-verifaction {
  margin-top: 20px;
}

.checkout-sidebar {
  background-color: #fff;
  border: 1px solid #eaefe9;
  padding: 30px;
  margin-bottom: 30px;
}

.checkout-sidebar-merchant-box {
  background-color: #fff;
  border: 1px solid #eaefe9;
  margin-bottom: 30px;
}

.checkout-total {
  border-bottom: 1px solid #eaefe9;
  padding-bottom: 10px;
  margin-bottom: 10px;
}

.checkout-invoice {
  display: inline-block;
  width: 100%;
}

.checout-invoice-title {
  float: left;
  color: #30322f;
}

.checout-invoice-price {
  float: right;
  color: #30322f;
}

.checkout-charges {
  display: inline-block;
  width: 100%;
}

.checout-charges-title {
  float: left;
}

.checout-charges-price {
  float: right;
}

.charges-free {
  color: #43b02a;
  font-weight: 600;
}

.checkout-payable {
  display: inline-block;
  width: 100%;
  color: #333;
}

.checkout-payable-title {
  float: left;
}

.checkout-payable-price {
  float: right;
}

.checkout-cart-merchant-box {
  padding: 20px;
  display: inline-block;
  width: 100%;
  border-bottom: 1px solid #eaefe9;
  padding-bottom: 20px;
}

.checkout-cart-merchant-name {
  color: #30322f;
  float: left;
}

.checkout-cart-merchant-item {
  float: right;
  color: #30322f;
}

.checkout-cart-products {
}

.checkout-cart-products .checkout-charges {
  padding: 10px 20px;
  color: #333;
}

.checkout-cart-item {
  border-bottom: 1px solid #eaefe9;
  box-sizing: border-box;
  display: table;
  font-size: 12px;
  padding: 22px 20px;
  width: 100%;
}
.checkout-item-list {
}

.checkout-item-count {
  float: left;
}

.checkout-item-img {
  width: 60px;
  float: left;
}

.checkout-item-name-box {
  float: left;
}

.checkout-item-title {
  color: #30322f;
  font-size: 14px;
}

.checkout-item-unit {
}

.checkout-item-price {
  float: right;
  color: #30322f;
  font-size: 14px;
  font-weight: 600;
}

.checkout-viewmore-btn {
  padding: 10px;
  text-align: center;
}

.header-checkout-item {
  text-align: right;
  padding-top: 20px;
}

.checkout-promise-item {
  background-repeat: no-repeat;
  background-size: 14px;
  display: inline-block;
  margin-left: 20px;
  padding-left: 24px;
  color: #30322f;
}

.checkout-promise-item i {
  padding-right: 10px;
  color: #43b02a;
}
</style>
