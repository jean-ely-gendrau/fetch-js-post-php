// Function asynchrone fetch
// method : POST
// headers: "{Content-Type": "application/x-www-form-urlencoded",}
// body: Object.entries(data).map(([key, val], index) => ....
async function postJs({ slug, data }) {
  const res = await fetch(
    `http://${window.location.hostname}/js-urlencode/${slug}`,
    {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: Object.entries(data)
        .map(([key, val], index) => {
          return `${key}=${val};`;
        })
        .join("&"),
    }
  );

  const response = await res.json(); // res.json()
  return response;
}

// button post data
const buttonPost = (e) => {
  e.preventDefault(); // Prevent default pour stopper l'action par défaut des touches
  postJs({
    slug: "jsPhp.php",
    data: { id: 1, action: "test" }, // Objet JSON
  }).then((data) => {
    let stringReturn = Object.entries(data).join(" - ").toString();
    // On joint et on transforme en chaîne de caractère le résultat
    // des données traiter par php, affichage en console
    console.log(stringReturn);
  });
};

const postButton = document.getElementById("postJs"); // Sélecteur de balise

postButton.addEventListener("click", (e) => buttonPost(e)); // écouteur d'événement
