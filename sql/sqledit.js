var mysql = require("mysql");
var connection = mysql.createConnection({

    host : "localhost",
    port : 3306,
    user : "root",
    password : "apmsetup",
    database : "nodejs"
});

var sqlQuery = 'UPDATE member SET id="Jung" WHERE id="Park"';

 

function callback(err,result){

    if(err){
        throw err
    }
    console.log("UPdate Complete!");
} 

connection.connect();
var query = connection.query(sqlQuery, callback);
connection.end();

