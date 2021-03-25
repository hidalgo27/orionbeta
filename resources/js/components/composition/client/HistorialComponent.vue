<template>
    <div class="icon-bar">
        <a href="https://www.facebook.com/OrionCusco" target="_blank" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
        <!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
        <a href="https://www.instagram.com/orioncusco" target="_blank" class="twitter" title="Share"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51965642784" target="_blank" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
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
                                <li class="breadcrumb-item active" aria-current="page">Historial</li>
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
                                        <h4><i class="uil uil-wallet"></i>Historial de pedidos</h4>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="pdpt-bg">
                                        <div class="pdpt-title">
                                            <h4>History</h4>
                                        </div>
                                        <div class="history-body scrollstyle_4">
                                            <ul class="history-list">
                                                <li v-for="order_h in order_p">
                                                    <div class="purchase-history">
                                                        <div class="purchase-history-left">
                                                            <h4>{{ order_h.fecha_pedido }}</h4>
<!--                                                            <p>Transaction ID <ins>gambo14255896</ins></p>-->
<!--                                                            <span>{{ order_h.fecha_pedido }}</span>-->
                                                        </div>
                                                        <div class="purchase-history-right">
                                                            <span>S/{{ new Intl.NumberFormat("es-PE").format(parseFloat(order_h.total) + parseFloat(order_h.tax)) }}</span>
<!--                                                            <a href="#">View</a>-->
                                                        </div>
                                                    </div>
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
                return orderBy(orders.value.filter(order => order.state == '4'), 'created_at', 'desc')
            }),
        });


        fetch("https://sistemaorion.nebulaperu.com/api/v1/orders/"+props.user.id+"/get-all-client")
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
