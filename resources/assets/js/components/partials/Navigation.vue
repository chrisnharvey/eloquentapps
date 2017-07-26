<template>
    <v-navigation-drawer
        persistent
        absolute
        height="100%"
        clipped
        enable-resize-watcher
        v-model="drawer"
    >
        <v-list dense class="pt-0">
            <v-list-tile v-for="item in items" :key="item.title">
            <v-list-tile-action>
                <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title>{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        data() {
            return {
                drawer: true,
                items: [
                    { title: 'Home', icon: 'dashboard' },
                    { title: 'About', icon: 'question_answer' }
                ]
            }
        }
    }
</script>