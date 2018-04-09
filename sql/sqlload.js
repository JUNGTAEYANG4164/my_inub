var mysql = require("mysql");
var connection = mysql.createConnection({
    host : "localhost",
    port : 3306,
    user : "root",
    password : "apmsetup",
    database : "nodejs"
});

var sqlQuery = "SELECT * FROM member";

function callback(err,rows,fields){

    if(err){
        throw err
    }    

    for(var i=0; i<rows.length;i++){
        console.log(rows[i].id+" | "+rows[i].password+" | "+rows[i].name);
    }

}
connection.connect();
connection.query(sqlQuery, callback);
connection.end();