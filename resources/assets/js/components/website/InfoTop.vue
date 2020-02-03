<template>
  <v-container>
    <v-toolbar style="border-bottom: 2px solid black" flat>
      <v-toolbar-title></v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn href="https://www.facebook.com/groups/2226367134281033/" target="_blank" icon>
        <v-icon>fab fa-facebook-f</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>fab fa-instagram</v-icon>
      </v-btn>
      <v-btn href="https://open.spotify.com/show/4qiBqYPfHxSxtjrBwngSEp?si=NIjkW_WQTNmS0q--mU9GjA" target="_blank" icon>
        <v-icon>fab fa-spotify</v-icon>
      </v-btn>
      <v-btn @click="linkLogin" icon>
        <v-icon>fas fa-user</v-icon>
      </v-btn>
    </v-toolbar>
  </v-container>
</template>

<script>
export default {

  methods: {

    linkLogin() {
      this.$router.push({name: 'login'});
    }

  }

}
</script>

<style>

</style>