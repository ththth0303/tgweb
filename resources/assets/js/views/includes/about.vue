<template>
<div id="about" class="section md-padding">
    <div class="container">
        <div class="row">
            <div class="section-header text-center">
                <h2 class="title">Welcome to Website</h2>
            </div>
            <div class="col-md-4" v-for="about in aboutList ">
                <div class="about">
                    <i :class="about.icon"></i>
                    <h3>{{ about.title }}</h3>
                    <p>{{ about.short_description }}</p>
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: {
            aboutList: {
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


