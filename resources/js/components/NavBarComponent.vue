<template>
    <nav class="navbar navbar-dark bg-dark">
        <router-link class="navbar-brand" :to="'/'">Medium blog</router-link>
        <button type="button" class="btn btn-primary btn-lg">
            <router-link :to="'admin'">Admin</router-link>
        </button>
    </nav>
</template>

<script>

    export default {
        name: 'navbar',

        components: {
        }

    }
</script>
