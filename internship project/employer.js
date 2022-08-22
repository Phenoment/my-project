const bar = document.getElementById('bar');
const nav = document.getElementById('nav-bar');
const cancel = document.getElementById('cross');

if(bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
if(cancel) {
    cancel.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}