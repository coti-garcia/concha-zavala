<nav id="navbar">
        <div class="navbar-wrapper">
          <div class="container">
            <div class="logo">
              <a href="index.php">
                <img class="logo-light" src="images/logo-light.png" alt="">
                <img class="logo-dark" src="images/logo-dark.png" alt="">
              </a>
            </div>
            <div class="menu-extras">
              <div class="menu-item">
                <div class="header-socials">
                  <ul>
                    <li><a href="#">ESP</a>
                    </li>
                    <li><a href="#">EN</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="menu-item">
                <div class="nav-toggle">
                  <a class="menu-toggle" href="#">
                    <div class="hamburger">
                      <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div id="navigation">
              <ul class="navigation-menu nav">
                <li><a href="index.php" class="<?php echo $activemenu=="Home" ? "active": ""; ?>">Home</a>
                </li>
                <li><a href="page-about.php" class="<?php echo $activemenu=="About" ? "active": ""; ?>">Presentación</a>
                </li>
                <li><a href="page-practice-areas.php" class="<?php echo $activemenu=="Areas" ? "active": ""; ?>">Áreas de práctica</a>
                </li>
                <li><a href="page-team.php" class="<?php echo $activemenu=="Team" ? "active": ""; ?>">Equipo</a>
                </li>
                <li><a href="page-contact.php" class="<?php echo $activemenu=="Contact" ? "active": ""; ?>">Contacto</a>
                </li>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>