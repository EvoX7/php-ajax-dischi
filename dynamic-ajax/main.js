const app = new Vue({
    el: "#app",
    data: {
        records: [],
    },


    methods: {
        getRecords: function () {
            axios
                .get("../controller.php")
                .then((result) => {
                    this.records = result.data;
                    console.log(this.records);
                })
        }
    },


    created: function () {
        this.getRecords();
    }
});

