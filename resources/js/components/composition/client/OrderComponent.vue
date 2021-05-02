<template>
  <!-- Share Icons Start-->
  <div class="icon-bar">
    <a
      href="https://www.facebook.com/OrionCusco"
      target="_blank"
      class="facebook"
      title="Share"
    ><i class="fab fa-facebook-f"></i></a>
    <!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
    <!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
    <a
      href="https://www.instagram.com/orioncusco"
      target="_blank"
      class="twitter"
      title="Share"
    ><i class="fab fa-instagram"></i></a>
    <a
      href="https://api.whatsapp.com/send?phone=51965642784"
      target="_blank"
      class="whatsapp"
      title="Share"
    ><i class="fab fa-whatsapp"></i></a>
  </div>
  <!-- Share Icons End-->
  <!-- Cart Sidebar Offset Start-->
  <cart-component :cart="cart"></cart-component>
  <!-- Cart Sidebar Offsetl End-->
  <!-- Header Start -->
  <!--    <header-component :cart="cart.length" :user="user"></header-component>-->
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
                >Mis Pedidos</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <header-client-component :user="user"></header-client-component>
    <div class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <menu-client-component></menu-client-component>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="dashboard-right">
              <div class="row">
                <div class="col-md-12">
                  <div class="main-title-tab">
                    <h4><i class="uil uil-box"></i>Mis pedidos</h4>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div
                    class="pdpt-bg"
                    v-for="(order, key) in order_p"
                    :key="key"
                  >
                    <div class="pdpt-title">
                      <h6>Orden #: {{ order.code }} | Fecha: {{ order.created_at}} | Tarjeta: {{ order.cardBrand }} {{ order.card }} | Moneda: PEN</h6>
                      <h6>Se entrega: {{ order.fecha_entrega }}, {{ order.hora_entrega }}</h6>
                    </div>
                    <div class="order-body10">
                      <ul
                        class="order-dtsll"
                        v-for="productos_or in order.productos_ordenados"
                      >
                        <li>
                          <div class="order-dt-img">
                            <template
                              v-for="(photos, index) in productos_or.producto.photos"
                              :key="photos.name"
                            >
                              <img
                                :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo"
                                alt=""
                                v-if="photos.state === 1"
                              >
                            </template>
                            <!--                                                        <img src="/images/groceries.svg" alt="">-->
                          </div>
                        </li>
                        <li>
                          <div class="order-dt47">
                            <div class="row">
                              <div class="col">
                                <a :href="'/product/'+productos_or.producto.id">
                                  <h4>{{ productos_or.producto.detail }}
                                    <span class="font-weight-bold text-danger">

                                      <template v-if="parseFloat(productos_or.pu) === 0">
                                        Precio por definir
                                      </template>
                                      <template v-else>
                                        S/{{ new Intl.NumberFormat("es-PE").format(productos_or.producto.price) }}
                                      </template>
                                    </span>
                                  </h4>
                                </a>
                              </div>
                            </div>
                            <div class="order-title">Cantidad: {{productos_or.quantity}}</div>
                            <template v-if="parseFloat(productos_or.pu) === 0">
                              <p class="small text-danger">Un asesor se contactara con ud. para fijar precio. Precio por kilo S/{{ new Intl.NumberFormat("es-PE").format(productos_or.producto.regular_price) }}.</p>
                            </template>
                          </div>
                        </li>
                      </ul>

                      <div class="total-dt">
                        <div class="total-checkout-group">
                          <div class="cart-total-dil">
                            <h4>Sub Total</h4>
                            <span>S/{{ new Intl.NumberFormat("es-PE").format(order.total)}}</span>
                          </div>
                          <div class="pt-3 cart-total-dil">
                            <h4>Delivery</h4>
                            <span>S/{{ new Intl.NumberFormat("es-PE").format(order.tax) }}</span>
                          </div>
                        </div>
                        <div class="main-total-cart">
                          <h2>Total</h2>
                          <span>S/{{ new Intl.NumberFormat("es-PE").format(parseFloat(order.total) + parseFloat(order.tax)) }}</span>
                        </div>
                      </div>
                      <div class="track-order">
                        <h4>Seguimiento de pedido</h4>
                        <div
                          class="bs-wizard"
                          style="border-bottom:0;"
                        >
                          <div
                            class="bs-wizard-step"
                            :class="{ 'complete': order.state > 1, 'active': order.state === 1}"
                          >
                            <div class="text-center bs-wizard-stepnum">En tienda</div>
                            <div class="progress">
                              <div class="progress-bar"></div>
                            </div>
                            <a
                              href="#"
                              class="bs-wizard-dot"
                            ></a>
                          </div>
                          <div
                            class="bs-wizard-step "
                            :class="{ 'complete': order.state > 2, 'disabled': order.state < 2, 'active': order.state === 2}"
                          >
                            <!-- complete -->
                            <div class="text-center bs-wizard-stepnum">Empacado</div>
                            <div class="progress">
                              <div class="progress-bar"></div>
                            </div>
                            <a
                              href="#"
                              class="bs-wizard-dot"
                            ></a>
                          </div>
                          <div
                            class="bs-wizard-step"
                            :class="{ 'complete': order.state > 3, 'disabled': order.state < 3, 'active': order.state === 3}"
                          >
                            <!-- complete -->
                            <div class="text-center bs-wizard-stepnum">En camino</div>
                            <div class="progress">
                              <div class="progress-bar"></div>
                            </div>
                            <a
                              href="#"
                              class="bs-wizard-dot"
                            ></a>
                          </div>
                          <div
                            class="bs-wizard-step"
                            :class="{ 'complete': order.state > 4, 'disabled': order.state < 4, 'active': order.state === 4}"
                          >
                            <!-- active -->
                            <div class="text-center bs-wizard-stepnum">Entregado</div>
                            <div class="progress">
                              <div class="progress-bar"></div>
                            </div>
                            <a
                              href="#"
                              class="bs-wizard-dot"
                            ></a>
                          </div>
                        </div>
                      </div>
                      <div class="alert-offer">
                        <img
                          src="/images/ribbon.svg"
                          alt=""
                        >
                        Se paga contraentrega. El paso se realiza por Yape, tarjeta de credito o debito. No se acepta pago en efectivo.
                      </div>

                      <div class="alert-offer">
                        <a
                          href="#"
                          target="_blank"
                        >Términos, Condiciones y Política de reembolso.</a>
                      </div>
                      <div class="alert-offer">
                        <b>Usted puede imprimir o guardar la información de su orden.</b>
                      </div>
                      <div class="call-bill">
                        <div class="delivery-man">
                          Contácto - <a href="#"><i class="uil uil-phone"></i> Call Us</a>
                        </div>
                        <!--                                                <div class="order-bill-slip">-->
                        <!--                                                    <a href="#" class="bill-btn5 hover-btn">View Bill</a>-->
                        <!--                                                </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import HeaderComponent from "../HeaderComponent";
