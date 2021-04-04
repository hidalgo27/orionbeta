// require('./bootstrap');
// require('alpinejs');
// import owl from 'owl.carousel/dist/owl.carousel'
// require('owl.carousel/dist/owl.carousel');
// require('/resources/js/library/product.thumbnail.slider');
// require('vendor/semantic/semantic.min');
// require('library/jquery.countdown.min');
// require('library/custom');
// require('library/offset_overlay');
// require('library/night-mode');
// require('vendor/OwlCarousel');

import { createApp } from 'vue'
// import ExampleComponent from  './components/ExampleComponent';
// import OptionComponent from  './components/options/OptionComponent';
// import CompositionComponent from "./components/composition/CompositionComponent";
import SliderHome from "./components/composition/SliderHome";
import IndexComponent from "./components/composition/IndexComponent";
import DetailProductComponent from "./components/composition/DetailProductComponent";
import GridProductComponent from "./components/composition/GridProductComponent";
import CheckoutComponent from "./components/composition/CheckoutComponent";
import DashboardComponent from "./components/composition/client/DashboardComponent";
import OrderComponent from "./components/composition/client/OrderComponent";
import HistorialComponent from "./components/composition/client/HistorialComponent";
import CartLength from "./components/composition/CartLength";
import CartBlade from "./components/composition/CartBlade";
import SearchComponent from "./components/composition/SearchComponent";
import CategoryComponent from "./components/composition/CategoryComponent";
// import HomeComponent from "./components/composition/HomeComponent";
import mitt from "mitt";
const emitter = mitt()
const app = createApp({
    components: {
        IndexComponent,
        DetailProductComponent,
        GridProductComponent,
        CheckoutComponent,
        DashboardComponent,
        OrderComponent,
        HistorialComponent,
        CartLength,
        CartBlade,
        SearchComponent,
        CategoryComponent,
        SliderHome
    }
})
app.provide('emitter', emitter);
app.mount('#app')
