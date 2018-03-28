import Vue from "vue";

Vue.filter('strlimit', function (value, length, ending = '...') {
    value = value.substr(0, length);

    return value.substr(0, Math.min(value.length, value.lastIndexOf(" "))) + ending;
});
