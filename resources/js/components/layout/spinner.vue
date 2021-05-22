<template>
  <div class="loading">
    <div class="loading-content">
      <self-building-square-spinner
        :animation-duration="6000"
        :size="40"
        color="#8dc63f"
      />
    </div>
  </div>
</template>

<script>
import { SelfBuildingSquareSpinner } from "epic-spinners";
export default {
  components: {
    SelfBuildingSquareSpinner
  }
};
</script>

<style lang="scss">
  .loading{
    position:fixed;
    z-index: 1009887;
    height:100%;
    width:100%;
    background:#fff;
    display: flex;
    justify-content: center;
    align-items: center;
    top:0
  }
</style>