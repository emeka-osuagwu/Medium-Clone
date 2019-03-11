<template>
	<div>
	    <div class="container main_body">
	        <div class="row col-8 offset-md-2">
	        	<div class="card">
	        		<img style="height: 60%;" v-bind:src="findSelectArticle.image" class="card-img">
	        		<div class="card-body view_article">
	        			<h5 class="card-title">{{ findSelectArticle.title}}</h5>
	        			<p class="card-text">{{findSelectArticle.description}}</p>
	        			<p class="card-text">{{findSelectArticle.post}}</p>
	        			<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	        			<a v-for="tag in findSelectArticle.tags" href="#" class="tag-item badge">
	        				<router-link :to="`/tag/${tag.id}/articles`">
	        					{{tag.title}}
	        				</router-link>
	        			</a>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
</template>

<script>

	import {mapState} from "vuex"

	export default {

		name: "view_article",

		mounted() {
		},

		methods: {

		},

		computed: {

			...mapState({
			    articleStore: state => state.articleStore
			}),

			findSelectArticle() {
				return this.articleStore.articles.filter(article => {
					return article.id == this.$route.params.id
				})[0]
			}
		}
	}
</script>

