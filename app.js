
const { createApp } = Vue
createApp({
    data() {
        return {
            //Stringa per la chiamata API
            myUrl: "dischi.json",
            //Array vuoto dove inserire i miei file 
            disks: [],
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
            }).catch((error)=>{
                console.log(error.message);
            })
    }
}).mount('#app')