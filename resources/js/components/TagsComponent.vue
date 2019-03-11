<template>
    <div class="col col-2">
        Tags
        <p>
            <a v-for="tag in articleStore.tags" href="#" class="tag-item badge">
                <router-link :to="`/tag/${tag.id}/article`" class="no-underline text-black">
                    {{tag.title}}
                </router-link>
            </a>
        </p>
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
