document.addEventListener('DOMContentLoaded', function() {
    const apiKey = '1da4a5d7c9ae431f9224ae2a84db2bc8'; // Replace with your RAWG API key
    const url = `https://api.rawg.io/api/games?key=${apiKey}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const gamesDiv = document.getElementById('games');
            data.results.slice(0, 10).forEach(game => {
                const gameInfo = `
                    <div class="game">
                        <h2>${game.name}</h2>
                        <img src="${game.background_image}" alt="${game.name} image">
                        <p>Rating: ${game.rating}</p>
                        <p>Released: ${game.released}</p>
                    </div>
                `;
                gamesDiv.innerHTML += gameInfo;
            });
        })
        .catch(error => console.error('Error fetching the game data:', error));
});