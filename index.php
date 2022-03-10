<?php include_once('./includes/header.php');?>
<div class="modal" style="position:fixed; z-index:999999" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">



            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="btn float-right btn-secondary" data-dismiss="modal">x</button>
                <div class="clearfix"></div>
                <div class="cform">
                    <h3 class="">Send us a Message</h3>

                    <form action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="">mobile no*</label>
                                <input type="text" required class="form-control" id="mobile" name="mobile"
                                    placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="">email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="">subject*</label>
                                <select name="sub" required id="sub" class="form-control">
                                    <option value="">Select Subject</option>
                                    <option value="">I have an enquiry</option>
                                    <option value="">I want to share feedback</option>
                                    <option value="">I have a problem</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="">write your message*</label>
                                <textarea required name="msg" id="msg" class="form-control" cols="30"
                                    rows="4"></textarea>
                            </div>
                        </div>
                        <hr>
                        <button type="sumbit" class="btn btnsend"><i class="far fa-paper-plane"></i></button>
                    </form>



                </div>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>
<section class="banner">
    <div class="container-fluid">
        <div class="row">

            <div id="carouselExampleSlidesOnly" style="width:100%;" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.theunirise.com/images/slider/27.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.theunirise.com/images/slider/bhangra.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.theunirise.com/images/slider/27.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features  ">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-6 col-6">
                        <div class="fbox redflag">
                            <div class="icon">
                                <img src="./images/teacher.png" width:"57%"="" alt="">
                            </div>
                            <div class="innertxt">
                                <h6>expert teachers</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maxime beatae sit
                                    totam
                                    distinctio tempore voluptas quae ex similique eveniet.</p>
                            </div>
                            <div class="fadeicon">
                                <svg class="svg-inline--fa fa-school fa-w-20" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="school" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z">
                                    </path>
                                </svg><!-- <i class="fas fa-school"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="fbox greenflag">
                            <div class="icon">
                                <img src="./images/book.png" width:"57%"="" alt="">
                            </div>
                            <div class="innertxt">
                                <h6>quality education</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maxime beatae sit
                                    totam
                                    distinctio tempore voluptas quae ex similique eveniet.</p>
                            </div>
                            <div class="fadeicon">
                                <svg class="svg-inline--fa fa-book-open fa-w-18" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="book-open" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M542.22 32.05c-54.8 3.11-163.72 14.43-230.96 55.59-4.64 2.84-7.27 7.89-7.27 13.17v363.87c0 11.55 12.63 18.85 23.28 13.49 69.18-34.82 169.23-44.32 218.7-46.92 16.89-.89 30.02-14.43 30.02-30.66V62.75c.01-17.71-15.35-31.74-33.77-30.7zM264.73 87.64C197.5 46.48 88.58 35.17 33.78 32.05 15.36 31.01 0 45.04 0 62.75V400.6c0 16.24 13.13 29.78 30.02 30.66 49.49 2.6 149.59 12.11 218.77 46.95 10.62 5.35 23.21-1.94 23.21-13.46V100.63c0-5.29-2.62-10.14-7.27-12.99z">
                                    </path>
                                </svg><!-- <i class="fas fa-book-open"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="fbox yellowflag">
                            <div class="icon">
                                <img src="./images/support.png" width:"57%"="" alt="">
                            </div>
                            <div class="innertxt">
                                <h6>life time support</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maxime beatae sit
                                    totam
                                    distinctio tempore voluptas quae ex similique eveniet.</p>
                            </div>
                            <div class="fadeicon">
                                <svg class="svg-inline--fa fa-headset fa-w-16" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="headset" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                                    </path>
                                </svg><!-- <i class="fas fa-headset"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6">
                        <div class="fbox blueflag">
                            <div class="icon">
                                <img src="./images/scholarship.png" width:"57%"="" alt="">
                            </div>
                            <div class="innertxt">
                                <h6>scholarship</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae maxime beatae sit
                                    totam
                                    distinctio tempore voluptas quae ex similique eveniet.</p>
                            </div>
                            <div class="fadeicon">
                                <svg class="svg-inline--fa fa-user-graduate fa-w-14" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="user-graduate" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M319.4 320.6L224 416l-95.4-95.4C57.1 323.7 0 382.2 0 454.4v9.6c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-9.6c0-72.2-57.1-130.7-128.6-133.8zM13.6 79.8l6.4 1.5v58.4c-7 4.2-12 11.5-12 20.3 0 8.4 4.6 15.4 11.1 19.7L3.5 242c-1.7 6.9 2.1 14 7.6 14h41.8c5.5 0 9.3-7.1 7.6-14l-15.6-62.3C51.4 175.4 56 168.4 56 160c0-8.8-5-16.1-12-20.3V87.1l66 15.9c-8.6 17.2-14 36.4-14 57 0 70.7 57.3 128 128 128s128-57.3 128-128c0-20.6-5.3-39.8-14-57l96.3-23.2c18.2-4.4 18.2-27.1 0-31.5l-190.4-46c-13-3.1-26.7-3.1-39.7 0L13.6 48.2c-18.1 4.4-18.1 27.2 0 31.6z">
                                    </path>
                                </svg><!-- <i class="fas fa-user-graduate"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div data-aos="fade-up" class="news_updates">
                    <div class="element_icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="news_header">
                        <h6>news and updates</h6>
                    </div>
                    <div class="news_body">
                        <marquee scrollamount="2" direction="up" height="350" onmouseover="this.stop()"
                            onmouseout="this.start()">
                            <div class="notification">
                                <a
                                    href="https://www.theunirise.com/files/DateSheets/Date Sheet of Half yearly Examination, Nur to UKG.pdf"><b>Half
                                        yearly Examinations </b></a>
                                <p class="notice_content">Half yearly Examination, Nursery to UKG</p>

                            </div>

                            <div class="notification">
                                <a
                                    href="https://www.theunirise.com/files/DateSheets/Date Sheet of Half yearly Examination, Nur to UKG.pdf"><b>Half
                                        yearly Examinations </b></a>
                                <p class="notice_content">Half yearly Examination, Nursery to UKG</p>

                            </div>
                            <div class="notification">
                                <a
                                    href="https://www.theunirise.com/files/DateSheets/Date Sheet of Half yearly Examination, Nur to UKG.pdf"><b>Half
                                        yearly Examinations </b></a>
                                <p class="notice_content">Half yearly Examination, Nursery to UKG</p>

                            </div>

                        </marquee>
                    </div>
                    <div class="news_footer">
                        <small><i class="far fa-clock"></i> last update: 25 Nov 2021</small>
                    </div>
                </div>
            </div>




        </div>
