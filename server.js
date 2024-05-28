//Importaciones
const express = require('express');
const cors = require('cors');
const multer = require('multer');
const conexion = require('./db-config');

//Inicializacion del Express
const app = express();

//Uso de los Imports
app.use(express.json());
app.use(cors());

// Configurar multer para manejar la carga de archivos
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'uploads/');
        cb(null, 'categorias/uploads/'); // Definir la carpeta de destino para guardar los archivos
    },
    filename: function (req, file, cb) {
        // Obtener la fecha actual en formato YYYY-MM-DD
        const date = new Date().toISOString().slice(0, 10);
        
        // Construir el nombre del archivo con la fecha y el nombre original del archivo
        const filename = date + '-' + file.originalname;
        cb(null, filename);
    }
});
  
const upload = multer({ storage: storage });  

//Root of api
app.get('/', (req, res) => {
    res.send('API del cine');
})

//Visualize movies of DB

app.get('/api/movies', (req, res) => {
    conexion.query("SELECT * FROM films", (error, results) => {
        if (error) {
            console.error("Error al ejecutar la consulta:", error);
            res.status(500).json({ error: 'Error al obtener datos de la base de datos' });
            return;
        }
        res.send(results);
    });
})

//Visualize movies by category
app.get('/api/movies/:category', (req, res) => {
    const category = req.params.category;
    conexion.query("SELECT * FROM films WHERE category = ?", [category], (error, results) => {
        if (error) {
            console.error("Error al ejecutar la consulta:", error);
            res.status(500).json({ error: 'Error al obtener datos de la base de datos' });
            return;
        }
        res.json(results); // Enviar los resultados como respuesta JSON al frontend
    });
});

//Create a new movie by using post method

app.post('/api/movies', upload.single('file'), (req, res) => {
    const { name, category } = req.body;
    const poster_path = "uploads/" + req.file.filename;

    //Validates if theres any empty field
    if (!name || !category) {
        return res.status(400).json({ error: 'Todos los campos son requeridos' });
    }

    //Use a query to create a movie in DB
    conexion.query("INSERT INTO films (name, category, poster_path) VALUES (?, ?, ?)", [name, category, poster_path], (error, result) => {
        if (error) {
            console.error("Error al insertar la película:", error);
            return res.status(500).json({ error: 'Error al insertar la película en la base de datos' });
        }

        res.status(201).json({ message: 'Película añadida exitosamente' });
    });
});

//Configuracion del Puerto
const port = process.env.port || 4000;
app.listen(port, () => console.log(`Escuchando en el puerto ${port}...`));
