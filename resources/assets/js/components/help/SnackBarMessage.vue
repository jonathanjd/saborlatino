<template>
        <v-snackbar
          v-model="myShowSnackVar"
          :color="myColor"
          :timeout="3000"
        >
          {{ myMessage }}
          <v-btn
            color="black"
            text
            @click="close()"
          >
            Close
          </v-btn>
        </v-snackbar>
</template>

<script>
export default {

    computed: {

        myShowSnackVar: {
          get() {
            return this.$store.getters.getShowSnackbar;
          },

          set(value) {
            return value;
          }
        },

        myMessage() {
            return this.$store.getters.getMessage;
        },

        myColor() {
            return this.$store.getters.getColor;
        }

    },

    methods: {

      close() {
        this.$store.dispatch('changeShowSnackbar', false);
      }

    }

}
</script>

<style>

</style>