import Vue from 'vue'
import Router from 'vue-router'

import Init from './components/Init.vue'
import ExampleComponent from './components/ExampleComponent.vue'
import ViewArticleComponent from './components/ViewArticleComponent.vue'

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '*',
			name: 'init',
			component: Init
		},
		{
			path: '/',
			name: 'init',
			component: Init
		},
		{
			path: '/article',
			name: 'article',
			component: ViewArticleComponent
		},
	]
})
