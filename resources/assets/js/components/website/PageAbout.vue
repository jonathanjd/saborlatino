<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5">{{ myCurrentLanguage ? 'About us' : '¿Quiénes Somos?' }}</h3>
                    <v-divider></v-divider>
                </v-col>
            </v-row>
            <v-row>
                <v-col md="6">
                    <v-img data-aos="zoom-in" height="100%" width="100%" src="/img/who-page.jpg"></v-img>
                </v-col>
                <v-col md="6">
                    <p data-aos="zoom-in" class="text-justify"><strong>Pa' Lante Moving Forward Coaching</strong> {{ myCurrentLanguage ? txtEN : txtES }}</p>
                </v-col>
            </v-row>
        </v-container>
        <Footer />
    </div>
</template>

<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';
import Footer from './Footer';

export default {

    data() {
        return {
            txtES: 'se creó para ofrecer una guia en el crecimiento personal y familiar. Específico para aquellas personas que necesitan y creen que el bienestar y el rendimiento se consiguen a través de una dirección y una ayuda profesional. Acompanamos  y apoyamos a las personas en su proceso de cumplir sus objetivos, metas, propósitos y dirigirlos a que logren una satisfacción personal que los lleve a descubrir lo que realmente es importante en su vida.',
            txtEN: 'it was created to offer a guide in personal and family growth. Specific for those people who need and believe that well-being and performance are achieved through guidance and professional help. We accompany and support people in their process of fulfilling their objectives, goals, purposes and directing them to achieve personal satisfaction that leads them to discover what is really important in their lives.'
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
        Footer
    }
}
</script>

<style>

</style>