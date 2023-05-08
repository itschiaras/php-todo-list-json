const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'ToDo List',
            toDoList: [],
            apiUrl: 'server.php'
        }
    },
    methods: {
        getToDoList() {
            //metodo per leggere i toDo dall'apiUrl "server.php"
            axios.get(this.apiUrl).then((res) => {
                console.log(res.data)
                this.toDoList = res.data
            })
        }
    },
    mounted() {
        this.getToDoList();
    }
}).mount('#app')