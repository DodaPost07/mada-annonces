import { Autoplay, Breakpoints } from "@glidejs/glide/dist/glide.modular.esm";
import Glide from "@glidejs/glide";

export default {
    init: () => {
        if (document.querySelector("#homeCategorie")) {
            const homeCategorie = new Glide("#homeCategorie", {
                type: "carousel",
                autoplay: 4000,
                perView: 5,
                breakpoints: {
                    1494: { perView: 4 },
                    1280: { perView: 3 },
                    1024: { perView: 2 },
                    780: { perView: 1 },
                },
            });
            homeCategorie.mount({ Breakpoints });
        }
    },
};
