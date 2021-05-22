<template>
  <section class="not-found">
    <div class="err-page text-center">
      <img src="/images/not-found.png" class="img-responsive" alt="not found">

      <div class="error-content text-center">
        <h1>
          Pardon !! Page Non trouvée
        </h1>
      </div>

      <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
  </section>
</template>

<style lang="scss">
.not-found {
  height:600px;
  background: #f7f7f7;
  display: flex;
  justify-content: center;
  align-items: center;
  .err-page {
    margin-top: 50px;
    img {
        width:65%;
        height:340px;
        margin: auto;
    }
    .error-content {
      color: #555;
      h1 {
        // font-size: 29px;
        margin-top: 0;
        color:#8dc73f;
      }
    }
  }
}
</style>