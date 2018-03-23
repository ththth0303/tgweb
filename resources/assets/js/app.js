
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('owl.carousel');

import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './routes';

window.Vue = Vue;
Vue.use(VueRouter);

Vue.nextTick(function () {
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
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const app = new Vue({
    el: '#app',
    router
});
