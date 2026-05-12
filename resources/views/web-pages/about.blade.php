<x-web-component.main>


    <section class="about-hero py-5">
  <div class="container">

    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">

        <span class="badge badge-soft mb-3">
          🌿 About Hostel Stay
        </span>

        <h1 class="hero-heading">
          Providing More Than <br>
          <span>Just a Place to Stay</span>
        </h1>

        <p class="hero-text">
          At Hostel Stay, we believe every student deserves a safe, comfortable,
          and inspiring place to call home while they pursue their dreams.
          We’re here to make that happen.
        </p>

      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 text-end">
        <div class="hero-image">
          <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" class="img-fluid">
        </div>
      </div>

    </div>


  </div>
</section>


<!-- WHO WE ARE -->
<section class="who-section py-5">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- IMAGE -->
      <div class="col-lg-6">
        <div class="who-image">
          <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac" class="img-fluid">

          <!-- Mission Card -->
          <div class="mission-card">
            <h6>🎯 Our Mission</h6>
            <p>
              To provide safe, affordable and quality accommodation
              for students across Pakistan.
            </p>
          </div>
        </div>
      </div>

      <!-- CONTENT -->
      <div class="col-lg-6">
        <p class="section-tag">WHO WE ARE</p>

        <h2 class="who-title">
          Making Student Living <br> Better Every Day
        </h2>

        <p class="who-text">
          Hostel Stay is Pakistan's trusted platform for student accommodation.
          We connect students with verified hostels and PGs near their
          universities, ensuring a hassle-free booking experience.
        </p>

        <ul class="who-list">
          <li>✔ Verified & quality-checked properties</li>
          <li>✔ Affordable rooms with premium facilities</li>
          <li>✔ Secure environment and 24/7 support</li>
          <li>✔ Hassle-free booking and flexible options</li>
        </ul>

        <button class="btn btn-success mt-3 px-4">
          Our Story →
        </button>
      </div>

    </div>
  </div>
</section>

<section class="journey-section py-5">
  <div class="container">

    <!-- WHAT MAKES US DIFFERENT -->
    <div class="text-center mb-5">
      <h2 class="section-title">What Makes Us Different?</h2>
    </div>

    <div class="row g-4 text-center mb-5">

      <!-- CARD -->
      <div class="col-md-6 col-lg">
        <div class="feature-card">
          <div class="icon">🛡️</div>
          <h6>Verified Properties</h6>
          <p>All properties are verified for your safety and peace of mind.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="feature-card">
          <div class="icon">👨‍🎓</div>
          <h6>Student First</h6>
          <p>We understand student needs and provide the best stay solutions.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="feature-card">
          <div class="icon">₹</div>
          <h6>Affordable Pricing</h6>
          <p>Quality accommodation that fits every student's budget.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="feature-card">
          <div class="icon">🎧</div>
          <h6>24/7 Assistance</h6>
          <p>Our support team is always here to help you anytime.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="feature-card">
          <div class="icon">📅</div>
          <h6>Easy Booking</h6>
          <p>Simple, fast and secure booking in just a few clicks.</p>
        </div>
      </div>

    </div>

    <!-- OUR JOURNEY -->
    <div class="row align-items-center mb-5">

      <!-- LEFT TEXT -->
      <div class="col-lg-4">
        <h3 class="journey-title">Our Journey</h3>
        <p class="journey-text">
          Since our inception, we have been committed to transforming student living experiences
          by offering comfortable, secure, and affordable accommodations. We continue to grow
          every day with the trust and love of thousands of students.
        </p>
        <a href="{{ route('facilities') }}" class="btn btn-success px-4 decoration-none">
          Join Our Journey →
        </a>
      </div>

      <!-- TIMELINE -->
      <div class="col-lg-8">
        <div class="timeline d-flex justify-content-between text-center">

          <div class="timeline-item">
            <div class="circle">🌱</div>
            <h6>2018</h6>
            <p class="small">The Beginning</p>
          </div>

          <div class="line"></div>

          <div class="timeline-item">
            <div class="circle">🏢</div>
            <h6>2019</h6>
            <p class="small">Expansion</p>
          </div>

          <div class="line"></div>

          <div class="timeline-item">
            <div class="circle">👥</div>
            <h6>2021</h6>
            <p class="small">Growth</p>
          </div>

          <div class="line"></div>

          <div class="timeline-item">
            <div class="circle">🚀</div>
            <h6>2024</h6>
            <p class="small">And Beyond</p>
          </div>

        </div>
      </div>

    </div>

    <!-- CTA -->
    <div class="cta-box d-flex align-items-center justify-content-between flex-wrap">

      <div class="d-flex align-items-center gap-3">
        <div class="cta-img">🪑</div>
        <div>
          <h4 class="mb-1">Ready to Find Your Perfect Stay?</h4>
          <p class="mb-0 text-muted">
            Join thousands of students who trust Hostel Stay for their accommodation needs.
          </p>
        </div>
      </div>

      <a href="{{ route('login') }}"  class="btn btn-success px-4 mt-3 mt-lg-0 decoration-none">
        Explore Hostels →
      </a>

    </div>

  </div>
</section>

</x-web-component.main>

