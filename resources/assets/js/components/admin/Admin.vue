<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
    >
      <v-list dense>

        <v-list-item @click="changeComponent('Start')" link>
          <v-list-item-action>
            <v-icon>fas fa-tachometer-alt</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Inicio</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item @click="linkWebsite" link>
          <v-list-item-action>
            <v-icon>fas fa-paint-brush</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Sitio Web</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item @click="changeComponent('Package')" link>
          <v-list-item-action>
            <v-icon>fas fa-box-open</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Servicios</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item @click="changeComponent('Review')" link>
          <v-list-item-action>
            <v-icon>fas fa-user-friends</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Reseñas</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item @click="changeComponent('Chat')" link>
          <v-list-item-action>
            <v-icon>fas fa-comment-dots</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Chat</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item link>
          <v-list-item-action>
            <v-icon>fas fa-sign-out-alt</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title @click="logout()">Cerrar Sesion</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="indigo"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title>Admin Panel</v-toolbar-title>
    </v-app-bar>

    <v-content>
      <v-container
        fluid
      >
        <component :is="dynamicComponent"></component> 
      </v-container>
    </v-content>
    <v-footer
      color="indigo"
      app
    >
      <span class="white--text">&copy; 2020</span>
    </v-footer>
  </v-app>
</template>

<script>

  import Start from './Start'
  import Chat from './chat/Chat'
  import Website from './website/Website'
  import Package from './package/Package'
  import Review from './review/Review'

  export default {
    props: {
      source: String,
    },

    data: () => ({
      drawer: null,
      dynamicComponent: Start
    }),

    created() {

      this.isLogin();

    },

    methods: {
      changeComponent(value) {
        switch (value) {
          case 'Start':
            this.dynamicComponent = Start;
            break;
          case 'Chat':
            this.dynamicComponent = Chat;
            break;
          case 'Package':
            this.dynamicComponent = Package;
            break;
          case 'Service':
            this.dynamicComponent = Service;
            break;
          case 'Review':
            this.dynamicComponent = Review;
            break;
        }
      },

      linkWebsite() {
        this.$router.push({name: 'home'});
      },

      isLogin() {
        
        const myToken = localStorage.getItem('myToken');

        if (myToken === null) {
          this.$router.push({name: 'login'});
        }

        Vue.axios.get('/api/auth/is-login?token='.concat(myToken)).then(res => {
          
          if (res.data.message === false) {
            this.$router.push({name: 'login'});
          }

        });

      },

      logout() {

        const myToken = localStorage.getItem('myToken');
        Vue.axios.post('/api/auth/logout?token='.concat(myToken)).then(res => {
          if (res.data.message === true) {
            localStorage.removeItem('myToken');
            this.$router.push({name: 'login'});
          }
        });
      }
    },
    components: {
      Start,
      Chat,
      Website,
      Package,
      Review
    }
  }
</script>