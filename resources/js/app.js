require("./bootstrap");
import { createApp } from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import moment from "moment";
import * as bootstrap from 'bootstrap';
import StarRating from "vue-star-rating";
import { BootstrapIconsPlugin } from "bootstrap-icons-vue";
import Toaster from "@meforma/vue-toaster";
import ScrollToTop from "./components/ScrollToTop.vue";
moment.locale("id");
let numberFormat = function (value) {
    let val = (value / 1).toFixed(0).replace(".", ",");
    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
};
const app = createApp({
    mixins: [myMixin],
    components: {
        StarRating,
        ScrollToTop,
    },
    methods: {
        toast(msg) {
            this.$toast.show(msg, {
                /* options */
                type: "info", //"success"
                // this.$toast.show(message, {/* options */});
                //this.$toast.show(`Hey! I'm here`);
                //this.$toast.success(`Hey! I'm here`);
                //this.$toast.error(`Hey! I'm here`);
                //this.$toast.warning(`Hey! I'm here`);
                //this.$toast.info(`Hey! I'm here`);
            });
        },
    },
})
    .use(VueAxios, axios)
    //  .use(VueAuth, auth)
    // .use(router)
    //.use(KnobControl)
    .use(Toaster)
    .use(BootstrapIconsPlugin);

//app.component("app", require("./views/App.vue").default);
//app.component("auth-page", require("./views/Auth.vue").default);

//app.use(vbPlugin);
app.config.globalProperties.moment = moment;
app.config.globalProperties.numberFormat = numberFormat;

window.app = app.mount("#app");
