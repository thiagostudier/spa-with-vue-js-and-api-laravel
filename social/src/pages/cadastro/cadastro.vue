<template>

    <login-template>
        <span slot="menuesquerdo">
            <img src="https://png.pngtree.com/png-vector/20190626/ourlarge/pngtree-social-media-concept-illustration-for-web-template-design-illustration-png-image_1517899.jpg" width="100%" />
        </span>
       <span slot="principal">
            <h2>Cadastro</h2>
            <input type="text" name="name" placeholder="Informe seu nome" id="">
            <input type="email" name="email" placeholder="E-mail" id="">
            <input type="password" name="password" placeholder="Senha" id="">
            <input type="password" name="confirm-password" placeholder="Confirme sua senha" id="">
            <button class="btn">Enviar</button>        
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
export default {
    name: 'Cadastro',
    components:{
        CardConteudo,
        CardDetalhe,
        GridVue,
        PublicarConteudo,
        LoginTemplate
    },
}
</script>