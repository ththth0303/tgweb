<template>
    <div>
        <header-component :homeInfo="data.home_info"></header-component>
        <about-component :aboutList="data.abouts"></about-component>
        <portfolio-component></portfolio-component>
        <service-component :serviceList="data.services"></service-component>
        <choose-us-component></choose-us-component>
        <number-component></number-component>
        <pricing-component></pricing-component>
        <testimonial-component></testimonial-component>
        <team-component></team-component>
        <blog-component></blog-component>
        <contact-component></contact-component>
        <footer-component></footer-component>
    </div>
</template>

<script>

    import headerComponent from './includes/header.vue';
    import aboutComponent from './includes/about.vue';
    import portfolioComponent from './includes/portfolio.vue';
    import serviceComponent from './includes/service.vue';
    import chooseUsComponent from './includes/choose_us.vue'; /*dddd*/
    import numberComponent from './includes/number.vue';
    import pricingComponent from './includes/pricing.vue';
    import testimonialComponent from './includes/testimonial.vue'; /*gggg*/
    import teamComponent from './includes/team.vue';
    import blogComponent from './includes/blog.vue';
    import contactComponent from './includes/contact.vue';
    import footerComponent from './includes/footer.vue';

    export default {
        components: {
            headerComponent,
            aboutComponent,
            portfolioComponent,
            serviceComponent,
            chooseUsComponent,
            numberComponent,
            pricingComponent,
            testimonialComponent,
            teamComponent,
            blogComponent,
            contactComponent,
            footerComponent,
        },
        data: function () {
            return {
                data: []
            }
        },
        mounted() {
            var app = this;

            axios.get('/home')
                .then(response => {
                    app.data = response.data;
                })
                .catch(response => {
                    console.log(response);
                    alert("Could not load data.");
                });
        }
    }
</script>
