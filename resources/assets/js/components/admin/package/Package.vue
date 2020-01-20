<template>
  <v-row>
    <v-col>
      <div class="display-1" :md="12">
          Paquetes
      </div>
    </v-col>

    <v-col :md="12">
        <v-hover>
          <template v-slot="{ hover }">
            <v-card :elevation="hover ? 24 : 6">
              <v-simple-table>
                <template v-slot:default>
                  <thead>
                    <tr>
                      <th class="text-left">Nombre</th>
                      <th class="text-left">Precio</th>
                      <th class="text-left">Nota</th>
                      <th class="text-left">Premium</th>
                      <th class="text-left">Mostrar</th>
                      <th class="text-left">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr v-for="itemPackage in packages" :key="itemPackage.id">
                        <td>{{ itemPackage.name }}</td>
                        <td>{{ itemPackage.amount }}</td>
                        <td>{{ itemPackage.note }}</td>
                        <td><v-icon :color="itemPackage.premium == 1 ? 'green' : 'red'">fas fa-check</v-icon></td>
                        <td><v-icon :color="itemPackage.active == 1 ? 'green' : 'red'">fas fa-check</v-icon></td>
                        <td>
                          <v-btn icon @click="edit(
                            itemPackage.id, 
                            itemPackage.name, 
                            itemPackage.amount, 
                            itemPackage.note, 
                            itemPackage.premium, 
                            itemPackage.active)">
                            <v-icon color="orange">fas fa-edit</v-icon>
                          </v-btn>
                          <v-btn icon @click="openDialog(itemPackage.id, itemPackage.name, itemPackage.details_package)">
                            <v-icon color="primary">fas fa-list</v-icon>
                          </v-btn>
                        </td>
                    </tr>

                  </tbody>
                </template>
              </v-simple-table>

            </v-card>

          </template>
        </v-hover>
    </v-col>

    <v-col :md="6">
      <v-hover v-slot="{ hover }">
        <v-card :elevation="hover ? 24 : 6">
          <v-card-title>
            <h3>Crear Paquete</h3>
          </v-card-title>
          <v-container>
            <ValidationObserver v-slot="{ handleSubmit }" ref="obs">
              <form @submit.prevent="handleSubmit(store)" ref="form">
                <ValidationProvider name="Nombre" rules="required" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="form.name"
                      label="Nombre"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <ValidationProvider name="Precio" rules="" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="form.amount"
                      label="Precio"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <ValidationProvider name="Nota" rules="" v-slot="{ errors, valid }">
                  <v-textarea
                    v-model="form.note"
                    label="Nota"
                    :no-resize="true"
                    :error-messages="errors"
                    :success="valid"
                  ></v-textarea>
                </ValidationProvider>

                <v-switch
                  v-model="form.premium"
                  label="Paquete Premium"
                ></v-switch>
                <v-switch
                  v-model="form.active"
                  label="Mostar"
                ></v-switch>
                <v-card-actions>
                    <v-btn color="primary" type="submit">Guardar</v-btn>
                    <v-btn>Limpiar</v-btn>
                </v-card-actions>
              </form>
            </ValidationObserver>
          </v-container>
        </v-card>

      </v-hover>
    </v-col>

    <v-col :md="6" v-if="myShowForm">
      <v-hover v-slot="{ hover }">
        <v-card dark :elevation="hover ? 24 : 6">
          <v-card-title>
            <h3>Editar Paquete</h3>
          </v-card-title>
          <v-container>
            <ValidationObserver v-slot="{ handleSubmit }" ref="obs">
              <form @submit.prevent="handleSubmit(update)" ref="form">
                
                <ValidationProvider name="Nombre" rules="required" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="formEdit.name"
                      label="Nombre"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <ValidationProvider name="Precio" rules="" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="formEdit.amount"
                      label="Precio"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <ValidationProvider name="Nota" rules="" v-slot="{ errors, valid }">
                  <v-textarea
                    v-model="formEdit.note"
                    label="Nota"
                    :no-resize="true"
                    :error-messages="errors"
                    :success="valid"
                  ></v-textarea>
                </ValidationProvider>
                

                <v-switch
                  v-model="formEdit.premium"
                  label="Paquete Premium"
                ></v-switch>

                <v-switch
                  v-model="formEdit.active"
                  label="Mostrar"
                ></v-switch>

                <v-card-actions>
                    <v-btn color="primary" type="submit">Editar</v-btn>
                    <v-btn dark @click="showForm(false)">Cerrar</v-btn>
                </v-card-actions>
              </form>
            </ValidationObserver>
          </v-container>
        </v-card>
      </v-hover>
    </v-col>

    <v-snackbar
        v-model="showSnackBar"
        :color="typeSnack"
        :timeout="3000"
    >
        {{ textSnack }}
        <v-btn
        color="black"
        text
        @click="showSnackBar = false"
        >
        Cerrar
        </v-btn>
    </v-snackbar>
    <detail-packAge 
      :myShowDialog="showDialog" 
      :myIdPackAge="infoDetailsPackage.id" 
      :myNamePackAge="infoDetailsPackage.name" 
      :myDetails="infoDetailsPackage.details" 
      @close="showDialog = false" 
    />
  </v-row>
