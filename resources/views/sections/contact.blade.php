<!-- Contact Us Section Start -->
<div class="contact-us" id="contact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-5">
                <!-- Contact Sidebar Start -->
                <div class="contact-sidebar wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Contact Info Start -->
                    <div class="contact-info">
                        <div class="icon-box">
                            <img src="/builtup/images/icon-phone.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <p>call us for enquiry</p>
                            <h3>+91 8770377846</h3>
                        </div>
                    </div>
                    <!-- Contact Info End -->

                    <!-- Contact Info Start -->
                    <div class="contact-info">
                        <div class="icon-box">
                            <img src="/builtup/images/icon-mail.svg" alt="">
                        </div>
                        <div class="contact-info-content">
                            <p>write to us</p>
                            <h3>hi@housebhopal.com</h3>
                        </div>
                    </div>
                    <!-- Contact Info End -->

                    <!-- Contact Info Image Start -->
                    <div class="contact-info-image">
                        <figure>
                            <img src="/builtup/images/contact-info-img.png" alt="">
                        </figure>
                    </div>
                    <!-- Contact Info Image End -->
                </div>
                <!-- Contact Sidebar End -->
            </div>

            <div class="col-lg-8 col-md-7">
                <!-- Contact Form start -->
                <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with us</h2>
                    </div>
                    <!-- Section Title End -->

                    <form id="contactForm" method="POST" data-toggle="validator" netlify>
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Enter Your name" required="">
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="Phone number" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                {{-- query --}}
                                <select name="query" class="form-control" id="query" required="">
                                    <option value="">Select Query</option>
                                    <option value="House Construction">House Construction</option>
                                    <option value="House Renovation">House Renovation</option>
                                    <option value="Free Consultation">Free Consultation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <textarea name="msg" class="form-control" id="msg" rows="3" placeholder="Message" required=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default">submit</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form end -->
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const handleSubmit = event => {
            event.preventDefault();

            const myForm = event.target;
            const formData = new FormData(myForm);

            fetch("/", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: new URLSearchParams(formData).toString()
                })
                .then(() => {
                    myForm.reset();

                    Swal.fire({
                        title: 'Success!',
                        text: 'Your message has been sent successfully.',
                        icon: 'success',
                        confirmButtonText: 'Okay',
                        confirmButtonColor: 'var(--primary-color)',
                        iconColor: 'var(--accent-color)'
                    })
                })
                .catch(error => alert(error));
        };



        document.querySelector("form").addEventListener("submit", handleSubmit);
    </script>
@endpush
