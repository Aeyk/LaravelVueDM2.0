.<template>
  <div id="app">
    <MailingListHeader msg="Mailing Lists"/>
    <!-- <MailingListUpload name="" date="Date.now()" /> -->
    <!-- <MailingListIndex></MailingListIndex> -->
    <!-- <MailingList></MailingList> -->
  </div>
</template>

<script>

import MailingListHeader from './MailingListHeader.vue'

// import MailingListUpload from './components/MailingListUpload.vue'
// import MailingListIndex from './components/MailingListIndex.vue'
// import MailingList from './components/MailingList.vue'

export default {
  name: 'App',
  components: {
    MailingListHeader,
    //     MailingListUpload,
    //     MailingListIndex,
    //     MailingList
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
}
</style>
