<template>

  <span>
    <header>
      <navbar logo="Social" cor="green darken-1" url="/">
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/login">Login</router-link></li>
        <li><router-link to="/cadastro">Cadastro</router-link></li>
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
  components: {
    Navbar,
    FooterVue,
    GridVue,
    CardMenu
  }
}
</script>
