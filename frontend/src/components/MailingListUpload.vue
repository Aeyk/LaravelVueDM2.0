<template>
  <div class="container">
    <h1>Mailing List Upload</h1>
    <label for="name">Mailing List Name</label>

    <b-form-input v-model="mailing_list_name" placeholder="Enter your name"></b-form-input>
    <p>Value: '{{ mailing_list_name }}'</p>

    <div class="form-upload-group">
      <b-form-file
        v-model="file1"
        :state="Boolean(file1)"
        placeholder="Choose a file or drop it here..."
        drop-placeholder="Drop file here..."
      ></b-form-file>
      
    </div>

    <div class="form-date-group">
    <label for="date">Choose a date</label>
    <b-form-datepicker id="name" v-model="date" class="mb-2"></b-form-datepicker>
    </div>

    <div class="form-mailing-name-group">
    <p>Mailing Name: '{{ date }}'</p>
    <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
    </div>
    <b-button>Submit</b-button>
  </div>
</template>

<script>
export default {
  name: 'MailingListUpload',
  props: {
    name: String
  },
  data() {
    return {
      file1: null,
      file2: null,
      date: new Date()
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  margin: 40px 0 0;
}
button, h1 {
  grid-column-start: 1;
  grid-column-end: 3;
}
a {
  color: #42b983;
}
.container {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.container div {

}
.form-upload-group,
.form-date-group,
.form-mailing-name-group, h1
{
  margin: 30px;
  padding: 30px;
}
</style>
