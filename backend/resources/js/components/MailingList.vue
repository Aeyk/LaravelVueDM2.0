<template>
  <div class="container">
    <b-table striped hover
             @row-clicked="myRowClickHandler"
             :items="mailing_list_contents"></b-table>
  </div>
</template>

<script>
function my_csv_json(csv){
  var result=csv.split(",");
  return JSON.stringify(result); //JSON
}
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
    const urlParams = new URLSearchParams(window.location.search);
    const m = urlParams.get('m');
    var mailing_list_contents;
    axios({ 
      url: "/api/mailing_list/" + (m || 0) + ".json",
      method: 'GET'})
      .then(d => {
        console.log(d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(',')));
        mailing_list_contents = d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
        this.mailing_list_contents = mailing_list_contents;
      });
    return {
      id: 0,
      mailing_list_contents: mailing_list_contents
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
