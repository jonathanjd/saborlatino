<template>
  <v-footer class="my-padding-zero">
      <v-card
        flat
        tile
        width="100%"
        class="grey darken-4 text-center"
      >
        <v-card-text>
          <v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-4"
            icon
          >
            <v-icon size="24px" color="white">{{ icon }}</v-icon>
          </v-btn>
        </v-card-text>

        <v-divider></v-divider>

        <v-card-text class="white--text hidden-sm-and-down">
            <strong> ©{{ new Date().getFullYear() }} by paLante.com. Proudly created with <a href="http://emcomputersolutions.com/" target="_blank">E&M Computer Solutions</a> </strong>
        </v-card-text>
        <v-card-text class="white--text hidden-md-and-up">
            <strong> ©{{ new Date().getFullYear() }} by paLante.com.</strong>
              <br>
            <strong>
              <a href="http://emcomputersolutions.com/" target="_blank">E&M Computer Solutions</a> 
            </strong>
        </v-card-text>
      </v-card>
    </v-footer>
</template>

<script>
export default {

  data() {
    return {
      icons: [
        'fab fa-facebook-f',
        'fab fa-instagram'

      ],
    }
  }

}
</script>

<style>

</style>