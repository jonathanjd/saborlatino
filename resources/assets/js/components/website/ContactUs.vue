<template>
  <v-container>
    <v-row>
      <v-col>
        <h3 data-aos="zoom-in" class="display-2 text-center py-2 font-italic font-weight-medium">{{ myCurrentLanguage ? 'Contact US' : 'Contáctenos' }}</h3>
        <p data-aos="fade-right" data-aos-delay="100" class="text-center">coaching2424@gmail.com</p>
        <p data-aos="fade-right" data-aos-delay="150" class="text-center">786-326-6522</p>
        <p class="text-center">
          <v-btn icon>
            <v-icon>fab fa-facebook-f</v-icon>
          </v-btn>
          <v-btn icon>
            <v-icon>fab fa-instagram</v-icon>
          </v-btn>
        </p>
        <v-form data-aos="flip-left" data-aos-delay="160">
          <v-container>
            <v-row>
              <v-col
                cols="12"
                md="6"
              >
                <v-text-field
                  :label="myCurrentLanguage ? 'Name *' : 'Nombre *'"
                  required
                  color="yellow accent-4"
                ></v-text-field>
              </v-col>

              <v-col
                cols="12"
                md="6"
              >
                <v-text-field
                  :label="myCurrentLanguage ? 'Email *' : 'Correo *'"
                  required
                  color="yellow accent-4"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="12">
                <v-textarea
                  :label="myCurrentLanguage ? 'Message' : 'Mensaje *'"
                  value=""
                  :hint="myCurrentLanguage ? 'Write your message' : 'Escribe tu mensaje'"
                  color="yellow accent-4"
                  no-resize
                ></v-textarea>
              </v-col>
              <div class="text-center">
                <v-btn @click="snackbar = true" primary>
                  {{ myCurrentLanguage ? 'Send' : 'Enviar' }}
                </v-btn>
              </div>
            </v-row>
          </v-container>
        </v-form>
        <v-snackbar
          v-model="snackbar"
          color="success"
          :timeout="3000"
        >
          {{ myCurrentLanguage ? 'Message sent succesfully!' : 'Mensaje enviado con éxito!' }}
          <v-btn
            color="black"
            text
            @click="snackbar = false"
          >
            {{ myCurrentLanguage ? 'Close' : 'Cerrar'}}
          </v-btn>
        </v-snackbar>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {

  data() {
    return {
      snackbar: false,
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