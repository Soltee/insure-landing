let open  = document.querySelector('.open');
let nav   = document.querySelector('.nav_hover_wrapper');

let close = document.querySelector('.close');

open.addEventListener('click', (e) => {
	nav.style.display = "block";
});

close.addEventListener('click', (e) => {
	nav.classList.remove('open_nav');
	nav.style.display = "none";
});

// alert('HI');
