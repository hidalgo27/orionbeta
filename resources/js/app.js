require('./bootstrap');
require('alpinejs');
// import owl from 'owl.carousel/dist/owl.carousel'
// require('owl.carousel/dist/owl.carousel');
// require('/resources/js/library/product.thumbnail.slider');
// require('vendor/semantic/semantic.min');
// require('library/jquery.countdown.min');
// require('library/custom');
// require('library/offset_overlay');
// require('library/night-mode');

import {createApp} from 'vue'
import ExampleComponent from  './components/ExampleComponent';
import OptionComponent from  './components/options/OptionComponent';
import CompositionComponent from "./components/composition/CompositionComponent";
import IndexComponent from "./components/composition/IndexComponent";
import DetailProductComponent from "./components/composition/DetailProductComponent";
import GridProductComponent from "./components/composition/GridProductComponent";
import CheckoutComponent from "./components/composition/CheckoutComponent";
import DashboardComponent from "./components/composition/client/DashboardComponent";
import OrderComponent from "./components/composition/client/OrderComponent";
import HistorialComponent from "./components/composition/client/HistorialComponent";

import HomeComponent from "./components/composition/HomeComponent";
import carousel from 'vue-owl-carousel'
createApp({
    components: {
        ExampleComponent,
        OptionComponent,
        CompositionComponent,
        carousel,
        IndexComponent,
        DetailProductComponent,
        GridProductComponent,
        CheckoutComponent,
        DashboardComponent,
        OrderComponent,
        HistorialComponent,

        HomeComponent,
    }
}).mount('#app');
