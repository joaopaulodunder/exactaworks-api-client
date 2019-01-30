<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header" align='center'>Detalhes do Gastos</h2>
                     <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Data e Hora</th>
                                    <th>Valor</th>
                                    <th>Tag</th>
                                </tr>
                                </thead>
                                <tbody v-if="posts && posts.length">
                                <tr v-for="post of posts" v-bind:key="post.id">
                                    <td>{{post.nome}}</td>
                                    <td>{{post.descricao}}</td>
                                    <td>{{post.data_hora}}</td>
                                    <td>{{post.valor}}</td>
                                    <td>{{post.tag}}</td>
                                </tr>
                                </tbody>
                                <br>
                                <tr align='center'> <a class="btn btn-primary" href="/exacta" role="button" align='right'>Voltar</a> </tr>
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
        var id = window.location.href.split('/').pop();
            console.log('Component mounted.');

            axios.get('http://127.0.0.1:9000/api/gastos/' + id).then((response) => {
                console.log(response.data);
                this.posts = response.data
            })
                .catch((e) => {
                    console.error(e)
                })
        },
    }
</script>
