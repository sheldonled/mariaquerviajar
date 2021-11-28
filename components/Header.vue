<script>
import LOGO_SVG from "../assets/img/logo.svg";

export default {
  name: "Header",
  LOGO_SVG,
  data() {
    return {
      isMenuOpen: false,
    };
  },
  methods: {
    menuToggle() {
      this.isMenuOpen = !this.isMenuOpen;
    },
    closeMenu() {
      this.isMenuOpen = false;
    },
  },
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
          <button
            :class="['site-menu-button', { opened: isMenuOpen }]"
            @click="menuToggle"
            aria-label="Main Menu"
          >
            <svg width="48" height="48" viewBox="0 0 100 100">
              <path
                class="line line1"
                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058"
              />
              <path class="line line2" d="M 20,50 H 80" />
              <path
                class="line line3"
                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942"
              />
            </svg>
          </button>
          <ul :class="['site-menu', { opened: isMenuOpen }]">
            <li @click="closeMenu" class="site-menu-item">
              <nuxt-link :to="{ path: '/' }">Home</nuxt-link>
            </li>
            <li @click="closeMenu" class="site-menu-item">
              <nuxt-link :to="{ path: '/', hash: '#sobre' }"
                >Quem Sou Eu</nuxt-link
              >
            </li>
            <li @click="closeMenu" class="site-menu-item">
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
  position: absolute;
  z-index: 9000;
  top: 0;
  left: 0;
  right: 0;

  @media (min-width: 40rem) {
    position: fixed;
    box-shadow: $header-footer-box-shadow;
  }
}

.site-header-placeholder {
  height: $site-header-height;
}

.site-header .wrapper {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}

.site-menu-button {
  display: flex;
  z-index: 1000;
  position: fixed;
  top: 0.5rem;
  right: 0.5rem;
  width: 3rem;
  height: 3rem;
  padding: 0;
  border: 0;
  border-radius: 0.25rem;
  background-color: $primary-yellow;
  cursor: pointer;

  .line {
    fill: none;
    stroke: $white;
    stroke-width: 6px;
    transition: stroke-dasharray 600ms cubic-bezier(0.4, 0, 0.2, 1),
      stroke-dashoffset 600ms cubic-bezier(0.4, 0, 0.2, 1);
  }
  .line1 {
    stroke-dasharray: 60 207;
  }
  .line2 {
    stroke-dasharray: 60 60;
  }
  .line3 {
    stroke-dasharray: 60 207;
  }

  &.opened {
    .line1 {
      stroke-dasharray: 90 207;
      stroke-dashoffset: -134;
    }
    .line2 {
      stroke-dasharray: 1 60;
      stroke-dashoffset: -30;
    }
    .line3 {
      stroke-dasharray: 90 207;
      stroke-dashoffset: -134;
    }
  }

  @media (min-width: 40rem) {
    display: none;
  }
}

.site-menu {
  display: flex;
  flex-flow: column;
  list-style: none;
  position: fixed;
  top: 0;
  left: 100%;
  width: 100vw;
  height: 100vh;
  padding: 3.5rem;
  margin: 0;
  background-color: $white;
  text-align: center;
  transition: left 0.5s cubic-bezier(0, 1, 1, 1) 0s;
  z-index: 950;
  &.opened {
    left: 0;
  }

  @media (min-width: 40rem) {
    position: relative;
    flex-flow: row;
    top: unset;
    left: unset;
    width: unset;
    height: unset;
    padding: 0;
    background-color: transparent;
  }
}

.site-menu-item {
  font-size: 1rem;
  margin: 0;
  text-transform: uppercase;
  & a {
    display: block;
    padding: 1rem 0;
    width: 100%;
    color: $text-default-color;
    border-bottom: 1px solid $text-light-grey;
    text-decoration: none;
    transition: color 0.5s ease 0s;
    &:hover {
      color: $primary-yellow;
    }
  }

  &.active a {
    font-size: 0.85rem;
    color: $primary-red;
  }

  @media (min-width: 40rem) {
    & a {
      color: $white;
      border: 0;
      margin: 0 1.2rem 0.5rem;
      &:hover {
        color: $text-light-grey;
      }
    }
  }
}
</style>
