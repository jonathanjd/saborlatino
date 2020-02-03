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
        <v-col md="4">
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
              <v-card-title>
                    <v-tooltip bottom>
                      <template v-slot:activator="{ on }">
                        <v-btn v-on="on" href="https://secure.skype.com/portal/profile" target="_blank">Skype</v-btn>
                      </template>
                      <span>User: sandy raymond raymond</span>
                    </v-tooltip>
              </v-card-title>
            </v-img>
          </v-card>
        </v-col>
        <v-col md="4">
          <v-card
            class="mx-auto"
            max-width="400"
          >
            <v-img
              class="white--text align-end"
              height="400px"
              src="/img/zoom.jpg"
            >
              <v-card-title>
                <v-btn href="https://zoom.us/j/3288599147" target="_blank">
                  Zoom
                </v-btn>
              </v-card-title>
            </v-img>
          </v-card>
        </v-col>
        <v-col md="4">
          <v-card
            class="mx-auto"
            max-width="400"
          >
            <v-img
              class="white--text align-end"
              height="400px"
              src="/img/doxyme.png"
            >
              <v-card-title style="color:black">
                <v-btn href="https://doxy.me/palantemovingforward" target="_blank">
                  Doxy ME
                </v-btn>
              </v-card-title>
            </v-img>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
    <br>
    <br>
    <br>
    <br>
    <br>
    <Footer />
  </div>
</template>
<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';
import Footer from './Footer';

export default {

  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    }
  },

  components: {
        InfoTop,
        NavBar,
        Footer
    }

}
</script>

<style>

</style>