<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <title>Farming Sectors</title>
  </head>

  <body>
    <style>
      :root {
        --color-primary: #0073ff;
        --color-white: #e9e9e9;
        --color-black: #141d28;
        --color-black-1: #212b38;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: #000000;
      }

      .menu-bar ul {
        list-style: none;
        display: flex;
      }

      .menu-bar ul li {
        padding: 10px 30px;
        position: relative;
      }

      .menu-bar ul li a {
        font-size: 20px;
        color: var(--color-white);
        text-decoration: none;
        transition: all 0.3s;
      }

      /* .menu-bar ul li a:hover {
        color: var(--color-primary);
      } */

      .fas {
        float: right;
        margin-left: 10px;
        padding-top: 3px;
      }

      /* dropdown menu style */
      .dropdown-menu {
        display: none;
      }

      /* .menu-bar ul li:hover .dropdown-menu {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: #e9e9e9;
      } */

      .menu-bar ul li:hover .dropdown-menu ul {
        display: block;
        margin: 10px;
      }

      .menu-bar ul li:hover .dropdown-menu ul li {
        width: 150px;
        padding: 10px;
      }

      .dropdown-menu-1 {
        display: none;
      }

      .dropdown-menu ul li:hover .dropdown-menu-1 {
        display: block;
        position: absolute;
        left: 150px;
        top: 0;
        /* background-color: var(--color-black); */
      }

      /* .hero {
        height: calc(100vh - 80px);
        background-image: url(./bg.jpg);
        background-position: center;
      } */
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <div class="menu-bar">

              <ul>
                <li class="nav-item dropdown"><a href="#">Farming Sectors<i class="fas fa-caret-down"></i></a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a href="#">Animal Farming<i class="fas fa-caret-right"></i></a>

                        <div class="dropdown-menu-1">
                          <ul>
                            <li><a href="#">Cow</a></li>
                            <li><a href="#">Goat</a></li>
                            <li><a href="#">Buffalo</a></li>
                            <li><a href="#">Sheep</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="#">Fisheries<i class="fas fa-caret-right"></i></a>

                        <div class="dropdown-menu-1">
                          <ul>
                            <li><a href="#">Carp</a></li>
                            <li><a href="#">Prawn</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="#">Poultry<i class="fas fa-caret-right"></i></a>

                        <div class="dropdown-menu-1">
                          <ul>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Duck</a></li>
                            <li><a href="#">Pigeons</a></li>
                            <li><a href="#">Quail</a></li>
                            <li><a href="#">Turkey</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>

            </div>

          </ul>
        </div>
      </div>
      <!-- <div class="hero">
        &nbsp;
      </div> -->
    </nav>
  </body>

</html>