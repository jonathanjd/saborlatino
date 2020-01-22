
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
        <Team></Team>
        <Review></Review>
        <ContactUs></ContactUs>
        <Chat></Chat>
        <Footer></Footer>
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

export default {
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
        Chat,
        Footer
    }
}
</script>

<style>

</style>