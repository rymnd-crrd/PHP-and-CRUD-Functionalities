<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="price.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petrona:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amethysta&family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amethysta&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Londrina+Shadow&display=swap" rel="stylesheet">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="right">
        <a href="contact.html"><ion-icon name="arrow-forward-outline"></ion-icon></a>
    </div>

    <div class="left">
        <a href="about.html"><ion-icon name="arrow-back-outline"></ion-icon></a>
    </div>
    <h1>It is our pride to offer premium quality <br> product from all over LSPU</h1>
    
    <div class="tab-container">
        <button class="tablink" onclick="openTab('all')">ALL</button>
        <button class="tablink" onclick="openTab('milktea')">MILKTEA</button>
        <button class="tablink" onclick="openTab('coffee')">COFFEE</button>
        <button class="tablink" onclick="openTab('bread')">BREAD</button>
    </div>
    
    <div id="all" class="tab-content"></div>
    <div id="milktea" class="tab-content"></div>
    <div id="coffee" class="tab-content"></div>
    <div id="bread" class="tab-content"></div>

    <h1>Product Management</h1>

    <!-- Form to Add Products -->
    <h2>Add Product</h2>
    <form id="addProductForm">
        <label for="productName">Product Name:</label><br>
        <input type="text" id="productName" name="productName" required><br><br>
        
        <label for="productPrice">Price:</label><br>
        <input type="number" id="productPrice" name="productPrice" required><br><br>

        <label for="productDescription">Description:</label><br>
        <textarea id="productDescription" name="productDescription" required></textarea><br><br>


        <label for="productCategory">Category:</label><br>
<select id="productCategory" name="productCategory" required> <!-- Add required attribute -->
    <option value="">Select Category</option> <!-- Add default option -->
    <option value="milktea">Milk Tea</option>
    <option value="coffee">Coffee</option>
    <option value="bread">Bread</option>
</select><br><br>


        <button type="submit">Add Product</button>
    </form>

    <!-- Display Menu -->
    <h2>Menu</h2>
    <ul id="menu"></ul>
    
    <script>
      const products = {
        milktea: [],
        coffee: [],
        bread: [],
        all: []
    };

    function openTab(tabName) {
        const tabs = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
        if (tabName !== 'all') {
            displayProducts(products[tabName]);
        } else {
            displayAllProducts();
        }
    }

    function displayProducts(products) {
        const tabContent = document.getElementById(openTab);
        tabContent.innerHTML = '';
        products.forEach(product => {
            const productItem = document.createElement("div");
            productItem.className = "product-item";
            productItem.innerHTML = `
                <h2 class="head">${product.name} <span class="price">${product.price} php</span></h2>
                <p class="des">${product.description}</p>
            `;
            tabContent.appendChild(productItem);
        });
    }

    function displayAllProducts() {
        const tabContent = document.getElementById('all');
        tabContent.innerHTML = '';
        for (const category in products) {
            if (products.hasOwnProperty(category)) {
                products[category].forEach(product => {
                    const productItem = document.createElement("div");
                    productItem.className = "product-item";
                    productItem.innerHTML = `
                        <h2 class="head">${product.name} <span class="price">${product.price} php</span></h2>
                        <p class="des">${product.description}</p>
                    `;
                    tabContent.appendChild(productItem);
                });
            }
        }
    }

    document.getElementById("addProductForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Pigilan ang default na pagpasa ng form
      const productName = document.getElementById("productName").value;
      const productPrice = document.getElementById("productPrice").value;
      const productCategory = document.getElementById("productCategory").value;
      const productDescription = document.getElementById("productDescription").value; // Kunin ang paglalarawan
      
      // Tiwalaan na mayroong kategorya na napili
      if (productCategory === "") {
          alert("Pumili ng kategorya para sa produkto.");
          return;
      }
      
      // Idagdag ang produkto sa tamang kategorya
      products[productCategory].push({
          name: productName,
          price: productPrice,
          description: productDescription // Gamitin ang ibinigay na paglalarawan
      });
  
      // I-update ang menu
      const menuItem = document.createElement("li");
      menuItem.textContent = productName + " - $" + productPrice + " (" + productCategory + ")";
      document.getElementById("menu").appendChild(menuItem);
      
      // Linisin ang mga field ng form
      document.getElementById("productName").value = "";
      document.getElementById("productPrice").value = "";
      document.getElementById("productDescription").value = ""; // Linisin ang description field
  
      // Tukuyin ang kategorya ng tab na bubuksan
      openTab(productCategory); // Bubuksan ang tamang tab pagkatapos ng pagdagdag ng produkto
  });
  
      
      
    </script>
</body>
</html>
