<template>
  <div class="container">
    <b-table striped hover
             @row-clicked="myRowClickHandler"
             :items="mailing_list_contents"></b-table>
  </div>
</template>

<script>
export default {
  name: 'MailingList',
  methods: {
    myRowClickHandler(record, index) {
      // 'record' will be the row data from items
      // `index` will be the visible row number (available in the v-model 'shownItems')
      let url = "/mailing_list/" + record.id + ".csv";
      console.log(url);
      this.id = record.id;
      // document.location = url;
    }
  },
  data()  {
    return {
      id: 0,
      mailing_list_contents:
      axios({
        url: "/api/mailing_lists/" + (this.$route.query.page || 0) + ".json",
        method: 'GET'})
        .then(d => {
          console.log(d.data.data,
          "1" + "2");
          this.mailing_list_contents = d.data.data;
        }).csv_blob,
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
  grid-template-columns: 1fr;
}
a {
  color: #42b983;
}
</style>
