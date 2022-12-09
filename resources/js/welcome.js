import anime from 'animejs';
window.anime = anime;

async function animateWelcome()
{
    let animeLogo = anime
    ({
        targets: '#js-contentor-img-logo',
        opacity: { value: 1, duration: 2000, delay: 200, easing: 'linear' },
        scale:
            [
                { value: 3, duration: 250, delay: 200, easing: 'linear' },
                { value: 1, duration: 750, delay: 0, easing: 'easeOutElastic(6, .1)' },
            ],
    }).finished;

    let animeSlogan = anime
    ({
        targets: '#js-slogan-box-glass',
        opacity: [
            { value: 1, duration: 1400, delay: 500, easing: 'linear' },
            { value: 0, duration: 3000, delay: 4000, easing: 'linear' }
        ],
    })

    await Promise.all([animeLogo]);
}
animateWelcome().then( () => slowAnimation()) ;

function slowAnimation()
{
    let animeLogo = anime
    ({
        targets: '#js-contentor-img-logo',
        translateX: [{
            value: anime.random(-6, 6),
            duration: 2500,
            delay: 0,
            easing: 'easeInOutQuad',
            direction: 'alternate',
        }],
        translateY: [{
            value: anime.random(-8, 8),
            duration: 2000,
            delay: 0,
            easing: 'easeInOutQuad',
            direction: 'alternate',
        }],
        complete: (anime) => slowAnimation(),
    })

}

// DEVOLVE A POSIÇÃO DO ELEMENTO EM RELAÇÃO Á PÁGINA topo e esquerda
function getOffset (elementId)
{
    const rect = document.getElementById(elementId).getBoundingClientRect();
    return {
        left: rect.left + window.scrollX,
        top: rect.top + window.scrollY
    };
}
/* COMO USAR getOffset */
// getOffset(animeTargets).left;
// getOffset(animeTargets).top;

// REMOVE PRE LOADER
const preloader = document.getElementById('js-contentor-pre-loader');
window.addEventListener('load', removePreLoader);
function removePreLoader()
{
    preloader.remove();
    removeEvtListener('load', removePreLoader);
    animateWelcome();
}

/* REMOVE UM qualquer EventListener */
function removeEvtListener(eventName, functionName)
{
    window.removeEventListener(eventName, functionName);
}

const logo = document.getElementById('js-contentor-img-logo');
logo?.addEventListener('mouseover', (event) =>
{
    anime
    ({
        targets: '#js-img-logo',
        scale: [{ value: 1.1, duration: 500, delay: 0, easing: 'easeInOutQuad' }],
    })
})

logo?.addEventListener('mouseout', (event) =>
{
    anime
        ({
            targets: '#js-img-logo',
            scale: [{ value: 1, duration: 500, delay: 0, easing: 'easeInOutQuad' }],
        })
});