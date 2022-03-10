<?php include_once('./includes/header.php');?>
<link rel="stylesheet" href="css/gallery.css" />
<link rel="stylesheet" href="css/simple-lightbox.css">
<?php 
$heading= "GALLERY IMAGES";
include('./includes/subheader.php');
?>
<section class="images">
    <div class="container">

        <div class="galleryimg">

            <a href="images/playfield.jpg"><img src="images/playfield.jpg" alt="" title="" /></a>
            <a href="images/aboutschool.jpeg"><img src="images/aboutschool.jpeg" alt="" title="" /></a>
            <a href="images/campus.jpg"><img src="images/campus.jpg" alt="" title="" /></a>

            <a href="images/dance.jpg"><img src="images/dance.jpg" alt="" title="" /></a>
            <a href="images/library.jpg"><img src="images/library.jpg" alt="" title="" /></a>
            <a href="images/lab.jpg"><img src="images/lab.jpg" alt="" title="" /></a>
            <div class="clear"></div>
        </div>

    </div>
</section>

<script src="js/simple-lightbox.js"></script>
<script>
(function() {
    var $gallery = new SimpleLightbox('.galleryimg a', {});
})();
</script>


<?php include_once('./includes/footer.php');?>