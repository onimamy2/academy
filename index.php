<?php
 include './includes/header.php';
 include './classes/produit.class.php';

 $produit = new Produit();
 $list = $produit->afficherProduit($cnx);
?>
<div class="row">
<?php
	

	foreach ($list as $key => $value) {
?>
<div class="col">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./uploads/<?php echo $value['image'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value['nom_produit'] ?></h5>
    <p class="card-text"><?php echo substr($value['description'], 0, 200) ?>...</p>
    <a href="produit.php?id_produit=<?php echo $value['id_produit'] ?>" class="btn btn-primary">Voir détails</a>
  </div>
</div>
</div>
<?php
	}
 ?>
</div>



<?php
 include './includes/footer.php';
?>
