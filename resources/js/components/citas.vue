<template>
    <div class="row justify-content-center">
        <div class="col-12">
            <h3>
                Citas agendadas
            </h3>
        </div>
        <div class="col-6">
            <table>
                <thead>
                    <th scope="col">No. cita</th>
                    <th scope="col">Estudio</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                    <tr v-for="cita in citas" :key="cita.id">
                    <td v-text="cita.id"></td>
                    <td v-text="cita.estudio"></td>
                    <td v-text="cita.fecha"></td>
                    <td v-text="cita.hora"></td>
                    <td>
                        <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-secondary" v-on:click="updateid(materia)"><i class="fas fa-pen"></i></button>
                                <button data-toggle="modal" data-target="#deletemateria" type="button" class="btn btn-danger" v-on:click="deleteid(materia)"><i class="fas fa-trash"></i></button>
                    </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar hora de la cita</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form @submit.prevent="editarCita()" >
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Hora:</label>
                                    <input type="text"  v-model="citaedit.hora" class="form-control" id="recipient-hora">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button ttype="submit" name="action" class="btn btn-primary">Actualizar</button>                                
                                </div>
                                </form>
                            </div>
                        
                            </div>

                        </div>

                </div>
            <div class="modal fade" id="deletemateria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cancelar cita</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4>¿Esta seguro que quieres cancelar la cita?<span class="badge badge-pill badge-warning">{{citadelete.Estudio}}</span>?</h4>                          
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                                <button type="button" class="btn btn-danger" @click="deleteMateria(citadelete.id)">Cancelar cita</button>
                            </div>
                            </div>
                        </div>
                        </div>
        </div>
    </div>
</template>

<script>
    export default {
        data (){
            return{
                cita: [],

                citadelete: [],

                citaedit: [],

            }
        },
        mounted() {
            this.getCita();
            console.log('Se obtiene la informacion de la cita')
        },

        methods: {

            getCita: function () {
                 axios.get('citas').then(response => {
                    this.citas = response.data.citas
                    console.log (this.citas);
                });
            },

            updateid(id){
                this.citaedit = id;
            },

            editarCita(){
                let urlUpdate='citas/'+ this.citaedit.id;
                axios.put(urlUpdate,this.citaedit).then(response =>{
                if(response.data.error){
                    toastr.error(response.data.mensaje);

                }else{
                    toastr.success(response.data.mensaje);
                    $('#exampleModal').modal('hide')
                }
                }).catch(error=>{

                });
            },
            deleteid(id){
                this.citadelete =id; 
            },
            deletecita(id){
                let urldeletecita = 'cita/' + id;
                axios.delete(urldeleteCita,this.citadelete).then (response=>{
                    if(response.data.error){

                    consolo.log('ocurrio un error');
                }else{
                    console.log('se elimino de manera correctamente')
                }
            }).catch(error =>{

            });
            },
            agregarCita(citaid){

            let url = 'cita/' + citaid;
            axios.get(url,this.nuevacita).then(response=>{
                if(response.data.error){
                console.log("Ocurrio un error al guardar");
                }else{
                    this.nuevacita.nombre="";
                    $('#guardarModal').modal('hide');
                    toastr.success(response.data.mensaje);
                    console.log("La ha sido agendada correctamente");
                }
            });
            } 
        }
    }
</script>