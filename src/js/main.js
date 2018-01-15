import menu from './menu.js';
import image from './image.js';
import instagram from './instagram.js';
import youtube from './youtube';
import grid from './grid';

window.mqv = {
    init: () => {
        new menu().bind(".menu-mobile", ".sidebar");
        new image().loadAll();
        new instagram().init();
        new youtube().loadVideo();
        new grid().placeMainGrid();
    }
};