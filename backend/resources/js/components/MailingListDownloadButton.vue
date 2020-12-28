<template>
  <b-button v-on:click="downloadHandler();">Download</b-button>
</template>


<script>
function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,'
                             + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}

export default {
  name: 'MailingListDownloadButton',
  methods: {
    downloadHandler() {
      const urlParams = new URLSearchParams(window.location.search);
      const m = urlParams.get('group_id');
      let url = "/api/mailing_list/" + (m || 0) + ".json";
      console.log(url, m);
      axios({ 
        url: "/api/mailing_list/" + (m || 0) + ".json",
        method: 'GET'})
        .then(d => {
          d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
          this.mailing_list_contents = d.data.map(x => x.csv_blob)[0].split('\n').map(x => x.split(','));
          download(m + ".csv", this.mailing_list_contents);
        });
      return url;
    }
  },
  data()  {
    return { 
      mailing_list_contents: mailing_list_contents
    };
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
