<template>
  <v-container>
      <v-row>
          <v-col>
            <h3 data-aos="zoom-in" class="display-2 text-center py-2 font-italic font-weight-medium">Equipo</h3>
            <v-carousel height="600" cycle hide-delimiters>
                <v-carousel-item
                v-for="(color, i) in colors"
                :key="color + Math.random()"
                >
                <v-sheet
                    :color="color"
                    height="100%"
                    tile
                >
                    <v-row
                    class="fill-height"
                    align="center"
                    justify="center"
                    >
                    
                      <v-card v-if="i === 0"
                            class="mx-auto"
                            max-width="600"
                            tile
                        >
                            <v-img
                            height="100%"
                            src="/img/team-bg-1.jpg"
                            >
                            <v-row
                                align="end"
                                class="fill-height"
                            >
                                <v-col
                                align-self="start"
                                class="pa-0"
                                cols="12"
                                >
                                </v-col>
                                <v-col class="py-0">
                                <v-list-item
                                    color="rgba(0, 0, 0, .4)"
                                    dark
                                >
                                    <v-list-item-content>
                                    <v-list-item-title class="title">Ivette Llamas</v-list-item-title>
                                    <v-list-item-subtitle>Certified Professional Coach</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                                </v-col>
                            </v-row>
                            </v-img>
                        </v-card>
                      <v-card v-if="i === 1"
                            class="mx-auto"
                            max-width="600"
                            tile
                        >
                            <v-img
                            height="100%"
                            src="/img/team-bg-2.jpg"
                            >
                            <v-row
                                align="end"
                                class="fill-height"
                            >
                                <v-col
                                align-self="start"
                                class="pa-0"
                                cols="12"
                                >
                                </v-col>
                                <v-col class="py-0">
                                <v-list-item
                                    color="rgba(0, 0, 0, .4)"
                                    dark
                                >
                                    <v-list-item-content>
                                    <v-list-item-title class="title">Marcus Obrien</v-list-item-title>
                                    <v-list-item-subtitle>Certified Nutricional Coach</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                                </v-col>
                            </v-row>
                            </v-img>
                        </v-card>
                    </v-row>
                </v-sheet>
                </v-carousel-item>
            </v-carousel>
          </v-col>
      </v-row>
  </v-container>
</template>

<script>
export default {
    data(){
        return {
        colors: [
          'white',
          'white'
        ],
        }
    }
}
</script>

<style>

</style>