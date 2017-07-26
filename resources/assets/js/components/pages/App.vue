<template>
  <v-tabs dark fixed centered>
    <v-toolbar class="blue darken-1" dark>
      <v-toolbar-title>Page title</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>file_download</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>attach_money</v-icon>
      </v-btn>
    </v-toolbar>
    <v-tabs-bar slot="activators" class="blue darken-1">
      <v-tabs-slider class="yellow"></v-tabs-slider>
      <v-tabs-item
        v-for="i in 3"
        :key="i"
        :href="'#tab-' + i"
      >
        Item {{ i }}
      </v-tabs-item>
    </v-tabs-bar>
    <v-tabs-content
      v-for="i in 3"
      :key="i"
      :id="'tab-' + i"
    >
      <v-card flat>
        <v-card-text>{{ text }}</v-card-text>
      </v-card>
    </v-tabs-content>
  </v-tabs>
</template>

<script>
  export default {
    data () {
      return {
        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
      }
    }
  }
</script>