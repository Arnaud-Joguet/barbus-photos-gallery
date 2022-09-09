/**
 * module slide pour le carroussel de photos
 */
 const slider = {

    sectionSlider: null,
    currentPosition: 0,
    sliderImages: [
        {
            src: "photo-equipe-glace-sept-22.jpg",
            alt: "Photo d'équipe",
            main: true
        },
        {
            src: "with-team-fille-glace-sept-22.jpg",
            alt: "Photo avec équipe filles de Valence",
            main: false
        },
        {
            src: "remise-prix-glace-sept-22.jpg",
            alt: "Remise des prix",
            main: false
        },
     ],

    
    init : function () {

         slider.sectionSlider = document.querySelector("section.slider");
         slider.generateSliderImages();

         const leftButton = document.querySelector('.slider__btn[aria-label="Précédent"]');
         const rightButton = document.querySelector('.slider__btn[aria-label="Suivant"]');

        leftButton.addEventListener("click", slider.handlePreviousSlide);
        rightButton.addEventListener("click", slider.handleNextSlide);
     },

    generateSliderImages: function() {

        for (const image of slider.sliderImages) {
    
            const img = document.createElement("img");
            //je met des class à la balise img
            img.classList.add("slider__img");
            if(image.main === true){
                img.classList.add("slider__img--current")
            }
    
            //je met la source de mon img
            img.src = "images/" + image.src;
            //le alt
            img.alt = "images du slider";
    
            slider.sectionSlider.prepend(img);
        }
    },

    handleNextSlide: function () {
        let index = slider.currentPosition +1;

        if (index > slider.sliderImages.length -1) {
            index = 0;
        }
        slider.goToSlide(index);
    },
    handlePreviousSlide: function () {
        let index = slider.currentPosition -1;

        if (index < 0) {
            index = slider.sliderImages.length -1;
        }
        slider.goToSlide(index);
    },

    goToSlide: function (index) {
        const currentImage = document.querySelector(".slider__img--current");
        currentImage.classList.remove("slider__img--current");

        const images = document.querySelectorAll(".slider__img");
        images[index].classList.add("slider__img--current");

        slider.currentPosition = index;

    },

}

