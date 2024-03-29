const app = Vue.createApp({
    data() {
        return {
            apiUrl: "./getList.php",
            diskList: [],
            singleDiskInfo: {},
            showSingleDisk: false,


        }
    },
    methods: {
        getData(url) {
            axios.get(url)
                .then(response => {
                    console.log(response);
                    this.diskList = response.data;
                })
        },

    },
    created() {
        this.getData(this.apiUrl);
    }
});
app.mount("#app");
