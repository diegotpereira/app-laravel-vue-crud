import TodosProdutos from './components/TodosProdutos.vue'
import CriarProduto from './components/CriarProduto.vue'
import EditarProduto from './components/EditarProduto.vue'

export const routes = [
    {
        path: '/',
        name: 'home',
        component: TodosProdutos
    },
    {
        path: '/criar',
        name: 'criar',
        component: CriarProduto
    },
    {
        path: '/editar/:id',
        name: 'editar',
        component: EditarProduto
    }
]