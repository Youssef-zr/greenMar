<template>
  <div>
    <div
      class="inner-banner has-base-color-overlay text-center"
      style="background: url(images/background/4.jpg);"
    >
      <div class="container">
        <div class="box">
          <h1>contactez nous</h1>
        </div>
      </div>
    </div>
    <div class="breadcumb-wrapper">
      <div class="container">
        <div class="pull-left">
          <ul class="list-inline link-list">
            <li>
              <router-link to="/">
                <i class="fa fa-home home-icon"></i>
              </router-link>
            </li>

            <li>
              <router-link to="/contact">Contactez</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--Start contact area-->
    <section class="get-touch-area">
      <div class="container">
        <div class="sec-title text-center">
          <h1>Voici Où Vous Pouvez Nous Trouver</h1>
          <span class="border"></span>
          <p>
            Veuillez trouver ci-dessous les coordonnées et contactez-nous
            aujourd'hui!
          </p>
        </div>
        <div class="row">
          <!--Start single item-->
          <div class="col-md-3">
            <div class="single-item hvr-grow-shadow text-center">
              <div class="icon-holder">
                <span class="icon-signs2"></span>
              </div>
              <div class="text-holder">
                <h3 class="text-capitalize">Adresse</h3>
                <span class="border"></span>
                <p class="text-capitalize">5, Avenue ibnou tachfine</p>
              </div>
            </div>
          </div>
          <!--End single item-->
          <!--Start single item-->
          <div class="col-md-3">
            <div class="single-item hvr-grow-shadow text-center">
              <div class="icon-holder">
                <span class="icon-e-mail-envelope"></span>
              </div>
              <div class="text-holder">
                <h3 class="text-capitalize">E-MAIL</h3>
                <span class="border"></span>
                <p>contact@greenmar.ma</p>
              </div>
            </div>
          </div>
          <!--End single item-->
          <!--Start single item-->
          <div class="col-md-3">
            <div class="single-item hvr-grow-shadow text-center">
              <div class="icon-holder">
                <span class="icon-clock"></span>
              </div>
              <div class="text-holder">
                <h3 class="text-capitalize">Horaire De Travail</h3>
                <span class="border"></span>
                <p>Lundi – Samedi, 08 – 18H</p>
              </div>
            </div>
          </div>
          <!--End single item-->
          <!--Start single item-->
          <div class="col-md-3">
            <div class="single-item hvr-grow-shadow text-center">
              <div class="icon-holder">
                <span class="icon-technology"></span>
              </div>
              <div class="text-holder">
                <h3 class="text-capitalize">Support</h3>
                <span class="border"></span>
                <p>+212 663457107</p>
              </div>
            </div>
          </div>
          <!--End single item-->
        </div>
      </div>
    </section>
    <!--End contact area-->

    <!--Start contact form area-->
    <section class="contact-form-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="default-form-area">
              <div class="overlay" v-if="loading">
                <i class="fa fa-spinner fa-spin fa-4x"></i>
              </div>
              <form
                id="contact-form"
                name="contact_form"
                class="default-form"
                novalidate
              >
                <div class="row clearfix">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div
                      :class="{
                        'has-error': form.errors.has('name'),
                        'form-group': true,
                      }"
                    >
                      <label for="name">
                        Nom
                        <span class="text-danger">*</span>
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        aria-describedby="nameHeplerId"
                        placeholder="Ton Nom"
                        v-model="form.name"
                        :class="{
                          'is-invalid': form.errors.has('name'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="name"></has-error>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div
                      :class="{
                        'has-error': form.errors.has('phone'),
                        'form-group': true,
                      }"
                    >
                      <label for="phone">
                        Télephone
                        <span class="text-danger">*</span>
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone"
                        aria-describedby="phoneHeplerId"
                        placeholder="Numéro De Télephone"
                        v-model="form.phone"
                        :class="{
                          'is-invalid': form.errors.has('phone'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="phone"></has-error>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div
                      :class="{
                        'has-error': form.errors.has('email'),
                        'form-group': true,
                      }"
                    >
                      <label for="email">
                        Email
                        <span class="text-danger">*</span>
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        id="email"
                        aria-describedby="EmailHeplerId"
                        placeholder="email Adress"
                        v-model="form.email"
                        :class="{
                          'is-invalid': form.errors.has('email'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="email"></has-error>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div
                      :class="{
                        'has-error': form.errors.has('subject'),
                        'form-group': true,
                      }"
                    >
                      <label for="subject">Sujet</label>
                      <input
                        type="text"
                        class="form-control"
                        id="subject"
                        aria-describedby="SubjectHeplerId"
                        placeholder="Sujet"
                        v-model="form.subject"
                        :class="{
                          'is-invalid': form.errors.has('subject'),
                          'form-control': true,
                        }"
                      />
                      <has-error :form="form" field="subject"></has-error>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div
                      :class="{
                        'has-error': form.errors.has('msg'),
                        'form-group': true,
                      }"
                    >
                      <label for="msg">Message</label>
                      <textarea
                        cols="30"
                        rows="10"
                        class="form-control"
                        id="msg"
                        aria-describedby="msgHeplerId"
                        placeholder="msg"
                        v-model="form.msg"
                        :class="{
                          'is-invalid': form.errors.has('msg'),
                          'form-control': true,
                        }"
                      ></textarea>
                      <has-error :form="form" field="msg"></has-error>
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group center">
                      <button
                        class="thm-btn style-2"
                        type="submit"
                        @click="sendEmail"
                      >
                        Envoyer Message
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-right-box text-center">
              <div
                class="img-box"
                style="width: auto; margin-bottom: 0 !important;"
              >
                <i
                  class="icon-e-mail-envelope text-green"
                  style="font-size: 90px;"
                ></i>
              </div>
              <h4>Demandez un devis</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End contact form area-->
    <section class="call-out">
      <div class="container">
        <div class="text-center">
          <h4 class="mobile-font-18">
            Contactez-nous pour plus de précisions et de conseils sur nos
            services
          </h4>
        </div>
      </div>
    </section>

    <!-- start messages -->
    <div class="messages">
      <div class="alert alert-success" v-if="messages.success.status">
        {{ messages.success.msg }}
      </div>
      <div class="alert alert-danger" v-if="messages.error.status">
        {{ messages.error.msg }}
      </div>
    </div>
  </div>
