<template>
  <v-container class="box-bg-grey" fluid>
      <v-row>
          <v-col>
              <h3 data-aos="zoom-in" class="display-2 text-center py-2 font-italic font-weight-medium">{{ myCurrentLanguage ? 'Services' : 'Servicios'}}</h3>
          </v-col>
      </v-row>
      <v-row data-aos="zoom-in">
          <v-col v-for="(item, index) in packages" :key="item.id">
              <v-hover>
                  <template v-slot="{ hover }">
                    <v-card 
                        :dark="item.premium == 1 ? true : false"
                        class="mx-auto"
                        max-width="344"
                        :elevation="hover ? 24 : 6"
                    >

                        <v-img
                        v-if="index == 0"
                        src="/img/service-individual.jpg"
                        height="200px"
                        ></v-img>
                        <v-img
                        v-if="index == 1"
                        src="/img/package1.jpg"
                        height="200px"
                        ></v-img>
                        <v-img
                        v-if="index == 2"
                        src="/img/package2.jpg"
                        height="200px"
                        ></v-img>
                        <v-img
                        v-if="index == 3"
                        src="/img/package3.jpg"
                        height="200px"
                        ></v-img>

                        <v-card-title>
                            {{ item.name }}
                        </v-card-title>

                        <v-list shaped v-if="item.details_package">
                            <v-list-item-group color="primary">
                                <v-list-item
                                v-for="value in item.details_package"
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

                        <v-card-actions class="justify-center">
                        <v-btn
                            :text="item.premium == 1 ? false : true"
                        > {{ myCurrentLanguage ? 'Add To Cart' : 'Añadir al carrito'}} </v-btn>

                        <v-btn
                            color="primary"
                            :text="item.premium == 1 ? false : true"
                            @click="linlBuyPackage(item.id)"
                        >
                            {{ myCurrentLanguage ? 'Contact US' : 'Contáctenos' }}
                        </v-btn>
                        </v-card-actions>
                    </v-card>

                  </template>
              </v-hover>
          </v-col>
      </v-row>
      <v-row>
          <v-col>
              <div class="text-center"><strong>{{ myCurrentLanguage ? 'Availables in 6,8 and 12 weeks sessions' : 'Disponible en sesiones de 6,8 y 12 semanas.' }}</strong></div>
          </v-col>
      </v-row>
  </v-container>
</template>

<script>
export default {

    data() {
        return {
            packages: [],
            details: []
        }
    },

    created() {
        this.fetchPackages();
    },

    computed: {
        myCurrentLanguage() {
            return this.$store.getters.getLanguage;
        }
    },

    methods: {
        fetchPackages() {
            Vue.axios.get('/api/packages/web').then( response => {
                if (response.data.msj === 'success') {
                    this.packages = response.data.package;
                }
            });
        },

        linlBuyPackage(id) {
            this.$router.push({
                name: 'buy',
                params: { 'packageId': id }
            });
        }
    }

}
</script>

<style>

</style>