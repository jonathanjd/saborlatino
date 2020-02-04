<template>
  <v-row>
    <v-col>
      <div class="display-1" :md="12">
          Reseñas
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
                      <th class="text-left">Usuario</th>
                      <th class="text-left">Descripcion</th>
                      <th class="text-left">Mostrar</th>
                      <th class="text-left">Opciones</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr v-for="review in reviews" :key="review.id">
                        <td>{{ review.name }}</td>
                        <td>{{ review.description }}</td>
                        <td><v-icon :color="review.active == 1 ? 'green' : 'red'">fas fa-check</v-icon></td>
                        <td>
                          <v-btn icon @click="edit(review.id, review.name, review.description, review.active)">
                            <v-icon color="orange">fas fa-edit</v-icon>
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
            <h3>Crear Reseña</h3>
          </v-card-title>
          <v-container>
            <ValidationObserver v-slot="{ handleSubmit }" ref="obs">
              <form @submit.prevent="handleSubmit(store)" ref="form">
                <ValidationProvider name="Usuario" rules="required" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="form.name"
                      label="Usuario"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>

                <ValidationProvider name="Descripción" rules="required" v-slot="{ errors, valid }">
                  <v-textarea
                    v-model="form.description"
                    label="Descripción"
                    :no-resize="true"
                    :error-messages="errors"
                    :success="valid"
                  ></v-textarea>
                </ValidationProvider>

                <v-switch
                  v-model="form.active"
                  label="Mostrar"
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
            <h3>Editar Reseña</h3>
          </v-card-title>
          <v-container>
            <ValidationObserver v-slot="{ handleSubmit }" ref="obs">
              <form @submit.prevent="handleSubmit(update)" ref="form">
                
                <ValidationProvider name="Usuario" rules="required" v-slot="{ errors, valid }">
                  <v-text-field
                      v-model="formEdit.name"
                      label="Usuario"
                      :error-messages="errors"
                      :success="valid"
                  ></v-text-field>
                </ValidationProvider>
                
                <ValidationProvider name="Descripción" rules="required" v-slot="{ errors, valid }">
                  <v-textarea
                    v-model="formEdit.description"
                    label="Descripcion"
                    :no-resize="true"
                    :error-messages="errors"
                    :success="valid"
                  ></v-textarea>
                </ValidationProvider>

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

  </v-row>
</template>

<script>

export default {

  data() {
    return {
      reviews: [],
      review: {
        name: '',
        description: '',
        active: ''
      },
      form: {
        name: '',
        description: '',
        active: true,
      },
      formEdit: {
        id: '',
        name: '',
        description: '',
        active: true,
      },
      showEditForm: false,
      showSnackBar: false,
      textSnack: '',
      typeSnack: '',
    }
  },

  created() {

    this.fetchReviews();

  },

  computed: {

    myShowForm() {
      return this.showEditForm;
    }

  },

  methods: {

    fetchReviews() {

      axios.get('/api/reviews').then( response => {

        if (response.data.msj === 'success') {
          this.reviews = response.data.review;
        }

      });
    },

    edit(id, name, description, active) {

      this.formEdit.id = id;
      this.formEdit.name = name;
      this.formEdit.description = description;
      this.formEdit.active = active;
      this.showForm(true);
    },

    clearFormEdit() {
      this.formEdit.id = '';
      this.formEdit.name = '';
      this.formEdit.description = '';
      this.formEdit.active = '';
    },

    clearFormCreate() {
      this.form.name = '';
      this.form.description = '';
      this.form.active = true;

      this.$refs.obs.reset();
      this.$refs.form.reset();
    },

    showForm(value) {
      this.showEditForm = value;
    },

    store() {

      let data = {
        name: this.form.name,
        description: this.form.description,
        active: this.form.active
      }

      Vue.axios.post('/api/reviews', data).then(response => {
        this.typeSnack = 'success';
        this.textSnack = 'Registro Creado con Éxito';
        this.showSnackBar = true;
        this.form.name = '';
        this.form.description = '';
        this.form.active = true;

        this.$refs.obs.reset();
        this.$refs.form.reset();
        this.fetchReviews();
      });

    },

    update() {

      let data = {
        id: this.formEdit.id,
        name: this.formEdit.name,
        description: this.formEdit.description,
        active: this.formEdit.active
      }

      Vue.axios.put('/api/reviews/' + this.formEdit.id, data).then(response => {
        this.typeSnack = 'success';
        this.textSnack = 'Registro Editado con Éxito';
        this.showSnackBar = true;
        this.showForm(false);
        this.fetchReviews();
      });
    },
    

  },

}
</script>

<style>

</style>