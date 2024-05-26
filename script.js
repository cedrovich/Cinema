// script.js
document.addEventListener('DOMContentLoaded', function() {
    fetchMovies();
});

function fetchMovies() {
    const url = 'http://localhost:4000/api/movies';

    fetch(url)
        .then(response => response.json())
        .then(data => {
            displayMovies(data);
        })
        .catch(error => {
            console.error('Error:', error);
            document.querySelector('.princ').innerText = 'Hubo un error al cargar las películas.';
        });
}

function displayMovies(movies) {
    const peliculas1 = document.querySelector('.peliculas1');
    const peliculas2 = document.querySelector('.peliculas2');
    let firstHalf = movies.slice(0, 4);
    let secondHalf = movies.slice(4);

    firstHalf.forEach(movie => {
        const movieElement = createMovieElement(movie);
        peliculas1.appendChild(movieElement);
    });

    secondHalf.forEach(movie => {
        const movieElement = createMovieElement(movie);
        peliculas2.appendChild(movieElement);
    });
}

function createMovieElement(movie) {
    const section = document.createElement('section');
    section.classList.add('pelis', 'sombra');
    
    const img = document.createElement('img');
    img.src = 'images/default.png'; // Usa una imagen por defecto o agrega una columna para imágenes en tu tabla
    img.alt = movie.title;
    
    const h3 = document.createElement('h3');
    h3.textContent = movie.title;
    
    section.appendChild(img);
    section.appendChild(h3);
    
    const link = document.createElement('a');
    link.href = '';
    link.appendChild(section);

    return link;
}
