gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {

    const sections = gsap.utils.toArray('section');

    let scrollTween = gsap.to(sections, {
        xPercent: -100 * (sections.length - 1),
        ease: 'none',
        scrollTrigger: {
            trigger: '.wrapper',
            pin: true,
            scrub: 0.5,
            snap: 1 / (sections.length - 1),
            start: 'top top',
            end: 3000,
        }
    })
})

document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('section');

    sections.forEach(section => {
        const button = section.querySelector('button');
        const close = section.querySelector('.close');

        button.addEventListener('click', () => {
            document.body.style.overflow = 'hidden';
            window.scrollTo({
                top: section.offsetTop,
                behavior: 'smooth',
            })
            section.classList.add('transition', 'animate');
            setTimeout(() => {
                section.classList.add('animate-completed');
            }, 1000)
        });

        close.addEventListener('click', () => {
            document.body.style.overflow = 'auto';
            section.classList.remove('animate-completed');
            setTimeout(() => {
                section.classList.remove('animate');
            }, 100);
        });
    })

    

});