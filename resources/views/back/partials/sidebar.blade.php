  <div class="sidebar">
      <div class="logo-details">
          <img class='logo_name' src="{{ asset('images/logo.png') }}" alt="">
          <i class='bx bx-menu text-dark' id="btn"></i>
      </div>
      <ul class="nav-list p-0">
          {{-- <li>
              <i class='bx bx-search'></i>
              <input type="text" placeholder="Search...">
              <span class="tooltip">Search</span>
          </li> --}}
          <li>
              <a href="{{ Route('dashboard') }}">
                  <i class='bx bxs-home'></i>
                  <span class="links_name">Home</span>
              </a>
              <span class="tooltip">Home</span>
          </li>
          <li>
              <a href="{{ Route('users.index') }}">
                  <i class='bx bx-user'></i>
                  <span class="links_name">User</span>
              </a>
              <span class="tooltip">User</span>
          </li>
          @if (Auth::user()->role_id == 1)
              <li>
                  <a href="{{ Route('sliders.index') }}">
                      <i class='bx bxs-image'></i>
                      <span class="links_name">Banner</span>
                  </a>
                  <span class="tooltip">Banner</span>
              </li>
              <li>
                  <a href="{{ Route('events.index') }}">
                      <i class='bx bxs-calendar-event'></i>
                      <span class="links_name">Event</span>
                  </a>
                  <span class="tooltip">Event</span>
              </li>
          @endif
          <li>
              <a href="{{ Route('courses.index') }}">
                  <i class='bx bxl-discourse'></i>
                  <span class="links_name">Courses</span>
              </a>
              <span class="tooltip">Courses</span>
          </li>
          @if (Auth::user()->role_id == 3)
              <li>
                  <a href="{{ Route('post.index') }}">
                      <i class='bx bxs-news'></i>
                      <span class="links_name">News</span>
                  </a>
                  <span class="tooltip">News</span>
              </li>
          @endif
          @if (Auth::user()->role_id == 1)
              <li>
                  <a href="{{ Route('emails.index') }}">
                      <i class='bx bx-mail-send'></i>
                      <span class="links_name">Email</span>
                  </a>
                  <span class="tooltip">Email</span>
              </li>
              <li>
                  <a href="{{ Route('services.index') }}">
                      <i class='bx bxs-bookmarks'></i>
                      <span class="links_name">Services</span>
                  </a>
                  <span class="tooltip">Services</span>
              </li>
              <li>
                  <a href="{{ Route('tags.index') }}">
                      <i class='bx bxs-purchase-tag'></i>
                      <span class="links_name">Tags</span>
                  </a>
                  <span class="tooltip">Tags</span>
              </li>
              <li>
                  <a href="{{ Route('categories.index') }}">
                      <i class='bx bxs-category'></i>
                      <span class="links_name">Categories</span>
                  </a>
                  <span class="tooltip">Categories</span>
              </li>
              <li>
                  <a href="{{ Route('contacts.index') }}">
                      <i class='bx bxs-contact'></i>
                      <span class="links_name">Contact</span>
                  </a>
                  <span class="tooltip">Contact</span>
              </li>
              <li>
                  <a href="{{ Route('commentaires.index') }}">
                      <i class='bx bx-comment-detail'></i>
                      <span class="links_name">Commentaire</span>
                  </a>
                  <span class="tooltip">Commentaire</span>
              </li>
          @endif

          <li class="profile">
              <div class="profile-details">
                  <!--<img src="profile.jpg" alt="profileImg">-->
                  <div class="name_job">
                      <div class="name">{{ auth()->user()->name }}</div>
                      <div class="job">{{ auth()->user()->role->name }}</div>
                  </div>
              </div>
              <a id='btnLogOut' href="{{ route('home') }}">
                  <i class='bx bx-log-out' id="log_out"></i>
              </a>
          </li>
      </ul>
  </div>
