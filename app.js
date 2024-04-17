
const { createApp } = Vue
createApp({
    data() {
        return {
            //Stringa per la chiamata API
            myUrl: "api.php",
            //Array vuoto dove inserire i miei file 
            disks: [],
            // Variabile numerica che mi servirà come indice di appoggio
            diskActive: 0,
            myModal: [],
        }
    },

    methods: {
        modalToPrint() {
            this.myModal = this.disks[this.diskActive];
            console.log(this.myModal);
        }
    },

    mounted() {
        //Faccio la mia chiama ajax con axios (importato con cdn)
        axios.get(this.myUrl)
            .then((res) => {
                //Vedo cosa ho
                console.log(res);
                //Aggiundo all'array
                this.disks = res.data;
                console.log(this.disks);
            }).catch((error) => {
                console.log(error.message);
            })
    }
}).mount('#app')