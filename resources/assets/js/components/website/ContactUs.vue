<template>
  <v-container>
    <v-row>
      <v-col>
        <h3 data-aos="zoom-in" class="display-2 text-center py-2 font-italic font-weight-medium">Contáctanos</h3>
        <p data-aos="fade-right" data-aos-delay="100" class="text-center">myCompany@gmail.com</p>
        <p data-aos="fade-right" data-aos-delay="150" class="text-center">954.559.7492</p>
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
                  label="Nombre *"
                  required
                  color="yellow accent-4"
                ></v-text-field>
              </v-col>

              <v-col
                cols="12"
                md="6"
              >
                <v-text-field
                  label="Email *"
                  required
                  color="yellow accent-4"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="12">
                <v-textarea
                  label="Mensaje *"
                  value=""
                  hint="Escribe tu mensaje"
                  color="yellow accent-4"
                  no-resize
                ></v-textarea>
              </v-col>
              <div class="text-center">
                <v-btn @click="snackbar = true" primary>
                  Enviar
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
          Mensaje enviado con éxito!
          <v-btn
            color="black"
            text
            @click="snackbar = false"
          >
            Cerrar
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
  }

}
</script>

<style>

</style>