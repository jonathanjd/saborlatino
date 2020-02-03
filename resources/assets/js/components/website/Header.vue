<template>
  <v-container grid-list-md>
    <v-row>
      <v-col>
        <v-parallax data-aos="fade" src="img/bg-header.jpg" height="600" width="100%">
          <div class="image-box__overlay"></div>
          <v-row align="center" class="lightbox black--text pa-12 fill-height">
            <v-col>
              <div data-aos="fade-right" data-aos-delay="100" class="display-2">Pa' Lante Moving Forward Coaching</div>
              <div data-aos="fade-right" data-aos-delay="200" class="headline">{{ myCurrentLanguage ? 'Think, believe, dream and dare.' : 'Piensa, cree, sueña y atrevéte.' }}</div>
              <div data-aos="fade-right" data-aos-delay="200" class="headline">{{ myCurrentLanguage ? '30-minute free coaching session' : 'Sesión de coaching gratuita de 30 minutos' }} <v-btn color="success" :to="{name: 'onlineService'}">{{ myCurrentLanguage ? 'Start': 'Empezar' }}</v-btn></div>
            </v-col>
          </v-row>
        </v-parallax>
      </v-col>
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