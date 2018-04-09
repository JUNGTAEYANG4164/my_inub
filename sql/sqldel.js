var mysql = require("mysql");

var connection = mysql.createConnection({

    host : "localhost",
    port : 3306,
    user : "root",
    password : "apmsetup",
    database : "nodejs"

});

var sqlQuery = "DELETE FROM member where ?";
var post = {id : "Park"};

function callback(err,result){
    if(err){
        throw err
    }
    console.log("Delete Complete!");
}

 

connection.connect();
connection.query(sqlQuery, post, callback);
connection.end();
