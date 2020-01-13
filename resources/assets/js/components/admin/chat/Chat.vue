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
                  <v-list-item  @click="">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> User 1</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item  @click="">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> User 2</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item  @click="">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> User 3</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item  @click="">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> User 4</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
                  <v-list-item  @click="">
                      <v-list-item-avatar>
                        <v-icon left>fas fa-user</v-icon>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title> User 5</v-list-item-title>
                    </v-list-item-content>
                  </v-list-item>
              </v-list>
          </v-card>
      </v-col>
      <v-col cols="9">
          
      </v-col>
  </v-row>
</template>
<script>
export default {

}
</script>

<style>

</style>