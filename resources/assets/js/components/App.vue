<template>
  <v-app>
    <navigation></navigation>
    <downloads></downloads>
    <toolbar></toolbar>
    <main>
      <v-container fluid>
        <router-view/>
      </v-container>
    </main>
  </v-app>
</template>

<script>
  export default {
    data () {
      return {
        right: null
      }
    }
  }
</script>