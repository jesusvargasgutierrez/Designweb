   <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
   <body oncontextmenu='return false' class='snippet-body body-pd'>
      <body id="body-pd">
         <nav class="header navbar navbar-expand-lg navbar-light bg-light body-pd" id="header">
            <div class="header_toggle d-none"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <a class="navbar-brand" style="font-size: 18pt; text-transform: capitalize !important;" href="{{ route('home') }}">
               Resume
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <a href="https://coders-web.online/cv/es/" class="text-dark">            
               <i class="fas fa-globe"></i>
               Spanish
            </a>
         </nav>
         <div class="l-navbar show" id="nav-bar">
            <nav class="nav">
               <div>
                  <a href="#" class="nav_logo"> 
                     <i class='bx bx-layer nav_logo-icon'></i> 
                     <span class="nav_logo-name">Resume</span> 
                  </a>
                  <div class="nav_list"> 
                    <li>
                       <a href="#{{ $module->description }}" data-toggle="collapse" aria-expanded="true" class="nav_link_new"> 
                          <i class='bx bx-grid-alt nav_icon'></i> 
                          <span class="nav_name">
                             Section
                          </span> 
                       </a>
                       <ul class="collapse list-unstyled show" id="{{ $module->description }}">
                          <li>
                             <a href="index.php" class="item-list connection-item" style="color:white;">
                                Information
                             </a>
                          </li>
                          <li>
                             <a href="skills.php" class="item-list connection-item" style="color:white;">
                                Skills
                             </a>
                          </li>
                          <li>
                             <a href="experience.php" class="item-list connection-item" style="color:white;">
                                Professional experience
                             </a>
                          </li>
                           <li>
                             <a href="Resume-JesusVargas.pdf" class="item-list connection-item" style="color:white;">
                                Download resume
                             </a>
                          </li>
                       </ul>
                    </li>
                  </div>
               </div>
            </nav>
         </div>
         <!--Container Main start-->
         <div id="app">
            