</template>

<style lang="scss">
.default-form-area {
  position: relative;
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #8ec63f91;
    z-index: 4;
    display: flex;
    justify-content: center;
    align-items: center;

    i {
      color: #fff;
    }
  }
}

.messages {
  position: fixed;
  top: 10px;
  right: 10px;
  z-index: 9999999;
  .alert-success {
    color: #fff;
    background: #8dc63f;
  }
  .alert-danger {
    color: #fff;
    background: #ee5253;
  }

  .alert {
    padding: 8px 8px 10px !important;
  }
}
.has-error .form-control {
  border-color: #ee5253 !important;
}
.has-error .checkbox,
.has-error .checkbox-inline,
.has-error .control-label,
.has-error .help-block,
.has-error .radio,
.has-error .radio-inline,
.has-error.checkbox label,
.has-error.checkbox-inline label,
.has-error.radio label,
.has-error.radio-inline label {
  color: #ee5253 !important;
}
</style>

<script>
export default {
  data() {
    return {
      loading: false,
      messages: {
        success: {
          msg: '',
          status: false,
        },
        error: {
          msg: '',
          status: false,
        },
      },
      form: new Form({
        name: '',
        email: '',
        phone: '',
        subject: '',
        msg: '',
      }),
    }
  },
  methods: {
    sendEmail(e) {
      e.preventDefault()

      this.loading = true

      this.form
        .post('http://greenmar.herokuapp.com/api/green/sendEmail')
        .then((res) => {
          this.messages.success.msg = res.data.success
          this.messages.success.status = true

          setTimeout(() => {
            this.messages.success.status = false
          }, 3000)

          this.form.clear()
          this.form.reset()

          this.loading = false
        })
        .catch((err) => {
          this.loading = false

          if (err.response != undefined) {
            this.messages.error.status = true

            if (err.response.status == 422) {
              this.messages.error.msg = 'La donnée est invalide !!'
            } else if (err.response.status == 500) {
              this.messages.error.msg =
                'Erreur Du Serveur Veuillez Réessayer Plus Tard !!'
            }

            setTimeout(() => {
              this.messages.error.status = false
            }, 3000)
          }
        })
    },
  },
}
</script>
