<template>
  <div id="app">
    <MailingListHomepage msg="Mailing Lists"/>
  </div>
</template>

<script>
import MailingListHomepage from './components/MailingListHomepage.vue'

export default {
  name: 'App',
  components: {
    MailingListHomepage
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
