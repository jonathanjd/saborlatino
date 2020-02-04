<template>
    <div>
        <v-expansion-panels class="hidden-sm-and-down" :popout="true" :hover="true" style="position: fixed;bottom: 100px; width: 20%; left:0;">
        <v-expansion-panel>
            <v-expansion-panel-header>
                {{ myCurrentLanguage ? 'Play Audio' : 'Reproducir Audio' }}
            </v-expansion-panel-header>
            <v-expansion-panel-content>
                    <v-list three-line style="max-height: 350px" class="overflow-y-auto" rounded>

                        <v-list-item>
                            <v-list-item-icon>
                                <v-btn @click.prevent="playSound()">
                                    <v-icon>fas fa-play</v-icon>
                                </v-btn>
                            </v-list-item-icon>
                            <v-list-item-content>
                                <v-list-item-title> {{ myCurrentLanguage ? 'Pa Lante Audio EN' : 'Pa Lante Audio ES' }} </v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    </v-list>
            </v-expansion-panel-content>
        </v-expansion-panel>
        </v-expansion-panels>
        <v-row data-aos="zoom-in" class="hidden-md-and-up" style="background-color:#F8BBD0">
            <v-container>
                <v-col xs="12">
                    <h3 class="text-center"><strong>{{ myCurrentLanguage ? 'Pa Lante Audio EN' : 'Pa Lante Audio ES' }}</strong></h3>
                </v-col>
                <v-col xs="12" align="center" justify="center">
                    <v-btn @click.prevent="playSound()">
                        <v-icon>fas fa-play</v-icon>
                    </v-btn>
                </v-col>
            </v-container>
        </v-row>
    </div>
</template>

<script>

import {Howl, Howler} from 'howler';

export default {

    data() {
        return {
            mySound: null
        }
    },
    computed: {
        myCurrentLanguage() {
            return this.$store.getters.getLanguage;
        }
    },

    mounted() {
        this.playSound();
    },

    methods: {


        playSound() {

            let file_path = '';

            if (this.myCurrentLanguage) {
                file_path = '/audio/AudioEN1.m4a'
            } else {
                file_path = '/audio/AudioES1.m4a'
            }

            if (this.mySound !== null) {
                this.mySound.stop();
                this.mySound.unload();
                this.mySound = null;
            }


            this.mySound = new Howl({
                src: file_path,
                volume: 0.5,
            });
            this.mySound.play();
        }
    },

}
</script>

<style>

</style>