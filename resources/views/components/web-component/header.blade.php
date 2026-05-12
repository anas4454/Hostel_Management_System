  <nav class="navbar navbar-expand-lg bg-white shadow-sm py-2"
      style="background: linear-gradient(90deg, #f8faf9 0%, #edf3ee 100%); border-bottom: 1px solid #e0e0e0;">
      <div class="container-fluid" style="max-width: 1200px;">

          <!-- Logo -->
          <a class="navbar-brand d-flex align-items-center gap-2" href="#"
              style="font-weight: 700; color: var(--green);">

              <img src="{{ asset('images/logo.png') }}" alt="Hostel Stay Logo" width="80">
          </a>

          <!-- Toggle -->
          <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" style="border: none;">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menu and Buttons -->
          <div class="collapse navbar-collapse justify-content-end" id="nav">
              <ul class="navbar-nav me-3 mt-1">
             <li class="nav-item"><a class="nav-link ps-4 @if(Route::is('home')) active @endif" href="{{ route('home') }}"
                          style="font-weight: 500; color: var(--green);">Home</a></li>
                  <li class="nav-item"><a class="nav-link ps-4 @if(Route::is('about')) active @endif" href="{{ route('about') }}" style="font-weight: 500;">About Us</a>
                  </li>
                  <li class="nav-item"><a class="nav-link ps-4 @if(Route::is('facilities')) active @endif" href="{{ route('facilities') }}" style="font-weight: 500;">Facilities</a>
                  </li>
                  <li class="nav-item"><a class="nav-link ps-4 @if(Route::is('work')) active @endif" href="{{ route('work') }}" style="font-weight: 500;">How It
                          Works</a>
                  </li>
                  <li class="nav-item"><a class="nav-link ps-4 @if(Route::is('contact')) active @endif" href="{{ route('contact') }}" style="font-weight: 500;">Contact</a>
                  </li>
              </ul>

              <!-- Buttons -->
              @guest
              <div class="d-flex gap-2">
                <a href="{{ route('login') }}"> <button class="btn btn-outline-success px-3 py-1"
                      style="border-radius: 20px; font-weight: 500;">Login</button></a>
                 <a href="{{ route('register') }}"> <button class="btn btn-success px-3 py-1" style="border-radius: 20px; font-weight: 500;">Sign
                      Up</button></a>
              </div>
              @endguest
              @auth
              <div class="d-flex gap-2">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-outline-danger px-3 py-1" style="border-radius: 20px; font-weight: 500;">Logout</button>
                </form>
              </div>
              @endauth
          </div>
      </div>
  </nav>
