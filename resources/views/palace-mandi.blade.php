<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palace Mandi | Authentic Arabian Restaurant & Grills</title>
    <meta name="description" content="Experience the finest authentic Arabian Mandi and Grills at Palace Mandi. Traditional taste, premium ingredients, and a royal dining experience in Chennai.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/palace-mandi.css') }}">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
        /* Hero Title & Animations removed - now in external CSS */
        @keyframes heroTitleIn {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav id="navbar">
        <div class="nav-logo" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
            <i class="fas fa-crown" style="font-size: 2.2rem; color: #e5c05c;"></i>
            <div style="display: flex; flex-direction: column;">
                <span style="font-size: 1.5rem; font-weight: 800; letter-spacing: 3px; color: white; line-height: 1;">PALACE MANDI</span>
                <span style="font-size: 0.65rem; color: #e5c05c; letter-spacing: 4px; font-weight: 600; opacity: 0.9; margin-top: 4px;">RESTAURANT | GRILLS</span>
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="tel:+918925524499" class="btn-primary" style="padding: 0.8rem 1.8rem; font-size: 0.8rem; border: 1px solid rgba(255,255,255,0.3);">Enquiry Now</a>
    </nav>

    <!-- Simple Hero Section -->
    <section class="hero-simple" id="home">
        <div class="hero-simple-content">
            <h1 class="hero-simple-title">Palace Mandi</h1>
            <p class="hero-simple-subtitle">Authentic Taste of Arabia</p>
            <div class="hero-simple-actions">
                <a href="tel:+918925524499" class="btn-simple">Enquiry Now</a>
                <a href="#menu" class="btn-simple-outline">View Menu</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-box">
            <div class="about-image">
                <img src="{{ secure_asset('assets/images/about_us.jpg') }}" alt="Palace Mandi Interior">
            </div>
            <div class="about-content">
                <h2 class="section-title">The Legend of Palace Mandi</h2>
                <p>At Palace Mandi, we bring the authentic soul of Arabian cuisine to the heart of Chennai. Our secret lies in the traditional wood-fired pits and the hand-picked spices that have defined Arab hospitality for centuries.</p>
                <p style="margin-top: 1rem;">Every dish we serve is a tribute to heritage, prepared with passion and served with honor. From our signature Lamb Mandi to our expertly seasoned Grills, we ensure every bite is a journey to the Orient.</p>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="menu" id="menu">
        <div class="menu-header">
            <span class="menu-badge">Explore Our Menu</span>
            <h2 class="section-title menu-title">Our Signature Delights</h2>
            <p class="menu-subtitle">Handcrafted with passion, inspired by centuries of Arabian tradition</p>
        </div>
        <div class="swiper menu-swiper" style="padding: 1rem 0.5rem 4rem 0.5rem; margin-top: 2rem;">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <div class="menu-card-img-wrap">
                            <img src="{{ secure_asset('assets/images/hero_mandi.png') }}" alt="Lamb Mandi">
                        </div>
                        <div class="menu-info">
                            <h3>Lamb Mandi</h3>
                            <p>Slow-cooked tender lamb served on a bed of aromatic basmati rice with nuts.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <div class="menu-card-img-wrap">
                            <img src="{{ secure_asset('assets/images/grilled_chicken.png') }}" alt="Chicken Mandhi">
                        </div>
                        <div class="menu-info">
                            <h3>Chicken Mandhi</h3>
                            <p>Flame-grilled succulent chicken marinated in traditional Arabian spices.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <div class="menu-card-img-wrap">
                            <img src="{{ secure_asset('assets/images/kunafa.png') }}" alt="Kunafa">
                        </div>
                        <div class="menu-info">
                            <h3>Golden Kunafa</h3>
                            <p>Crispy pastry layers with melting cheese and sweet rose-scented syrup.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <div class="menu-card-img-wrap">
                            <img src="{{ secure_asset('assets/images/hero_plate.png') }}" alt="Chicken Madhoodh">
                        </div>
                        <div class="menu-info">
                            <h3>Chicken Madhoodh</h3>
                            <p>Charcoal-grilled half chicken served with flavorful smoked mandi rice.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="swiper-slide">
                    <div class="menu-card">
                        <div class="menu-card-img-wrap">
                            <img src="{{ secure_asset('assets/images/barbeque_chicken.png') }}" alt="Barbique Chicken">
                        </div>
                        <div class="menu-info">
                            <h3>Barbique Chicken</h3>
                            <p>A royal platter of assorted premium kebabs and tikkas with garlic sauce.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="menu-header" style="margin-bottom: 1rem;">
            <span class="menu-badge">Google Reviews</span>
            <h2 class="section-title menu-title">What Our Guests Say</h2>
        </div>
        <div class="swiper reviews-swiper" style="padding: 1rem 0.5rem 4rem 0.5rem; margin-top: 2rem;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"Had a mandi and madhooth along with juicy barbecue with family was so delicious its newly opened mandi restaurant at perungudi. Must try 😊"</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">H</div>
                            <div>
                                <div class="author">Hussain Nasar</div>
                                <div class="review-date">a month ago · 3 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"One of the best restaurant with great Ambiance, staff, food. Everything is top class. Must visit place."</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">A</div>
                            <div>
                                <div class="author">Afreed Khan</div>
                                <div class="review-date">a month ago · Local Guide · 16 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"The mandi was perfectly cooked — the rice was flavorful, aromatic, and light, and the meat was incredibly tender and juicy. Every bite was delicious and authentic. The quantity was generous and totally worth the price."</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">S</div>
                            <div>
                                <div class="author">Shafna Ashik</div>
                                <div class="review-date">a month ago · 3 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"We ordered the Half Pepper BBQ Mandi, and it was absolutely amazing! The pepper BBQ chicken was incredibly delicious, perfectly cooked, and full of rich flavor. Highly recommended for mandi lovers! Will definitely visit again."</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">K</div>
                            <div>
                                <div class="author">Kingsly</div>
                                <div class="review-date">a month ago · Local Guide · 25 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"Nice spot, super clean, and the service is top-notch – everyone's so polite and just gets things done without even being asked."</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">V</div>
                            <div>
                                <div class="author">Vimal K Thomas</div>
                                <div class="review-date">a month ago · Local Guide · 46 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="review-stars">★★★★★</div>
                        <p>"Run by malayalees. Great food, Great service, Great Ambience and Similar pricing for Mandi like in Kerala ⚡. Must visit. Will not disappoint."</p>
                        <div class="review-meta">
                            <div class="reviewer-avatar">A</div>
                            <div>
                                <div class="author">Amal S A</div>
                                <div class="review-date">a month ago · Local Guide · 16 reviews</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="location-section" id="location">
        <div class="location-inner">
            <div class="location-info">
                <span class="menu-badge">Visit Us</span>
                <h2 class="section-title">Find Us Here</h2>
                <p class="location-desc">We are located in the heart of OMR, Chennai. Come experience the authentic taste of Arabia in a warm, royal ambiance.</p>
                <div class="location-details">
                    <div class="location-detail-item">
                        <i class="fas fa-location-dot"></i>
                        <div>
                            <strong>Address</strong>
                            <span>No 11-A, Rajiv Gandhi Salai, OMR Service Rd, Thirumalai Nagar Annexe, Perungudi, Chennai, Tamil Nadu 600096</span>
                        </div>
                    </div>
                    <div class="location-detail-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Phone</strong>
                            <span>+91 8925524499</span>
                        </div>
                    </div>
                    <div class="location-detail-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Hours</strong>
                            <span>Open Daily · 11:00 AM – 11:00 PM</span>
                        </div>
                    </div>
                    <a href="https://maps.google.com/?q=No+11-A,+Rajiv+Gandhi+salai,+OMR+Service+Rd,+Perungudi,+Chennai,+Tamil+Nadu+600096" target="_blank" class="btn-directions">
                        <i class="fas fa-diamond-turn-right"></i> Get Directions
                    </a>
                </div>
            </div>
            <div class="location-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.6!2d80.2445!3d12.9641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d72c4ef0cd3%3A0x528e9320e261d611!2sPalace%20Mandi!5e0!3m2!1sen!2sin!4v1711173600000!5m2!1sen!2sin"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" style="background: var(--primary-color); color: white; padding: 5rem 5% 2rem; margin-top: 4rem;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem;">
            <div>
                <h3 style="color: white; margin-bottom: 1.5rem;">Palace Mandi</h3>
                <p style="opacity: 0.8;">Premium authentic Arabian restaurant specializing in Mandi and traditional Grills. Experience the royalty in every bite.</p>
                <div style="margin-top: 2rem; display: flex; gap: 1rem;">
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                    <a href="#" style="color: white; font-size: 1.5rem;"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div>
                <h3 style="color: white; margin-bottom: 1.5rem;">Quick Links</h3>
                <ul style="list-style: none; opacity: 0.8;">
                    <li style="margin-bottom: 0.8rem;"><a href="#home" style="color: white; text-decoration: none;">Home</a></li>
                    <li style="margin-bottom: 0.8rem;"><a href="#about" style="color: white; text-decoration: none;">About</a></li>
                    <li style="margin-bottom: 0.8rem;"><a href="#menu" style="color: white; text-decoration: none;">Menu</a></li>
                    <li style="margin-bottom: 0.8rem;"><a href="#contact" style="color: white; text-decoration: none;">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 style="color: white; margin-bottom: 1.5rem;">Reach Us</h3>
                <p style="opacity: 0.8; margin-bottom: 1rem;">
                    <i class="fas fa-location-dot" style="margin-right: 10px;"></i>
                    No 11-A, Rajiv Gandhi salai, OMR Service Rd, Thirumalai Nagar Annexe, Perungudi, Chennai, Tamil Nadu 600096
                </p>
                <p style="opacity: 0.8; margin-bottom: 1rem;">
                    <i class="fas fa-phone" style="margin-right: 10px;"></i>
                    +91 8925524499
                </p>
                <p style="opacity: 0.8;">
                    <i class="fas fa-envelope" style="margin-right: 10px;"></i>
                    info@palacemandi.com
                </p>
            </div>
        </div>
        <div style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 4rem; padding-top: 2rem; text-align: center; opacity: 0.6; font-size: 0.9rem;">
            &copy; 2024 Palace Mandi. All Rights Reserved. Designed with ❤️ for Fine Dining.
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize Menu Swiper
        const swiper = new Swiper('.menu-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            speed: 800,
            pagination: {
                el: '.menu-swiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Initialize Reviews Swiper
        const reviewsSwiper = new Swiper('.reviews-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 800,
            pagination: {
                el: '.reviews-swiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Simple Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        document.querySelectorAll('.testimonial-card, .about-content').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(30px)";
            el.style.transition = "all 0.6s ease-out";
            observer.observe(el);
        });
    </script>
</body>
</html>
