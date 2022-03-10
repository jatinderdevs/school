<footer data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <img src="./images/logo1.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="contacttxt">
                    <h5>contacts</h5>
                    <ul class="footul">
                        <li><i class="fas fa-phone-alt"></i><a href="#">+91 9874567585</a></li>
                        <li><i class="fas fa-envelope"></i><a href="#">abc@gmail.com</a></li>
                        <li><i class="fas fa-map"></i><a href="#"> Near Canal Bridge, Raikot Road, Jagraon, Pin: 142026
                            </a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-2">
                <div class="contacttxt">
                    <h5>explore</h5>
                    <ul class="footul">
                        <li><i class="fas fa-chevron-right"></i><a href="#">home</a></li>
                        <li><i class="fas fa-chevron-right"></i><a href="#">about us</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> academics </a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>infrastructure</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>byond academics</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftheunirise%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=645773569619424"
                    width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                <br> <br>
                <ul class="social d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href=""><i class="fab fa-google"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                </ul>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <button type="button" hidden id="btnpopup" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open modal
    </button>

</footer>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<script src="./js/navigation.js"></script>
<script src="./js/all.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script>
$(document).ready(function() {
  
   

});

$(window).on('load', function() {
    $(".loader").hide();

    setTimeout(function() {
        document.getElementById("btnpopup").click();
    },5000);
});
</script>


</html>