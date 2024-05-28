//Configuracion para la conexion a la Base de Datos

let mysql = require("mysql");

let conexion = mysql.createConnection({
    host: "localhost",
    port: "3306", //EN PC: 3306 EN LAP: 3307
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
