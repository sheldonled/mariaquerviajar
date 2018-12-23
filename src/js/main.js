import menu from './menu.js';
import image from './image.js';
import instagram from './instagram.js';
import youtube from './youtube';
import commentTabs from './comment-tabs';
import shareFunctionality from './share';

window.mqv = {
    init: () => {
        menu.bind(".menu-mobile", ".sidebar");
        image.loadAll();
        instagram.init();
        youtube.loadVideo();
        commentTabs.init();
        shareFunctionality.init();
    }
};