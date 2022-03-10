<?php include_once('./includes/header.php');?>

<?php
$heading= "ABOUT US";
include('./includes/subheader.php');
?>

<section class="custom_section">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="aboutimg">
                    <img src="images/aboutschool.jpeg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutxt">
                    <h2>about school</h2>
                    <p>
                        The Unirise World School owes its inception to the vision of its founders that focuses on a
                        technology driven, happy and encouraging learning environment. The school aims to chisel the
                        domain of age appropriate wisdom in children giving them opportunity to identify the set of
                        right goals to be produced in right direction. Governed by Aggarwal Group of Institutes, TUWS
                        targets to make each child understand the importance of values and life skills for harmony,
                        synergy and positive approach. From self exploration to experiential learning is what is
                        included in the process of value integrated education. Learning at TUWS is all about holistic
                        enhancement. It's from 'learning with books' to 'learning beyond books'. Nurturing each child to
                        be a soldier of righteousness and strive beyond excellence.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custom_section">
    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="aboutxt">
                    <h2>vision & missions</h2>
                    <strong>education forever for all</strong>
                    <p>
                        [Reach high, for stars lie hidden in your souls. Dream deep, for every dream precedes the
                        goal…..]

                        The vision of the founder trustees, by means of establishing the school, is to ensure complete
                        holistic development of the child, meet and beat the expectation of the parents. The School will
                        focus not only on academics but also on sports, extra –curricular activities, moral education
                        and their responsibility towards the environment and the mother Earth.
                        <span id="dots">...</span>
                        <span id="more" style="display:none !important;">
                            In the vision of the founders the school is developed in a manner that the student learns in
                            a
                            free environment, children are provided freedom to choose their path using guidance of the
                            teachers and counsellors. Students are encouraged to
                            develop sound ethical values and exposing
                            them to modern and technologically driven environment thereby strengthening our rich
                            heritage
                            and developing human potential towards the betterment of society. We will strive to develop
                            amongst the students an understanding and a respect for the rights and responsibilities
                            involved
                            in being a member of the society as well ecological awareness, being citizens of an
                            endangered
                            world.
                        </span>

                        <button type="button" class="btn btn-sm btn-link" id="myBtn" onClick="myFunction()">Read
                            more</button>
                    </p>
                    <strong>mission of the school</strong>
                    <p>Creating an environment which will produce citizens with correct moral values and develop a
                        desire in pupils and teachers to seek excellence. To provide an ideal climate where leaning
                        becomes a joyous process.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutimg">
                    <img src="images/vision.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<script>
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
</script>
<?php include_once('./includes/footer.php');?>