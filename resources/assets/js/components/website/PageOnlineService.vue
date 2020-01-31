<template>
  <div>
    <InfoTop></InfoTop>
    <NavBar></NavBar>
    <v-container>
      <v-row>
        <v-col md="12">
          <h3 class="display-1 text-md-center pa-5">{{ myCurrentLanguage ? 'Online Service' : 'Servicio en Línea' }}</h3>
          <v-divider></v-divider>
        </v-col>
      </v-row>
      <v-row>
        <v-col md="6">
          <v-card
            class="mx-auto"
            max-width="400"
            dark
          >
            <v-img
              class="white--text align-end"
              height="400px"
              src="/img/skype.png"
            >
              <v-card-title>Skype</v-card-title>
            </v-img>
          </v-card>
        </v-col>
        <v-col md="6">
          <v-card
            class="mx-auto"
            max-width="400"
          >
            <v-img
              class="white--text align-end"
              height="400px"
              src="/img/zoom.jpg"
            >
              <v-card-title>Zoom</v-card-title>
            </v-img>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </div>
</template>
<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';

export default {

  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    }
  },

  components: {
        InfoTop,
        NavBar,
    }

}
</script>

<style>

</style>