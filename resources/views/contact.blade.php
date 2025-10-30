@extends('partials.layout')

@section('title', 'Contact')

@section('content')

    <!-- Hero section Start -->
    <section
            class="quanto-hero-section section-padding-bottom overflow-hidden"
    >
        <div class="container custom-container">
            <div class="row g-4">
                <div class="col-lg-12 col-xxl-11">
                    <div
                            class="quanto-hero-common__content move-anim"
                            data-delay="0.45"
                    >
                        <h1 class="title">Just a message away!</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section End -->

    <!-- Map section Start -->
    <div class="quanto-map-area style-2 overflow-hidden">
        <div class="container custom-container position-relative">
            <a href="#quanto-contact-section" class="scroll-down section-link">
                Scroll down
                <img
                        src="./assets/images/icons/scroll-down.svg"
                        alt="Scroll down"
                />
            </a>
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206544.9526618687!2d-115.22223774511413!3d36.013824496783386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c9ae1f5f4291%3A0xef1b2a38ca2061b5!2sHenderson%2C%20NV!5e0!3m2!1sen!2sus!4v1761794610497!5m2!1sen!2sus"
                            width="600"
                            height="800"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="d-block w-100"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Map section End -->

    <!-- Contact section Start -->
    <section
            id="quanto-contact-section"
            class="quanto-contact-section bg-color-white section-padding-top-bottom"
    >
        <div class="container custom-container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6 col-xxl-5">
                    <div class="quanto-contact__content">
                        <h3 class="title">Let’s collaborate!</h3>
                        <p>
                            Whether you’re looking for a full time engineer,
                            or for contract work, reach out for a conversation!
                        </p>
                        <div class="address">
                            <h6>Address:</h6>
                            <span>
                      Henderson, NV 89002
                    </span>
                        </div>
                        <div class="contact-info">
                            <h5>
                                <a href="mailto:ajsimon1984@gmail.com"
                                >ajsimon1984@gmail.com</a
                                >
                            </h5>
                            <a href="tel:+19518925183">+19518925183</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-6">
                    <form
                            action="{{ route('contact.form') }}"
                            class="quanto-contact__form"
                            autocomplete="off"
                    >
                        <div class="row g-3 g-xl-4">
                            <div class="col-md-6">
                                <input
                                        type="text"
                                        name="name"
                                        placeholder="Your name"
                                        required
                                        class="form-control"
                                        pattern="[A-Za-z\s]+"
                                        title="Please enter only alphabets and spaces"
                                />
                            </div>
                            <div class="col-md-6">
                                <input
                                        type="text"
                                        name="company"
                                        placeholder="Company name"
                                        class="form-control"
                                />
                            </div>
                            <div class="col-12">
                                <input
                                        type="email"
                                        name="email"
                                        placeholder="Enter your e-mail address"
                                        required
                                        class="form-control"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        title="Please enter a valid email address"
                                />
                            </div>
                            <div class="col-12">
                                <input
                                        type="text"
                                        name="subject"
                                        placeholder="What is the subject of your query?"
                                        class="form-control"
                                />
                            </div>
                            <div class="col-12">
                      <textarea
                              name="message"
                              rows="6"
                              placeholder="Describe about your project"
                              class="form-control"
                      ></textarea>
                            </div>
                            <div class="col-12 mt-5">
                                <button class="quanto-link-btn btn-pill">
                                    Submit
                                    <span>
                          <i class="fa-solid fa-arrow-right arry1"></i>
                          <i class="fa-solid fa-arrow-right arry2"></i>
                        </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section End -->

@endsection
