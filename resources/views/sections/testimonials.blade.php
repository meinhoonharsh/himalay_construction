@php
    $testimonials = [
        [
            'image' => '/builtup/images/author-1.jpg',
            'name' => 'Rajesh Sharma',
            'position' => 'Homeowner',
            'review' =>
                'HouseBhopal ne hamara sapna sakar kar diya! Construction quality aur finishing behatareen hai. Puri team highly professional thi. Bahut khush hoon apne naye ghar se.',
            'rating' => 5,
        ],
        [
            'image' => '/builtup/images/author-2.jpg',
            'name' => 'Pooja Verma',
            'position' => 'IT Professional',
            'review' =>
                'I wanted a modern yet budget-friendly home, and HouseBhopal ne bilkul waisa hi ghar bana kar diya! Timely delivery aur top-notch quality!',
            'rating' => 5,
        ],
        [
            'image' => '/builtup/images/author-3.jpg',
            'name' => 'Amit Tiwari',
            'position' => 'Businessman',
            'review' =>
                'Professionalism aur dedication dekhkar bahut accha laga. HouseBhopal ne hamari expectations se badhkar kaam kiya. Strong structure aur stylish interiors!',
            'rating' => 5,
        ],
        [
            'image' =>  '/builtup/images/author-4.jpg',
            'name' => 'Neha Mishra',
            'position' => 'Professor',
            'review' =>
                'Affordable pricing, samay par delivery, aur high-quality materials ka use. Pure process me transparency thi, jo bahut acchi baat hai. Highly recommended!',
            'rating' => 5,
        ],
        [
            'image' => '/builtup/images/author-5.jpg',
            'name' => 'Suresh Yadav',
            'position' => 'Government Employee',
            'review' =>
                'Mujhe durable aur spacious ghar chahiye tha, aur HouseBhopal ne mujhse behtar design propose kiya. Puri family khush hai. Dhanyawad!',
            'rating' => 5,
        ],
    ];

@endphp

<!-- Our Testiminial Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">testimonials</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">What people are saying about us</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                        services, including residential, commercial, and industrial projects.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            @foreach ($testimonials as $testimonial)
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="testimonial-rating">
                                                @for ($i = 0; $i < $testimonial['rating']; $i++)
                                                    <i class="fa-solid fa-star"></i>
                                                @endfor
                                            </div>
                                            <div class="testimonial-content">
                                                <p>{{ $testimonial['review'] }}</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ $testimonial['image'] }}" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>{{ $testimonial['name'] }}</h3>
                                                <p>{{ $testimonial['position'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            @endforeach


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testiminial End -->
