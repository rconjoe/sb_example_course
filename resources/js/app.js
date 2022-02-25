require('./bootstrap')

// Import vue createApp method and top level component
import { createApp } from 'vue'
import App from './components/App.vue'

// Create vue app
const app = createApp({})

// Register vue components
app.component('App', App)

// Mount vue app
app.mount('#app')

