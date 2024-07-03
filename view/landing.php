<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Partner | Hire a developer for your project</title>

    <link rel="icon" href="images/project-sathi-logo-sm.png" type="image/x-icon">
    <link rel="stylesheet" href="design/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="design/bootstrap/base-style.css">
    <style>
        /* GLOBAL STYLES  */

        body {
            padding-top: 3rem;
            color: rgb(var(--bs-tertiary-color-rgb));
        }


        #home {
            background: url("images/banner2.png");
            background-size: cover;
            background-position: center;
            height: 94vh;
        }


        /* MARKETING CONTENT */

        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }


        /* Featurettes */

        .featurette-divider {
            margin: 5rem 0;
        }
        .featurette-heading {
            letter-spacing: -.05rem;
        }

        /* RESPONSIVE CSS */

        @media (min-width: 40em) {

            .featurette-heading {
                font-size: 50px;
            }

        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }
    </style>
</head>
<script src="https://kit.fontawesome.com/cbeb993ef9.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const video = document.querySelector('video');

        // Try to play the video
        video.play().catch(() => {
            // If play fails, mute the video and try to play again
            video.muted = true;
            video.play();
        });

        // Ensure autoplay and loop by listening to the end event
        video.addEventListener('ended', () => {
            video.currentTime = 0;
            video.play();
        });
    });

</script>

<body>

<?php include 'common/landing-nav.php'; ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="validationServer01" class="form-label">First name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServer02" class="form-label">Last name</label>
                            <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationServerUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationServer03" class="form-label">City</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationServer04" class="form-label">State</label>
                            <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                <option selected disabled value="">Choose...</option>
                                <option>...</option>
                            </select>
                            <div id="validationServer04Feedback" class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationServer05" class="form-label">Zip</label>
                            <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                <label class="form-check-label" for="invalidCheck3">
                                    Agree to terms and conditions
                                </label>
                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="home"></div>

<div class="container py-5" id="about">

    <div class="pb-4 py-5 my-5 text-center">
        <h1 class="display-5 text-body-emphasis">Welcome To Project Sathi</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Project Sathi a reliable companion by your side, someone who understands your
                vision, shares your goals, and supports you every step of the way.</p>
        </div>
    </div>


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-truck-fast text-body-secondary flex-shrink-0 me-3 fs-4"></i>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Fast Development</h3>
                <p>We develop your project as fast as possible. Deadline is near, seek for us.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-handshake-angle text-body-secondary flex-shrink-0 me-3 fs-4"></i>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Help You In Need</h3>
                <p>If you don't have any idea about your university project then hire us. we will do it for you!</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-hand-holding-dollar text-body-secondary flex-shrink-0 me-3 fs-4"></i>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Cost Effective</h3>
                <p>Develop your project at low cost. It may vary according to project complexity.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <i class="fa-solid fa-book-open-reader text-body-secondary flex-shrink-0 me-3 fs-4"></i>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Project Case Studies</h3>
                <p>Access detailed documentation and analysis of previous projects to learn best practices and avoid
                    common pitfalls.</p>
            </div>
        </div>
    </div>

    <div class="px-4 my-5 text-center">
        <div class="overflow-hidden">
            <div class="container px-5">
                <video class="img-fluid" controls autoplay muted loop>
                    <source src="images/ProjectSathi-intro.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>


</div>

