<?php
include('session.php');
$_SESSION['Page'] = 'home';
include('header.php');
?>

<!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="banner-image">

    </div>
    <div class="banner-content">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-lg-4 mb-3 title">We Are <span class="typed-text"></span><span class="cursor">&nbsp</span></h3>
                    <p>508 Bytes is a company driven by the pursuit of the dreams. We want to bring you with us on
                        our journey</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn button-style" href="about.php">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <img class="img-fluid" src="assets/images/bann1.png" alt=" ">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->

<!-- about section -->
<div class="w3l-content-photo-5 py-5">
    <div class="container py-lg-5 py-4">
        <div class="row align-items-center">
            <div class="col-md-6 content-photo order-md-first order-last">
                <a href="#image"><img src="assets/images/home-ab.png" class="img-fluid" alt="content-photo"></a>
            </div>
            <div class="col-md-6 content-left mb-md-0 mb-5 pl-lg-5 order-md-last order-first">
                <h3 class="mb-3">Welcome To Our Company</h3>
                <p>We Develop Web Based Applications, Mobile Application and Cross Platform Applications</p>
                <p class="mt-3">We are working with all popular Cloud Platforms like AWS, OCI, Google and Azure.
                </p>
                <a class="btn button-style mt-lg-5 mt-4" href="about.php">Learn More </a>
            </div>
        </div>
    </div>
</div>
<!-- //about section -->

<!-- team with text section -->
<!-- <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container">
                <div class="mx-auto text-center mb-sm-5 mb-4" style="max-width:800px">
                    <h3 class="title-main-2 text-center mx-auto mb-sm-4 mb-2" style="max-width:600px"> WE LEAD AND
                        SUPPOURT OUR CUSTOMER'S FOCUSED</h3>
                    <p class="sub-para-style">We developed a unique method of Web Applications and Andrioid
                        Applications; this approach gives you complete control over the process. We believe in quality
                        and that explains our ongoing relationship with number of firms, and their repeated trust in us.
                        We work very closely with our partner teams to be able to propose the best Technology roadmaps
                        to our customers.</p>
                </div>
                <div class="row justify-content-center pt-lg-2">
                    <div class="col-md-4 col-sm-6  mt-sm-0 mt-4">
                        <div class="position-relative">
                            <img src="assets/images/mohan-472.jpg" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.php">Pallapu Venakata Mohan </a></h4>
                                <p>Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-sm-0 mt-4">
                        <div class="position-relative">
                            <img src="assets/images/venkat.jpg" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.php">Rajamandri Venkata Durga Rao</a></h4>
                                <p>Dev Ops</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-md-0 mt-4">
                        <div class="position-relative">
                            <img src="assets/images/ganesh 1.jpg" class="img-responsive" alt="content-photo">
                            <div class="text-position">
                                <h4><a href="about.php">Jalumuri Sai Ganesh</a></h4>
                                <p>Database Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- //team with text section -->

<!-- features section -->
<section class="features-section pt-5" id="work">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 right-wthree-img align-self order-lg-last order-first">
                <div class="row text-center">
                    <div class="col-sm-4 col-6 icon-text-style">
                        <i class="lni lni-azure icon-color"></i>
                        <p>Microsoft Azure</p>
                    </div>
                    <div class="col-sm-4 col-6 icon-text-style">
                        <i class="fa-brands fa-aws icon-color"></i>
                        <p>Amazon Web Services</p>
                    </div>
                    <div class="col-sm-4 col-6 icon-text-style  border-right-0">
                        <i class="fab fa-asymmetrik icon-color"></i>
                        <p>Google Cloud</p>
                    </div>
                    <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                        <i class="fa-solid fa-cloud icon-color"></i>
                        <p>Oracle Cloud</p>
                    </div>
                    <div class="col-sm-4 col-6 icon-text-style icon-text-style-2">
                        <i class="fa-brands fa-node-js icon-color"></i>
                        <p>Node JS</p>
                    </div>
                    <div class="col-sm-4 col-6 icon-text-style icon-text-style-2 border-right-0">
                        <i class="fa-brands fa-react icon-color"></i>
                        <p>React JS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //features section -->

<!-- blog section -->

