<template>
  <div class="container">
    <h1>{{ msg }}</h1>
    <a href="/mailing_lists/upload">Mailing List Upload</a>
    <a href="/mailing_lists">List of Mailing</a>

  </div>
</template>

<script>
export default {
  name: 'MailingListHomepage',
  props: {
    msg: String
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
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
.container {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
a {
  color: #42b983;
}
</style>
