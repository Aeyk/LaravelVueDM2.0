<template>
  <div class="container">
    <b-table striped hover :items="mailing_lists"
                  td-attr=""
                  @row-clicked="myRowClickHandler"></b-table>
    <b-button href="/mailing_lists/upload">Upload</b-button>
  </div>
</template>

<script>
export default {
  name: 'MailingListIndex',
  methods: {myRowClickHandler(record, index) {
    // 'record' will be the row data from items
    // `index` will be the visible row number (available in the v-model 'shownItems')
    let url = "/mailing_list/" + record.id + ".csv";
    console.log(url);

    document.location = url;
    
  }},
  data()  {
    return {
      mailing_lists:
      axios({
        url: '/api/mailing_lists/',
        method: 'GET'})
        .then(d => {
          console.log(d.data.data);
          this.mailing_lists = d.data.data;
        }),
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
