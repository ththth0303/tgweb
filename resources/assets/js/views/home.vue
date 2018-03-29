<template>
    <div>
        <header-component :homeInfo="data.home_info"></header-component>
        <about-component :aboutList="data.abouts"></about-component>
        <portfolio-component :categories="data.categories"></portfolio-component>
        <service-component :serviceList="data.services"></service-component>
        <choose-us-component :chooseUs="data.choose_us"></choose-us-component>
        <number-component></number-component>
        <pricing-component :priceList="data.prices"></pricing-component>
        <testimonial-component :users="data.users"></testimonial-component>
        <team-component :users="data.users"></team-component>
        <blog-component :blogList="data.blogs"></blog-component>
        <contact-component :contactList="data.contacts"></contact-component>
        <footer-component :socialList="data.contacts"></footer-component>
    </div>
</template>

<script>

    import headerComponent from './includes/header.vue';
    import aboutComponent from './includes/about.vue';
    import portfolioComponent from './includes/portfolio.vue';
    import serviceComponent from './includes/service.vue';
    import chooseUsComponent from './includes/choose_us.vue';
    import numberComponent from './includes/number.vue';
    import pricingComponent from './includes/pricing.vue';
    import testimonialComponent from './includes/testimonial.vue';
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
