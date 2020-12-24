<template>
  <div class="container">
    <h1>Mailing List Upload</h1>
    <label for="name">Mailing List Name</label>

    <b-form @submit="onSubmit">
    <b-form-input
      v-model="form.name" placeholder="Enter your name"></b-form-input>
    <p>Value: '{{ form.name }}'</p>

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
    <b-form-datepicker id="name" v-model="form.date" class="mb-2"></b-form-datepicker>
    </div>

    <div class="form-mailing-name-group">
    <p>Mailing Name: '{{ form.date }}'</p>
    <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
    </div>
    <b-button type="submit">Submit</b-button>
    </b-form>
  </div>
</template>

<script>
export default {
  name: 'MailingListUpload',
  methods: {
    onSubmit(e) {
      event.preventDefault();
      // TODO make this into a AJAX call
      // alert(JSON.stringify(this.form));
    },
  },
  data() {
    return {
      form:  {
        file1: null,
        date: new Date(),
        name: ""
      }
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
