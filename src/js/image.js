const loadAll = () => Array.prototype.slice
                      .call(document.querySelectorAll("img[data-src]"))
                      .forEach(img => img.setAttribute('src', img.getAttribute('data-src')));

export default {loadAll};
