<template>
<footer id="footer" class="sm-padding bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-logo">
                    <a href="index.html"><img src="plugins/creative-agency/img/logo-alt.png" alt="logo"></a>
                </div>
                <ul class="footer-follow">
                    <li v-for="social in socialList" v-if="social.social"><a :href="social.link"><i :class="social.icon"></i></a></li>
                </ul>
                <div class="footer-copyright">
                    <p>Copyright © 2017. All Rights Reserved. Designed by <a href="https://tgweb-dev.herokuapp.com/" target="_blank">TGWEB</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</template>

<script>
export default {
    props: {
        socialList: {
            required: true,
            default: () => []
        }
    },
    mounted() {
    }
}
</script>
