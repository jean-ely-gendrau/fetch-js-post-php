// Function asynchrone fetch
// method : POST
// headers: "{Content-Type": "application/json",}
// body: JSON.stringify(data),
async function postJs({ slug, data }) {
  const res = await fetch(`http://${window.location.hostname}js-text/${slug}`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  });

  const response = await res.text(); // res.text()
  return response;
}

// button post data
const buttonPost = (e) => {
  e.preventDefault(); // Prevent default pour stopper l'action par défaut des touches
  postJs({
    slug: "jsPhp.php",
    data: { id: 1, action: "test" },
  }).then((data) => {
    console.log(data); // Affichage des données encodées en console
    let decode = JSON.parse(atob(data)); // Décode et parse les données

    let stringReturn = Object.entries(decode).join(" - ").toString();
    // On joint et on transforme en chaîne de caractère le résultat
    // des données traiter par php, affichage en console
    console.log(stringReturn);
  });
};

const postButton = document.getElementById("postJs"); // Sélecteur de balise

postButton.addEventListener("click", (e) => buttonPost(e)); // écouteur d'événement
