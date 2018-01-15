export default () => {
  return {
    loadVideo: () => {
      const container = document.querySelector(".sidebar__youtube--content");
      if (!container || (container.getAttribute('data-src') || '').length < 10) return;
      const iframe = document.createElement("iframe");
      iframe.src = `https://www.youtube.com/embed/${container.getAttribute('data-src')}`;
      iframe.setAttribute("frameborder", "0");
      iframe.setAttribute("allowfullscreen", "1");
      iframe.className = "sidebar__youtube--video";
      iframe.style.height = (container.offsetWidth * 0.6) + "px";
      container.appendChild(iframe);
    }
  };
};
  