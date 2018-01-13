import menu from './menu.js';
import image from './image.js';
import instagram from './instagram.js';

window.mqv = {
    init: () => {
        new menu().bind(".menu-mobile", ".sidebar");
        new image().loadAll();
        new instagram().init();
    }
};