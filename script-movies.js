// Muestra los datos de las peliculas desde la Base de Datos

document.addEventListener('DOMContentLoaded', () => {
    // Realizar una solicitud GET para obtener los datos de la API
    fetch('http://localhost:4000/api/movies')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener los datos de películas.');
            }
            return response.json();
        })
        .then(data => {
            console.log('Datos de películas obtenidos:', data);
            // Llamar a la función para desplegar los datos en la página HTML
            displayMovies(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de películas:', error);
        });
});

// Función para desplegar los datos de películas en la página HTML
function displayMovies(movies) {
    const movieList = document.getElementById('movie-list');
    movies.forEach(movie => {
        
        const listItem = document.createElement('li');
        listItem.innerHTML = `ID: ${movie.id}, Nombre: ${movie.name}, Categoría: ${movie.category}, Imagen: `;
        
        // Crear elemento de imagen
        const img = document.createElement('img');
        img.src = movie.poster_path; // Establecer la URL de la imagen
        img.style.maxWidth = '100px'; // Establecer un ancho máximo opcional

        // Agregar la imagen al listItem
        listItem.appendChild(img);

        // Crear botón de eliminar
        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.addEventListener('click', () => {
            // Llamar a la función para eliminar la película correspondiente
            deleteMovie(movie.id);
        });
        
        // Agregar el botón de eliminar al listItem
        listItem.appendChild(deleteButton);

        // Agregar el listItem a la lista de películas
        movieList.appendChild(listItem);
    });
}

// Añadir la pelicula a la Base de Datos
const formCreate = document.getElementById("saveMovie");

// Añade un escuchador para el boton de Subir
formCreate.addEventListener("submit", (event) => {
    event.preventDefault();
    
    // Obtiene los datos por sus ids
    let movieName = document.getElementById("name").value;
    let movieCategory = document.getElementById("category").value;
    let movieImage = document.getElementById("image").files[0];
    
    let formData = new FormData();
    formData.append('name', movieName);
    formData.append('category', movieCategory);
    formData.append('image', movieImage);

    // Envia los datos obtenidos a la API
    fetch('http://localhost:4000/api/movies', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al guardar la película.');
        }
        return response.json();
    })
    .then(data => {
        console.log('Película guardada exitosamente:', data);
        alert("Película guardada exitosamente");
    })
    .catch(error => {
        console.error('Error al guardar la película:', error);
        alert("Error al guardar película");
    });
});
