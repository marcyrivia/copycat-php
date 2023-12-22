<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/navbar.css">
    <link rel="stylesheet" href="assets/style/footer.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Accueil</title>
</head>
<?php include './assets/data/data.php'; ?> <!-- Include your navbar content here -->

<body>
    <!-- header -->
<?php include './components/navbar.php'; ?> <!-- Include your navbar content here -->
<!-- main -->
<main>
<div class="parallax"></div>


<div class="parallax"></div>
<div class=" mx-auto d-flex flex-wrap  justify-content-center"style ="background: radial-gradient(circle at 50% 50%, rgba(19, 190, 83, 1) 0%, rgba(236, 253, 255, 1) 100%, rgba(238, 130, 238, 1) 100%);
">


<?php 
foreach ($data as $index => $item) {
    echo '<div class="card col-lg-3 mb-4 mx-4 bg-transparent">';
    echo '<img src="assets/img/portrait-' . ($index + 1) . '.jpg" class="card-img-top" alt="Placeholder Image">';
    echo '<div class="card-body ">';
    echo '<h3 class="card-title text-center">' . $item['name'] . '</h3>';
    echo '<p class="card-title text-center fs-5">' . $item['phone'] . '</p>';
    echo '<p class="card-title text-center fs-5">' . $item['email'] . '</p>';
    echo '<p class="card-title text-center fs-5">' . $item['region'] . '</p>';
    echo '</div></div>';
}
?>



</div>






<div class="parallax"></div>

</main>



<!-- footer -->
<?php include './components/footer.php'; ?> <!-- Include your navbar content here -->

</body>
</html>