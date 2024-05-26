//Imports
const express = require('express');
const cors = require('cors');
const multer = require('multer');
const conexion = require('./conexion');

//Initialize app
const app = express();

//Use imports
app.use(express.json());
app.use(cors());

// Configurar multer para manejar la carga de archivos
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'uploads/'); // Definir la carpeta de destino para guardar los archivos
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

/*
 *  METHODS
 */

//Root of api
app.get('/', (req, res) => {
    res.send('API del cine');
})

/*
 *   Visualize movies of DB
 */
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

/*
 *   Create a new movie by using post method
 */

app.post('/api/movies', upload.single('image'), (req, res) => {
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


/*
 *   Delete movie from DB
 */

app.delete('/api/movies/:id', (req, res) => {
    const id = req.params.id;

    // Verificar si el ID proporcionado es un número válido
    if (isNaN(id)) {
        return res.status(400).json({ error: 'El ID debe ser un número válido' });
    }

    // Eliminar la película de la base de datos
    conexion.query("DELETE FROM films WHERE id = ?", [id], (error, result) => {
        if (error) {
            console.error("Error al eliminar la película:", error);
            return res.status(500).json({ error: 'Error al eliminar la película de la base de datos' });
        }

        // Verificar si se eliminó algún registro
        if (result.affectedRows === 0) {
            return res.status(404).json({ error: 'La película con el ID proporcionado no existe' });
        }

        res.status(200).json({ message: 'Película eliminada exitosamente' }); // Devolver un mensaje de éxito
    });
});

//port config
const port = process.env.port || 4000;
app.listen(port, () => console.log(`Escuchando en el puerto ${port}...`));
