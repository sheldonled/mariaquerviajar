import { defineNuxtConfig } from "nuxt";

export default defineNuxtConfig({
  // https://v3.nuxtjs.org/api/configuration/nuxt.config#ssr
  ssr: false,
  target: "static",
  // Global page headers: https://v3.nuxtjs.org/api/configuration/nuxt.config#head
  app: {
    head: {
      title: "Maria Quer Viajar",
      htmlAttrs: {
        lang: "pt-BR",
      },
      meta: [
        { charset: "utf-8" },
        { name: "viewport", content: "width=device-width, initial-scale=1" },
        { hid: "description", name: "description", content: "" },
        { name: "format-detection", content: "telephone=no" },
      ],
      link: [
        { rel: "icon", type: "image/svg", href: "/favicon.svg" },
        { rel: "preconnect", href: "https://fonts.googleapis.com" },
        {
          rel: "preconnect",
          href: "https://fonts.gstatic.com",
          crossorigin: true,
        },
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/css2?family=Be+Vietnam&display=swap",
        },
        {
          rel: "stylesheet",
          href: "https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap",
        },
      ],
    },
  },
  // Global CSS: https://v3.nuxtjs.org/api/configuration/nuxt.config#css
  css: [],
  // Auto import components: https://v3.nuxtjs.org/api/configuration/nuxt.config#components
  components: {
    dirs: ["~/components"],
  },
  vite: {
    css: {
      preprocessorOptions: {
        scss: {
          additionalData: '@import "~/assets/scss/variables.scss";',
        },
      },
    },
  },
});
