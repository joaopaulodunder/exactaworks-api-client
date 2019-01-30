<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Criar novo gasto</h2>


                    <div class="card-body">
                        <form @submit="formSubmit">
                        <strong>Nome:</strong>
                            <input type="text" class="form-control" v-model="nome">
<br>
                        <strong>Descrição:</strong>
                        <textarea class="form-control" v-model="descricao"></textarea>
<br>
                        <strong>valor:</strong>
                            <input type="text" class="form-control" v-model="valor">
<br>
                        <strong>Tag:</strong>
                            <input type="text" class="form-control" v-model="tag">
<br>
                        <button class="btn btn-success">Gravar</button>

                        <a class="btn btn-primary" href="/exacta" role="button" align='right'>Voltar</a>

                        </form>
                        <pre align='left'>
                        <strong> {{output}} </strong>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              name: '',
              description: '',
              output: ''
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('http://127.0.0.1:9000/api/gastos', {
                    nome: this.nome,
                    descricao: this.descricao,
                    valor: this.valor,
                    tag: this.tag
                })
                .then(function (response) {
                    currentObj.output = response.data.status;
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
        }
    }
</script>