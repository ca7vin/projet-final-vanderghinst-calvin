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
              <a href="{{ Route('user.index') }}">
                  <i class='bx bx-user'></i>
                  <span class="links_name">User</span>
              </a>
              <span class="tooltip">User</span>
          </li>
          <li>
              <a href="{{ Route('slider.index') }}">
                  <i class='bx bxs-image'></i>
                  <span class="links_name">Banner</span>
              </a>
              <span class="tooltip">Banner</span>
          </li>
          <li>
              <a href="{{ Route('event.index') }}">
                  <i class='bx bxs-calendar-event'></i>
                  <span class="links_name">Event</span>
              </a>
              <span class="tooltip">Event</span>
          </li>
          <li>
              <a href="{{ Route('course.index') }}">
                  <i class='bx bxl-discourse'></i>
                  <span class="links_name">Courses</span>
              </a>
              <span class="tooltip">Courses</span>
          </li>
          <li>
              <a href="{{ Route('post.index') }}">
                <i class='bx bxs-news'></i>
                  <span class="links_name">News</span>
              </a>
              <span class="tooltip">News</span>
          </li>
          <li>
              <a href="{{ Route('prof.index') }}">
                <i class='bx bxs-user-badge'></i>
                  <span class="links_name">Teachers</span>
              </a>
              <span class="tooltip">Teachers</span>
          </li>
          <li>
              <a href="{{ Route('service.index') }}">
                <i class='bx bxs-bookmarks'></i>
                  <span class="links_name">Services</span>
              </a>
              <span class="tooltip">Services</span>
          </li>
          {{-- <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li> --}}
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
