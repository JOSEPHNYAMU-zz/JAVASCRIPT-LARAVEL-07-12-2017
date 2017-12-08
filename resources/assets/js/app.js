require('./bootstrap');

window.Vue = require('vue');

Vue.component('blogs', require('./components/Blogs.vue'));

const app = new Vue({
    el: '#app'
});
