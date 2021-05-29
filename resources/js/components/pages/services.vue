<template>
<div>
        <div
        class="inner-banner has-base-color-overlay text-center"
        style="background: url(images/background/4.jpg);"
      >
        <div class="container">
          <div class="box">
            <h1>GREENMAR Environnement Services</h1>
          </div>
        </div>
      </div>
      <div class="breadcumb-wrapper">
        <div class="container">
          <div class="pull-left">
            <ul class="list-inline link-list">
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>
                Services
              </li>
            </ul>
          </div>
        </div>
      </div>

      <section class="default-section sec-padd">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="service">
                <div class="row" style="padding: 30px 0; margin-bottom: 50px;">
                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="col-md-6 col-sm-6 col-x-12">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="icon-can"></span>
                        </div>
                        <h4 class="mobile-font">Nettoyage Industriel</h4>
                        <p>
                          Nettoyage Des Locaux (Lavage Des Sols Et Vitre,
                          Dépoussiérage, Nettoyage Des Sanitaires…. ); Collecte
                          Et Tri Des Déchets; Assurer La Propreté Des Espaces
                          Extérieurs; Mise En Place Des Equipements De
                          Prétraitement Des Déchets (Broyeur, Compacteur, ..).
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-x-12">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-pagelines"></span>
                        </div>
                        <h4 class="mobile-font">
                          Traitement des Déchets Banals et Dangereux
                        </h4>
                        <p>
                          Les entreprises qui produisent les Déchets Industriels
                          Banals sont responsables de leur traitement et leur
                          élimination. Les contraintes réglementaires et
                          l’augmentation des coûts de leur élimination doivent
                          amener les entreprises à mieux collecter leurs déchets
                          industriels pour transformer cette contrainte en un
                          véritable atout de compétitivité.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" style="padding-bottom: 30px;">
                  <div class="col-lg-10 col-lg-offset-1">
                    <div class="col-md-6 col-sm-6 col-x-12">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-bookmark"></span>
                        </div>
                        <h4 class="mobile-font">
                          CONSULTATIONS ENVIRONNEMENTALES
                        </h4>
                        <p>
                          Fournir des conseils dans le domaine de
                          l'Environnement et de la conservation des Ressources
                          naturelles.
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-x-12">
                      <div class="service-item center">
                        <div class="icon-box">
                          <span class="fa fa-credit-card"></span>
                        </div>
                        <h4 class="mobile-font">
                          Vente et Location des Moyens de Gestion des Déchets
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="urgent-cause2 sec-padd">
        <div class="container">
          <div class="section-title" style="margin-bottom:30px">
            <h2>Services Environnementaux</h2>
            <p>Découvrez tout ce qu’on peut faire ensemble !</p>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="item clearfix">
                <figure class="img-box">
                  <img src="images/resource/9.jpg" alt="" />
                </figure>
                <div class="content">
                  <div class="text center">
                    <a href="#"><h4 class="title">Moyens Materiels</h4></a>
                    <p>Des equipements adaptés a vos besoin</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="item clearfix">
                <figure class="img-box">
                  <img src="images/logo/Logo3.png" alt="" />
                </figure>
                <div class="content">
                  <div class="text center">
                    <a href="#">
                      <h4 class="title">Ensemble Nous Recyclons</h4>
                    </a>
                    <p>Ensemble Pour Un MAROC Vert</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="item clearfix">
                <figure class="img-box">
                  <img src="images/resource/11.jpg" alt="" />
                </figure>
                <div class="content">
                  <div class="text center">
                    <a href="#"><h4 class="title">Moyens Logistiques</h4></a>
                    <p>Des camions autorisés pour tout type de déchet</p>
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
            <h4>
              Prêt à un Audit de déchet ?
            </h4>
          </div>
          <div class="float_right">
            <router-link to="/contact" class="thm-btn style-3">Allo GreenMar !</router-link>
          </div>
        </div>
      </section>
</div>
</template>


<script>
export default {
  metaInfo: {
    title: 'GreenMar Environnement',
    titleTemplate: '%s | Services',
    meta: [
      {
        hid: 'descriptionServices',
        name: 'description',
        content: 'GreenMar Environnement,Services',
      },
    ],
  },
}
</script>
