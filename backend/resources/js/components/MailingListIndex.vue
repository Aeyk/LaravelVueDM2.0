<template>
  <div class="container">
    <b-table-lite striped hover :items="mailing_lists"
                  selectable="true"
                  td-attr=""
                  @row-clicked="myRowClickHandler"></b-table-lite>
  </div>
</template>

<script>
export default {
  name: 'MailingListIndex',
  methods: {myRowClickHandler(record, index) {
    
    // 'record' will be the row data from items
    // `index` will be the visible row number (available in the v-model 'shownItems')
    console.log(record.csv); // This will be the item data for the row
  }},
  data()  {
    return {
      mailing_lists: [
        {id: 0, name: "Malik Kennedy", csv: "mailing_list_0.csv"}
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
