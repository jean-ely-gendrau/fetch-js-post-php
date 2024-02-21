// Function asynchrone fetch
// method : POST
// headers: "{Content-Type": "application/x-www-form-urlencoded",}
// body: Object.entries(data).map(([key, val], index) => ....
async function postJs({ slug, idForm }) {
  const form = document.getElementById(idForm);
  // Si l'élément existe
  if (form) {
    /* https://developer.mozilla.org/en-US/docs/Web/API/FormData/FormData
      lorsqu'il est spécifié, l' FormData objet sera rempli avec les form clés/valeurs
      actuelles de en utilisant la propriété name de chaque élément pour les clés et
      leur valeur soumise pour les valeurs. Il encodera également le contenu d’entrée du fichier.
    */
    const formData = new FormData(form);

    const request = await fetch(
      `http://${window.location.hostname}/js-formData/${slug}`,
      {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: Array.from(formData)
          .map(([key, val], index) => {
            return `${key}=${val};`;
          })
          .join("&"),
      }
    );

    const response = await request.json();
    return response;
  }
  return false;
}

// button post data
const buttonPost = (e) => {
  e.preventDefault(); // Prevent default pour stopper l'action par défaut des touches
  const response = postJs({
    slug: "jsPhp.php",
    idForm: "form",
  });
  // Si on à une response valide
  if (response) {
    response.then((data) => {
      console.log(data); // Console log des données retourné par PHP
      let stringReturn = Object.entries(data).join(" - ").toString();
      // On joint et on transforme en chaîne de caractère le résultat
      // des données traiter par php, affichage en console
      console.log(stringReturn);
    });
  } else {
    console.error("Une erreur viens de ce produire"); // Sinon on affiche un message d'erreur en console
  }
};

const postButton = document.getElementById("postJs"); // Sélecteur de balise

postButton.addEventListener("click", (e) => buttonPost(e)); // écouteur d'événement
