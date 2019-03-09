import Vue from 'vue'
import axios from "axios"
import { getHeader } from '../helper/Header'
import { baseUrl } from '../helper/Urls'

const state = 
{
	articles: [],
}

const mutations = {
	SET_ARTICLES (state, articles) {
		state.articles = articles
	}
}

const actions = {

	getArticles: ({commit}, articles) => {

		return Vue.http.get(baseUrl + '/api/', {headers: getHeader()})
		.then
		(
			response => {
				Vue.$logger('info', "articles", response.data.data)
				commit('SET_ARTICLES', response.data.data) 
			}
		)
	},
}

export default {
	state, mutations, actions
}

