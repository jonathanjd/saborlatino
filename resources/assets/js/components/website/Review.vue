<template>
  <v-container fluid>
    <v-row style="background-color: #FAFAFA">
      <v-col>
        <h3 data-aos="zoom-in" class="display-2 text-center py-2 font-italic font-weight-medium">Reseñas</h3>
        <div v-for="item in reviews" :key="item.id">
          <p data-aos="fade-right" class="text-center py-5 px-10"><v-icon class="mr-2">fas fa-quote-left</v-icon>{{ item.description }}<v-icon class="ml-2">fas fa-quote-right</v-icon></p>
          <p data-aos="fade-right" class="text-center"><strong>{{ item.name }}</strong></p>
        </div>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {

  data() {
    return {
      reviews: []
    } 
  },

  created() {
    this.fetchReviews()
  },

  methods: {
    fetchReviews() {
      Vue.axios.get('/api/reviews/web').then( response => {

        if (response.data.msj === 'success') {
          this.reviews = response.data.reviews;
        }

      });
    }
  }

}
</script>

<style>

</style>