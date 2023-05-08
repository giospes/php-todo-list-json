
    const {createApp} = Vue

    const app = createApp({
        data(){
            return{
                url: 'server.php' ,
                list : [],
                newTask: ''
            }
        },
        methods:{
            getJson(){
                axios.get(this.url).then((res) =>{
                    console.log(res.data)
                    this.list = [...res.data]
                })
            },
            addTask(){
                console.log(this.newTask);
                const data = {
                    newTask: this.newTask
                }
                axios.post(this.url, data, {headers: { 'Content-Type': 'multipart/form-data'}}).then((res)=>{
                    this.newTask = ""
                    console.log(res.data)
                    this.list = [...res.data] 
                })
                .catch((err)=>{
                    console.log(err);
                })
            },
            removeTask(){
                
            }
        },
        mounted(){
            this.getJson()
        }

    })

    app.mount('#app')
