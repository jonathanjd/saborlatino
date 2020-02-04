<template>
  <v-container>
    <v-toolbar style="border-bottom: 2px solid black" flat>
      <div class="hidden-md-and-up">
        <v-btn icon href="https://podcast.app/blissful-pause-for-self-care-minute-guided-mindfulness-meditation-e58249947/?utm_source=and&utm_medium=share&fbclid=IwAR1287CZ4VyJfFmrt4EmCKqImW13BDY_cGTTtX12jNXDxSAfYCBQF0WuBGs" target="_blank">
          <v-icon>fas fa-podcast</v-icon>
        </v-btn>
        <v-btn icon href="https://anchor.fm/sandra-raymond" target="_blank">
          <v-icon>fas fa-podcast</v-icon>
        </v-btn>
      </div>
      <div class="hidden-sm-and-down">
        <v-btn href="https://podcast.app/blissful-pause-for-self-care-minute-guided-mindfulness-meditation-e58249947/?utm_source=and&utm_medium=share&fbclid=IwAR1287CZ4VyJfFmrt4EmCKqImW13BDY_cGTTtX12jNXDxSAfYCBQF0WuBGs" target="_blank">
          <v-icon>fas fa-podcast</v-icon> <strong>Podcast #1</strong>
        </v-btn>
        <v-btn href="https://anchor.fm/sandra-raymond" target="_blank">
          <v-icon>fas fa-podcast</v-icon> <strong>Podcast #2</strong>
        </v-btn>
      </div>
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