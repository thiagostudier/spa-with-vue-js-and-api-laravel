<template>
    <span>
        <div v-if="image" class="card-image">
            <img :src="image">
            <span class="card-title">{{title || ''}}</span>
        </div>
        <div class="card-content">
            <p>{{text}}</p>
        </div>
    </span>
</template>

<script>
import GridVue from '@/components/layouts/GridVue';

export default {
    name: 'CardDetalhe',
    props: ['image', 'text', 'title'],
    components:{
        GridVue
    },
}
</script>