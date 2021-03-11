<template>
    <div class="left-side-tabs">
        <div class="dashboard-left-links">
            <a href="/client/dashboard" class="user-item"><i class="uil uil-apps"></i>Resumen</a>
            <a href="/client/pedidos" class="user-item"><i class="uil uil-box"></i>Mis pedidos</a>
            <!--                                <a href="dashboard_my_rewards.html" class="user-item"><i class="uil uil-gift"></i>My Rewards</a>-->
            <a href="/client/history" class="user-item"><i class="uil uil-wallet"></i>Mi Historial</a>
            <!--                                <a href="dashboard_my_wishlist.html" class="user-item"><i class="uil uil-heart"></i>Shopping Wishlist</a>-->
<!--            <a href="dashboard_my_addresses.html" class="user-item"><i class="uil uil-location-point"></i>Mis Direcciones</a>-->
            <form id="logout-form" action="http://orion.nu/logout" method="POST">
                <input type="hidden" name="_token" v-model="token">
                <button type="submit" class="user-item btn-block border-0"><i class="uil uil-exit"></i> Cerrar sesion</button>
            </form>
<!--            <a href="sign_in.html" class="user-item"><i class="uil uil-exit"></i>Cerrar Sesión</a>-->
        </div>
    </div>
</template>

<script>
import {ref} from "vue";

export default {
    name: "MenuClientComponent",
    setup(){
        const csrf= ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        const token = ref(csrf);

        return {
            csrf,
            token
        }
    }
}
</script>

<style scoped>

</style>
