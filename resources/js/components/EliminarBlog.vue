<template>
    <input
        type="submit"
        class="btn btn-danger mr-1 d-block w-100 mb-2"
        value="Eliminar"
        v-on:click="eliminarBlog"

        >
</template>
<script>
    export default {
        props:['blogId'],
        methods:{
            eliminarBlog(){
                this.$swal({
                title: '¿Deseas eliminar este blog?',
                text: "Una vez eliminada, no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText:'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const params={
                            id:this.blogId
                        }
                        axios.post(`/blog/${this.blogId}`,{params,_method:'delete'})
                            .then(respuesta=>{
                                this.$swal({
                                    title:'Blog eliminado',
                                    text:'Se elimino el blog',
                                    icon:'success'

                                });
                                //Eliminar receta del DOOM
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode)
                            })
                            .catch(error=>{
                                console.log(error)
                            })
                    }
                })
            }
        }

}
</script>
