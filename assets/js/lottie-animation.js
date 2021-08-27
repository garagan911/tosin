
document.addEventListener("DOMContentLoaded", function (event) {

    let animationCompany = document.querySelector('#animation-company');

    let data = '/wp-content/themes/tappengine-afterglow/assets/animation-json/data.json';
    console.log('lotty', animationCompany, data)
    let animBlue = {
        name: 'data',
        container: animationCompany,
        renderer: 'svg',
        autoplay: true,
        imagePreloader: '',
        loop: true,
        rendererSettings: {
            progressiveLoad: false
        },
        path: data
    };

    bodymovin.loadAnimation(animBlue);
});