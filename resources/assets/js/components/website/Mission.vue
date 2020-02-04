<template>
  <v-container grid-list-md fluid>
    <v-row data-aos="fade" class="box-bg py-10">
      <v-container grid-list-md>
        <v-row>
          <v-col>
            <div div data-aos="fade-right" data-aos-delay="100" class="display-2 py-5">
              {{ myCurrentLanguage ? 'Mission' : 'Misión' }}
            </div>
            <div div data-aos="fade-right" data-aos-delay="200" class="headline text-justify">
              {{ myCurrentLanguage ? txtEN : txtES }}
            </div>
          </v-col>
        </v-row>
        <!-- <v-row>
          <v-col>
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <v-icon>fas fa-podcast</v-icon> <strong>Podcast </strong> <a href="https://podcast.app/blissful-pause-for-self-care-minute-guided-mindfulness-meditation-e58249947/?utm_source=and&utm_medium=share&fbclid=IwAR1287CZ4VyJfFmrt4EmCKqImW13BDY_cGTTtX12jNXDxSAfYCBQF0WuBGs" target="_blank">We need more meditation in our life for better life management</a>
            </div>
          </v-col>
        </v-row>
        <v-row>
          <v-col>
            <div data-aos="fade-right" data-aos-delay="200" class="text-justify subtitle-1">
              <v-icon>fas fa-podcast</v-icon> <strong>Podcast </strong> <a href="https://anchor.fm/sandra-raymond" target="_blank">Pa-lante-Moving Forward Coach</a>
            </div>
          </v-col>
        </v-row> -->
      </v-container>
    </v-row>
  </v-container>
</template>

<script>
export default {

  data() {
    return {
      txtES: 'Yo, Sandra A. Raymond, utilizo formas únicas para ayudar a mis clientes a identificar qué cambios desean explorar. Creo que el crecimiento proviene de tener el coraje de enfrentar su verdad y desafiar las circunstancias en un espacio seguro y de apoyo. Mi enfoque es un enfoque humanista genuino, y animo a los clientes la oportunidad de aprovechar sus ideas a través de la reorientación individual. Mi rol de entrenador funciona como una guía de apoyo, que permite a los clientes encontrar formas de pensar de manera diferente con el crecimiento interno de la individualidad. Mi enfoque principal de Coaching es entender y escuchar a mis clientes y encontrar formas de comenzar un nuevo capítulo en sus vidas a través de una plataforma de autoconciencia. Quiero trabajar con mis clientes, en colaboración hacia el empoderamiento, la paz y la armonía.',
      txtEN: 'I, Sandra A. Raymond, use unique ways to help my clients identify what changes they want to explore. I believe that growth comes from having the courage to face its truth and challenge circumstances in a safe and supportive space. My approach is a genuine humanistic approach, and I encourage clients the opportunity to take advantage of their ideas through individual reorientation. My role as coach works as a support guide, which allows clients to find ways of thinking differently with the internal growth of individuality. My main focus of Coaching is to understand and listen to my clients and find ways to start a new chapter in their lives through a platform of self-awareness. I want to work with my clients, in collaboration towards empowerment, peace and harmony.'
    }
  },

  computed: {
    myCurrentLanguage() {
      return this.$store.getters.getLanguage;
    }
  },


}
</script>

<style>

</style>