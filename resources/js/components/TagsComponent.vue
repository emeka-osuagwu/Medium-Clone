<template>
    <div class="col col-2">
        Tags
        <p>
            <a v-for="tag in articleStore.tags" href="#" class="tag-item badge badge-primary">{{tag.title}}</a>
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
