
<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <Header></Header>
        <Mission></Mission>
        <About></About>
        <Service></Service>
        <Question></Question>
        <Video></Video>
        <Team></Team>
        <Review></Review>
        <ContactUs></ContactUs>
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
import Question from './Question';
import Video from './Video';
import Team from './Team';
import Review from './Review';
import ContactUs from './ContactUs';
import Footer from './Footer';

export default {
    components: {
        InfoTop,
        NavBar,
        Header,
        Mission,
        About,
        Service,
        Question,
        Video,
        Team,
        Review,
        ContactUs,
        Footer
    }
}
</script>

<style>

</style>