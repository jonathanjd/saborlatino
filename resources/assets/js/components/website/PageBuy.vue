<template>
    <div>
        <InfoTop></InfoTop>
        <NavBar></NavBar>
        <v-container>
            <v-row>
                <v-col md="12">
                    <h3 class="display-1 text-md-center pa-5"><v-icon large>far fa-credit-card</v-icon> Comprar Paquete <v-icon large>fas fa-box-open</v-icon></h3>
                    <v-divider></v-divider>
                </v-col>
                <v-col md="6" style="background-color:#FFEB3B">
                    <v-hover>

                        <template v-if="showInfoPackage" v-slot="{ hover }">
                        <v-card 
                            :dark="myPackage.premium == 1 ? true : false"
                            class="mx-auto"
                            max-width="344"
                            :elevation="hover ? 24 : 6"
                        >

                            <v-img
                            src="/img/package.jpg"
                            height="200px"
                            ></v-img>

                            <v-card-title>
                                {{ myPackage.name }}
                            </v-card-title>

                            <v-list shaped v-if="myPackage.details_package">
                                <v-list-item-group color="primary">
                                    <v-list-item
                                    v-for="value in myPackage.details_package"
                                    :key="value.id"
                                    >
                                    <v-list-item-icon>
                                        <v-icon>fas fa-circle</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title v-text="value.feature"></v-list-item-title>
                                    </v-list-item-content>
                                    </v-list-item>
                                </v-list-item-group>
                            </v-list>
                        </v-card>
                        </template>
                    </v-hover>
                </v-col>
                <v-col md="6">
                    <h4 class="display-1 text-md-center"><v-icon large>fas fa-circle</v-icon> Forma de Pago</h4>
                    <v-btn class="text-md-center my-5" block x-large color="primary">
                        <v-icon class="mx-2" x-large>fab fa-cc-paypal</v-icon> Paypal
                    </v-btn>
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
            myPackage: ''
        }
    },

    computed: {

        showInfoPackage() {
            return this.myPackage !== '' ? true : false;
        }

    },

    created() {

        Vue.axios.get('/api/packages/'.concat(this.$route.params.packageId))
            .then( response => {
                if (response.data.msj == 'success') {
                    console.log('object')
                    this.myPackage = response.data.package;
                }
            });

    },

    components: {
        InfoTop,
        NavBar,
    }

}
</script>

<style>

</style>