<template>
    <div class="border-b border-2-border-grey main-menu">
        <div class="container">
            <nav class="px-4 md:px-0 flex items-center justify-between mx-auto">
                <ul class="list-reset flex items-center">
                    <li class="mr-5 py-1 pr-5 border-r font-bold">
                        <a :href="baseUrl" class="text-black no-underline">
                        </a>
                    </li>
                </ul>
            </nav>
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