<!-- testimonials section -->
<section class="w3l-clients py-5" id="testimonials">
    <div class="container py-md-5 py-4">
        <div class="text-center mb-sm-5 mb-4">
            <h3 class="title-big">Core Technical Areas</h3>
        </div>
        <div id="owl-demo2" class="owl-carousel owl-theme pb-5">
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Cloud & Infrastructure</q>
                        </blockquote>
                        <p>Microsoft Azure, Google Cloud, Oracle Cloud Infrastructure, Amazon Web Service, DevOps
                            Tools Configuration and Support of All Above infrastructures.</p>
                    </div>
                    <!-- <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/ganesh 1.jpg" class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Jalumuri Sai Ganesh</h3>

                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Application Migration and <br> Hosting</q>
                        </blockquote>
                        <p>We Migrate Applications on various platforms using DevOps Tools and also Providing
                            Hosting support on all Hosting platforms</p>
                    </div>
                    <!-- <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/teja.jpg" class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Sarika Teja Surendra</h3>

                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Web & Mobile Application <br> Development</q>
                        </blockquote>
                        <p>Web & Mobile Application Development using trending technologies like Node JS, React JS,
                            Django, Flutter, Angular JS</p>
                    </div>
                    <!-- <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/venkat.jpg" class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Rajamandri Vekata Durga Rao</h3>

                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="testimonial-content">
                    <div class="testimonial">
                        <blockquote>
                            <q>Web Based ERP Solutions </q>
                        </blockquote>
                        <p>We Developed Web Based ERP Solutions to various Cooperative Sectors Like District
                            Cooperative Marketing Societies (DCMS), Primary Agricultural Cooperative Societies
                            (PACS), Employees Cooperative Credit Societies (ECCS) and others </p>
                    </div>
                    <!-- <div class="bottom-info mt-4">
                        <a class="comment-img" href="#url"><img src="assets/images/shiva2.jpg" class="img-responsive" alt="placeholder image"></a>
                        <div class="people-info align-self">
                            <h3>Rajamandri Hanumanthu</h3>
                            <h3>Jonnada Siva Naga</h3>
                        </div>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //testimonials section -->

<!-- 3 grids -->
<section class="w3l-features-4">
    <div class="features4-block text-center py-5">
        <div class="container py-md-5 py-3">
            <div class="row features4-grids justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="features4-grid">
                        <div class="feature-images">
                            <span class="fas fa-business-time icon-color" aria-hidden="true"></span>
                        </div>
                        <h5><a href="contact.php">1. Planning & Research</a></h5>
                        <p style="text-align:left;">The purpose of research is to discover answers to questions through its application in a business model, to gain familiarity with a phenomenon, or to achieve new insights into it.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-2">
                    <div class="features4-grid">
                        <div class="feature-images">
                            <span class="fas fa-laptop-code icon-color" aria-hidden="true"></span>
                        </div>
                        <h5><a href="contact.php">2. Optimizing</a></h5>
                        <p style="text-align:left;">Effective business process management (BPM) requires a well-thought-out plan that addresses the ongoing needs for process definition, execution, evaluation, and iteration. At its core is business process improvement and optimization—an operational practice focused on identifying, evaluating, and resolving business process issues and challenges.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-2">
                    <div class="features4-grid">
                        <div class="feature-images">
                            <span class="fas fa-clipboard-check icon-color" aria-hidden="true"></span>
                        </div>
                        <h5><a href="contact.php">3. Result</a></h5>
                        <p style="text-align:left;">Finally, we develop customer-friendly web and mobile applications based on various business models, tailored to meet customer needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 3 grids -->

<!-- promocode section -->
<section class="w3l-promocode">
    <div class="promo-block py-5">
        <div class="container py-md-5 py-4">
            <div class="row aap-4-section">
                <div class="col-lg-6 app4-right-image">
                    <img src="assets/images/mobile.png" class="img-fluid" alt="App Device" />
                </div>
                <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-5">
                    <h4>Building Natively Complied Multi-platform applications using flutter</h4>
                    <ul>
                        <li class="mb-3">
                            <span class="mr-3 fas fa-check-circle icon-color" aria-hidden="true"></span>
                            Conceptualization and Strategy: Working with Clients to define the app's purpose, targer audience and key features.
                        </li>
                        <li class="mb-3">
                            <span class="mr-3 fas fa-check-circle icon-color" aria-hidden="true"></span>
                            UI/UX Design: Creating intuitive and engaging user interfaces that provide a seamless user experience.
                        </li>
                        <li class="mb-3"><span class="mr-3 fas fa-check-circle  icon-color" aria-hidden="true"></span>
                            Native and Cross-Platform Development: Building high-performance native apps or cost-effective cross-plotform apps using frameworks like React Native or Flutter.
                        </li>
                        <li class="mb-3"><span class="mr-3 fas fa-check-circle icon-color" aria-hidden="true"></span>
                            Testing and Deployment: Ensuring the app is bug-free and performs well before launching it on app stores.
                        </li>
                        <!-- <li class="mb-3"><span class="mr-3 fas fa-check-circle icon-color" aria-hidden="true"></span>
                            Maintenance and Updates: Offering post-launch support and updates to keep the app relevant and functional.
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //promocode section -->
<!-- about2 section -->
<!-- <section class="w3l-about2 py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 about-2-secs-right">
                <img src="assets/images/mobile.png" alt="" class="img-fluid img-responsive" />
            </div>
            <div class="col-lg-6 about-2-secs pl-lg-5 mb-lg-0 mb-4">
                <h3 class="title-big">Building Natively Complied Multi-platform applications using flutter</p>
                <ul>
                    <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Cloud &
                        Infrastructure</li>
                    <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Application Migration
                        and Hosting </li>
                    <li><span class="fas fa-check-circle  icon-color" aria-hidden="true"></span>Web & Mobile
                        Application Development</li>
                    <li><span class="fas fa-check-circle icon-color" aria-hidden="true"></span>Web based ERP
                        Solutions</li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- //about2 section -->


                <?php
                include('footer.php');
                ?>