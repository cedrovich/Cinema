document.addEventListener('DOMContentLoaded', () => {
    // Realizar una solicitud GET para obtener los datos de la API
    fetch('http://localhost:4000/api/movies')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener los datos de la pelicula.');
            }
            return response.json();
        })
        .then(data => {
            console.log('Datos de la pelicula obtenidos:', data);
            // Llamar a la función para desplegar los datos en la página HTML
            displayMovies(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de la pelicila:', error);
            // Aquí puedes manejar el error, por ejemplo, mostrando un mensaje de error al usuario.
        });
});

// Función para desplegar las peliculas en la página HTML
function displayMovies(movies, elementId) {
    const movieList = document.getElementById('elementId');
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
    const category = document.getElementById('movie-category').value; // Obtener la categoría desde un input oculto
    fetchMoviesByCategory(category, 'elementId');
});

//Recibir datos de formulario
const formCreate = document.getElementById("form_movie");

//Añade un escuchador para el boton de Subir
formCreate.addEventListener("submit", (event) => {
    event.preventDefault();
    
    //Obtiene los valores mediante sus IDS
    let name = document.getElementById("name").value;
    let category = document.getElementById("category").value;
    let file = document.getElementById("file").files[0];
    
    let formData = new FormData();
    formData.append('name', name);
    formData.append('category', category);
    formData.append('file', file);

    //Enivia los datos a la API
    fetch('http://localhost:4000/api/movies', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error al guardar pelicula.');
        }
        return response.json();
    })
    .then(data => {
        console.log('Pelicula guardada exitosamente:', data);
        alert("Pelicula guardada exitosamente");
    })
    .catch(error => {
        console.error('Error al guardar pelicula:', error);
        alert("Error al guardar pelicula");
    });
});


// Función para agregar imágenes al carrusel
function addImagesToCarousel(movies) {
    const swiperWrapper = document.querySelector('.swiper-wrapper');

    movies.forEach(movie => {
        const swiperSlide = document.createElement('div');
        swiperSlide.classList.add('swiper-slide');

        const img = document.createElement('img');
        img.classList.add('photo');
        img.src = movie.poster_path;
        img.alt = movie.name;

        swiperSlide.appendChild(img);
        swiperWrapper.appendChild(swiperSlide);
    });
}

