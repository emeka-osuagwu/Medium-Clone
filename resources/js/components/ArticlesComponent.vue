<template>
	<div class="col col-10 article-container">
		<div class="card mb-12" v-for="article in articleStore.articles">
			<div class="row no-gutters">
				<div class="col-md-4 emeka">
					<router-link to="/article" class="no-underline text-black">
					<img style="height: 100%;" v-bind:src="article.image" class="card-img" alt="https://cdn.urldecoder.org/assets/images/url_fb.png">
					</router-link>
				</div>
		
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">{{article.title}}</h5>
						<p class="card-text">{{article.description}}</p>
						<p class="card-text"><small class="text-muted">{{article.created_at}}</small></p>
						<a v-for="tag in article.tags" href="#" class="tag-item badge badge-primary">{{tag.title}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>

	import {mapState} from "vuex"

	export default {

	    computed: {
	        ...mapState({
	            articleStore: state => state.articleStore
	        })
	    }

	}
</script>