import TopComponent from "../TopComponent";
import CartComponent from "../CartComponent";
import { ref, toRefs, reactive, computed } from "vue";
import HeaderClientComponent from "./layouts/HeaderClientComponent";
import MenuClientComponent from "./layouts/MenuClientComponent";
import orderBy from "lodash/orderBy";
export default {
  components: {
    HeaderComponent,
    TopComponent,
    HeaderClientComponent,
    MenuClientComponent,
    CartComponent,
  },
  props: ["user"],
  setup(props) {
    const orders = ref([]);
    const cartState = reactive({
      cartOpen: false,
      cart: [],
      total: computed(() => {
        return cartState.cart.reduce((prev, curr) => {
          const prevPrice = prev.price || prev;
          const prevQuantity = prev.quantity || 1;
          return prevPrice * prevQuantity + curr.price * curr.quantity;
        }, 0);
      }),
      order_p: computed(() => {
        return orderBy(
          orders.value.filter((order) => order.state > "0"),
          "created_at",
          "desc"
        );
      }),
    });

    fetch(
      "https://sistemaorion.nebulaperu.com/api/v1/orders/" +
        props.user.id +
        "/get-all-client"
    )
      .then((res) => res.json())
      .then((data) => {
        orders.value = data;
      });

    let dataB = JSON.parse(sessionStorage.getItem("local-cart"));
    if (dataB === null) {
      cartState.cart = [];
    } else {
      cartState.cart = dataB;
    }

    return {
      ...toRefs(cartState),
      orders,
    };
  },
};
</script>
