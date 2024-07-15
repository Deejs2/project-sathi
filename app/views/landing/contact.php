<style>
    #contact {
        background-size: cover;
        background: url("/images/banner2.png") center;
        height: 40vh;
    }
</style>

<div id="contact"></div>

<div class="container col-xxl-12 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <form id="contact-us-form" action="/submit-contact-us" method="post" class="row g-3 needs-validation" novalidate>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailError" class="invalid-feedback"></div>
                    <div id="emailHelp">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputSubject1" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputSubject1" required>
                    <div id="subjectError" class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputMessage1" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleInputMessage1" rows="3" required></textarea>
                    <div id="messageError" class="invalid-feedback"></div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="submit-contact-us" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('contact-us-form').addEventListener('submit', function(event) {

        event.preventDefault();
        const formData = new FormData(this);

        fetch('/api/contact-us/submit-contact-us', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'error') {
                    // Clear previous validation states
                    document.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-invalid');
                    });

                    // Apply validation state and display error messages
                    Object.keys(data.errors).forEach(field => {
                        const inputElement = document.getElementsByName(field)[0];
                        const errorElement = document.getElementById(field + 'Error');
                        if (inputElement && errorElement) {
                            inputElement.classList.add('is-invalid');
                            errorElement.textContent = data.errors[field];
                        }
                    });
                } else {
                    alert(data.message);
                    this.reset();
                    document.querySelectorAll('.form-control').forEach(input => {
                        input.classList.remove('is-invalid');
                    });
                }
            })
            .catch(error => console.error('Error:', error));
    });
</script>