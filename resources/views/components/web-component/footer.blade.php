  <footer class="footer-section py-5">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Hostel Stay Logo" width="100" class="m-2">
                    <p class="footer-text">
                        Subscribe to our newsletter for the latest updates,
                        offers and student accommodation tips.
                    </p>

                    <div class="newsletter-box mt-3">
                        <input type="email" placeholder="Enter your email">
                        <button type="button"><i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('facilities') }}">Facilities</a></li>
                        <li><a href="{{ route('work') }}">How it Works</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">For Students</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('login') }}">Find Hostels</a></li>
                        <li><a href="{{ route('student.room-booking') }}">Book Now</a></li>
                        <li><a href="{{ route('student.room-booking') }}">Payment Options</a></li>
                        <li><a href="{{ route('login') }}">FAQs</a></li>
                        <li><a href="{{ route('about') }}">Support</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Legal</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('work') }}">Terms & Conditions</a></li>
                        {{-- <li><a href="#">Refund Policy</a></li> --}}
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Follow Us</h6>

                    <div class="social-icons mb-3">
                        <a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a>
                    </div>


                </div>
            </div>

            <div class="footer-bottom d-flex justify-content-between align-items-center mt-5 pt-3">
                <p class="mb-0">© 2024 Hostel Stay. All rights reserved.</p>
            </div>
        </div>
    </footer>
