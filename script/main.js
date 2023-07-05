const vueApp = Vue.createApp({

    data() {
        return {
            apiUrl: './server.php',
            disks: [],
            fullscreenVisible: false,
            selectedDisk: ''
        }
    },

    methods: {
        toggleFullscreen(index) {
            this.selectedDisk = index;
            this.fullscreenVisible = !this.fullscreenVisible;
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