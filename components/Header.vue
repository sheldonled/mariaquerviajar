<script>
import LOGO_SVG from "../assets/img/logo.svg";

export default {
  name: "Header",
  LOGO_SVG,
};
</script>
<template>
  <div>
    <header class="site-header">
      <div class="wrapper">
        <a href="/">
          <img :src="$options.LOGO_SVG" class="logo" />
        </a>
        <nav class="site-main-navigation">
          <ul class="site-menu">
            <li class="site-menu-item">
              <nuxt-link :to="{ path: '/' }">Home</nuxt-link>
            </li>
            <li class="site-menu-item">
              <nuxt-link :to="{ path: '/', hash: '#sobre' }"
                >Quem Sou Eu</nuxt-link
              >
            </li>
            <li class="site-menu-item">
              <nuxt-link :to="{ path: '/' }">Blog</nuxt-link>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <div class="site-header-placeholder"></div>
  </div>
</template>
<style lang="scss" scoped>
.logo {
  width: 5.5rem;
  margin: 1rem 0;
  display: block;
}

.site-header {
  background-color: $primary-yellow;
  height: $site-header-height;
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  right: 0;
  box-shadow: $header-footer-box-shadow;
}

.site-header-placeholder {
  height: $site-header-height;
}

.site-header .wrapper {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}

.site-menu {
  display: flex;
  list-style: none;
}

.site-menu-item {
  font-size: 0.85rem;
  margin: 0 1.2rem 0.5rem;
  text-transform: uppercase;
  & a {
    color: #fff;
    text-decoration: none;
    transition: color 0.4s ease 0s;
    &:hover {
      color: #dbdbdb;
    }
  }

  &.active a {
    color: $primary-red;
  }
}
</style>