<div class="base-primary text-white py-5" id="service">
    <div class="container col p-3">
        <div class="display-6 my-3">Our Services</div>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">
                    Custom Software Development
                </h2>
                <ul class="lead p-3">
                    <li>Front-End Development: Creating responsive and dynamic user interfaces using HTML, CSS,
                        JavaScript, and Bootstrap.</li>
                    <li>Back-End Development: Building robust server-side applications with PHP, Spring Boot, and
                        integrating MySQL and PostgreSQL databases.</li>
                    <li>Full-Stack Development: Providing end-to-end development services that cover both front-end
                        and back-end aspects.</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img class="img-fluid mx-auto rounded-5" width="500"
                     height="500" src="images/Development.png" alt="development-image">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">Website Design and Development</h2>
                <p class="lead p-3">
                    Crafting visually appealing and functional websites tailored to your needs.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid mx-auto rounded-5" width="500"
                     height="500" src="images/Design.png" alt="design-image">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Integration Services</h2>
                <ul class="lead p-3">
                    <li>API Development and Integration: Developing and integrating APIs to enable seamless data
                        exchange between systems.</li>
                    <li>Third-Party Integrations: Integrating with popular third-party services and tools to extend
                        the functionality of your applications.</li>
                </ul>
            </div>
            <div class="col-md-5">
                <img class="img-fluid mx-auto rounded-5" width="500"
                     height="500" src="images/Integration.png" alt="integration-image">
            </div>
        </div>
    </div>
</div>
<div class="container px-4 py-5" id="icon-grid">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">HTML</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">CSS</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">JS</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Bootstrap</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Java</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">PHP</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Postgresql</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">MySQL</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Git</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Spring Boot</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Payment Integration</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
            <div>
                <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Composer</h3>
                <p>Paragraph of text beneath the heading to explain the heading.</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5" id="feature">
    <div class="container px-4">
        <h2 class="display-6 my-3">Why Choose Project Sathi</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <img src="images/design-customization.png"
                     class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                     loading="lazy">
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="list-group-item list-group-item-action my-3">
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">User-Centric Design</h3>
                            </div>
                        </div>
                        <p class="mb-1">ProjectSathi is designed with the user in mind. Its intuitive interface
                            ensures that team members of all technical levels can navigate and utilize its features
                            effectively.</p>
                    </div>
                    <div class="list-group-item list-group-item-action my-3">
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <i class="fa-regular fa-comment"></i>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">Seamless Collaboration</h3>
                            </div>
                        </div>
                        <p class="mb-1">Collaboration is at the core of ProjectSathi. With features like real-time
                            messaging, collaborative document editing, and easy file sharing, it ensures that team
                            members can work together seamlessly, no matter where they are.</p>
                    </div>
                    <div class="list-group-item list-group-item-action my-3">
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">Adaptability and Customization</h3>
                            </div>
                        </div>
                        <p class="mb-1">Every project is unique, and ProjectSathi is built to adapt.
                            Its highly customizable features allow you to tailor the platform to suit your specific
                            project needs.
                            Whether you're developing university project or organizing a simple event, ProjectSathi
                            can be configured to match your workflow and processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="base-primary text-white p-5">
    <div class="d-flex justify-content-center">
        <span class="fs-3 me-4">If you have any query relating hiring us.. we are available 24/7</span>
        <a class="btn btn-light ms-4 rounded-5" href="#"><span class="p-2">Contact Us</span></a>
    </div>
</div>

<div class="container my-5 p-5" id="project">
    <h3 class="display-6 my-3">Popular Projects</h3>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div
                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#toggles2" />
                </svg>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">CyberCafe</h3>
                <p><span class="badge rounded-pill text-bg-secondary">Html, Css, Js, Bootstrap, PHP, MySQL</span></p>
                <p>A Cafe Management System where cafe can customize their menus, add promocode, view order and transaction made by customer.
                    Customer can scan QR for Menu then make order by adding food items to cart and make payment accordingly.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div
                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#cpu-fill" />
                </svg>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Open Mic Hub</h3>
                <p><span class="badge rounded-pill text-bg-secondary">Html, Css, Js, Bootstrap, PHP, MySQL</span></p>
                <p>An Artist Hiring System where client can book or hire an artist for their events by paying pre booked ammount. Artist can register and make their profile. More features..</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div
                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#tools" />
                </svg>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">Sajilo Yatra</h3>
                <p><span class="badge rounded-pill text-bg-secondary">Html, Css, Js, Bootstrap, PHP, MySQL</span></p>
                <p>A Tour and Travel Website where you can make plans, booked pakages which suits your plan. Admin can manages Packages and tour category and plans.</p>
            </div>
        </div>

        <div class="col d-flex align-items-start">
            <div
                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#toggles2" />
                </svg>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">SahaYatri</h3>
                <p><span class="badge rounded-pill text-bg-secondary">Html, Css, Js, Bootstrap, PHP, MySQL</span></p>
                <p>An ecommerce Website where cafe can customize their menus, add promocode, view order and transaction made by customer.
                    Customer can scan QR for Menu then make order by adding food items to cart and make payment accordingly.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div
                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#cpu-fill" />
                </svg>
            </div>
            <div>
                <h3 class="fs-2 text-body-emphasis">BookPlay</h3>
                <p><span class="badge rounded-pill text-bg-secondary">Html, Css, Js, Bootstrap, PHP, MySQL</span></p>
                <p>A Footsal Booking System where cafe can customize their menus, add promocode, view order and transaction made by customer.
                    Customer can scan QR for Menu then make order by adding food items to cart and make payment accordingly.</p>
            </div>
        </div>
    </div>
