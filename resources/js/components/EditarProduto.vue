<template>
    <div>
        <h3 class="text-center">Editar Produto</h3>
        <div class="row">
            <div class="col-md-6">
                <form action="" @submit.prevent="atualizarProduto">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" name="" id="" class="form-control" v-model="produto.nome">
                    </div>
                     <div class="form-group">
                        <label for="">Detalhe</label>
                        <input type="text" name="" id="" class="form-control" v-model="produto.detalhe">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            produto: {}
        }
    },
    created() {
        this.axios 
        .get(`http://localhost:8000/api/produtos/${this.$route.params.id}`)
        .then((res) => {
            this.produto = res.data
        })
    },
    methods: {
        atualizarProduto() {
            this.axios
            .patch(`http://localhost:8000/api/produtos/${this.$route.params.id}`, this.produto)
            .then((res) => {
                this.$router.push({ name: 'home'})
            })
        }
    }
}
</script>