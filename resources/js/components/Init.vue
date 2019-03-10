<template>
    <div>
        <app-navbar-component></app-navbar-component>
        <div class="container main_body">
            <div class="row col-10">
                <app-articles-component></app-articles-component>
                <app-tags-component></app-tags-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>