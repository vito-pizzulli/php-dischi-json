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
        fullscreenTrue(index) {
            this.selectedDisk = index;
            this.fullscreenVisible = true;
        },
        fullscreenFalse() {
            this.fullscreenVisible = false;
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