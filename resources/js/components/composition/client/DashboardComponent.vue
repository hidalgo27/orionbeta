<template>

    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>
        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- Share Icons End-->
    <!-- Cart Sidebar Offset Start-->
    <cart-component :cart="cart"></cart-component>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                        <h4><i class="uil uil-apps"></i>Resumen</h4>
                                    </div>
                                    <div class="welcome-text">
                                        <h2>Hola! {{ user.name }}</h2>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="pdpt-bg">
                                        <div class="pdpt-title">
                                            <h4>Mis Pedidos</h4>
                                        </div>
                                        <div class="ddsh-body">
                                            <h2>Compras recientes</h2>
                                            <ul class="order-list-145">
                                                <li v-for="order_d in order_p">
                                                    <div class="smll-history">

                                                        <div class="order-title">{{order_d.productos_ordenados.length}} Productos
<!--                                                            <span data-inverted="" data-tooltip="" data-position="top center">?</span>-->
                                                        </div>
                                                        <div class="order-status" v-if="order_d.state === 1">En tienda</div>
                                                        <div class="order-status" v-if="order_d.state === 2">Empacado</div>
                                                        <div class="order-status" v-if="order_d.state === 3">En Camino</div>
                                                        <p>S/{{ new Intl.NumberFormat("es-PE").format(parseFloat(order_d.total) + parseFloat(order_d.tax)) }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="/client/pedidos" class="more-link14">Todo los pedidos <i class="uil uil-angle-double-right"></i></a>
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
import HeaderClientComponent from "./layouts/HeaderClientComponent";
import MenuClientComponent from "./layouts/MenuClientComponent";
import CartComponent from "../CartComponent";
import {ref, toRefs, reactive, computed} from "vue";
import orderBy from "lodash/orderBy";
export default {
    components: { HeaderComponent, TopComponent, HeaderClientComponent, MenuClientComponent, CartComponent},
    props: ["user"],
    setup(props){
        const orders = ref([]);
        const cartState = reactive({
            cartOpen: false,
            cart: [],
            o_ad: 'asc',
            o_x: 'name',
            total: computed(()=>{
                return  cartState.cart.reduce((prev, curr) => {
                    const prevPrice = prev.price || prev;
                    const prevQuantity = prev.quantity || 1;
                    return prevPrice * prevQuantity + curr.price * curr.quantity;
                }, 0);
            }),

            order_p : computed(() => {
                return orderBy(orders.value.filter(order => order.state < '4'), 'created_at', 'desc')
            }),

        });

        fetch("http://sistemaorion.green.com.pe/api/v1/orders/"+props.user.id+"/get-all-client")
            .then(res => res.json())
            .then(data => {
                orders.value = data;
            });

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            cartState.cart = []
        }else{
            cartState.cart = dataB
        }

        return {
            ...toRefs(cartState),
        };
    }
}
</script>