</section>
<section class="about">
    <div class="rocket">
        <img src="./images/rocket.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div data-aos="fade-up" class="abouttxt ">
                    <h3>We Are The Best Choice <br> For Your Child</h3>
                    <p> The Unirise World School owes its inception to the vision of its founders that focuses on a
                        technology driven, happy and encouraging learning environment. The school aims to chisel the
                        domain of age appropriate wisdom in children giving them opportunity to identify the set of
                        right goals to be produced in right direction...</p>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="aboutus.php" class="btnabout">read more</a>

                        </div>
                        <div class="col">
                            <a href="" class="btnabout">contact us</a>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div data-aos="flip-left" class="mainaboutimg">
                    <img src="./images/about1.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </div>
</section>
<section class="staff ">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="gallerytxt ">
                    <h3>our <br> Staff</h3>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. tenetur dicta voluptates cupiditate</p>
                    <a href="staff.php" class="btnabout">explore more</a>
                </div>

            </div>
            <div class="col-md-9">
                <div id="staff" data-aos="fade-up" class="owl-carousel owl-theme ">
                    <div class="item">
                        <div class="staffbox">
                            <div class="layer">
                                <p> here you can write about the qualification of teachers and experience in
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, quisquam.</p>
                            </div>
                            <div class="staffimg">
                                <img src="images/princi.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="stafftxt">
                                <h5>neha rattan</h5>
                                <span>Principal</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="achievements">
    <div class="layerimg">
        <img src="./images/staffbg.png" class="img-fluid" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="achtxt">
                    <h3>our shining stars</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium magnam
                        , hic atque repudiandae rem iste dolores earum voluptas quis?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium magnam
                        , hic atque repudiandae rem iste dolores earum voluptas quis?</p>
                    <br>
                    <a href="achievements.php" class="btnabout btnwhite">view more</a>

                </div>
            </div>
            <div class="col-md-6">
                <img src="images/award.png" width="44%" class="img-fluid" alt="">

                <!-- <div id="stars" data-aos="fade-up" class="owl-carousel owl-theme ">
                   
                    <div class="item">
                        <div class="star">
                            <img src="https://www.theunirise.com/images/achievements/gursimran.jpg" alt="">

                        </div>
                    </div>
                    <div class="item">
                        <div class="star">
                            <img src="https://www.theunirise.com/images/achievements/gursimran.jpg" alt="">

                        </div>
                    </div>
                    <div class="item">
                        <div class="star">
                            <img src="https://www.theunirise.com/images/achievements/gursimran.jpg" alt="">

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-4">
                <div class="gallerytxt">
                    <h3>photo <br> gallery</h3>
                    <p style="margin-top:20px;margin-bottom:30px;">Lorem ipsum dolor sit amet consectetur, <br>
                        adipisicing elit. tenetur dicta voluptates cupiditate</p>

                    <a href="gallery.php" class="btnabout">view gallery</a>
                </div>

            </div>
            <div class="col-md-8">
                <div class="row" data-aos="fade-down">
                    <div class="col-md-4 col-6 col-sm-4 col-xs-12">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-6 col-sm-4 col-xs-12">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-6 col-sm-4 col-xs-12">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-4  col-6 col-sm-4 col-xs-12 ">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-6 col-sm-4  col-xs-12">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-4  col-6 col-sm-4 col-xs-12">
                        <div class="gimg">
                            <img src="http://html.thememascot.net/2020/education/pidcare/pidcare-html/images/gallery/1.jpg"
                                class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container">
        <div id="testi" data-aos="zoom-in" class="owl-carousel owl-theme">

            <div class="item">
                <div class="testxt">
                    <div class="mainimg">
                        <img src="https://cdn-icons-png.flaticon.com/512/912/912214.png" class="img-fluid" alt="" />
                    </div>
                    <div class="maintxt">
                        <h4> name</h4>
                        <p> <i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim autem corporis qui
                                perspiciatis temporibus id quidem sint optio quos eaque dignissimos expedita quisquam in
                                ipsum vel, voluptatem ullam? Quas ab eum inventore doloribus ipsam earum culpa quis?
                                Pariatur quibusdam nam odit atque. Architecto officiis pariatur, magni illo totam eius
                                explicabo</i></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testxt">
                    <div class="mainimg">
                        <img src="https://cdn-icons-png.flaticon.com/512/912/912214.png" class="img-fluid" alt="" />
                    </div>
                    <div class="maintxt">
                        <h4> name</h4>
                        <p> <i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim autem corporis qui
                                perspiciatis temporibus id quidem sint optio quos eaque dignissimos expedita quisquam in
                                ipsum vel, voluptatem ullam? Quas ab eum inventore doloribus ipsam earum culpa quis?
                                Pariatur quibusdam nam odit atque. Architecto officiis pariatur, magni illo totam eius
                                explicabo</i></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testxt">
                    <div class="mainimg">
                        <img src="https://cdn-icons-png.flaticon.com/512/912/912214.png" class="img-fluid" alt="" />
                    </div>
                    <div class="maintxt">
                        <h4> name</h4>

                        <p> <i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim autem corporis qui
                                perspiciatis temporibus id quidem sint optio quos eaque dignissimos expedita quisquam in
                                ipsum vel, voluptatem ullam? Quas ab eum inventore doloribus ipsam earum culpa quis?
                                Pariatur quibusdam nam odit atque. Architecto officiis pariatur, magni illo totam eius
                                explicabo</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once('./includes/footer.php');?>
<script>
$('#banner').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
})
$('#staff').owlCarousel({
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 3,
            nav: false,
            loop: true
        }
    }
})
$('#testi').owlCarousel({
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
});
$('#stars').owlCarousel({
    loop: true,
    dots: false,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: false,
            loop: true
        }
    }
})
</script>