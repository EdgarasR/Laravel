import "./bootstrap";
import { createPinia } from "pinia";
import { createApp } from "vue";
import Shop from "./Shop.vue";

const pinia = createPinia();
const app = createApp(Shop);

app.use(pinia);
app.mount("#shop");
