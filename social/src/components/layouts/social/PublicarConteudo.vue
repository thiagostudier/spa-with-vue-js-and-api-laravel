<template>
    <div class="row">
        <grid-vue class="input-field" tamanho="12">
            <textarea v-model="conteudo" id="conteudoID" class="materialize-textarea"></textarea>
            <label for="conteudoID">O que está acontecendo?</label>
        </grid-vue>
        <p><grid-vue v-if="conteudo" tamanho="2 offset-s10" class="btn col waves-effect waves-light">Publicar</grid-vue></p>
    </div>
</template>

<script>
import GridVue from '@/components/layouts/GridVue';

export default {
    name: 'CardConteudo',
    props: [],
    components:{
        GridVue
    },
    data () {
        return {
            conteudo: ''
        }
    }
}
</script>