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
      </v-container>
    </v-content>
</template>

<script>
export default {

  data(){
    return {
      formLogin: {
        email: '',
        password: ''
      }
    }
  },

  created() {
    if (User.loggedIn()) {
      this.$router.push({name: 'admin'});
    }
  },


  methods: {

    login(){
        this.$router.push({name: 'admin'});
        User.login(this.formLogin);
      },

  }

}
</script>

<style>

</style>