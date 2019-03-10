
import Vue from "vue";
import store from './store';
import Logger from './helper/Logger';
import VueResource from 'vue-resource';
import { mapState } from "vuex"
import { socketUrl } from './helper/Urls'
import router from './route'

Vue.use(VueResource)
Vue.use(Logger, {loggin: true})

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('app-init', require('./components/App.vue').default);
Vue.component('app-navbar-component', require('./components/NavBarComponent.vue').default);
Vue.component('app-articles-component', require('./components/ArticlesComponent.vue').default);
Vue.component('app-tags-component', require('./components/TagsComponent.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store,
    created(){
        this.$store.dispatch('getArticles')
    },
    computed: {
        ...mapState({
            articleStore: state => state.articleStore
        })
    },
    methods: {

    }
});
