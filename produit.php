<?php
 include './includes/header.php';
 include './classes/produit.class.php';

 $id_produit = isset($_GET['id_produit']) ? (int)$_GET['id_produit'] : 0;
 echo $id_produit;

 if($id_produit > 0)
 {
    $produit = new Produit();
    $p = $produit->recupereProduit($cnx, $id_produit);
 ?>
<div class="container">
 <div class="row">
   <div class="col-md-6">
      <img class="img-fluid" src="./uploads/<?php echo $p['image'] ?>" >
   </div>
   <div class="col-md-6">
      <h1><?php echo $p['nom_produit'] ?></h1>
      <p>
         <?php echo $p['description'] ?>
      </p>
      <button class="btn btn-info">Ajouter au panier</button>
   </div>
 </div>
</div>
 <?php
 }
 else
 {
    echo '<div class="alert alert-danger">Aucun produi à afficher</div>';
 }

?>

<?php
 include './includes/footer.php';
?>
