const preloader = document.getElementById('preloader');
const main = document.querySelector('.luvbuddy-page');

function init() {
	setTimeout(() => {
		preloader.style.opacity = 0;
		preloader.style.display = 'none';

		main.style.display = 'block';
		main.style.opacity = 1;
	}, 2000);
}

init();
