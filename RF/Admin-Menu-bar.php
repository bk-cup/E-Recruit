 <!---------------------- Side bar ---------------------->
 <nav>
     <div class="logo-name">
         <div class="logo-image">
             <img src="https://images.unsplash.com/photo-1586374579358-9d19d632b6df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                 height="40px" alt="">
         </div>

         <span class="logo_name">Admin</span>
     </div>

     <div class="menu-items">
         <ul class="nav-links">
             <li><a href="Admin-Dashboard.php">
                     <i class="uil uil-estate"></i>
                     <span class="link-name">Dahsboard</span>
                 </a>
             </li>

             <!-- <li><a href="RF-Admin-Employee.html">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">Empolyee</span>
                    </a>
                </li> -->
             <!-- ----------------- Menu slide dropdown-------------------------- -->
             <li>
                 <div class="iocn-link">
                     <a href="Admin-Employee.php">
                         <i class="uil uil-users-alt"></i>
                         <span class="link-name">Empolyee</span>
                     </a>
                     <i class="uil uil-angle-down arrow"></i>
                 </div>
                 <ul class="sub-menu">
                     <li><a class="link-name" href="#">Category</a></li>
                     <li><a href="Admin-Employee.php">Empolyee List</a></li>
                     <li><a href="#">Add Empolyee</a></li>
                     <li><a href="#">PHP & MySQL</a></li>
                 </ul>
             </li>
             <!-- ----------------- Menu slide dropdown-------------------------- -->

             <li><a href="#">
                     <i class="uil uil-chart"></i>
                     <span class="link-name">Manage Department</span>
                 </a></li>
             <!-- ----------------- Menu slide dropdown-------------------------- -->
             <li>
                 <div class="iocn-link">
                     <a href="#">
                         <i class="uil uil-game-structure"></i>
                         <span class="link-name">Privilege</span>
                     </a>
                     <i class="uil uil-angle-down arrow"></i>
                 </div>
                 <ul class="sub-menu">
                     <li><a class="link-name" href="#">Category</a></li>
                     <li><a href="#">Privilege List</a></li>
                     <li><a href="#">Add Privilege</a></li>
                 </ul>
             </li>
             <!-- ----------------- Menu slide dropdown-------------------------- -->


             <li><a href="#">
                     <i class="uil uil-schedule"></i>
                     <span class="link-name">Interview Schedule</span>
                 </a></li>
         </ul>

         <ul class="logout-mode">
             <li><a href="#">
                     <i class="uil uil-signout"></i>
                     <span class="link-name">Logout</span>
                 </a></li>

             <li class="mode">
                 <a href="#">
                     <i class="uil uil-moon"></i>
                     <span class="link-name">Dark Mode</span>
                 </a>

                 <div class="mode-toggle">
                     <span class="switch"></span>
                 </div>
             </li>
         </ul>
     </div>
 </nav>

 <script>
     let arrow = document.querySelectorAll(".arrow");
     for (var i = 0; i < arrow.length; i++) {
         arrow[i].addEventListener("click", (e) => {
             let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
             arrowParent.classList.toggle("showMenu");
         });
     }
     let sidebar = document.querySelector(".sidebar");
     let sidebarBtn = document.querySelector(".bx-menu");
     console.log(sidebarBtn);
     sidebarBtn.addEventListener("click", () => {
         sidebar.classList.toggle("close");
     });
 </script>