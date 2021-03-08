<template>

  <span>
    <header>
      <navbar logo="Social" cor="green darken-1" url="/">
        <li><router-link v-if="!user" to="/login">Login</router-link></li>
        <li><router-link v-if="!user" to="/cadastro">Cadastro</router-link></li>
        <li><router-link v-if="user" to="/perfil">{{user.name}}</router-link></li>
        <li><a v-if="user" v-on:click="sair()">Sair</a></li>
      </navbar>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <grid-vue tamanho="6">
            <slot name="menuesquerdo"></slot>
          </grid-vue>
          <grid-vue tamanho="6">
              <slot name="principal"></slot>
          </grid-vue>
        </div>
      </div>
    </main>
    <footer>
      <footer-vue cor="green darken-1" logo="Social" descricao="Teste de descricao" ano="2021">
        <!-- A INFORMAÇÃO QUE EU INSERIR AQUI, SERÁ RENDERIZADA NA TAG <SLOT></SLOT> -->
        <li><a class="grey-text text-lighten-3" href="#!">Link aa1</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
      </footer-vue>
    </footer>
  </span>
</template>

<script>
import Navbar from '@/components/layouts/Navbar';
import FooterVue from '@/components/layouts/FooterVue';
import GridVue from '@/components/layouts/GridVue';
import CardMenu from '@/components/layouts/CardMenu';
export default {
  name: 'LoginTemplate',
  data(){
    return{
      user: false
    }
  },
  components: {
    Navbar,
    FooterVue,
    GridVue,
    CardMenu
  },
  created(){
    let auth = sessionStorage.getItem('user');
    // SE HOUVER UM USUÁRIO VALIDO
    if(auth){
      this.user = JSON.parse(auth);
      this.$router.push('/');
    }
  },
  methods:{
    sair(){
      sessionStorage.clear();
      this.user = false;
      this.$router.push('/login');
    }
  }
}
</script>
