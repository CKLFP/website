import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import anime from 'animejs';
window.anime = anime;


// REMOVE PRE LOADER
const preloader = document.getElementById('js-contentor-pre-loader');
window.addEventListener('load', removePreLoader);

function removePreLoader()
{
    preloader.remove();
    removeEvtListener('load', removePreLoader);
}

/* REMOVE UM DADO EventListener */
function removeEvtListener(eventName, functionName)
{
    window.removeEventListener(eventName, functionName);
}