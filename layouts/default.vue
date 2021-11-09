<script>
import Header from "../components/Header.vue";

export default {
  name: "DefaultLayout",
  components: {
    Header,
  },
};
</script>
<template>
  <div>
    <Header />
    <Nuxt />
  </div>
</template>

<style>
html {
  font-family: "Be Vietnam", sans-serif;
}
body {
  margin: 0;
}
.wrapper {
  width: 100%;
  max-width: 68.75rem;
  margin: 0 auto;
}
:root {
  --yellow-bg-color: #e7a603;
}
</style>
