<template>

    <login-template>
        <span slot="menuesquerdo">
            <img src="https://png.pngtree.com/png-vector/20190626/ourlarge/pngtree-social-media-concept-illustration-for-web-template-design-illustration-png-image_1517899.jpg" width="100%" />
        </span>
       <span slot="principal">
            <h2>Cadastro</h2>
            <input type="text" v-model="usuario.name" placeholder="Informe seu nome" id="">
            <input type="email" v-model="usuario.email" placeholder="E-mail" id="">
            <input type="password" v-model="usuario.password" placeholder="Senha" id="">
            <input type="password" v-model="usuario.password_password" placeholder="Confirme sua senha" id="">
            <button class="btn" v-on:click="cadastro()">Enviar</button>        
            <router-link to="login" class="btn orange">Já tenho conta</router-link>
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
    name: 'Cadastro',
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
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            }
        }
    },
    methods: {
        cadastro(){
            // MÉTODO AXIOS
            axios.post(`http://localhost:8000/api/cadastro`, {
                name: this.usuario.name,
                email: this.usuario.email,
                password: this.usuario.password,
                password_confirmation: this.usuario.password_confirmation
            })
            .then(response => {
                console.log(response);
                // LOGIN COM SUCESSO
                if(response.data.token){
                    console.log('cadastro realizado com sucesso');
                    sessionStorage.setItem('user', JSON.stringify(response.data)); //GUARDAR SESSÃO DO USUÁRIO
                    this.$router.push('/'); //ENCAMINHAR PARA HOME
                }else if(response.data.status == false){
                    // LOGIN NÃO EXISTE
                    alert('Aconteceu um erro no cadastro, tente novamente.');
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