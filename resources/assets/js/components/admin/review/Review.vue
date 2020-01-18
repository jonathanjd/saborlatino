<template>
  <v-row>
    <v-col>
      <div class="title" :md="12">
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
                          <v-btn icon @click="edit(review.name, review.description, review.active)">
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
      <v-card>
        <v-card-title>
          <h3>Crear Reseña</h3>
        </v-card-title>
        <v-container>
          <form>
            <v-text-field
                v-model="form.name"
                label="Usuario"
                data-vv-name="name"
                required
            ></v-text-field>

            <v-textarea
              outlined
              v-model="form.description"
              label="Descripcion"
              :no-resize="true"
            ></v-textarea>

            <v-switch
              v-model="form.active"
              label="Mostrar"
            ></v-switch>
          </form>

        </v-container>

        <v-card-actions>
            <v-btn color="primary">Guardar</v-btn>
            <v-btn>Limpiar</v-btn>
        </v-card-actions>
      </v-card>
    </v-col>

    <v-col :md="6" v-if="myShowForm">
      <v-card dark>
        <v-card-title>
          <h3>Editar Reseña</h3>
        </v-card-title>
        <v-container>
          <form>
            <v-text-field
                v-model="formEdit.name"
                label="Usuario"
                data-vv-name="name"
                required
            ></v-text-field>

            <v-textarea
              outlined
              v-model="formEdit.description"
              label="Descripcion"
              :no-resize="true"
            ></v-textarea>

            <v-switch
              v-model="formEdit.active"
              label="Mostrar"
            ></v-switch>
          </form>

        </v-container>

        <v-card-actions>
            <v-btn color="primary">Editar</v-btn>
            <v-btn dark @click="showForm(false)">Cerrar</v-btn>
        </v-card-actions>
      </v-card>
    </v-col>

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
        name: '',
        description: '',
        active: true,
      },
      showEditForm: false
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

    edit(name, description, active) {

      this.formEdit.name = name;
      this.formEdit.description = description;
      this.formEdit.active = active;
      this.showForm(true);
    },

    clearFormEdit() {
      this.formEdit.name = '';
      this.formEdit.description = '';
      this.formEdit.active = '';
    },

    clearFormCreate() {
      this.formEdit.name = '';
      this.formEdit.description = '';
      this.formEdit.active = true;
    },

    showForm(value) {
      console.log('object')
      this.showEditForm = value;
    }

  }

}
</script>

<style>

</style>