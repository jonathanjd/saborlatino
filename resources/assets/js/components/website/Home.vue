
<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <Header></Header>
        <Mission></Mission>
        <About></About>
        <!-- <Service></Service> -->
        <Packages></Packages>
        <Question></Question>
        <Video></Video>
        <Review></Review>
        <ContactUs></ContactUs>
        <Footer></Footer>
        <ChatLive></ChatLive>
        <v-snackbar
          v-model="snackbar"
          color="white"
          :timeout="20000"
          right
          top
          light
        >
          <v-chip @click.prevent="changeLanguage(myCurrentLanguage)" class="ma-2" color="primary">Translate</v-chip>
          <v-btn
            color="black"
            text
            @click="snackbar = false"
          >
            {{ myCurrentLanguage ? 'Close' : 'Cerrar'}}
          </v-btn>
        </v-snackbar>
    </div>
</template>

<script>

import InfoTop from './InfoTop';
import NavBar from './NavBar';
import Header from './Header';
import Mission from './Mission';
import About from './About';
import Service from './Service';
import Packages from './Packages';
import Question from './Question';
import Video from './Video';
import Team from './Team';
import Review from './Review';
import ContactUs from './ContactUs';
import Chat from './Chat';
import Footer from './Footer';
import ChatLive from './ChatLive';

export default {

    data() {
        return {
            snackbar: true
        }
    },

    computed: {
      myCurrentLanguage() {
        return this.$store.getters.getLanguage;
      }
    },

    methods: {

        changeLanguage(value) {

          this.$store.dispatch('actionLanguage', !value);

      }
    },

    components: {
        InfoTop,
        NavBar,
        Header,
        Mission,
        About,
        Service,
        Packages,
        Question,
        Video,
        Team,
        Review,
        ContactUs,
        Footer,
        ChatLive
    }
}
</script>

<style>

</style>