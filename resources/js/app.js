
import Vue from "vue";
import store from './store';
import Logger from './helper/Logger';
import VueResource from 'vue-resource';
import { mapState } from "vuex"
import router from './route'
import App from './components/App.vue'

Vue.use(VueResource)
Vue.use(Logger, {loggin: true})

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('app-navbar-component', require('./components/NavBarComponent.vue').default);
Vue.component('app-articles-component', require('./components/ArticlesComponent.vue').default);
Vue.component('app-pagination-component', require('./components/PaginationComponent.vue').default);
Vue.component('app-tags-component', require('./components/TagsComponent.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: { App },
    template: '<App/>',
    created(){
        this.$store.dispatch('getArticles')
    },
    computed: {
        ...mapState({
            articleStore: state => state.articleStore
        })
    },
});
