import Vue from 'vue'
import axios from "axios"
import { getHeader } from '../helper/Header'
import { baseUrl } from '../helper/Urls'

const state = 
{
	tags: [],
	articles: [],
	paginations: []
}

const mutations = {
	SET_ARTICLES (state, articles) {
		state.articles = articles
	},
	SET_TAGS (state, tags) {
		state.tags = tags
	},
	SET_PAGINATION (state, paginations) {
		state.paginations = paginations
	}
}

const actions = {

	getArticles: ({commit}) => {

		return Vue.http.get(baseUrl + '/api/', {headers: getHeader()})
		.then
		(
			response => {
				Vue.$logger('info', "articles", response.data.data.articles)
				Vue.$logger('info', "paginations", response.data.data.articles)
				Vue.$logger('info', "tags", response.data.data.tags)
				commit('SET_ARTICLES', response.data.data.articles.data) 
				commit('SET_PAGINATION', response.data.data.articles) 
				commit('SET_TAGS', response.data.data.tags) 
			}
		)
	},
	fetchPaginationData: ({commit}, url) => {
		return Vue.http.get(url, {headers: getHeader()})
		.then
		(
			response => {
				Vue.$logger('info', "articles", response.data.data.articles.data)
				Vue.$logger('info', "paginations", response.data.data.articles)
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

