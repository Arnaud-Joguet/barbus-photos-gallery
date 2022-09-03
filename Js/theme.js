/**
 * module dark-thème
 *  + thèmes de couleur.
 */

 const theme = {
    //1. je déclare les propriétées
    //la variable body est en  propriétée, car elle sert pour passer du mode lumineux au mode dark et aussi pour changer les modes couleurs.
    body: document.getElementsByTagName("body")[0],
    //pour init la couleur de theme avt tte 1ère visite
    themeColor: null,
   
    
    //2. je déclare les méthodes en commencençant par init:
    init: function () {
       
        const btnSwitch = document.getElementById("theme-switch");
        // la fonction handleClickSwitch s'éxécute seulement au click
        btnSwitch.addEventListener("click" ,theme.handleClickSwitch);

        
        //pose d'écouteur sur les changements de thèmes de couleurs
        const buttonColorClick = document.querySelectorAll(".menu__color-switcher>button");
        //console.log(buttonColorClick);
        //une boucle pour optimiser l'écoute des boutons couleur, si on rajoute un autre theme de couleur, le code fonctionne toujours.
        for (button of buttonColorClick) {
            button.addEventListener("click",theme.handleThemeColorClick)
        }
        
        
        // pour savoir le theme par défault choisi et le sauvegarder dans le local storage.
        //et passer tout de suite en mode dark si c'est le dernier theme utilisé avant fermeture du navigateur.
        const savedTheme = localStorage.getItem("theme-dark");
        if(savedTheme == "true"){
            theme.changeTheme();
        }
        // Idem pour sauvegarder et appellé le dernier theme de couleur choisi.
        const saveColorTheme = localStorage.getItem("theme-color");
        theme.changeColorTheme(saveColorTheme);
    },
    //la fonction handleClickSwitch n'est là que pour dire qu'on est à l'écoute d'un event.
    handleClickSwitch: function () {
        theme.changeTheme();
          
    },

    changeTheme: function () {

        //au click le toggle ajoute ou enlève la class theme-dark qui fait passer la page en mode sombre.
        theme.body.classList.toggle("theme-dark");

        //stockage du theme dans le localStorage
        //.contains pour savoir si mon node visé contient la class "theme-dark"
        const isdarkTheme= document.body.classList.contains("theme-dark");
        localStorage.setItem("theme-dark",isdarkTheme);
        
        
    },
        //Pour les themes de couleur.
    handleThemeColorClick: function(event) {

        //la fonction handleThemeColorClick est là pour gérer l'event, c'est tout, le reste ce fait dans la fonction changeColorTheme.
        //ce qui permet de gérer la première visite avant le paramètre event.
        const themeColor = event.target.id;
        theme.changeColorTheme(themeColor);
        //console.log(event.currentTarget.id);
        
          
    },
    changeColorTheme: function (themeColor) {

        //pour init avt la 1ère visite avt sauvegarde des préférences.
        if (themeColor === null) {
            return false;
        }
        //une boucle pour enlevé les class spécifiques aux boutons de theme de couleur.
        const listButtons = document.getElementsByClassName("theme-button");
          for (const button of listButtons) {
            document.body.classList.remove(button.id);
          }
          // Ajout de la classe au body
          document.body.classList.add(themeColor);
            //changement logo
        //const logoSrc = `img/logo-${themeColor}.png`;
          
        //const logoColor = document.getElementsByClassName("logo__image")[0];
        //logoColor.src=logoSrc;
        
        //sauvegarde des préférences
        localStorage.setItem("theme-color", themeColor);
    }
}



 