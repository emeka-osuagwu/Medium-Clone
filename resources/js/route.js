import Vue from 'vue'
import Router from 'vue-router'
import Init from './components/Init.vue'


Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '/',
			name: 'init',
			component: Init
		}
	]
})
