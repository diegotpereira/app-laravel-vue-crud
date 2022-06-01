<template>
    <div>
        <h2 class="text-center">Lista de Produtos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Detalhe</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="produto in produtos" :key="produto.id">
                    <td>{{ produto.id }}</td>
                    <td>{{ produto.nome }}</td>
                    <td>{{ produto.detalhe }}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'editar', params: {id: produto.id }}" class="btn btn-success">Editar</router-link>
                            <button class="btn btn-danger" @click="deletarProduto(produto.id)">Deletar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return {
            produtos: []
        }
    },
    created() {
        this.axios
        .get('http://localhost:8000/api/produtos/')
        .then(response => {
            this.produtos = response.data
        })
    },
    methods: {
        deletarProduto(id) {
            this.axios
            .delete(`http://localhost:8000/api/produtos/${id}`)
            .then(response => {
                // O método map() invoca a função callback passada por 
                // argumento para cada elemento do Array e devolve um 
                // novo Array como resultado.
                let i = this.produtos.map(data => data.id).indexOf(id)
                // O método splice() altera o conteúdo de uma lista, 
                // adicionando novos elementos enquanto remove elementos antigos
                this.produtos.splice(i, 1)
            })
        }
    }
}
</script>