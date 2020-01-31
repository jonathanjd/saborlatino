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
            <v-card-title data-aos="fade-right" data-aos-delay="100" class="title">{{ myCurrentLanguage ? 'About us' : '¿Quiénes Somos?' }}</v-card-title>
          </v-img>

          <v-card-text class="text--primary">
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <strong>Pa' Lante Moving Forward Coaching</strong> {{ myCurrentLanguage ? txtEN : txtES }}
            </div>
            <br>
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <v-icon>fas fa-podcast</v-icon> <strong>Podcast </strong> <a href="https://podcast.app/blissful-pause-for-self-care-minute-guided-mindfulness-meditation-e58249947/?utm_source=and&utm_medium=share&fbclid=IwAR1287CZ4VyJfFmrt4EmCKqImW13BDY_cGTTtX12jNXDxSAfYCBQF0WuBGs" target="_blank">We need more meditation in our life for better life management</a>
            </div>
            <br>
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <v-icon>fab fa-spotify</v-icon> <strong>Spotify </strong> <a href="https://open.spotify.com/show/4qiBqYPfHxSxtjrBwngSEp?si=NIjkW_WQTNmS0q--mU9GjA" target="_blank">Trailer</a>
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