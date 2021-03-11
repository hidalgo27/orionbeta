<template>
    <div class="dashboard-group">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-dt">
                        <div class="user-img">
                            <img :src="user.profile_photo_url" alt="">
                            <div class="img-add">
                                <input type="file" id="file">
                                <label for="file"><i class="uil uil-camera-plus"></i></label>
                            </div>
                        </div>
                        <h4>{{user.name}}</h4>
<!--                        <p>+91999999999-->
<!--                            &lt;!&ndash;                                <a href="#"><i class="uil uil-edit"></i></a>&ndash;&gt;-->
<!--                        </p>-->
                        <!--                            <div class="earn-points"><img src="images/Dollar.svg" alt="">Points : <span>20</span></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["user"],
    name: "HeaderClientComponent"
}
</script>

<style scoped>

</style>
