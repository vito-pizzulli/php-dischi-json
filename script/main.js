const vueApp = Vue.createApp({

    data() {
        return {
            apiUrl: './server.php',
            disks: []
        }
    },

    created() {
        axios.get(this.apiUrl)
        .then(response => {
            console.log(response);
            this.disks = response.data;
        })
        .catch(error => {
            console.log(error);
        });
    }
}).mount('#app');