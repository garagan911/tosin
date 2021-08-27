
$(window).load(function() { // makes sure the whole site is loaded
    $("#status").fadeOut(); // will first fade out the loading animation
    $("#preloader").delay(250).fadeOut("slow"); // will fade out the white DIV that covers the website.
})

// Quick & dirty toggle to demonstrate modal toggle behavior
$(document).ready(function (){

    $('.modal-toggle').on('click', function(e) {
        e.preventDefault();
        $('.modal').toggleClass('is-visible');
    });

    if($(window).resize() || $(window).width() < 1199) {
        $('.menu-toggle, .menu-item-411 a').click(function () {
            $('.navigation-panel').toggleClass('navigation-panel-active');
        });
    }

    $(window).scroll(function(){
        var $sections = $('section');
        $sections.each(function(i,el){
            var top  = $(el).offset().top-120;
            var bottom = top +$(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if( scroll > top && scroll < bottom){
                $('a.active').removeClass('active');
                $('a[href="#'+id+'"]').addClass('active');

            }
        })

    });
// scroll to top
    $("[href^='#']").each(function(){
        $(this).click(function(e){
            e.preventDefault();

            var blockID = $(this).attr('href');
            top = $(blockID).offset().top + -80;
            elementID = blockID.substring(1, blockID.length);
            document.getElementById(elementID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        });
    });
});


const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
    })
})

// animation
