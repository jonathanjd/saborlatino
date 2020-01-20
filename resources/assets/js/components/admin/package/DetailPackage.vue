<template>
    <v-dialog v-model="show" fullscreen hide-overlay transition="dialog-bottom-transition">
      <v-card>
        <v-toolbar dark color="indigo">
          <v-btn icon dark @click.stop="show = false">
            <v-icon>fas fa-window-close</v-icon>
          </v-btn>
          <v-toolbar-title>Mi Paquete - {{ myNamePackAge }}</v-toolbar-title>
        </v-toolbar>

        <v-container>
          <v-row>
            <v-col>
              <h3>Características del Plan</h3>
              <v-divider></v-divider>
                  <v-list shaped>
                    <v-list-item-group color="primary">
                      <v-list-item
                        v-for="(item, index) in details"
                        :key="item.id"
                      >
                        <v-list-item-icon>
                          <v-icon>fas fa-circle</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                          <v-list-item-title v-text="item.feature"></v-list-item-title>
                        </v-list-item-content>

                      <v-list-item-action>
                        <v-btn icon @click="destroy(item.id, index)">
                          <v-icon color="red">fas fa-trash-alt</v-icon>
                        </v-btn>
                      </v-list-item-action>
                      </v-list-item>
                    </v-list-item-group>
                  </v-list>
            </v-col>
            <v-col>
              <h3>Crear Característica</h3>
              <v-divider></v-divider>
              <ValidationObserver v-slot="{ handleSubmit }" ref="obs">
                <form @submit.prevent="handleSubmit(store)" ref="form">

                <ValidationProvider name="Característica" rules="required" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="form.feature"
                      label="Característica"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <v-card-actions>
                    <v-btn color="primary" type="submit">Guardar</v-btn>
                </v-card-actions>

                </form>
              </ValidationObserver>
            </v-col>
          </v-row>
        </v-container>

      </v-card>
    </v-dialog>
</template>

<script>
export default {

  data() {
    return {
      form: {
        feature: ''
      }
    }
  },

  props: ['myNamePackAge', 'myIdPackAge', 'myShowDialog', 'myDetails'],
  computed: {
    show: {
      get () {
        return this.myShowDialog
      },
      set(value) {
        if (!value) {
          this.$emit('close')
        }
      }
    },
    details: {
      get () {
        return this.myDetails
      },
      set(value) {
      }
    },
  },

  methods: {
    store() {
    
      let data = {
        feature: this.form.feature,
        package_id: this.myIdPackAge
      }

      Vue.axios.post('/api/detailpackages', data).then(response => {
        console.log(response)
        this.myDetails.push(response.data.detailpackage);
        this.clearFormCreate();
      });

    },

    destroy(id, index) {
      console.log('delete')
      Vue.axios.delete('/api/detailpackages/' + id).then(response => {
        console.log(response)
        this.myDetails.splice(index, 1);
      });
    },

    clearFormCreate() {
      this.form.feature = '';
      this.$refs.obs.reset();
      this.$refs.form.reset();
    },
  }

}
</script>

<style>

</style>