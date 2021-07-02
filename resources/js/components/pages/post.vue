<template>
  <div class="post-details">
    <!-- header area -->
    <div
      class="inner-banner has-base-color-overlay text-center"
      style="background: url(/images/background/4.jpg);"
    >
      <div class="container">
        <div class="box">
          <h1>{{ article.title }}</h1>
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
              <router-link :to="'/articleDetails/' + article.id">
                Article Details
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="article-details">
      <!-- when loading article -->
      <div v-if="loading" class="d-flex justify-content-center mb-5">
        <span class="mb-2" style="font-size: 16px; color: #8dc63f;">
          Veuillez Patienter
        </span>
        <looping-rhombuses-spinner
          :animation-duration="2500"
          :rhombus-size="15"
          color="#8dc63f"
          class="mt-2 ml-3"
        />
      </div>
      <div v-else class="row mb-5">
        <div class="col-md-8 col-lg-6 mx-auto col-sm-12">
          <div class="post-area box-shadow p-3 pb-4">
            <article class="default-blog-news mb-4">
              <figure class="img-holder">
                <img
                  :src="'/' + article.image"
                  alt="News"
                  class="img-responsive"
                />
              </figure>
              <div class="lower-content">
                <div class="date">{{ article.created_at }}</div>
                <h4>{{ article.title }}</h4>
              </div>
            </article>
            <div class="content-box">
              <div class="text" v-html="article.content"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- recent posts -->
    <section class="recent-posts mt-5">
      <div class="container">
        <hr />
        <h1 class="text-dark pl-5 mt-5">Récents Posts</h1>
        <blogsComponent></blogsComponent>
      </div>
    </section>
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
import blogsComponent from '../pages/blogsComponent.vue'
import { LoopingRhombusesSpinner } from 'epic-spinners'
export default {
  // Start Meta --------------
  metaInfo: {
    title: 'Proband Consulting',
    titleTemplate: '%s | article détails',
    meta: [
      {
        hid: 'descriptionConsulting',
        name: 'description',
        content: 'Proband Consulting,article détails',
      },
    ],
  },
  // End Meta --------------
  components: { blogsComponent, LoopingRhombusesSpinner },
  data() {
    return {
      id: this.$route.params.id,
      article: {},
      loading: false,
    }
  },
  created() {
    this.toTop()
    this.get_article()
  },
  methods: {
    get_article() {
      //   this.toTop()
      this.loading = true
      axios
        .get('/api/green/getArticle/' + this.id)
        .then((res) => {
          if (res.data.statusCode == 200) {
            this.article = res.data.article
          } else if (res.data.statusCode == 422) {
            this.$router.push('/not-found')
          }
          this.loading = false
        })
        .catch((err) => {
          console.log(err)
          this.loading = false
        })
    },
    toTop() {
      $('body,html').animate(
        {
          scrollTop: 400,
        },
        700,
      )
    },
  },
  watch: {
    $route: function (route) {
      if (route.params.id != this.id) {
        this.id = route.params.id
        this.get_article()
      }
    },
  },
}
</script>
<style lang="scss" scoped="scoped">
.text-global * {
  display: block;
  word-wrap: break-word !important;
}
.box-shadow {
  box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.4);
}
.post-date {
  line-height: 1.1 !important;
}

.article-details {
  min-height: 300px;
}
</style>
