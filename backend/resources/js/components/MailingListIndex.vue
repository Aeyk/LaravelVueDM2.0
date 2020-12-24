<template>
  <div class="container">
    <b-table striped hover :items="mailing_lists"></b-table>
  </div>
</template>

<script>
export default {
  name: 'MailingListIndex',
  data()  {
    return {
      mailing_lists: [
      ]
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  margin: 40px 0 0;
  grid-column-start: 1;
  grid-column-end: 3;
}
.container {
  display: grid;
  grid-template-columns: 1fr;
}
a {
  color: #42b983;
}
</style>
