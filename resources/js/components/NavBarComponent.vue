<template>
    <nav class="navbar navbar-dark bg-dark">
        <router-link class="navbar-brand" :to="'/'">Medium blog</router-link>
        <button type="button" class="btn btn-primary btn-lg">
            <a style="color: #fff; text-decoration: none;" href="/facebook">Login</a>
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
