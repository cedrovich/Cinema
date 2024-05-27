// Función para desplegar los datos de películas en la página HTML
function displayMovies(movies, elementId) {
    const movieList = document.getElementById(elementId);
    movieList.innerHTML = ''; // Limpiar la lista antes de agregar nuevas películas
    
    movies.forEach(movie => {
        const listItem = document.createElement('li');
        listItem.classList.add('movie-item'); // Añadir clase para CSS

        // Crear elemento de imagen
        const img = document.createElement('img');
        img.src = movie.poster_path; // Establecer la URL de la imagen
        img.classList.add('movie-poster'); // Añadir clase para CSS

        // Crear contenedor de texto
        const textContainer = document.createElement('div');
        textContainer.classList.add('movie-text'); // Añadir clase para CSS
        textContainer.innerHTML = `<strong>${movie.name}</strong><br>${movie.category}`;

        // Agregar la imagen y el contenedor de texto al listItem
        listItem.appendChild(img);
        listItem.appendChild(textContainer);
    
        // Agregar el listItem a la lista de películas
        movieList.appendChild(listItem);
    });
}

// Realizar una solicitud GET para obtener las películas por categoría
function fetchMoviesByCategory(category, elementId) {
    fetch(`http://localhost:4000/api/movies/${category}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener los datos de películas.');
            }
            return response.json();
        })
        .then(data => {
            console.log('Datos de películas obtenidos:', data);
            // Llamar a la función para desplegar los datos en la página HTML
            displayMovies(data, elementId);
        })
        .catch(error => {
            console.error('Error al obtener los datos de películas:', error);
            // Aquí puedes manejar el error, por ejemplo, mostrando un mensaje de error al usuario.
        });
}

// Llamar a la función con una categoría específica cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    const categoryElement = document.getElementById('movie-category');
    if (categoryElement) {
        const category = categoryElement.value; // Obtener la categoría desde un input oculto
        fetchMoviesByCategory(category, 'movie-complete-list');
    }
});
