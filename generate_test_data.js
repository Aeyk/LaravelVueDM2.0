var faker = require("faker");
var fs = require('fs');
var json2csv = require('json-2-csv');

let range = n => [...Array(n).keys()];
function generate(n /*: number*/) {
  /* => {UUID, String, String (of Number)} */

  let times = range(n);
  let rows = [];
  for(time in times) {
    let uuid = faker.random.uuid(); 
    let name = faker.name.findName(); 
    let zip = faker.address.zipCode();
    rows.push({ usersname: name, zip: zip });
  }
  return rows;
}

function write_to_file(what, where) {
  fs.writeFile(where, what, (err) => {
    if (err) throw err;
    console.log("There appear to be no errors in writing to ", where);
  });
  return what;
}

function csv(json, callback, csv_file_name_dest) {
  json2csv.json2csv(json, (err, ok) => {
    if (err) throw err;
    console.log("There appear to be no errors in converting to csv");
    callback(ok, csv_file_name_dest);
  });
}


function json(json, callback, json_file_name_dest) {
  callback(JSON.stringify(json), json_file_name_dest);
}


// json(generate(25), write_to_file, "test_data.json");
csv(generate(1000000), write_to_file, "test_data_100k.csv");


