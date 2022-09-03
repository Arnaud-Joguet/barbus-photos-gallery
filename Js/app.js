/**
 * module init de ts les modules
 */

 const app = {

    init: function() {
        theme.init();
        slider.init();
    },
}

document.addEventListener("DOMContentLoaded", app.init);