
<style>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  border: none;
  outline: none;
  font-family: "Poppins", sans-serif;
}
body {
  background-color: #f5f8ff;
}
.wrapper {
  width: 95%;
  margin: 0 auto;
}
#search-container {
  margin: 1em 0;
}
#search-container input {
  background-color: transparent;
  width: 40%;
  border-bottom: 2px solid #110f29;
  padding: 1em 0.3em;
}
#search-container input:focus {
  border-bottom-color: #6759ff;
}
#search-container button {
  padding: 1em 2em;
  margin-left: 1em;
  background-color: #6759ff;
  color: #ffffff;
  border-radius: 5px;
  margin-top: 0.5em;
}
.button-value {
  border: 2px solid #6759ff;
  padding: 1em 2.2em;
  border-radius: 3em;
  background-color: transparent;
  color: #6759ff;
  cursor: pointer;
}
.active {
  background-color: #6759ff;
  color: #ffffff;
}
#products {
  display: grid;
  grid-template-columns: auto auto auto;
  grid-column-gap: 1.5em;
  padding: 2em 0;
}
.card {
  background-color: #ffffff;
  max-width: 18em;
  margin-top: 1em;
  padding: 1em;
  border-radius: 5px;
  box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
}
.image-container {
  text-align: center;
}
img {
  max-width: 100%;
  object-fit: contain;
  height: 15em;
}
.container {
  padding-top: 1em;
  color: #110f29;
}
.container h5 {
  font-weight: 500;
}
.hide {
  display: none;
}
@media screen and (max-width: 720px) {
  img {
    max-width: 100%;
    object-fit: contain;
    height: 10em;
  }
  .card {
    max-width: 10em;
    margin-top: 1em;
  }
  #products {
    grid-template-columns: auto auto;
    grid-column-gap: 1em;
  }
}
    </style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search product name here.."
        />
        <button id="search">Search</button>
      </div>
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('Topwear')">
          Topwear
        </button>
        <button class="button-value" onclick="filterProduct('Bottomwear')">
          Bottomwear
        </button>
        <button class="button-value" onclick="filterProduct('Jacket')">
          Jacket
        </button>
        <button class="button-value" onclick="filterProduct('Watch')">
          Watch
        </button>
        <button class="button-value" onclick="filterProduct('Phon')">
          Phone
        </button>
      </div>
      <div id="products"></div>
    </div>
    <!-- Script -->
    <script src="script.js"></script>

    <script>
let products = {
  data: [
    {
      productName: "Regular White T-Shirt",
      category: "Topwear",
      price: "30",
      image: "https://www.sunspel.com/media/catalog/product/cache/2d3a9005457b5910b3e68980f36223a7/m/t/mtsh0001-whaa-2_11.jpg",
    },
    {
      productName: "Beige Short Skirt",
      category: "Bottomwear",
      price: "49",
      image: "https://i.styleoholic.com/2016/07/Simple-outfit-with-mini-skirt-and-top.jpg",
    },
    {
      productName: "Sporty SmartWatch",
      category: "Watch",
      price: "99",
      image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGTc5c64lhSaUYTVDky7RzJ8F6mNvcwiATByei8MZCJQ&s",
    },
    {
      productName: "Basic Knitted Top",
      category: "Topwear",
      price: "29",
      image: "data:image/jpeg;base64,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",
    },
    {
      productName: "Black Leather Jacket",
      category: "Jacket",
      price: "129",
      image: "http://www.blacknoble.com/Uploads/UrunResimleri/buyuk/erkek-deri-ceketchristian-spor-siyah-der-5d51.jpg",
    },
    {
      productName: "Stylish Pink Trousers",
      category: "Bottomwear",
      price: "89",
      image: "https://i.pinimg.com/736x/6c/70/a1/6c70a1023ab45b4632f4bec0d0cec2b7.jpg",
    },
    {
      productName: "Brown Men's Jacket",
      category: "Jacket",
      price: "189",
      image: "http://www.blacknoble.com/Uploads/UrunResimleri/buyuk/erkek-suet-ceketbaron-spor-kahve-suet-ce-7a81.jpg",
    },
    {
      productName: "Comfy Gray Pants",
      category: "Bottomwear",
      price: "49",
      image: "https://cdn-penti.akinon.net/products/2021/10/15/148961/0269d700-686c-424a-9ebe-7dec122af33c_size1200x1400_quality90_cropCenter.jpg",
    },
    {
      productName: "Samsung Galaxy S9",
      category: "Phon",
      price: "698.88",
      image: "https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1",
    },
    {
      productName: "Google Pixel 2 XL ",
      category: "Phon",
      price: "675",
      image: "https://s13emagst.akamaized.net/products/9595/9594608/images/res_3fe695b0d0f9c47990ffa15a69fda86f.jpg",
    },

    {
      productName: "HTC One M10",
      category: "Phon",
      price: "129.99",
      image: "https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg",
    },



  ],
};
for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  //product name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.productName.toUpperCase();
  container.appendChild(name);
  //price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);
  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}
//parameter passed from button (Parameter same as category)
function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });
  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
}
//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");
  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
});
//Initially display all products
window.onload = () => {
  filterProduct("all");
};
        </script>
  </body>
</html>