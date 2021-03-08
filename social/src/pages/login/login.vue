<template>

    <login-template>
        <span slot="menuesquerdo">
            <img src="https://png.pngtree.com/png-vector/20190626/ourlarge/pngtree-social-media-concept-illustration-for-web-template-design-illustration-png-image_1517899.jpg" width="100%" />
        </span>
       <span slot="principal">
            <h2>Login</h2>
            <input type="email" name="" placeholder="E-mail" v-model="usuario.email">
            <input type="password" name="" placeholder="Senha" v-model="usuario.password">
            <button class="btn" v-on:click="login()">Entrar</button>        
            <router-link to="/cadastro" class="btn orange">Cadastro</router-link>
        </span> 
    </login-template>
</template>

<script>
import LoginTemplate from '@/templates/LoginTemplate';
import CardConteudo from '@/components/layouts/social/CardConteudo';
import CardDetalhe from '@/components/layouts/social/CardDetalhe';
import GridVue from '@/components/layouts/GridVue';
import PublicarConteudo from '@/components//layouts/social/PublicarConteudo.vue';
import axios from 'axios' 

export default {
    name: 'Login',
    components:{
        CardConteudo,
        CardDetalhe,
        GridVue,
        PublicarConteudo,
        LoginTemplate
    },
    data(){
        return {
            usuario:{
                email: '',
                password: ''
            }
        }
    },
    methods: {
        login(){
            // MÉTODO AXIOS
            axios.post(`http://localhost:8000/api/login`, {
                email: this.usuario.email,
                password: this.usuario.password
            })
            .then(response => {
                console.log(response);
                // LOGIN COM SUCESSO
                if(response.data.token){
                    console.log('login com sucesso');
                    sessionStorage.setItem('user', JSON.stringify(response.data)); //GUARDAR SESSÃO DO USUÁRIO
                    this.$router.push('/'); //ENCAMINHAR PARA HOME
                }else if(response.data.status == false){
                    // LOGIN NÃO EXISTE
                    alert('login não existe');
                    console.log('login não existe');
                }else{
                    // ERROS DE VALIDAÇÃO
                    console.log('erros de validação');
                    let erros = '';
                    for(let erro of Object.values(response.data)){
                        erros += erro + " ";
                    }
                    alert(erros);
                }
            })
            .catch(e => {
                this.errors.push(e)
            })
        }
    }
}
</script>