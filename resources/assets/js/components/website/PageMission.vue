<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5"> Misión</h3>
                    <v-divider></v-divider>
                </v-col>
            </v-row>
            <v-row>
                <v-col md="6">
                    <v-img height="100%" width="100%" src="/img/mision-bg.jpg"></v-img>
                </v-col>
                <v-col md="6">
                    <p class="text-justify">Yo, Sandra A. Raymond, utiliza formas únicas para ayudar a mis clientes a identificar qué cambios desean explorar. Creo que el crecimiento proviene de tener el coraje de enfrentar su verdad y desafiar las circunstancias en un espacio seguro y de apoyo. Mi enfoque es un enfoque humanista genuino, y animo a los clientes la oportunidad de aprovechar sus ideas a través de la reorientación individual. Mi rol de entrenador funciona como una guía de apoyo, que permite a los clientes encontrar formas de pensar de manera diferente con el crecimiento interno de la individualidad. Mi enfoque principal de Coaching es entender y escuchar a mis clientes y encontrar formas de comenzar un nuevo capítulo en sus vidas a través de una plataforma de autoconciencia. Quiero trabajar con mis clientes, en colaboración hacia el empoderamiento, la paz y la armonía.</p>
                    <p class="text-justify">
                        Creo que el crecimiento proviene de tener el coraje de enfrentar su verdad y desafiar las circunstancias en un espacio seguro y de apoyo. Mi enfoque es un enfoque humanista genuino, y animo a los clientes la oportunidad de aprovechar sus ideas a través de la reorientación individual. Mi rol de entrenador funciona como una guía de apoyo, que permite a los clientes encontrar formas de pensar de manera diferente con el crecimiento interno de la individualidad. Mi enfoque principal de Coaching es entender y escuchar a mis clientes y encontrar formas de comenzar un nuevo capítulo en sus vidas a través de una plataforma de autoconciencia. Quiero trabajar con mis clientes, en colaboración hacia el empoderamiento, la paz y la armonía.
                    </p>
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