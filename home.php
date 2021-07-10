<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="apple-touch-icon" type="image/png"
    href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
  <link rel="shortcut icon" type="image/x-icon"
    href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
  <link rel="mask-icon" type=""
    href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
    color="#111" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css'>

  <meta name="apple-mobile-web-app-title" content="CodePen">
  <meta charset="UTF-8">

  <title>Mini-Project Management</title>
  <script>
    window.console = window.console || function (t) { };
  </script>
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>


</head>

<body translate="no">

  <div class="flex bg-gray-300 h-screen" x-data="{ isSidebarExpanded: true }">
    <aside id="aside" style="background-color: rgb(158,29,51);"
      class="flex flex-col text-gray-300 transition-all duration-300 ease-in-out"
      :class="isSidebarExpanded ? 'w-64' : 'w-20'">


      <a href="#"
        class="h-20 flex items-center px-4 bg-gray-900 hover:text-gray-100 hover:bg-opacity-50 focus:outline-none focus:text-gray-100 focus:bg-opacity-50 overflow-hidden"
        style="background-color: rgb(109, 13, 29);">
        <!-- <svg viewBox="0 0 20 20" fill="currentColor" class="h-12 w-12 flex-shrink-0">
            <path
              d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
          </svg> -->

        <img style="height: 40px; background-color: white;" src="./images/dylogo.png" alt="">
        <span class="ml-2 text-xl font-medium duration-300 ease-in-out"
          :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Dashboard</span>
      </a>

      <nav class="p-4 space-y-2 font-medium">
        <a href="#"
          class="flex items-center h-10 px-3 text-white hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">
          <svg viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 flex-shrink-0">
            <path
              d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <span class="ml-2 duration-300 ease-in-out"
            :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Home</span>
        </a>

        <a href="create_grp.php"
          class="flex items-center h-10 px-3 text-white hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">
          <svg viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 flex-shrink-0">
            <path
              d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
          </svg>
          <span id="nav-group" class="ml-2 duration-300 ease-in-out"
            :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Create
            Group</span>
        </a>

        <!-- <a href="#"
          class="flex items-center h-10 px-3 text-white hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">
          <i style="padding-left: 4px;" class="fas fa-user-plus"></i>

          <span class="ml-2 duration-300 ease-in-out" :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Add
            Members</span>
        </a> -->

        <a href="#"
          class="flex items-center h-10 px-3 text-white hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">
          <i style="padding-left: 4px;" class="far fa-lightbulb"></i>
          <span id="nav-group" class="ml-2 duration-300 ease-in-out"
            :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Suggest Topics</span>
        </a>

        <a href="#"
          class="flex items-center h-10 px-3 text-white hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">

          <i class="fas fa-chalkboard-teacher"></i>
          <span class="ml-2 duration-300 ease-in-out"
            :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Mentor</span>
        </a>

      </nav>

      <div class="border-t border-white p-4 font-medium mt-auto">

        <a href="logout.php"
          class="flex items-center h-10 px-3 hover:text-gray-100 hover:bg-red-100 hover:bg-opacity-25 rounded-lg transition-colors duration-150 ease-in-out focus:outline-none focus:shadow-outline">
          <i class="fas fa-sign-out-alt"></i>
          <span class="ml-2 duration-300 ease-in-out"
            :class="isSidebarExpanded ? 'opacity-100' : 'opacity-0'">Logout</span>
        </a>
      </div>
    </aside>

    <div class="flex-1 flex flex-col">
      <header class="h-20 flex items-center px-6 bg-white">
        <button class="p-2 -ml-2 mr-2" @click="isSidebarExpanded = !isSidebarExpanded">
          <svg viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round" class="h-6 w-6 transform" :class="isSidebarExpanded ? 'rotate-180' : 'rotate-0'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="4" y1="6" x2="14" y2="6" />
            <line x1="4" y1="18" x2="14" y2="18" />
            <path d="M4 12h17l-3 -3m0 6l3 -3" />
          </svg>
        </button>
        <span class="font-medium">Header</span>
      </header>


      <main class="flex-1 p-6">
        <!-- welcome-banner page -->

        <div class='welcome-banner' >
            <h1>Welcome User!</h1>
            <p class= "muted-text">Manage your projects seamlessly</p>
            <p >If you are a group leader, you may begin by clicking on create group option.</p>
          </div>

        <!-- add-members page -->
<!-- 
        <div class='add-members-wrapper'>
          <form style="max-width: 50%;" action="create_grp.php" method='POST'>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Member's email" aria-label="Recipient's username" name="member_email"
                aria-describedby="button-addon2">
              <button class="btn btn-primary text-white  btn-outline-secondary" type="submit" id="button-addon2" name="add_member">Add
                Member</button>
            </div>
          </form>
          
          <ol style="max-width : 50%" class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold ">Chirag</div>
                <p class="muted-text" style="font-size: small;">chirag@gmail.com</p>
              </div>
              <div style="float: right; padding-top: 10px;">
                <button class="btn btn-sm btn-danger">Remove</button>
              </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Nihal</div>
                <p class="muted-text" style="font-size: small;">nihal@gmail.com</p>
              </div>
              <div style="float: right; padding-top: 10px;">
                <button class="btn btn-sm btn-danger">Remove</button>
              </div>

            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Jay</div>
                <p class="muted-text" style="font-size: small;">jay@gmail.com</p>
              </div>
              <div style="float: right; padding-top: 10px;">
                <button class="btn btn-sm btn-danger">Remove</button>
              </div>

            </li>
          </ol>
        </div> -->

        <!-- add-topic page -->

        <!-- <div class='add-topic-wrapper'>
            <form action="" method='POST'>
              <div style="max-width: 50%;" class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Suggest Topic" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary text-white btn-outline-secondary" type="button" id="button-addon2">Add Topic</button>
              </div>
            </form>
            <ol style = "max-width: 50%" class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold ">Password Manager</div>
                  <p class="muted-text" style = "font-size: small;">1st preference</p>
                </div>
              
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Blockchain Demonstration</div>
                  <p class="muted-text" style = "font-size: small;">2nd preference</p>
                  
                </div>
            
              </li>
              
              
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Algorithm Visualiser</div>
                  <p class="muted-text" style = "font-size: small;">3rd preference</p>
                  
                </div>
            
              </li>
            </ol>
          </div> -->

      </main>


    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.7.3/alpine.js'></script>
  <script src='./js/home.js'></script>
</body>

</html>