<template>
  <div class="container">
    <b-table striped hover :items="mailing_list_contents"></b-table>
  </div>
</template>

<script>
export default {
  name: 'MailingList',
  data()  {
    return {
      mailing_list_contents: [{"usersname":"Diana Parisian","zip":"34060-0012"},{"usersname":"Mandy Dooley","zip":"71870"},{"usersname":"William Cassin","zip":"30366"},{"usersname":"Dianna Pagac","zip":"94659"},{"usersname":"Willis Pollich","zip":"46480-2864"},{"usersname":"Sheldon Hermiston","zip":"79341-2593"},{"usersname":"Connie Kautzer","zip":"42303-5265"},{"usersname":"Florence Tromp","zip":"03451-9318"},{"usersname":"Gertrude Klocko","zip":"71869-3333"},{"usersname":"Miss Priscilla Wintheiser","zip":"37382-7214"},{"usersname":"Robert Rau","zip":"23933-8871"},{"usersname":"Isaac Spencer","zip":"89045"},{"usersname":"Carol Boyer","zip":"54682"},{"usersname":"Pedro Friesen","zip":"83925-0882"},{"usersname":"Misty Kuvalis","zip":"35163-7714"},{"usersname":"Hope Quitzon","zip":"49600"},{"usersname":"Debbie Harris","zip":"42794-3962"},{"usersname":"Jermaine Armstrong","zip":"22111-4362"},{"usersname":"Winston Stark MD","zip":"73744-2310"},{"usersname":"Darrell Cormier","zip":"90337"},{"usersname":"Julian Crooks","zip":"43622-5643"},{"usersname":"Madeline Kemmer","zip":"22497-9595"},{"usersname":"Mr. Merle Jones","zip":"53862-0920"},{"usersname":"Teri O'Keefe","zip":"69924"},{"usersname":"Dr. Marco Hintz","zip":"09616"}]
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