</div>

<div class="base-primary text-white" id="contact">
    <div class="container">
        <div class="row my-5 py-5 rounded-3">
            <div class="col-sm-6 text-center">
                <img class="img-fluid my-3 h-25" src="images/project-sathi-logo-sm.png" alt="Project Sathi Logo">
                <h1>Discuss On Project</h1>
                <p class="fs-6">
                    Don't worry about the project, we are here to help you. Just discuss with us and we will provide
                    you the best solution. Leave your message here.
                </p>
            </div>
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email
                            address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                        <div id="emailHelp">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSubject1" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="exampleInputSubject1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputMessage1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleInputMessage1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 py-4" id="team">
    <h3 class="display-6 my-3">Our Team</h3>
    <div class="row text-center py-4">
        <div class="col border m-2 p-3 rounded">
            <img src="images/dhiraj.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Dhiraj Jirel</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>jireldhiraj123@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/pasang.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Pasang Gelbu Sherpa</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>pasanggelbu23@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/utsab.JPG" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Utsab Dahal</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, SpringBoot, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>utsab2120@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
        <div class="col border m-2 p-3 rounded">
            <img src="images/chitra.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <div class="card-body">
                <h5 class="card-title mt-3">Chitra Prasad Arachrya</h5>
                <h6 class="card-subtitle text-body-secondary my-3">Bootstrap, PHP, MySQL, Angular, Java</h6>
                <span><i class="fa-solid fa-envelope"></i> <small>abisal8374@gmail.com</small></span>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>

<div class="container my-5 p-3" id="blog">

    <div class="my-3">
        <h3 class="display-6 my-3">Our Latest Blog</h3>
        <div class="row mb-2 py-5">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">PHP & MySQL</strong>
                        <h3 class="mb-0">How to do MVC project in PHP and MySQL</h3>
                        <div class="mb-1 text-body-secondary">June 12, 2024</div>
                        <p class="card-text mb-auto">Creating an MVC (Model-View-Controller) project in PHP and MySQL involves structuring your application to separate the business logic, data access, and user interface.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="images/mvc-project-in-php-and-mysql.png" alt="mvc-project-in-php-and-mysql" width="200" height="250">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Angular</strong>
                        <h3 class="mb-0">How to setup Angular for beginner | step by step guide</h3>
                        <div class="mb-1 text-body-secondary">June 20, 2024</div>
                        <p class="mb-auto">
                            Setting up Angular for the first time can be quite straightforward if you follow the steps carefully. Angular is a platform and framework for building single-page client applications using HTML, CSS, and JavaScript/TypeScript.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" src="images/set-up-angular-beginner-step-by-step-guide.png" alt="set-up-angular-beginner-step-by-step-guide" width="200" height="250">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php include 'common/landing-footer.php'; ?>




</body>
<script src="design/bootstrap/bootstrap.bundle.min.js"></script>

</html>