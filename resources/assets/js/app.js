window.Vue = require('vue');
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

Vue.component('s-carousel', require('./Carousel.vue'));

const app = new Vue({
    el: '#app'
});
