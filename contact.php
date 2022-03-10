<?php include_once('./includes/header.php');?>

<?php 
$heading= "CONTACT US";
include('./includes/subheader.php');
?>


<section class="contact_form">
    <div class="container">
        <div class="row no-gutters" style="box-shadow:0 0 10px #dfdfdf">
            <div class="col-md-8">
                <div class="cform">
                    <h3 class="">send us a message</h3>

                    <form action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="">mobile no</label>
                                <input type="number" class="form-control" id="mobile" name="mobile"
                                    placeholder="9876543211">
                            </div>
                            <div class="col-md-6">
                                <label for="">email*</label>
                                <input type="email" required class="form-control" id="email" name="email"
                                    placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="">subject*</label>
                                <select name="sub" required id="sub" class="form-control">
                                    <option value="">Select Subject</option>
                                    <option value="ENQUIEY">I have an enquiry</option>
                                    <option value="FEEDBACK">I want to share feedback</option>
                                    <option value="HELP">I have a problem</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="">write your message*</label>
                                <textarea required name="msg" id="msg" class="form-control" cols="30"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <hr>
                        <button type="sumbit" name="btnsend" id="btnsend" class="btn btnsend"><i
                                class="far fa-paper-plane"></i></button>
                    </form>



                </div>
            </div>
            <div class="col-md-4">
                <div class="contact_info">
                    <div class="iconcontct">
                        <i class="fas fa-school"></i>

                    </div>
                    <h4>contact information</h4>
                    <div class="contactbox">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Near Canal Bridge, Raikot Road, Jagraon, Pin: 142026</p>
                    </div>
                    <div class="contactbox">
                        <i class="fas fa-mobile-alt fa-2x"></i>
                        <p>+917527070007 </p>
                    </div>
                    <div class="contactbox">
                        <i class="far fa-envelope-open fa-2x"></i>
                        <p>info@theunirise.com</p>
                    </div>
                    <hr>
                    <ul class="social c_social">
                        <li><a target="_blank" href="https://api.whatsapp.com/send?phone=+917527070007&amp;text=hi"><svg
                                    class="svg-inline--fa fa-whatsapp fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                    </path>
                                </svg><!-- <i class="fab fa-whatsapp"></i> Font Awesome fontawesome.com --></a></li>
                        <li><a href="mailto:info@theunirise.com"><svg class="svg-inline--fa fa-google fa-w-16"
                                    aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                                    </path>
                                </svg><!-- <i class="fab fa-google"></i> Font Awesome fontawesome.com --></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/theunirise/"><svg
                                    class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                    </path>
                                </svg><!-- <i class="fab fa-facebook"></i> Font Awesome fontawesome.com --></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.5944465601942!2d75.49112881464633!3d30.757891391471713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39109cfd2b038c71%3A0xc33d4e0ada8d1551!2sThe%20Unirise%20World%20School!5e0!3m2!1sen!2sin!4v1638247568046!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


<?php include_once('./includes/footer.php');?>