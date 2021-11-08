<script>
import LOGO_SVG from "../assets/img/logo.svg";

export default {
  name: "Header",
  LOGO_SVG,
};
</script>
<template>
  <header class="site-header">
    <div class="wrapper">
      <a href="/">
        <img :src="$options.LOGO_SVG" class="logo" />
      </a>
      <nav class="site-main-navigation">
        <ul class="site-menu">
          <li class="site-menu-item"><a href="/">Home</a></li>
        </ul>
      </nav>
    </div>
  </header>
</template>
<style lang="scss">
.logo {
  width: 6rem;
  margin: 0.5rem;
  display: block;
}

.site-header {
  background-color: var(--yellow-bg-color);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.7);
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
  margin: 0 1.2rem;
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
    color: #db4545;
  }
}
</style>
