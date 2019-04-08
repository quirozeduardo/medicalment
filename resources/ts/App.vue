<template>
  <div id="app">
      <v-app>
          <v-content>
              <v-container>
                  <div>
                      <v-btn color="success">Success</v-btn>
                      <v-btn color="error">Error</v-btn>
                      <v-btn color="warning">Warning</v-btn>
                      <v-btn color="info">Info</v-btn>
                  </div>
              </v-container>
          </v-content>
      </v-app>
  </div>
</template>

<script lang="ts">
import { Component,Prop , Vue } from 'vue-property-decorator';

@Component({
  components: {
  },
})
export default class App extends Vue {}
</script>

<style lang="scss">
</style>
