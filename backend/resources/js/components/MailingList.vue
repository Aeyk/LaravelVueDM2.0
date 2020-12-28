<template>
  <div class="container">
    <b-table striped hover
             @row-clicked="myRowClickHandler"
             :items="mailing_list_contents"></b-table>
    
    <MailingListDownloadButton></MailingListDownloadButton>

  </div>
</template>

<script>
  export default {
    name: 'MailingList',
    methods: {
    myRowClickHandler(record, index) {
      // 'record' will be the row data from items
      // `index` will be the visible row number (available in the v-model 'shownItems')
      const urlParams = new URLSearchParams(window.location.search);
      const m = urlParams.get('group_id');
      let url = "/api/mailing_list/" + (m || 0) + ".json";
      console.log(url);
      this.id = record.id;

      // document.location = url;
      return url;
    },
    downloadHandler() {
      // 'record' will be the row data from items
      // `index` will be the visible row number (available in the v-model 'shownItems')
      const urlParams = new URLSearchParams(window.location.search);
      const m = urlParams.get('group_id');
      let url = "/api/mailing_list/" + (m || 0) + ".csv";
      console.log(url, m);
      download(m + ".json", this.mailing_list_contents);
      axios({ 
        url: "/api/mailing_list/" + (m || 0) + ".json",
        method: 'GET'})
        .then(d => {
          d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
          mailing_list_contents = d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
          
        });
      return url;
    }
  },
  data()  {
    const urlParams = new URLSearchParams(window.location.search);
    const m = urlParams.get('group_id');
    var mailing_list_contents;
    axios({ 
      url: "/api/mailing_list/" + (m || 0) + ".json",
      method: 'GET'})
      .then(d => {
        d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
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
