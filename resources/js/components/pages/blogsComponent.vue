<template>
  <div class="posts">
    <!-- if has error in the server -->
    <div class="has-error" v-if="hasError">
      <div class="container">
        <h5 class="alert alert-danger py-3 mt-0 mb-3" style="font-size: 15px;">
          Serveur Erreur Veuillez Réessayer
        </h5>
        <p>
          <button
            class="btn btn-primary bg-blue"
            @click="get_articles()"
            style="font-size: 15px;"
          >
            <i class="fa fa-circle-o-notch"></i>
            Réessayer
          </button>
        </p>
      </div>
    </div>
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
    <!-- recent posts -->
    <section v-else class="all-blog blog-section sec-padd">
      <div class="container">
        <div class="row">
          <article
            class="col-xs-12 col-sm-6 col-md-3"
            v-for="(article, index) in articlesData.data"
            :key="index"
          >
            <div
              class="default-blog-news wow fadeInUp animated animated animated"
              style="visibility: visible; animation-name: fadeInUp;"
            >
              <figure class="img-holder">
                <router-link :to="'/articleDetails/' + article.id">
                  <img
                    :src="'/' + article.image"
                    alt="News"
                    class="img-responsive"
                  />
                </router-link>
                <figcaption class="overlay">
                  <div class="box">
                    <div class="content">
                      <router-link :to="'/articleDetails/' + article.id">
                        <i class="fa fa-link" aria-hidden="true"></i>
                      </router-link>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="lower-content">
                <div class="date" style="font-size: 14px;">
                  {{ article.created_at }}
                </div>
                <router-link :to="'/articleDetails/' + article.id">
                  <h4 class="mt-1 mb-2">{{ article.title }}</h4>
                </router-link>
                <div class="text">
                  <p>
                    {{ article.summary }}
                  </p>
                </div>
              </div>
            </div>
          </article>
        </div>
        <!-- start pagination -->
        <div class="pagination-container d-flex justify-content-center">
          <pagination
            :data="articlesData"
            @pagination-change-page="get_articles"
          >
            <span slot="prev-nav"><i class="fa fa-arrow-left"></i></span>
            <span slot="next-nav"><i class="fa fa-arrow-right"></i></span>
          </pagination>
        </div>
        <!-- end pagination -->
      </div>
    </section>
  </div>
</template>

<script>
import { LoopingRhombusesSpinner } from 'epic-spinners'

export default {
  components: {
    LoopingRhombusesSpinner,
  },
  data() {
    return {
      loading: true,
      hasError: false,
      articlesData: {},
    }
  },
  created() {
    this.get_articles()
  },
  methods: {
    get_articles(page = 1) {
      // get current page
      let $currentPage = this.articlesData.current_page || 0

      // get data if the current page different of page param
      if ($currentPage != undefined && $currentPage != page) {
        this.loading = true
        this.hasError = false

        axios
          .get('/api/green/getArticles?page=' + page)
          .then((res) => {
            if (res.data.statusCode == 200) {
              this.articlesData = res.data.articles
            }
            this.loading = false
          })
          .catch((err) => {
            this.loading = false
            if (err.response != undefined) {
              this.hasError = true
            }
          })
      }
    },
  },
}
</script>

<style lang="scss">
.pagination > .active > a,
.pagination > .active > a:focus,
.pagination > .active > a:hover,
.pagination > .active > span,
.pagination > .active > span:focus,
.pagination > .active > span:hover {
  background: #8dc63f !important;
  border-color: #8dc63f !important;
}

.pagination > li > a,
.pagination > li > span {
  color: #8dc63f !important;
  font-size: 16px;
}

.pagination > li.active > a {
  color: #fff !important;
}

@media (max-width: 1200px) {
  .call-out .float_left,
  .call-out .float_right {
    width: 100%;
    text-align: center;
  }
}
</style>
