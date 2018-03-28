<template>

<!-- Testimonial -->
<div id="testimonial" class="section md-padding">

    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('plugins/creative-agency/img/background3.jpg');">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Testimonial slider -->
            <div class="col-md-10 col-md-offset-1">
                <div id="testimonial-slider" class="owl-carousel owl-theme">

                    <!-- testimonial -->
                    <div class="testimonial" v-for="user in users">
                        <div class="testimonial-meta">
                            <img :src="user.avatar" alt="">
                            <h3 class="white-text">{{ user.name }}</h3>
                            <span>{{ user.job }}</span>
                        </div>
                        <p class="white-text">{{ user.description }}</p>
                    </div>
                    <!-- /testimonial -->
                </div>
            </div>
            <!-- /Testimonial slider -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Testimonial -->
</template>

<script>
    export default {
        props: {
            users: {
                required: true,
                default: () => []
            }
        },
        mounted() {
            console.log('testimonial component');
        },
        updated() {
            $('#testimonial-slider').owlCarousel({
                loop:true,
                margin:15,
                dots : true,
                nav: false,
                autoplay : true,
                responsive:{
                    0: {
                        items:1
                    },
                    992:{
                        items:2
                    }
                }
            });
        }
    }
</script>
