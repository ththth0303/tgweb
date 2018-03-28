<template>

<!-- Team -->
<div id="team" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Our Team</h2>
            </div>
            <!-- /Section header -->

            <!-- team -->
            <div class="col-sm-4" v-for="user in users">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" :src="user.avatar" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a :href="'https:fb.com/' + socialLink(user.social_network, 1)"><i class="fa fa-facebook"></i></a>
                                <a :href="'https://plus.google.com/' + socialLink(user.social_network, 2)"><i class="fa fa-google-plus"></i></a>
                                <a :href="'https://twitter.com/' + socialLink(user.social_network, 3)"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>{{ user.name }}</h3>
                        <span>{{ user.job }}</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Team -->

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
            console.log('team component');
        },
        methods: {
            socialLink(obj, type) {

                let socialObj = obj.find(social => social.type === type);

                if (socialObj != undefined) {
                    return socialObj.social_id;
                }

                return '#';
            }
        }
    }
</script>
