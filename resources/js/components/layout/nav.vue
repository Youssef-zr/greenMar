<template>
  <div id="navigation">
    <!-- top bar -->
    <div class="top-bar">
      <div class="container">
        <div class="clearfix">
          <ul class="float_left top-bar-info">
            <li>
              <i class="icon-phone-call"></i>
              Phone: +212 663 457 107
            </li>
            <li>
              <i class="icon-e-mail-envelope"></i>
              contact@greenmar.ma
            </li>
          </ul>
          <div class="right-column float_right">
            <ul class="social list_inline">
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-feed"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- nav-bar -->
    <section class="theme_menu stricky">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="main-logo">
              <router-link to="/"><img src="/images/logo/logo.png" alt="" /></router-link>
            </div>
          </div>
          <div class="col-md-9 menu-column">
            <nav class="menuzord" id="main_menu">
              <ul class="menuzord-menu">
                <li>
                  <router-link to="/service"><i class="fa fa-cogs text-green"></i> Services</router-link>
                  <ul class="dropdown">
                    <li><router-link to="/recyclage"><i class="icon-shapes text-green"></i> GESTION DES DECHETS</router-link></li>
                    <li><router-link to="/recyclage2"><i class="icon-shapes text-green"></i> NETTOYAGE INDUSTRIEL</router-link></li>
                  </ul>
                </li>
                <li><router-link to="/blog"><i class="fa fa-tags text-green"></i> Blog</router-link></li>
                <li><router-link to="/contact"><i class="fa fa-phone text-green"></i> Contacter</router-link></li>
                <li><router-link to="/aPropos"><i class="fa fa-question-circle text-green"></i> A Propos</router-link></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style lang="css">
  .menuzord-menu > li > a{
    padding:20px 14px !important
  }
  .router-link-active{
    color:#8dc63f !important
  }
</style>
