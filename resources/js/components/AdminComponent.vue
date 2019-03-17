<template>
	<div>
	    <div class="container main_body">
	        <div class="row col-8 offset-md-2">
				<div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="inputCity">Image</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-12">
							<label for="inputCity">Title</label>
							<input type="text" v-model="title" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-12">
							<label for="inputCity">Description</label>
							<input type="text" v-model="description" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-12">
							<label for="inputCity">Post</label>
							<textarea v-model="post" style="min-height:300px; max-height:300px;" type="text" class="form-control" id=""></textarea>
						</div>
						<div class="form-group col-md-12">
							<label for="inputState">Tags</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option v-for="tag in articleStore.tags" v-model="tag_id">{{tag.title}}</option>
							</select>
						</div>
					</div>
					<button @click="createPost"  class="btn btn-primary" type="submit">Submit form</button>
				</div>
	        </div>
	    </div>
	</div>
</template>

<script>

	import {mapState} from "vuex"
	import Multiselect from 'vue-multiselect'

	export default {

		name: "admin",

		components: {Multiselect},

		data() {
			return {
				title: "gjkdjfkj",
				post: "gjkdjfkj",
				description: "gjkdjfkj",
				tag_id: ''
			}
		},

		mounted() {
		},

		methods: {
			createPost(){
				var data = {
					"title": this.title
				}
			}
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

