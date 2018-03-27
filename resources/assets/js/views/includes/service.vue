<template>
<div id="service" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">What we offer</h2>
            </div>
            <div class="col-md-4 col-sm-6" v-for="service in serviceList">
                <div class="service">
                    <i :class="service.icon"></i>
                    <h3>{{ service.title }}</h3>
                    <p>{{ service.short_description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: {
            serviceList: {
                required: true,
                default: () => []
            }
        },
        mounted() {
            //
        },
        methods: {
           //
        }
    }
</script>
