<template>
    <v-navigation-drawer
        right
        temporary
        v-model="downloads"
        overflow
        absolute
        clipped
    ></v-navigation-drawer>
</template>

<script>
    export default {
        data () {
            return {
                downloads: true
            }
        }
    }
</script>