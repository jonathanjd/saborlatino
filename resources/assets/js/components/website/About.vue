<template>
  <v-container grid-list-md>
    <v-row>
      <v-col>

        <v-card data-aos="fade"
          class="mx-auto"
          max-width="800"
        >
          <v-img
            class="white--text align-end"
            height="400px"
            src="/img/who.jpg"
          >
                <template v-slot:placeholder>
                  <v-row
                    class="fill-height ma-0"
                    align="center"
                    justify="center"
                  >
                    <v-progress-circular indeterminate color="black lighten-5"></v-progress-circular>
                  </v-row>
                </template>
            <v-card-title data-aos="fade-right" data-aos-delay="100" class="title">{{ myCurrentLanguage ? 'About us' : '¿Quiénes Somos?' }}</v-card-title>
          </v-img>

          <v-card-text class="text--primary">
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <strong>Pa' Lante Moving Forward Coaching</strong> {{ myCurrentLanguage ? txtEN : txtES }}
            </div>
          </v-card-text>

        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {

  data() {
    return {
      txtES: 'se creó para ofrecer una guia en el crecimiento personal y familiar. Específico para aquellas personas que necesitan y creen que el bienestar y el rendimiento se consiguen a través de una dirección y una ayuda profesional. Acompanamos  y apoyamos a las personas en su proceso de cumplir sus objetivos, metas, propósitos y dirigirlos a que logren una satisfacción personal que los lleve a descubrir lo que realmente es importante en su vida.',
      txtEN: 'it was created to offer a guide in personal and family growth. Specific for those people who need and believe that well-being and performance are achieved through guidance and professional help. We accompany and support people in their process of fulfilling their objectives, goals, purposes and directing them to achieve personal satisfaction that leads them to discover what is really important in their lives.'
    }
  },

  computed: {
    myCurrentLanguage() {
      return this.$store.getters.getLanguage;
    }
  }

}
</script>

<style>

</style>