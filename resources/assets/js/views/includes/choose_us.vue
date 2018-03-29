<template>
<div id="features" class="section md-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-header">
                    <h2 class="title">{{ chooseUs.title }}</h2>
                </div>
                <p>{{ chooseUs.description }}</p>
                <div class="feature" v-for="step in chooseUs.step">
                    <i class="fa fa-check"></i>
                    <p>{{ step }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="about-slider" class="owl-carousel owl-theme">
                    <img class="img-responsive" :src="image" alt="" v-for="image in chooseUs.image"></img>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: {
            chooseUs: {
                required: true,
                default: () => []
            }
        },
        mounted() {      
        },
        methods: {
           //
        },
        updated() {
            $('#about-slider').owlCarousel({
                items:1,
                loop:true,
                margin:15,
                nav: true,
                navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                dots : true,
                autoplay : true,
                animateOut: 'fadeOut'
            });
        }
    }
</script>
