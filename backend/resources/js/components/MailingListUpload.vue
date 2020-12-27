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
        @change="selectFile"

        :state="Boolean(form.csv_file)"
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
    <div class="mt-3">Selected file: {{ form.csv_file ? form.csv_file.name : '' }}</div>
    </div>
    <b-button type="submit">Submit</b-button>
    </b-form>
  </div>
</template>

<script>

let uuid = () => {
  return 'xxx'.replace(/[xy]/g, function(c) {
    var r = Math.random() * 10 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}
let id = x => x;
export default {
  name: 'MailingListUpload',
  methods: {
    onSubmit(e) {
      e.preventDefault();
      var data = new FormData();
      let csv_file_uploader_form = 
        e.target.querySelector("input[type=file]");
      if(csv_file_uploader_form.files[0]) {
        let file = csv_file_uploader_form.files[0];
        let text = "";
        file.text().then(d => {
          text = d;
          let obj = {csv_blob: text, name: this.form.name, mailing_list_group_id: uuid()};
          console.log(obj)
          axios.post("/api/mailing_lists/upload",
                     obj);
        });

        data.append('csv_file', this.form.csv_file);
      }
    },
    selectFile(e) {
      this.form.csv_file = e.target.files[0];
      var data = new FormData();
      data.append('csv_file', this.form.csv_file);
    },
  },
  data() {
    return {
      form:  {
        csv_file: null,
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
  margin: 20px 0 0;
}
button, h1 {
  grid-column-start: 1;
  grid-column-end: 3;
}
a {
  color: #42b983;
}

form
{
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
