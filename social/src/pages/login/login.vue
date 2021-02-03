<template>

    <login-template>
        <span slot="menuesquerdo">
            <img src="https://png.pngtree.com/png-vector/20190626/ourlarge/pngtree-social-media-concept-illustration-for-web-template-design-illustration-png-image_1517899.jpg" width="100%" />
        </span>
       <span slot="principal">
            <h2>Login</h2>
            <input type="email" name="" placeholder="E-mail" v-model="email">
            <input type="password" name="" placeholder="Senha" v-model="password">
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
            email: '',
            password: ''
        }
    },
    methods: {
        login(){
            
        }
    }
}
</script>