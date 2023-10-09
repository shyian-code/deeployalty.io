( function() { 'use strict';
    let images = document.querySelectorAll('img[data-src]');

    document.addEventListener('DOMContentLoaded', onReady);
    function onReady() {
        // Show above-the-fold images first
        showImagesOnView();

        // scroll listener
        window.addEventListener( 'scroll', showImagesOnView, false );
    }

    // Show the image if reached on viewport
    function showImagesOnView( e ) {

        for( let i of images ) {
            if( i.getAttribute('src') ) { continue; } // SKIP if already displayed

            // Compare the position of image and scroll
            let bounding = i.getBoundingClientRect();
            let isOnView = bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth);

            if( isOnView ) {
                i.setAttribute( 'src', i.dataset.src );
                if( i.getAttribute('data-srcset') ) {
                    i.setAttribute( 'srcset', i.dataset.srcset );
                }
            }
        }
    }

})();
