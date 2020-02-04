<template>
  <v-content>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            sm="8"
            md="4"
          >
            <v-card class="elevation-12">
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Iniciar Sesión</v-toolbar-title>
                <v-spacer />
                
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field
                    label="Correo"
                    name="login"
                    prepend-icon="fas fa-envelope"
                    type="text"
                    v-model="formLogin.email"
                  />

                  <v-text-field
                    id="password"
                    label="Contraseña"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                    v-model="formLogin.password"
                  />
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer />
                <v-btn @click="login" color="primary">Iniciar</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
        <SnackBarMessage />
      </v-container>
    </v-content>
</template>

<script>

import SnackBarMessage from '../help/SnackBarMessage'

export default {

  data(){
    return {
      formLogin: {
        email: '',
        password: ''
      },
      snackbar: false
    }
  },

  created() {

    this.isLogin();

  },


  methods: {

    login(){

      Vue.axios.post('/api/auth/login', this.formLogin)
        .then(res => {

          console.log(res)

          if (res.data.error === 'Unauthorized') {
            this.$store.dispatch('changeMessage', 'Usuario o Contraseña incorrecta');
            this.$store.dispatch('changeColor', 'red');
            this.$store.dispatch('changeShowSnackbar', true);
          }

          if (res.data.message === 'success') {
           
            localStorage.setItem('myToken', res.data.access_token);

            this.$router.push({name: 'admin'});

          }
    

        })
        .catch(error => {
          console.log(error);
      });
      },

      isLogin() {
        
        const myToken = localStorage.getItem('myToken');

      if (myToken !== null) {
        Vue.axios.get('/api/auth/is-login?token='.concat(myToken)).then(res => {
          
          if (res.data.message === true) {
            this.$router.push({name: 'admin'});
          }

        });
      }


      }

  },


  components: {
    SnackBarMessage
  }

}
</script>

<style>

</style>