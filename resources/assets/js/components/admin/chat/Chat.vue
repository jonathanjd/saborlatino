<template>
  <v-row>
      <v-col cols="12">
          <v-card width="100%" color="pink" elevation="1">
              <v-card-title style="color: white">CHAT</v-card-title>
          </v-card>
      </v-col>
      <v-col cols="3">
          <v-card width="100%" color="white" elevation="1">
              <v-card-title style="background-color:#424242;color: white"> <v-icon color="white" left>fas fa-users</v-icon> <span class="title font-weight-light">Chats</span></v-card-title>
              <v-divider></v-divider>
              <v-list>

                  <v-list-item v-for="itemUser in myuChatUsers"  @click="openChat(itemUser.id, itemUser.email)" :key="itemUser.id">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> {{ itemUser.email }} / {{ itemUser.name }}</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>

              </v-list>
          </v-card>
      </v-col>
      <v-col cols="5" v-if="myShowChat">
          <v-card>
              <v-card-text>
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
                            <v-img :src="item.chat_users_send != 0 ? '/img/user2.png' : '/img/user1.png'"></v-img>
                        </v-list-item-avatar>

                        <v-list-item-content>
                            <v-list-item-title>{{ item.user_chat ?  item.user_chat.name : 'Sandra Raymond' }}</v-list-item-title>
                            <v-list-item-subtitle v-html="item.message"></v-list-item-subtitle>
                        </v-list-item-content>
                        </v-list-item>
                    </template>
                </v-list>
                <v-form>
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

                        <v-btn @click.prevent="sent()" class="mx-2" fab dark small color="primary">
                            <v-icon dark>fas fa-paper-plane</v-icon>
                        </v-btn>
                </v-form>
              </v-card-text>

          </v-card>
      </v-col>
  </v-row>
</template>
<script>
export default {

    data() {
        return {
            chatUsers: '',
            showChat: false,
            form: {
                name: '',
                email: '',
                mensaje: '',
                chat_users_receives: '',
                chat_users_receives_email: ''
            },
            messages: []
        }
    },

    created(){
        this.fetchUsersChat();
    },

    mounted() {
        let pusher = new Pusher('0cd8d9bc7cfc6ca56831', {
            cluster: 'us2',
            forceTLS: true
        });

        let channel = pusher.subscribe('my-channel');

        channel.bind('my-event', data => {
            
    
            if (data.chatUserEmail === this.form.chat_users_receives_email) {
                Vue.axios.get('/api/chat-message-user/'.concat(data.chatUserID)).then( response => {

                this.messages = response.data.myMessageUser;
                });
            }
            
        });
    },

    computed: {
        myuChatUsers() {
            return this.chatUsers;
        },
        myShowChat() {
            return this.showChat;
        },

        myReverseChat() {
            return this.messages.reverse();
        }
    },

    methods: {
        fetchUsersChat() {

            Vue.axios.get('/api/chat-users').then(response => {
                console.log(response.data.myChatUser)
                this.chatUsers = response.data.myChatUser

            }) ;

        },

        openChat(idUser, emailUSer) {

            this.showChat = true;
            Vue.axios.get('/api/chat-message-user/'.concat(idUser)).then( response => {
                this.messages = response.data.myMessageUser;
                this.form.chat_users_receives = idUser;
                this.form.chat_users_receives_email = emailUSer;
            });

        },

        sent() {
            console.log('Enviar Mensaje')
            this.form.name = 'Sandra Raymond';
            this.form.email = 'coaching2424@gmail.com';


            Vue.axios.post('/api/test-pusher', this.form).then(res => {
                this.form.mensaje = '';
                Vue.axios.get('/api/chat-message-user/'.concat(this.form.chat_users_receives)).then( response => {
                this.messages = response.data.myMessageUser;
                this.form.chat_users_receives = this.form.chat_users_receives;
            });
            });
        }
    }

}
</script>

<style>

</style>