</template>

<script>

import DetailPackAge from './DetailPackage'

export default {

  data() {
    return {
      packages: [],
      package: {
        name: '',
        amount: '',
        note: '',
        premium: '',
        active: ''
      },
      form: {
        name: '',
        amount: '',
        note: '',
        premium: false,
        active: false,
      },
      formEdit: {
        id: '',
        name: '',
        amount: '',
        note: '',
        premium: '',
        active: '',
      },
      showEditForm: false,
      showSnackBar: false,
      textSnack: '',
      typeSnack: '',
      showDialog: false,
      infoDetailsPackage: {
        id: '',
        name: '',
        details: ''
      }
    }
  },

  created() {

    this.fetchPackages();

  },

  computed: {

    myShowForm() {
      return this.showEditForm;
    }

  },

  methods: {

    fetchPackages() {

      axios.get('/api/packages').then( response => {

        if (response.data.msj === 'success') {
          this.packages = response.data.package;
        }

      });
    },

    edit(id, name, amount, note, premium, active) {

      this.formEdit.id = id;
      this.formEdit.name = name;
      this.formEdit.amount = amount;
      this.formEdit.note = note;
      this.formEdit.premium = premium;
      this.formEdit.active = active;
      this.showForm(true);
    },

    clearFormEdit() {
      this.formEdit.id = '';
      this.formEdit.name = '';
      this.formEdit.amount = '';
      this.formEdit.premium = '';
      this.formEdit.active = '';
    },

    clearFormCreate() {
      this.form.name = '';
      this.form.amount = '';
      this.form.premium = false;
      this.form.active = false;

      this.$refs.obs.reset();
      this.$refs.form.reset();
    },

    showForm(value) {
      this.showEditForm = value;
    },

    store() {

      let data = {
        name: this.form.name,
        amount: this.form.amount,
        note: this.form.note,
        premium: this.form.premium,
        active: this.form.active
      }

      Vue.axios.post('/api/packages', data).then(response => {
        this.typeSnack = 'success';
        this.textSnack = 'Registro Creado con Éxito';
        this.showSnackBar = true;
        this.clearFormCreate();
        this.fetchPackages();
      });

    },

    update() {

      let data = {
        id: this.formEdit.id,
        name: this.formEdit.name,
        amount: this.formEdit.amount,
        note: this.formEdit.note,
        premium: this.formEdit.premium,
        active: this.formEdit.active
      }

      Vue.axios.put('/api/packages/' + this.formEdit.id, data).then(response => {
        this.typeSnack = 'success';
        this.textSnack = 'Registro Editado con Éxito';
        this.showSnackBar = true;
        this.showForm(false);
        this.fetchPackages();
      });
    },

    openDialog(id, name, details) {
      this.showDialog = true;
      this.infoDetailsPackage.id = id;
      this.infoDetailsPackage.name = name;
      this.infoDetailsPackage.details = details;
    }
  },

  components: {
    DetailPackAge
  }

}
</script>

<style>

</style>