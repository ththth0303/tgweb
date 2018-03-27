<template>

<!-- Portfolio -->
<div id="portfolio" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Featured Works</h2>
            </div>
            <!-- /Section header -->

            <!-- Work -->
            <div class="col-md-4 col-xs-6 work" v-for="category in categories">
                <img class="img-responsive" :src="category.image" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>{{ category.name }}</span>
                    <h3>{{ category.description | strlimit(25) }}</h3>
                    <div class="work-link">
                        <a href="#"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" :href="category.image"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->
        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Portfolio -->

</template>

<script>
    export default {
        props: {
            categories: {
                required: true,
                default: () => []
            }
        },
        filters: {
            strlimit(value, length) {
                value = value.substr(0, length);

                return value.substr(0, Math.min(value.length, value.lastIndexOf(" ")));
            }
        },
        mounted() {
        }
    }
</script>
