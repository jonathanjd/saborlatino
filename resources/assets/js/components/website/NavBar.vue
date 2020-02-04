<template>
  <v-container>
    <v-toolbar flat>
      <v-toolbar-title class="font-weight-bold">Pa' Lante Moving Forward Coaching</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn @click="linkHome" text>{{ myCurrentLanguage ? 'Home': 'Inicio' }}</v-btn>
        <v-btn @click="linkMission" text>{{ myCurrentLanguage ? 'Mission' : 'Misión' }}</v-btn>
        <v-btn @click="linkAbout" text>{{ myCurrentLanguage ? 'About us' : '¿Quiénes Somos?' }}</v-btn>
        <v-btn @click="linkPackages" text>{{ myCurrentLanguage ? 'Services' : 'Servicios' }}</v-btn>
        <v-btn @click="linkOnlineService" text>{{ myCurrentLanguage ? 'Online Service' : 'Servicio en Línea' }}</v-btn>
        <v-menu offset-y>
        <template v-slot:activator="{ on }">
          <v-btn
            color="yellow accent-4"
            dark
            v-on="on"
          >
            Language
          </v-btn>
        </template>
        <v-list>
          <v-list-item
            v-for="(item, index) in items"
            :key="index"
            @click="changeLanguage(item.title)"
          >
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item>
        </v-list>
      </v-menu>
      </v-toolbar-items>

    </v-toolbar>
  </v-container>
</template>

<script>

export default {

  data: () => ({
      items: [
        { title: 'Spanish' },
        { title: 'English' },
      ],
    }),

    computed: {

      myCurrentLanguage() {
        return this.$store.getters.getLanguage;
      },

    },

    methods: {

      linkHome() {
        this.$router.push({
          name: 'home'
        });
      },
      linkAbout() {
        this.$router.push({
          name: 'about'
        });
      },
      linkMission() {
        this.$router.push({
          name: 'mission'
        });
      },
      linkPackages() {
        this.$router.push({
          name: 'packages'
        });
      },
      linkOnlineService() {
        this.$router.push({
          name: 'onlineService'
        });
      },

      changeLanguage(type) {

        let value = this.$store.getters.getLanguage;
        if (type === 'Spanish') {
          this.$store.dispatch('actionLanguage', false);
        } else {
          this.$store.dispatch('actionLanguage', true);
        }

      }

    }
}
</script>

<style>

</style>