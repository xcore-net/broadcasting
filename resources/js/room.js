import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './rtc/routes';
Vue.use(VueRouter);
const router = new VueRouter({
mode: 'history',
routes,
});

import Room from "./components/Room.vue";

new Vue({
el: '#app',
render: (h) => h(Room),
router,
});
