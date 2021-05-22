<template>
  <div>
    <div
      class="inner-banner has-base-color-overlay text-center"
      style="
        background: url(images/background/Banner.jpg) no-repeat left;
        background-size: cover;
      "
    >
      <div class="container">
        <div class="box">
          <h1>Onsite Services</h1>
        </div>
      </div>
    </div>
    <div class="breadcumb-wrapper">
      <div class="container">
        <div class="pull-left">
          <ul class="list-inline link-list">
            <li>
              <router-link to="/"><i class="fa fa-home" style="color:#333 !important;font-size:20px !important"></i></router-link>
            </li>
            <li>
              <router-link to="/service">Service</router-link>
            </li>
            <li>
              Onsite Services
            </li>
          </ul>
        </div>
      </div>
    </div>

    <section class="default-section sec-padd mobile-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-8 col-sm-12">
            <div class="single-service">
              <h4
                class="bg-green text-center mobile-font"
                style="margin-bottom: 40px;"
              >
                NETTOYAGE INDUSTRIEL
              </h4>
              <div class="row mb-30">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="img-box mb-20">
                    <img
                      src="images/recyling/1.jpg"
                      alt=""
                      class="img-responsive mb-20 w-100"
                    />
                  </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <h4 class="text-green mb-10 mobile-font-18">
                    ÉQUIPE DE NETTOYAGE À VOTRE SERVICE
                  </h4>
                  <div class="text">
                    <p class="text-dark">
                      Nettoyage Des Locaux (Lavage Des Sols Et Vitre,
                      Dépoussiérage, Nettoyage Des Sanitaires…. ); Collecte Et
                      Tri Des Déchets; Assurer La Propreté Des Espaces
                      Extérieurs; Mise En Place Des Equipements De Prétraitement
                      Des Déchets (Broyeur, Compacteur, ..).
                    </p>
                  </div>
                </div>
              </div>
              <div class="row mb-30">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="img-box mb-20">
                    <img
                      src="images/recyling/2.jpg"
                      alt=""
                      class="img-responsive mb-20 w-100"
                    />
                  </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 mb-20">
                  <h4 class="text-green mb-10 mobile-font-18">
                    NETTOYAGE A HAUTE PRESSION
                  </h4>
                  <div class="text">
                    <p class="text-dark">
                      Le Nettoyage Des Surfaces Par La Haute Pression Permet
                      D’eliminer La Salissures, Les Tags, Les Taches Tenaces
                      Sans Dégradé La Surface Et Assurer Une Efficacite A 100% ;
                      Greenmar Intervient Également Au Lavage Des Citernes,
                      Cuves Et Gros Équipements Industriels.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="plus service mb-50">
              <h3 class="bg-green text-center mb-50">Plus de Services</h3>
              <div class="row">
                <div class="col-sm-4 mb-sm-80">
                  <img
                    src="images/recyling/5.png"
                    alt=""
                    class="img-responsive mb-20 w-100"
                  />
                </div>
                <div class="col-sm-8">
                  <div class="row mb-md-80">
                    <div class="col-md-6 mb-sm-80">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-leaf"></span>
                        </div>
                        <h5 class="mobile-font text-dark">
                          <b class="mobile-font-18">
                            NETTOYAGE INDUSTRIEL
                          </b>
                        </h5>
                      </div>
                    </div>
                    <div class="col-md-6 mb-sm-80">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-pagelines"></span>
                        </div>
                        <h5 class="mobile-font text-dark">
                          <b class="mobile-font-18">
                            CONSULTATION ENVIRONNMENTALE
                          </b>
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-sm-80">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-pagelines"></span>
                        </div>
                        <h5 class="mobile-font text-dark">
                          <b class="mobile-font-18">
                            RECYCLAGE
                          </b>
                        </h5>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-leaf"></span>
                        </div>
                        <h5 class="mobile-font text-dark">
                          <b class="mobile-font-18">
                            EQUIPEMENTS DE GESTION DES DÉCHETS
                          </b>
                        </h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-out">
      <div class="container">
        <div class="float_left">
          <h4 class="mobile-font-18">
            Sur le point de mise en place un Système de Management
            Environnemental ?
          </h4>
        </div>
        <div class="float_right">
          <router-link to="/contact" class="thm-btn style-3">CONTACTEZ-NOUS</router-link>
        </div>
      </div>
    </section>
  </div>
</template>
