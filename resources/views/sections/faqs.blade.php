@php
    $faqs = [
        [
            'question' => 'What services does HouseBhopal offer?',
            'answer' =>
                'HouseBhopal provides complete construction solutions, including home building, renovation, interior designing, and civil works.',
        ],
        [
            'question' => 'How long does it take to build a house?',
            'answer' =>
                'The construction time depends on the project size and design. Generally, a standard home takes 6-12 months to complete.',
        ],
        [
            'question' => 'Can I customize my house design?',
            'answer' => 'Yes, we offer fully customizable home designs to match your preferences and requirements.',
        ],
        [
            'question' => 'Do you provide construction material, or do we need to arrange it?',
            'answer' =>
                'We handle everything, from sourcing high-quality materials to construction, so you don’t have to worry about anything.',
        ],
        [
            'question' => 'Is HouseBhopal affordable?',
            'answer' =>
                'Yes, we offer cost-effective solutions with transparent pricing, ensuring high-quality construction within your budget.',
        ],
        [
            'question' => 'Do you provide construction services only in Bhopal?',
            'answer' =>
                'Currently, we focus on Bhopal and nearby areas, but for larger projects, we can discuss location feasibility.',
        ],
        [
            'question' => 'Do you help with government approvals and legal permissions?',
            'answer' =>
                'Yes, we assist in obtaining necessary approvals, permissions, and clearances for hassle-free construction.',
        ],
        [
            'question' => 'How can I get a quotation for my house construction?',
            'answer' =>
                'You can contact us with your requirements, and our team will provide a detailed cost estimate based on your needs.',
        ],
        [
            'question' => 'What makes HouseBhopal different from other builders?',
            'answer' =>
                'We focus on quality, timely delivery, and transparent pricing while ensuring customer satisfaction at every step.',
        ],
        [
            'question' => 'How can I contact HouseBhopal?',
            'answer' => 'You can reach us via phone, email, or visit our office in Bhopal for a consultation.',
        ],
    ];

    // Select 4 faqs
    $faqs = array_slice($faqs, 0, 4);

@endphp
<!-- Our FAQs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">faqs</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque">Got questions? we've got answers</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction
                        services, including residential, commercial, and industrial projects.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-5">
                <!-- Our FAQs Images Start -->
                <div class="our-faqs-images">
                    <div class="row align-items-end">
                        <div class="col-md-6 col-6">
                            <!-- FAQs Img Start -->
                            <div class="faqs-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/builtup/images/our-faqs-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- FAQs Img End -->
                        </div>
                        <div class="col-md-6 col-6">
                            <!-- FAQs Img Start -->
                            <div class="faqs-img-2">
                                <figure class="image-anime reveal">
                                    <img src="/builtup/images/our-faqs-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- FAQs Img End -->
                        </div>
                    </div>

                    <div class="row align-items-start">
                        <div class="col-md-6 col-6">
                            <!-- FAQs Img Start -->
                            <div class="faqs-img-1">
                                <figure class="image-anime reveal">
                                    <img src="/builtup/images/our-faqs-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- FAQs Img End -->
                        </div>
                        <div class="col-md-6 col-6">
                            <!-- FAQs Img Start -->
                            <div class="faqs-img-2">
                                <figure class="image-anime reveal">
                                    <img src="/builtup/images/our-faqs-img-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- FAQs Img End -->
                        </div>
                    </div>

                    <div class="our-faqs-bulitup">
                        <img src="/builtup/images/logo_white.png" alt="">
                    </div>
                </div>
                <!-- Our FAQs Images End -->
            </div>

            <div class="col-lg-7">
                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="accordion">


                    @foreach ($faqs as $index => $faq)
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="{{ 1.25 + $index * 0.25 }}s">
                            <h2 class="accordion-header" id="heading{{ $index + 5 }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index + 5 }}" aria-expanded="false"
                                    aria-controls="collapse{{ $index + 5 }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index + 5 }}" class="accordion-collapse collapse"
                                aria-labelledby="heading{{ $index + 5 }}" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    @endforeach

                </div>
                <!-- FAQ Accordion End -->
            </div>
        </div>
    </div>
</div>
<!-- Our FAQs Section End -->
