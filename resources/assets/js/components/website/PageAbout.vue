<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5"> ¿Quiénes Somos?</h3>
                    <v-divider></v-divider>
                </v-col>
            </v-row>
            <v-row>
                <v-col md="6">
                    <v-img data-aos="zoom-in" height="100%" width="100%" src="/img/who-page.jpg"></v-img>
                </v-col>
                <v-col md="6">
                    <p data-aos="zoom-in" class="text-justify"><strong>Pa' Lante Moving Forward Coaching</strong> se creó para ofrecer un entrenamiento en el crecimiento personal y familiar. Específico para aquellas personas que necesitan y creen que el bienestar y el rendimiento se consiguen a través de una dirección y una orientación profesional. Entrenamos y acompañamos a las personas en su proceso de cumplir sus objetivos, metas, propósitos y dirigirlos a que logren una satisfacción personal que los lleve a descubrir lo que realmente es importante en su vida.</p>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';

export default {
  components: {
        InfoTop,
        NavBar,
    }
}
</script>

<style>

</style>