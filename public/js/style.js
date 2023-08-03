function createStars() {
    const universe = document.querySelector('.universe');

    for (let i = 0; i < 200; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.top = `${Math.random() * 100}%`;
        star.style.left = `${Math.random() * 100}%`;
        star.style.animationDelay = `${Math.random() * 10}s`;
        universe.appendChild(star);
    }
}

createStars();

const searchInput = document.getElementById('search-input');
const suggestionsDiv = document.getElementById('suggestions');

searchInput.addEventListener('input', async function () {
    const query = searchInput.value.trim();
    if (query.length > 0) {
        const response = await fetch(`/search/suggestions?query=${query}`);
        const suggestions = await response.json();
        suggestionsDiv.innerHTML = '';
        suggestions.forEach(suggestion => {
            const suggestionElement = document.createElement('div');
            suggestionElement.textContent = suggestion;
            suggestionElement.addEventListener('click', function () {
                window.location.href = `/search/result/${suggestion}`;
            });
            suggestionsDiv.appendChild(suggestionElement);
        });
    } else {
        suggestionsDiv.innerHTML = '';
    }
});