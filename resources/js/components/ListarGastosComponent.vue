<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Gastos Exactaworks</h2>
                    <a class="btn btn-success" href="exacta/novogasto" role="button">Criar novo gasto</a>
                     <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Tag</th>
                                </tr>
                                </thead>
                                <tbody v-if="posts && posts.length">
                                <tr v-for="post of posts" v-bind:key="post.id">
                                    <td>{{post.nome}}</td>
                                    <td>{{formatPrice(post.valor)}}</td>
                                    <td>{{post.tag}}</td>
                                    <td><a class="btn btn-primary" v-bind:href="'exacta/detalhe/'+ post.id" role="button">Detalhes</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'app',
        data () {
            return {
                posts: []
            }
        },
        mounted() {
            console.log('Component mounted.');

            axios.get('http://127.0.0.1:9000/api/gastos').then((response) => {
                console.log(response.data);
                this.posts = response.data
            })
                .catch((e) => {
                    console.error(e)
                })
        },

            formatPrice(value) {
                let val = (value/1).toFixed(2).replace('.', ',')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
            }

    }
</script>
