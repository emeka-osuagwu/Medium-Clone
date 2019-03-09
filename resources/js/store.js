import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

import articleStore from './stores/ArticleStore';

export default new Vuex.Store({
	modules: {
		articleStore,
	}
})
