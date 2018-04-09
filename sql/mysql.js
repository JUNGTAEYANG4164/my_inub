var mysql = require("mysql");
var connection = mysql.createConnection({

    host : "localhost",
    port : 3306,
    user : "root",
    password : "apmsetup",
    database : "nodejs"

});
var sqlQuery = "INSERT INTO member SET ?";
var post = {id : "dog92dog", password : "1234", name : "park"};

function callback(err,result){
    if(err){
        throw err
    }
    console.log("Insert Complete!");
    console.log(query.sql);
}

connection.connect();
var query = connection.query(sqlQuery, post, callback);
connection.end();
