const Rate = document.getElementById('Rate');
const Know_Ratings = document.getElementById('Know_Ratings');
const container = document.getElementById('container');

Rate.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

Know_Ratings.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});