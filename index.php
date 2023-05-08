<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="./script.js"></script>
</head>

<body id="app">
    <h1 class="text-center pb-3">Things to do</h1>
    <main class="container d-flex flex-column justify-content-center align-items-center">
        <section id="add" class="card w-50">
            <div class="card-head text-center">
                <h3>Aggiungi Task</h3>
            </div>
            <form @submit.prevent="addTask" class="card-body d-flex justify-content-center align-items gap-2">
                <input v-model="newTask"  type="text"   >
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i></button>
            </form>
        </section>
        <section id="list" class="card w-50 mt-3">
            <ul class="px-5 py-2">
                <li  class=" p-2 my-1 border border-black list-unstyled d-flex justify-content-between" :class="{'bg-success': item.done}" v-for="item in list">
                    {{item.task}}
                    <button  class="border-0 bg-white" @click=""> <i class="fa-solid fa-trash-can pt-1 text-danger"></i></button>
                </li>
            </ul>
        </section>
    </main>
</body>

