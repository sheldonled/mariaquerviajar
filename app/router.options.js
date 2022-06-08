// https://router.vuejs.org/api/#routeroptions
export default {
  scrollBehavior(to) {
    let top = 0;

    if (to.hash) {
      const extraPaddingHashes = ["#sobre"];
      const extraPadding = extraPaddingHashes.indexOf(to.hash) !== -1 ? 160 : 0;
      const el = document.querySelector(to.hash);
      if (el) {
        top = el.getBoundingClientRect().top + window.scrollY - extraPadding;
      }
    }

    return window.scrollTo({
      top,
      behavior: "smooth",
    });
  },
};
