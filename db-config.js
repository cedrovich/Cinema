let mysql = require("mysql");

let conexion = mysql.createConnection({
    host: "localhost",
    port: "3306",
    database: "cinema",
    user: "root",
    password: ""
});

conexion.connect(function(err) {
    if (err) {
        throw err;
    } else {
        console.log("Conexión exitosa");
    }
});

module.exports = conexion;
