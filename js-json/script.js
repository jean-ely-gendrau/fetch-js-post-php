// Function asynchrone fetch
// method : POST
// headers: "{Content-Type": "application/json",}
// body: JSON.stringify(data),
async function postJs({ slug, data }) {
  const request = await fetch(
    `http://${window.location.hostname}/js-json/${slug}`,
    {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    }
  );

  const response = await request.json();
  return response;
}

// button post data
const buttonPost = (e) => {
  e.preventDefault(); // Prevent default pour stopper l'action par default des touches
  postJs({
    slug: "jsPhp.php",
    data: { id: 1, action: "test" }, // Objet JSON
  }).then((data) => {
    console.log(data);
    let stringReturn = Object.entries(data).join(" - ").toString();
    // On joint et on transforme en chaîne de caractère le résultat
    // des données traiter par php, affichage en console
    console.log(stringReturn);
  });
};

const postButton = document.getElementById("postJs"); // Sélecteur de balise

postButton.addEventListener("click", (e) => buttonPost(e)); // écouteur d'événement
