<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" @click="fetchPaginationData(articleStore.paginations.prev_page_url)" >Previous</a>
            </li>
            <li class="page-item"><a class="page-link">{{articleStore.paginations.current_page}} of {{articleStore.paginations.last_page}}</a></li>
            <li class="page-item">
                <a class="page-link" @click="fetchPaginationData(articleStore.paginations.next_page_url)">Next</a>
            </li>
        </ul>
    </nav>
</template>

<script>
    
    import {mapState} from "vuex"

    export default {
        name: 'navbar',

        components: {
        },

        methods: {
            fetchPaginationData(page_url) {

                if(page_url != "/api/"){
                    this.$store.dispatch('fetchPaginationData', page_url)
                }
            }
        },

        computed: {
            ...mapState({
                articleStore: state => state.articleStore
            })
        }

    }
</script>
