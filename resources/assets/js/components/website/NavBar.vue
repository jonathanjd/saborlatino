<template>
  <v-container>
    <v-toolbar flat>
      <v-toolbar-title class="font-weight-bold">Pa' Lante Moving Forward Coaching</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn @click="linkHome" text>Inicio</v-btn>
        <v-btn @click="linkMission" text>Misión</v-btn>
        <v-btn @click="linkAbout" text>¿Quiénes somos?</v-btn>
        <v-btn @click="linkPackages" text>Paquetes</v-btn>
        <v-menu offset-y>
        <template v-slot:activator="{ on }">
          <v-btn
            color="yellow accent-4"
            dark
            v-on="on"
          >
            Más
          </v-btn>
        </template>
        <v-list>
          <v-list-item
            v-for="(item, index) in items"
            :key="index"
            @click=""
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
        // { title: 'Item1' },
        // { title: 'Item2' },
        // { title: 'Item3' },
        // { title: 'Item4' },
      ],
    }),

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

    }
}
</script>

<style>

</style>