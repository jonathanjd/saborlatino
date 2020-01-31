<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5">{{ myCurrentLanguage ? 'Mission' : 'Misión' }}</h3>
                    <v-divider></v-divider>
                </v-col>
            </v-row>
            <v-row>
                <v-col md="6">
                    <v-img data-aos="zoom-in" height="100%" width="100%" src="/img/mision-bg.jpg"></v-img>
                </v-col>
                <v-col md="6">
                    <p data-aos="zoom-in" class="text-justify">{{ myCurrentLanguage ? txtEN : txtES }}</p>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';

export default {

    data() {
        return {
            txtES: 'Yo, Sandra A. Raymond, utilizo formas únicas para ayudar a mis clientes a identificar qué cambios desean explorar. Creo que el crecimiento proviene de tener el coraje de enfrentar su verdad y desafiar las circunstancias en un espacio seguro y de apoyo. Mi enfoque es un enfoque humanista genuino, y animo a los clientes la oportunidad de aprovechar sus ideas a través de la reorientación individual. Mi rol de entrenador funciona como una guía de apoyo, que permite a los clientes encontrar formas de pensar de manera diferente con el crecimiento interno de la individualidad. Mi enfoque principal de Coaching es entender y escuchar a mis clientes y encontrar formas de comenzar un nuevo capítulo en sus vidas a través de una plataforma de autoconciencia. Quiero trabajar con mis clientes, en colaboración hacia el empoderamiento, la paz y la armonía.',
            txtEN: 'I, Sandra A. Raymond, use unique ways to help my clients identify what changes they want to explore. I believe that growth comes from having the courage to face its truth and challenge circumstances in a safe and supportive space. My approach is a genuine humanistic approach, and I encourage clients the opportunity to take advantage of their ideas through individual reorientation. My role as coach works as a support guide, which allows clients to find ways of thinking differently with the internal growth of individuality. My main focus of Coaching is to understand and listen to my clients and find ways to start a new chapter in their lives through a platform of self-awareness. I want to work with my clients, in collaboration towards empowerment, peace and harmony.'
        }
    },


  computed: {
    myCurrentLanguage() {
        return this.$store.getters.getLanguage;
    }
  },

  components: {
        InfoTop,
        NavBar,
    }
}
</script>

<style>

</style>