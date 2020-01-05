<template>
  <v-container>
    <v-toolbar flat>
      <v-toolbar-title>Logo My Company</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn text>Inicio</v-btn>
        <v-btn text>Misión</v-btn>
        <v-btn text>¿Quiénes somos?</v-btn>
        <v-btn text>Servicios</v-btn>
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
        { title: 'Item1' },
        { title: 'Item2' },
        { title: 'Item3' },
        { title: 'Item4' },
      ],
    }),
}
</script>

<style>

</style>