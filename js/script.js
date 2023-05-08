const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'ToDo List',
            toDoList: [],
            apiUrl: 'server.php',
            newToDo: ''
        }
    },
    methods: {
        getToDoList() {
            //metodo per leggere i toDo dall'apiUrl "server.php"
            axios.get(this.apiUrl).then((res) => {
                console.log(res.data)
                this.toDoList = res.data
            })
        },
        updateList() {
            console.log(this.newToDo)
            const data = {
                newToDo: this.newToDo
            };
            axios.post(this.apiUrl, data, {headers: {'Content-Type': 'multipart/form-data'}}).then((res) => {
                this.newToDo = '';
                console.log(res.data);
                this.toDoList = res.data;
            })
        }
    },
    mounted() {
        this.getToDoList();
    }
}).mount('#app')