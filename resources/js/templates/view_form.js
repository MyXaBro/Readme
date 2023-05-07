document.addEventListener('DOMContentLoaded', function() {

    const photoButton = document.querySelector('.filters__button--photo');
    const videoButton = document.querySelector('.filters__button--video');
    const textButton = document.querySelector('.filters__button--text');
    const quoteButton = document.querySelector('.filters__button--quote');
    const linkButton = document.querySelector('.filters__button--link');

    const photoForm = document.querySelector('#photo-form');
    const videoForm = document.querySelector('#video-form');
    const textForm = document.querySelector('#text-form');
    const quoteForm = document.querySelector('#quote-form');
    const linkForm = document.querySelector('#link-form');

    photoButton.addEventListener('click', () => {
        photoForm.classList.remove('visually-hidden');
        videoForm.classList.add('visually-hidden');
        textForm.classList.add('visually-hidden');
        quoteForm.classList.add('visually-hidden');
        linkForm.classList.add('visually-hidden');
    });

    videoButton.addEventListener('click', () => {
        videoForm.classList.remove('visually-hidden');
        textForm.classList.add('visually-hidden');
        photoForm.classList.add('visually-hidden');
        quoteForm.classList.add('visually-hidden');
        linkForm.classList.add('visually-hidden');
    });

    textButton.addEventListener('click', () => {
        textForm.classList.remove('visually-hidden');
        photoForm.classList.add('visually-hidden');
        videoForm.classList.add('visually-hidden');
        quoteForm.classList.add('visually-hidden');
        linkForm.classList.add('visually-hidden');
    });

    quoteButton.addEventListener('click', () => {
        textForm.classList.add('visually-hidden');
        photoForm.classList.add('visually-hidden');
        videoForm.classList.add('visually-hidden');
        quoteForm.classList.remove('visually-hidden');
        linkForm.classList.add('visually-hidden');
    });

    linkButton.addEventListener('click', () => {
        textForm.classList.add('visually-hidden');
        photoForm.classList.add('visually-hidden');
        videoForm.classList.add('visually-hidden');
        quoteForm.classList.add('visually-hidden');
        linkForm.classList.remove('visually-hidden');
    });

});
