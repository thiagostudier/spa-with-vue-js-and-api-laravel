<template>

    <site-template>
        <span slot="menuesquerdo">
            <div class="row valign-wrapper">
                <grid-vue tamanho="4">
                    <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </grid-vue>
                <grid-vue tamanho="8">
                    <span class="black-text">This is a square image. Add the "circle" class to it to make it appear circular.</span>
                </grid-vue>
              </div>
        </span>
        <span slot="principal">
            <publicar-conteudo></publicar-conteudo>
            <card-conteudo perfil="https://materializecss.com/images/yuna.jpg" name="Maria Silva" date="22/01/2021 16:00">
                <card-detalhe image="https://materializecss.com/images/sample-1.jpg" text="Lorem" title="Título da image"></card-detalhe>
            </card-conteudo>
        </span>
    </site-template>
</template>

<script>
import SiteTemplate from '@/templates/SiteTemplate';
import CardConteudo from '@/components/layouts/social/CardConteudo';
import CardDetalhe from '@/components/layouts/social/CardDetalhe';
import GridVue from '@/components/layouts/GridVue';
import PublicarConteudo from '@/components//layouts/social/PublicarConteudo.vue';
export default {
    name: 'Home',
    components:{
        SiteTemplate,
        CardConteudo,
        CardDetalhe,
        GridVue,
        PublicarConteudo
    },
    data () {
        return {
            msg: 'Welcome to Your Vue.js App'
        }
    }
}
</script>