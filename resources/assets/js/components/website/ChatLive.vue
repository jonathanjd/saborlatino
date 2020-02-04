<template>
<div>
    <v-expansion-panels class="hidden-sm-and-down" :popout="true" :hover="true" style="position: fixed;bottom: 100px; width: 20%; right:0;">
    <v-expansion-panel>
        <v-expansion-panel-header>
            {{ myCurrentLanguage ? 'Live Chat' : 'Chat en Vivo' }}
        </v-expansion-panel-header>
        <v-expansion-panel-content>
                <v-list three-line style="max-height: 350px" class="overflow-y-auto">
                    <template v-for="(item, index) in myReverseChat">
                        <v-subheader
                        v-if="item.header"
                        :key="item.header"
                        v-text="item.header"
                        ></v-subheader>

                        <v-divider
                        v-else-if="item.divider"
                        :key="index"
                        :inset="item.inset"
                        ></v-divider>

                        <v-list-item
                        v-else
                        :key="item.index"
                        @click=""
                        >
                        <v-list-item-avatar>
                            <v-img :src="item.avatar"></v-img>
                        </v-list-item-avatar>

                        <v-list-item-content>
                            <v-list-item-title v-html="item.title"></v-list-item-title>
                            <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
                        </v-list-item-content>
                        </v-list-item>
                    </template>
                </v-list>
                <v-form>
                        <v-text-field
                            v-model="form.name"
                            label="Mi Nombre"
                            required
                            >
                        </v-text-field>
                        <v-textarea
                            v-model="form.mensaje"
                            filled
                            auto-grow
                            label="Mi Mensaje"
                            rows="2"
                            row-height="30"
                            shaped
                            no-resize
                            ></v-textarea>

                        <v-btn @click.prevent="sent" class="mx-2" fab dark small color="primary">
                            <v-icon dark>fas fa-paper-plane</v-icon>
                        </v-btn>
                </v-form>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
    <v-row data-aos="zoom-in" class="hidden-md-and-up">
        <v-container>
            <v-col xs="12">
                <h3 class="text-center"><strong>{{ myCurrentLanguage ? 'Live Chat' : 'Chat en Vivo' }}</strong></h3>
                <v-list three-line style="max-height: 350px" class="overflow-y-auto">
                    <template v-for="(item, index) in myReverseChat">
                        <v-subheader
                        v-if="item.header"
                        :key="item.header"
                        v-text="item.header"
                        ></v-subheader>

                        <v-divider
                        v-else-if="item.divider"
                        :key="index"
                        :inset="item.inset"
                        ></v-divider>

                        <v-list-item
                        v-else
                        :key="item.index"
                        @click=""
                        >
                        <v-list-item-avatar>
                            <v-img :src="item.avatar"></v-img>
                        </v-list-item-avatar>

                        <v-list-item-content>
                            <v-list-item-title v-html="item.title"></v-list-item-title>
                            <v-list-item-subtitle v-html="item.subtitle"></v-list-item-subtitle>
                        </v-list-item-content>
                        </v-list-item>
                    </template>
                </v-list>
                <v-form>
                        <v-text-field
                            v-model="form.name"
                            label="Mi Nombre"
                            required
                            >
                        </v-text-field>
                        <v-textarea
                            v-model="form.mensaje"
                            filled
                            auto-grow
                            label="Mi Mensaje"
                            rows="2"
                            row-height="30"
                            shaped
                            no-resize
                            ></v-textarea>

                        <v-btn @click.prevent="sent" class="mx-2" fab dark small color="primary">
                            <v-icon dark>fas fa-paper-plane</v-icon>
                        </v-btn>
                </v-form>
            </v-col>
        </v-container>
    </v-row>
</div>
</template>

<script>

import Pusher from 'pusher-js';

Pusher.logToConsole = true;

export default {

    data() {
        return {
            form: {
                name: '',
                mensaje: ''
            },
            items: [
                {
                avatar: '/img/user1.png',
                title: 'Coach',
                subtitle: "<span class='text--primary'>Sandra Raymond</span> &mdash; Hi!",
                },
            ],

            messages: [],
        }
    },
    computed: {
        myReverseChat () {
            return this.items;
        },
        myCurrentLanguage() {
            return this.$store.getters.getLanguage;
        }
    },

    created() {
        let pusher = new Pusher('0cd8d9bc7cfc6ca56831', {
            cluster: 'us2',
            forceTLS: true
        });

        let channel = pusher.subscribe('my-channel');

        channel.bind('my-event', function(data) {
            console.log(data);
            alert(JSON.stringify(data));
        });

        Vue.axios.post('/api/test-pusher').then(res => {
            console.log(res)
        });
    },

    methods: {
        sent() {
            console.log('Enviar Mensaje')
            let name = this.form.name;
            let msj = this.form.mensaje;

            this.items = this.items.reverse();
            
            this.items.push(
                {
                avatar: '/img/user2.png',
                title: 'Usuario',
                subtitle: "<span class='text--primary'>" + name + "</span>:  " + msj,
                },
            );

            this.items = this.items.reverse();

            this.form.mensaje = '';
        }
    },

}
</script>

<style>

</style>