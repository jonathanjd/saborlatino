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
                  v-model="name"
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
                  v-model="email"
                ></v-text-field>
              </v-col>

              <v-col cols="12" md="12">
                <v-textarea
                  :label="myCurrentLanguage ? 'Message' : 'Mensaje *'"
                  value=""
                  :hint="myCurrentLanguage ? 'Write your message' : 'Escribe tu mensaje'"
                  color="yellow accent-4"
                  no-resize
                  v-model="message"
                ></v-textarea>
              </v-col>
              <div class="text-center">
                <v-btn @click="sendEmail()" primary>
                  {{ myCurrentLanguage ? 'Send' : 'Enviar' }}
                </v-btn>
              </div>
            </v-row>
          </v-container>
        </v-form>
        <v-snackbar
          v-model="snackbar"
          :color="myColorSnack"
          :timeout="3000"
        >
          {{ snackBarMsj }}
      
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
      name: '',
      email: '',
      message: '',
      snackBarMsj: '',
      snackBarColor: 'success'
    }
  },

  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    },
    myColorSnack() {
      return this.snackBarColor;
    }
  },

  methods: {
    sendEmail() {
      if (this.name !== '' && this.email !== '' && this.message !== '') {
      

        const data = {
          name: this.name,
          email: this.email,
          message: this.message
        }

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))
        {
          Vue.axios.post('/api/send-email', data).then( response => {
  
            this.snackBarMsj = this.myCurrentLanguage ? 'Message sent succesfully!' : 'Mensaje enviado con éxito!'
            this.snackBarColor = 'success';
            this.snackbar = true;
            this.name = '';
            this.email = '';
            this.message = '';
          })
          
        } else {
          this.snackBarMsj = this.myCurrentLanguage ? 'Invalid email!' : 'Correo invalido!'
          this.snackBarColor = 'warning';
          this.snackbar = true;
        }
      
      } else {
          this.snackBarMsj = this.myCurrentLanguage ? 'All fields are required!' : 'Todos los campos son obligatios!'
          this.snackBarColor = 'warning';
          this.snackbar = true;
      }
    }
  }

}
</script>

<style>

</style>