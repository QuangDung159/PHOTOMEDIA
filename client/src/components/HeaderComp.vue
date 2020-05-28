<template>
  <header>
    <div class="header-area">
      <div class="header_top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-4 col-md-4 d-none d-md-block">
              <div class="header_links">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="twiter" href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a class="insta" href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="logo">
                <a href="index.html">
                  <img src="client/img/logo.png" alt />
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-md-4 d-none d-md-block">
              <div class="login_resiter">
                <p>
                  <a href="#">
                    <i class="flaticon-user"></i>login
                  </a> |
                  <a href="#">Resister</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area white-bg">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li>
                      <a class="active" href="index.html">Home</a>
                    </li>
                    <li>
                      <a href="google.com">
                        Blogs
                        <i class="ti-angle-down"></i>
                      </a>
                      <ul class="submenu">
                        <li>
                          <a href="elements.html">elements</a>
                        </li>
                        <li>
                          <a href="single-blog.html">single-blog</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="about.html">About</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "HeaderComp"
};
</script>

<style>
</style>