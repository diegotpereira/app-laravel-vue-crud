<template>
    <div>
        <h3 class="text-center">Criar Produto</h3>
        <div class="row">
            <div class="col-md-6">
                <form action="" @submit.prevent="addProduto">
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" name="" id="" class="form-control" v-model="produto.nome">
                    </div>
                    <div class="form-group">
                        <label for="">Detalhe</label>
                        <input type="text" name="" id="" class="form-control" v-model="produto.detalhe">
                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
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
    methods: {
        addProduto() {
            this.axios
            .post('http://localhost:8000/api/produtos', this.produto)
            .then(response => {
                this.$router.push({name: 'home'})
            })
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        }
    }
}
</script>