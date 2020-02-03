
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
          color="default"
          :timeout="10000"
        >
          Language: <v-chip @click.prevent="changeLanguage('English')" class="ma-2" color="primary">English</v-chip> / <v-chip @click.prevent="changeLanguage('Spanish')" class="ma-2" color="red">Spanish</v-chip>
          <v-btn
            color="white"
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
      },
    },

    methods: {

        changeLanguage(type) {

            let value = this.$store.getters.getLanguage;
            if (type === 'Spanish') {
                this.$store.dispatch('actionLanguage', false);
            } else {
                this.$store.dispatch('actionLanguage', true);
            }

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