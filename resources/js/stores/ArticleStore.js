import Vue from 'vue'
import axios from "axios"
import { getHeader } from '../helper/Header'
import { baseUrl } from '../helper/Urls'

const state = 
{
	tags: [],
	articles: [],
}

const mutations = {
	SET_ARTICLES (state, articles) {
		state.articles = articles
	},
	SET_TAGS (state, tags) {
		state.tags = tags
	}
}

const actions = {

	getArticles: ({commit}, articles) => {

		return Vue.http.get(baseUrl + '/api/', {headers: getHeader()})
		.then
		(
			response => {
				Vue.$logger('info', "articles", response.data.data.articles.data)
				Vue.$logger('info', "tags", response.data.data.tags)
				commit('SET_ARTICLES', response.data.data.articles.data) 
				commit('SET_TAGS', response.data.data.tags) 
			}
		)
	},
}

export default {
	state, mutations, actions
}

