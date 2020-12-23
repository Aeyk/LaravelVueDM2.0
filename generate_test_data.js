var faker = require("faker");
var fs = require('fs');


let range = n => [...Array(n).keys()];

function generate_csv(n /*: number*/) {
  /* => {UUID, String, String (of Number)} */

  let times = range(n);
  let rows = [];
  for(time in times) {
    let uuid = faker.random.uuid(); 
    let name = faker.name.findName(); 
    let zip = faker.address.zipCode();
    rows.push({ id: time, name: name, zip: zip });
  }
  return rows;
}



function write_to_file(what, where) {
  fs.writeFile(where, what, (err) => {
    if (err) throw err;
    console.log("There appear to be no errors in writing to ", where);
  });
}

write_to_file(JSON.stringify(generate_csv(10000)), "test_data.csv");
