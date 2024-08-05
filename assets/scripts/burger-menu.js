console.log("Le JS du menu burger s'est correctement chargé");

document.addEventListener("DOMContentLoaded", function () {
  const menuBurger = document.querySelector(".burgerMenu");
  const nav = document.querySelector(".main-menu");

  if (!menuBurger || !nav) {
    console.error("Menu burger or navigation elements not found");
    return; 
  }

  menuBurger.addEventListener("click", function (event) {
    event.preventDefault();
    const isOpen = nav.classList.contains("open");

    if (isOpen) {
      // Si le menu est ouvert, ajoute la classe 'close' pour déclencher l'animation de fermeture
      nav.classList.add("close");
      menuBurger.classList.remove("open"); // Retirez la classe 'open' pour afficher les barres
      setTimeout(() => {
        // Après un délai, retire la classe 'open' et 'close' pour réinitialiser l'animation
        nav.classList.remove("open", "close");
      }, 1000); // Assurez-vous que le délai correspond à la durée de l'animation de fermeture
    } else {
      // Si le menu est fermé, ajoute la classe 'open' pour déclencher l'animation d'ouverture
      nav.classList.add("open");
      menuBurger.classList.add("open"); // Ajoutez la classe 'open' pour afficher la croix
    }
  });
});
