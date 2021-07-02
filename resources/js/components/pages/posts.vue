<template>
  <div class="blogs-page">
    <!-- header area -->
    <div
      class="inner-banner has-base-color-overlay text-center"
      style="background: url(/images/background/4.jpg);"
    >
      <div class="container">
        <div class="box">
          <h1>Récents Articles</h1>
        </div>
      </div>
    </div>
    <div class="breadcumb-wrapper mb-5">
      <div class="container">
        <div class="pull-left">
          <ul class="list-inline link-list">
            <li>
              <router-link to="/">
                <i class="fa fa-home home-icon"></i>
              </router-link>
            </li>

            <li>
              <router-link to="/blog">Récents Articles</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- start blogs Component -->
    <blogs></blogs>
    <!-- end blogs Component -->
  <!-- call greenMar -->
    <section class="call-out">
      <div class="container">
        <div class="float_left">
          <h4 class="mobile-font-18">
            Sur le point de mise en place un Système de Management
            Environnemental ?
          </h4>
        </div>
        <div class="float_right">
          <router-link to="/contact" class="thm-btn style-3">
            CONTACTEZ-NOUS
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import blogs from './blogsComponent.vue'
export default {
    metaInfo: {
    title: 'GreenMar Environnement',
    titleTemplate: '%s | blog posts',
    meta: [
      {
        hid: 'descriptionHome',
        name: 'description',
        content: 'GreenMar Environnement,blog',
      },
    ],
  },
  components: {
    blogs,
  },
}
</script>
