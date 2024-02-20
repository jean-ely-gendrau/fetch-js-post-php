// Function asynchrone fetch
// method : POST
// headers: "{Content-Type": "application/json",}
// body: JSON.stringify(data),
async function postJs({ slug, data }) {
  const request = await fetch(
    `http://${window.location.hostname}/php-post-js/js-json/${slug}`,
    {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    }
  );

  const response = request.json();
  return response;
}

// button post data
const buttonPost = (e) => {
  e.preventDefault(); // Prevent default pour stopper l'action par défault des touches
  postJs({
    slug: "jsPhp.php",
    data: { id: 1, action: "test" },
  }).then((data) => {
    console.log(data);
    let stringRetunr = Object.entries(data).join(" - ").toString();
    // On joint et on transfome en chaîne de caractère le résultat
    // des données traiter par php, affichage en console
    console.log(stringRetunr);
  });
};

const postButton = document.getElementById("postJs"); // Sélécteur de balise

postButton.addEventListener("click", (e) => buttonPost(e)); // écouteur d'événement
