<template>
  <v-container grid-list-md fluid>
    <v-row class="box-bg py-10">
      <v-container grid-list-md>
        <v-row>
          <v-col>
            <v-card
              class="mx-auto"
              max-width="900"
              flat
            >
              <v-card-text>
                <div data-aos="zoom-in" class="display-2 text-lg-center py-2">{{ myCurrentLanguage ? 'Have you asked yourself any of these questions?' : '¿Te has hecho alguna de estás preguntas?' }}</div>
                <v-divider></v-divider>
              </v-card-text>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="100" class="headline">{{ myCurrentLanguage ? 'What does life mean to you?' : '¿Qué significa para ti la vida?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="150" class="headline">{{ myCurrentLanguage ? 'Do you have any motivation?' : '¿Tienes alguna motivación?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="200" class="headline">{{ myCurrentLanguage ? 'How many of the promises you have made have you fulfilled?' : '¿Cuántas de las promesas que te has hecho has cumplido?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="300" class="headline">{{ myCurrentLanguage ? 'Are you doing what makes you happy?' : '¿Estás haciendo lo que te hace feliz?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="350" class="headline">{{ myCurrentLanguage ? 'What would you like to change in your life?' : '¿Qué  te gustaría cambiar en tu vida?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title data-aos="fade-right" data-aos-delay="400" class="headline">{{ myCurrentLanguage ? 'Do you have goals, plans, purposes and do not know how to achieve them?' : '¿Tienes objetivos, planes, propósitos y no sabes cómo lograrlos?' }}</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-row>
  </v-container>
</template>

<script>
export default {

  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    }
  },

}
</script>

<style>

</style>