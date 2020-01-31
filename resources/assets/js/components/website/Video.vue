<template>
  <v-container class="my-padding-zero" fluid>
        <video-bg class="d-flex align-center" :sources="['/video/Romatic-Sunset.mp4']" img="/video/Romatic-Sunset.jpg">
          <h3 data-aos="zoom-in" class="color-white display-2 text-center py-4 font-italic font-weight-medium">{{ myCurrentLanguage ? 'Building Healthy Lives' : 'Edificando Vidas Saludables' }}</h3>
        </video-bg>
  </v-container>
</template>

<script>

import VideoBg from 'vue-videobg'

export default {

  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    }
  },

   components: { VideoBg }
}
</script>

<style>

</style>