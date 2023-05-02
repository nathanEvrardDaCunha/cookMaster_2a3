<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop | Cook Master</title>
     <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>

	<?php include_once '../../includes/header.php';?>



	<header class="bg-imgCookMaster d-flex justify-content-center align-items-center">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white" id="shopTitleBg">
                <h1 class="display-4 fw-bolder">Bienvenue sur la page de livraison de Cook Master</h1>
                <p class="lead fw-normal text-white-50 mb-0">Choisissez votre repas</p>
            </div>
        </div>
    </header>



    <div class="containerPageShop"> 
      <div class="SectionCategoryShop mt-3">
        <h2>Catégories</h2>
        <ul class="list-group">
            <a><li class="list-group-item active" data-file="shop-delivery-cat-1.php">Voir tout</li></a>
            <a><li class="list-group-item" data-file="shop-delivery-cat-2.php">Entrées</li></a>
            <a><li class="list-group-item" data-file="shop-shop-delivery-cat-3.php">Plats</li></a>
            <a><li class="list-group-item" data-file="shop-shop-delivery-cat-4.php">Desserts</li></a>
            <a><li class="list-group-item" data-file="shop-shop-delivery-cat-4.php">Boissons</li></a>
            <a><li class="list-group-item" data-file="shop-shop-delivery-cat-4.php">Snacks</li></a>
            <a href="shop.php"><li class="list-group-item"><strong>Boutique</strong></li></a>
        </ul>
      </div>

      <div class="elementShopCategory">
        <?php

          include_once 'shop-cat-1.php';
        ?>
      </div>
    </div>

    <script>

        const listItems = document.querySelectorAll('.list-group-item');
        const elementShopCategory = document.querySelector('.elementShopCategory');

        listItems.forEach(item => {
          item.addEventListener('click', () => {
            listItems.forEach(item => item.classList.remove('active'));
            item.classList.add('active');
            const file = item.getAttribute('data-file');
            elementShopCategory.innerHTML = '';
            includeFile(file);
          });
        });

        function includeFile(file) {
          const xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
              elementShopCategory.innerHTML = this.responseText;
            }
          };
          xhr.open('GET', file, true);
          xhr.send();
        }
  </script>


    </script>

</body>
</html>