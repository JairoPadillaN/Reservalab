<template>
    <div class="row justify-content-center">
        <div class="col-4">
        <br>
            <form action="#">
                <h3 style="text-align: center">Informacion personal</h3>
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control" v-text="usuario.Nombre" readonly>
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" class="form-control" v-text="usuario.Apellidos" readonly>
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" v-text="usuario.Email" readonly>
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" v-text="usuario.telefono" readonly>
                <a>Actualizar tu informacion personal</a>
            </form>
        </div>
        <div class="col-4">
        <br>
            <form action="#"></form>
                <h3 style="text-align: center">Informacion medica</h3>
                <label for="peso">Peso:</label>
                <input type="text" name="peso" class="form-control" value="<?php if(isset($fila1['Peso'])){ echo $fila1['Peso'];}else{echo '';} ?>Kg" readonly>
                <label for="altura">Altura:</label>
                <input type="text" name="altura" class="form-control" value="<?php if(isset($fila1['Altura'])){ echo $fila1['Altura'];}else{echo '';} ?>M" readonly>
                <label for="tiposanguineo">Grupo sanguineo:</label>
                <input type="text" name="tiposanquineo" class="form-control" value="<?php if(isset($fila1['TipoSanguineo'])){ echo $fila1['TipoSanguineo'];}else{echo '';} ?>" readonly>
                <label for="padecimientos">Padecimientos:</label>
                
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            usuario:[],
        }
    },
    mounted(){
        this.getUsuario();
        console.log('Informacion de usuario obtenida correctamente')
    },
    methods:{
        getUsuario: function(){
            axios.get('usuario').then(response =>{
                this.usuario=response.data.usuario
                console.log(this.usuario);
            });
        }
    }
}
</script>