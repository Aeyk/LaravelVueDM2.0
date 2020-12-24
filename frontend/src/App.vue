.<template>
  <div id="app">
    <MailingListHomepage msg="Mailing Lists"/>
    <!-- <MailingListUpload name="" date="Date.now()" /> -->
    <!-- <MailingListIndex></MailingListIndex> -->
    <MailingList></MailingList>
  </div>
</template>

<script>

import MailingListHomepage from './components/MailingListHomepage.vue'
// import MailingListUpload from './components/MailingListUpload.vue'
// import MailingListIndex from './components/MailingListIndex.vue'
import MailingList from './components/MailingList.vue'

export default {
  name: 'App',
  components: {
    MailingListHomepage,
    //     MailingListUpload,
    //     MailingListIndex,
    MailingList
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
  font-size: 3rem;
}
</style>
