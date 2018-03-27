<template>

<!-- Header -->
<header id="home">
    <!-- Background Image -->
    <div class="bg-img" :style="{ backgroundImage: 'url(' + homeInfo.background + ')' }">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a href="index.html">
                        <img class="logo" src="plugins/creative-agency/img/logo.png" alt="logo">
                        <img class="logo-alt" src="plugins/creative-agency/img/logo-alt.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Collapse nav button -->
                <div class="nav-collapse">
                    <span></span>
                </div>
                <!-- /Collapse nav button -->
            </div>

            <!--  Main navigation  -->
            <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="#pricing">Prices</a></li>
                <li><a href="#team">Team</a></li>
                <li class="has-dropdown"><a href="#blog">Blog</a>
                    <ul class="dropdown">
                        <li><a href="blog-single.html">blog post</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <!-- /Main navigation -->

        </div>
    </nav>
    <!-- /Nav -->

    <!-- home wrapper -->
    <div class="home-wrapper">
        <div class="container">
            <div class="row">

                <!-- home content -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-content">
                        <h1 class="white-text">{{ homeInfo.title }}</h1>
                        <p class="white-text">
                            {{ homeInfo.content }}
                        </p>
                        <button class="white-btn">Get Started!</button>
                        <button class="main-btn">Learn more</button>
                    </div>
                </div>
                <!-- /home content -->

            </div>
        </div>
    </div>
    <!-- /home wrapper -->

</header>
<!-- /Header -->

</template>

<script>
    export default {
        props: {
            homeInfo: {
                required: true,
                default: () => []
            }
        },
        mounted() {
            console.log('header component.')
        }
    }
</script>
