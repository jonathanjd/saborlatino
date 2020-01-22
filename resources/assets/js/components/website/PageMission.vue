<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5"> Section Mission - En Desarrollo </h3>
                    <v-divider></v-divider>
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