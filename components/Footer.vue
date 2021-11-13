<script>
import LOGO_SVG from "../assets/img/logo.svg";
import INSTAGRAM_SVG from "../assets/img/instagram.svg";
import YOUTUBE_SVG from "../assets/img/youtube.svg";

export default {
  name: "Footer",
  LOGO_SVG,
  INSTAGRAM_SVG,
  YOUTUBE_SVG,
};
</script>
<template>
  <footer class="site-footer">
    <div class="wrapper">
      <section class="footer-message">
        <a href="/">
          <img :src="$options.LOGO_SVG" class="logo" />
        </a>
        <p>
          Um guia para expatriados na Irlanda. Como morar e construir vida na
          Irlanda
        </p>
        <p>© 2021 by #mariaquerviajar</p>
      </section>
      <section class="footer-socials">
        <p>Me siga nas redes</p>
        <div class="social-icons">
          <a
            href="https://instagram.com/mariaquerviajar"
            target="_blank"
            rel="noopener noreferrer"
            ><img :src="$options.INSTAGRAM_SVG" class="social-icons__instagram"
          /></a>
          <a
            href="https://youtube.com/mariaquerviajar"
            target="_blank"
            rel="noopener noreferrer"
            ><img :src="$options.YOUTUBE_SVG" class="social-icons__youtube"
          /></a>
        </div>
        <p>
          <a href="mailto:mariaquerviajaroficial@gmail.com"
            >mariaquerviajaroficial@gmail.com</a
          >
        </p>
      </section>
    </div>
  </footer>
</template>
<style lang="scss" scoped>
.site-footer {
  background-color: $primary-yellow;
  color: $white;
  font-size: 0.8rem;
  overflow: hidden;
  padding: 3rem 0;
  box-shadow: $header-footer-box-shadow;

  a {
    color: $white;
    text-decoration: none;
  }
}

.site-footer .wrapper {
  display: flex;
  justify-content: space-between;
}

.footer-message {
  max-width: 16rem;
}

.footer-socials {
  max-width: 20rem;
}

.logo {
  width: 7rem;
  margin: 1rem 0;
  display: block;
}

.social-icons {
  display: flex;

  img {
    width: 2.5rem;
    margin: 0 0.6rem 0 0;
  }
}
</style>
