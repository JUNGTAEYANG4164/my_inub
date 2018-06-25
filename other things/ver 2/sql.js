var express    =  require("express");  
var mysql      = require('mysql');  
var connection = mysql.createConnection({  
  host     : 'localhost',  
  user     : 'root',  
  password : 'apmsetup',  
  database : 'nodejs'  
});  
var app = express();  
  
connection.connect(function(err){  
if(!err) {  
    console.log("Database is connected ... \n\n");    
} else {  
    console.log("Error connecting database ... \n\n");    
}  
});  
  
app.get("/",function(request,response){  
connection.query('SELECT * from member', function(err, rows, fields) {  
connection.end();  
  if (!err){  
       var data="<html><head><title>Project DB</title></head>"  
       data+="<h1>User information</h1>"  
       data+="<table border=\"1\">"    
       data+="<tr><th>id</th><th>name</th><th>password</th></tr>"  
  
for (var i in rows){  
    data += "<tr>"  
    data += "<td>"+rows[i].id+"</td>"  
    data += "<td>"+rows[i].name+"</td>";  
    data += "<td>"+rows[i].password+"</td>";  
    data += "</tr>"  
}  
  
data+="</table></html>"  
  
response.send(data);  
  }  
  else  
    console.log('Error while performing Query.');  
  });  
});  
  
app.listen(3000);  