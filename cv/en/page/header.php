   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>Curriculum</title>
      <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
      <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
      <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
      <style>
         body {
         }
         .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #80bdff;
         outline: 0;
         box-shadow: none !important 
         }
         #calendar {
             max-width: 1100px;
             margin: 0 auto;
         }
         .dashboard-header .navbar {
         padding: 0px;
         border-bottom: 1px solid #e6e6f2;
         -webkit-box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
         box-shadow: 0px 0px 28px 0px rgba(82, 63, 105, 0.13);
         -webkit-transition: all 0.3s ease;
         min-height: 60px 
         }
         .navbar-brand {
         display: inline-block;
         margin-right: 1rem;
         line-height: inherit;
         white-space: nowrap;
         padding: 11px 20px;
         font-size: 30px;
         text-transform: uppercase;
         font-weight: 700;
         color: #007bff 
         }
         .navbar-brand:hover {
         color: #007bff 
         }
         .navbar-right-top {
         }
         .navbar-right-top .nav-item {
         border-right: 1px solid #e6e6f2 
         }
         .navbar-right-top .nav-item:last-child {
         border: none 
         }
         .navbar-right-top .nav-item .nav-link {
         padding: 13px 20px;
         font-size: 16px;
         line-height: 2;
         color: #82849f 
         }
         .top-search-bar {
         padding-top: 12px;
         padding-right: 24px 
         }
         .notification {
         }
         .notification-dropdown {
         min-width: 320px 
         }
         .notification-dropdown, .connection-dropdown, .nav-user-dropdown {
         padding: 0px;
         margin: 0px 
         }
         .notification-title {
         font-size: 14px;
         color: #3d405c;
         text-align: center;
         padding: 8px 0px;
         border-bottom: 1px solid #e3e3e3;
         line-height: 1.5;
         background-color: #fffffe 
         }
         .notification-list {
         }
         .notification-list .list-group-item {
         border-radius: 0px;
         padding: 12px;
         margin-top: -1px;
         border-left: transparent;
         border-right: transparent 
         }
         .notification-list .list-group-item.active {
         z-index: 2;
         color: #3d405c;
         background-color: #f7f7fb;
         border-color: #e1e1e7 
         }
         .notification-list .list-group-item-action:focus, .list-group-item-action:hover {
         color: #404040;
         text-decoration: none;
         background-color: #f7f7fb 
         }
         .notification-list .list-group-item:last-child {
         }
         .notification-info {
         }
         .notification-info .notification-date {
         display: block;
         font-size: 11px;
         margin-top: 4px;
         text-transform: uppercase;
         color: #71748d 
         }
         .notification .dropdown-toggle::after, .connection .dropdown-toggle::after, .nav-user .dropdown-toggle::after {
         display: inline-block;
         width: 0;
         height: 0;
         margin-left: .255em;
         vertical-align: .255em;
         content: "";
         border: none 
         }
         .notification-list-user-img {
         float: left 
         }
         .notification-list-user-block {
         padding-left: 50px;
         font-size: 14px;
         line-height: 21px 
         }
         .notification-list-user-name {
         color: #5969ff;
         font-size: 14px;
         margin-right: 8px 
         }
         .list-footer, .conntection-footer {
         font-size: 14px;
         color: #fff;
         text-align: center;
         padding: 10px 0px;
         line-height: 1.5;
         font-weight: 700;
         background-color: #5969ff;
         border-bottom-left-radius: 3px;
         border-bottom-right-radius: 3px 
         }
         .list-footer a, .conntection-footer a {
         color: #fff 
         }
         .list-footer a:hover, .conntection-footer a:hover {
         color: #fff 
         }
         .indicator {
         content: '';
         position: absolute;
         top: 16px;
         right: 23px;
         display: inline-block;
         width: 7px;
         height: 7px;
         border-radius: 100%;
         background-color: #ef172c;
         animation: .9s infinite beatHeart;
         transform-origin: center 
         }
         @keyframes beatHeart {
         0% {
         transform: scale(0.9) 
         }
         25% {
         transform: scale(1.1) 
         }
         40% {
         transform: scale(0.9) 
         }
         60% {
         transform: scale(1.1) 
         }
         100% {
         transform: scale(0.9) 
         }
         }
         .connection {
         }
         .connection-dropdown {
         }
         .connection-list {
         width: 300px;
         padding: 20px 
         }
         .connection-item {
         border-radius: 3px;
         line-height: 32px;
         text-align: center;
         padding: 12px 7px 4px;
         display: block;
         border: 1px solid transparent;
         color: #3d405c;
         font-size: 12px 
         }
         .connection-item img {
         width: 32px 
         }
         .connection-item:hover {
         /*background-color: #fff;*/
         /*border: 1px solid #e6e6f2*/
         }
         .connection-item span {
         display: block;
         overflow: hidden;
         text-overflow: ellipsis;
         white-space: nowrap 
         }
         .nav-user {
         }
         .nav-user-dropdown {
         padding: 0px;
         min-width: 230px;
         margin: 0px 
         }
         .nav-user-name {
         }
         .nav-user-info {
         background-color: #5969ff;
         line-height: 1.4;
         padding: 12px;
         color: #fff;
         font-size: 13px;
         border-radius: 2px 2px 0 0 
         }
         .nav-user-info .status {
         float: left;
         top: 7px;
         left: 0px 
         }
         .nav-user-dropdown {
         }
         .nav-user-dropdown .dropdown-item {
         display: block;
         width: 100%;
         padding: 12px 22px 15px;
         clear: both;
         font-weight: 400;
         color: #686972;
         text-align: inherit;
         white-space: nowrap;
         background-color: transparent;
         border: 0;
         font-size: 13px;
         line-height: 0.4 
         }
         .nav-user-dropdown .dropdown-item:hover {
         background-color: #f7f7fb 
         }
         .user-avatar-xxl {
         height: 128px;
         width: 128px 
         }
         .user-avatar-xl {
         height: 90px;
         width: 90px 
         }
         .user-avatar-lg {
         height: 48px;
         width: 48px 
         }
         .user-avatar-md {
         height: 32px;
         width: 32px 
         }
         .user-avatar-sm {
         height: 24px;
         width: 24px 
         }
         .user-avatar-xs {
         height: 18px;
         width: 18px 
         }
         .avatar {
         width: 2.25rem;
         height: 2.25rem;
         border-radius: 50%;
         border: 2px solid #F7F9FA;
         background: #F7F9FA;
         color: #fff 
         }
         .media-attachment div.avatar {
         border: none 
         }
         .avatar.bg-primary {
         display: flex;
         align-items: center;
         justify-content: center 
         }
         .avatar.bg-primary i {
         font-size: 14px 
         }
      </style>
      <style>
         a:hover,a:focus{
            text-decoration: none;
            outline: none;
         }
         #accordion .panel{
            border: none;
            border-radius: 0;
            box-shadow: none;
            margin-bottom: -5px;
         }
         #accordion .panel-heading{
            padding: 0;
            border: none;
            border-radius: 0;
         }
         #accordion .panel-title a{
            display: block;
            padding: 15px 70px 15px 20px;
            background: #fff;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #e6720d;
            border-bottom: 1px solid #1d2e3b;
            position: relative;
         }
         #accordion .panel-title a.collapsed{ color: #1d2e3b; }
         #accordion .panel-title a.collapsed:hover{ color: #e6720d; }
         #accordion .panel-title a:before,
         #accordion .panel-title a:after{
            content: "";
            width: 3px;
            height: 10px;
            background: #e6720d;
            font-size: 15px;
            position: absolute;
            top: 20px;
            right: 35px;
            transform: rotate(-45deg);
            transition: all 0.3s ease-in-out 0s;
         }
         #accordion .panel-title a:after{
            right: 29px;
            transform: rotate(45deg);
         }
         #accordion .panel-title a.collapsed:before{
            transform: rotate(45deg);
            background: #1d2e3b;
         }
         #accordion .panel-title a.collapsed:after{
            transform: rotate(-45deg);
            background: #1d2e3b;
         }
         #accordion .panel-title a.collapsed:hover:before,
         #accordion .panel-title a.collapsed:hover:after{ background: #e6720d; }
         #accordion .panel-body{
            padding: 10px 20px;
            /*background: #1d2e3b;*/
            border-top: none;
            font-size: 15px;
            /*color: #fff;*/
            line-height: 25px;
         }
      </style>
      <style>@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
         :root {
         --header-height: 3rem;
         --nav-width: 68px;
         --first-color: #4723D9;
         --first-color-light: #AFA5D9;
         --white-color: #F7F6FB;
         --body-font: 'Nunito', sans-serif;
         --normal-font-size: 1rem;
         --z-fixed: 100
         }
         *,
         ::before,
         ::after {
         box-sizing: border-box
         }
         body {
         position: relative;
         margin: var(--header-height) 0 0 0;
         padding: 0 1rem;
         font-family: var(--body-font);
         font-size: var(--normal-font-size);
         transition: .5s
         }
         a {
         text-decoration: none
         }
         .header {
         width: 100%;
         height: var(--header-height);
         position: fixed;
         top: 0;
         left: 0;
         display: flex;
         align-items: center;
         justify-content: space-between;
         padding: 0 1rem;
         background-color: var(--white-color);
         z-index: var(--z-fixed);
         transition: .5s
         }
         .header_toggle {
         color: #000;/*var(--first-color);*/
         font-size: 1.5rem;
         cursor: pointer
         }
         .header_img {
         width: 35px;
         height: 35px;
         display: flex;
         justify-content: center;
         border-radius: 50%;
         overflow: hidden
         }
         .header_img img {
         width: 40px
         }
         .l-navbar {
         position: fixed;
         top: 0;
         left: -30%;
         width: var(--nav-width);
         height: 100vh;
         background-color: #000;/*var(--first-color);*/
         padding: .5rem 1rem 0 0;
         transition: .5s;
         z-index: var(--z-fixed)
         }
         .nav {
         height: 100%;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
         overflow: hidden
         }
         .nav_logo,
         .nav_link {
         display: grid;
         grid-template-columns: max-content max-content;
         align-items: center;
         column-gap: 1rem;
         padding: .5rem 0 .5rem 1.5rem
         }
         .nav_logo {
         margin-bottom: 2rem
         }
         .nav_logo-icon {
         font-size: 1.25rem;
         color: var(--white-color)
         }
         .nav_logo-name {
         color: var(--white-color);
         font-weight: 700
         }
         .nav_link {
         position: relative;
         color: var(--first-color-light);
         margin-bottom: 1.5rem;
         transition: .3s
         }
         .nav_link_new {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 0 1.5rem;
            color:white;
         }
         .nav_link_new:hover {
          color: var(--white-color)
         }
         .item-list{
            color:white;
         }
         .item-list:hover{
            color:white;
            font-weight: bold;
         }
         .nav_link:hover {
            color: var(--white-color)
         }
         .nav_icon {
         font-size: 1.25rem
         }
         .show.l-navbar{
         left: 0
         }
         .body-pd {
         padding-left: calc(var(--nav-width) + 1rem)
         }
         .active {
         color: var(--white-color)
         }
         .active::before {
         content: '';
         position: absolute;
         left: 0;
         width: 2px;
         height: 32px;
         background-color: var(--white-color)
         }
         .height-100 {
         height: 100vh
         }
         @media screen and (min-width: 768px) {
         body {
         margin: calc(var(--header-height) + 1rem) 0 0 0;
         padding-left: calc(var(--nav-width) + 2rem)
         }
         .header {
         height: calc(var(--header-height) + 1rem);
         padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
         }
         .header_img {
         width: 40px;
         height: 40px
         }
         .header_img img {
         width: 45px
         }
         .l-navbar {
         left: 0;
         padding: 1rem 1rem 0 0
         }
         .show.l-navbar{
         width: calc(var(--nav-width) + 156px)
         }
         .body-pd {
         padding-left: calc(var(--nav-width) + 188px)
         }
         }
      </style>
      <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
         const showNavbar = (toggleId, navId, bodyId, headerId) =>{
         const toggle = document.getElementById(toggleId),
         nav = document.getElementById(navId),
         bodypd = document.getElementById(bodyId),
         headerpd = document.getElementById(headerId)
         
         // Validate that all variables exist
         if(toggle && nav && bodypd && headerpd){
         toggle.addEventListener('click', ()=>{
         // show navbar
         nav.classList.toggle('show')
         // change icon
         toggle.classList.toggle('bx-x')
         // add padding to body
         bodypd.classList.toggle('body-pd')
         // add padding to header
         headerpd.classList.toggle('body-pd')
         })
         }
         }
         
         showNavbar('header-toggle','nav-bar','body-pd','header')
         
         /*===== LINK ACTIVE =====*/
         const linkColor = document.querySelectorAll('.nav_link')
         
         function colorLink(){
         if(linkColor){
         linkColor.forEach(l=> l.classList.remove('active'))
         this.classList.add('active')
         }
         }
         linkColor.forEach(l=> l.addEventListener('click', colorLink))
         
         // Your code to run since DOM is loaded and ready
         });
      </script>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   </head>