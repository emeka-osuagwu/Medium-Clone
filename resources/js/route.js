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
			name: 'wildcard',
			component: Init
		},
		{
			path: '/',
			name: 'init',
			component: Init
		},
		{
			path: '/article/:id',
			name: 'view_article',
			component: ViewArticleComponent
		},
		{
			path: '/admin',
			name: 'admin',
			component: ViewArticleComponent
		},
		{
			path: '/admin/login',
			name: 'admin_login',
			component: ViewArticleComponent
		},
	]
})
