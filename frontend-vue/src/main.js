import { createApp } from 'vue'

//component
import App from './App.vue'

// config router
import router from './router';


const app = createApp(App);

app.use(router);
app.mount('#app');
