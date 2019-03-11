<template>
    <nav class="navbar navbar-dark bg-dark">
        <router-link class="navbar-brand" :to="'/'">Medium blog</router-link>
        <v-facebook-login app-id="550783438589524"></v-facebook-login>
    </nav>
</template>

<script>
    
    import { VFBLoginScope } from 'vue-facebook-login-component'

    export default {
        name: 'navbar',

        components: {
            VFBLoginScope
        }

    }
</script>
