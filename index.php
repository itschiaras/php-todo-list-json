<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>ToDo List</title>
</head>
<body class="bg-primary-subtle">
    <div id="app">
        <div class="text-center mt-5">
        <h1>{{title}}</h1>
        </div>
        
       

        <section class="add-toDo mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <input @keyup.enter="updateList" type="text" class="form-control" placeholder="Inserisci una cosa da fare" aria-describedby="button-add" v-model="newToDo">
                            <button class="btn btn-primary" type="button" id="button-add" @click="updateList">Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="w-50 mx-auto">
        <ul class="list-unstyled">
            <li v-for="(toDo, index) in toDoList" :key="index" class="border border-primary mb-2">
                {{toDo.text}}
            </li>
        </ul>
        </div>
        
    </div>



    <script src="js/script.js"></script>
</body>
</html>