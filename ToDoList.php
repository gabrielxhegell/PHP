<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="col-md-5 mx-auto border border-secondary mt-3" style="border-radius: 10px;">
        <div class="container">
            <div class="row">
                <div class="col" style="display:flex; justify-content:center">
                    <img src="foto.jpg" alt="" style="width:50%; border-radius:10%;" class="m-3">
                </div>
                <div class="col mt-5 mb-0">
                    <p>Gabriel Hegel Pradana Nugraha</p>
                    <p>225314008</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah To Do    -->
    <div class="col-md-10 mx-auto border border-secondary mt-3 p-3" style="border-radius: 10px;">
        <h2 class=" mt-0">Buat To Do List</h2>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col">
                    <input type="text" id="inputTodo" class="form-control" placeholder="Input Text">
                </div>
                <div class="col-auto">
                    <button id="btnAdd" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
        <hr>

        <!-- To do -->
        <div class="container mt-5 ">
            <p class="">Daftar To Do</p>
            <div id="todoList" class="row pb-2">
                <!-- Daftar To Do akan ditambahkan di sini -->
            </div>
        </div>

    </div>
    <script>
        document.getElementById("btnAdd").addEventListener("click", function () {
            var todoInput = document.getElementById("inputTodo").value;
            if (todoInput.trim() !== "") {
                var todoItem = document.createElement("div");
                todoItem.className = "row pb-2";

                todoItem.innerHTML = `<div class="col">
                                        <input type="text" readonly class="form-control ToDo" value="${todoInput}">
                                      </div>
                                      <div class="col-auto">
                                        <button class="btn btn-primary btnDone">Selesai</button>
                                      </div>
                                      <div class="col-auto">
                                        <button class="btn btn-primary btnDelete">Hapus</button>
                                      </div>`;

                document.getElementById("todoList").appendChild(todoItem);
                document.getElementById("inputTodo").value = ""; // Kosongkan input setelah ditambahkan
            }
        });

        // Menambahkan event listener untuk tombol "Selesai"
        document.addEventListener("click", function (event) {
            if (event.target.classList.contains("btnDone")) {
                var todoText = event.target.closest(".row").querySelector(".ToDo");
                todoText.style.textDecoration = "line-through"; // Mengubah teks menjadi strikethrough
                event.target.disabled = true;

            }
        });

        // Menambahkan event listener untuk tombol "Hapus"
        document.addEventListener("click", function (event) {
            if (event.target.classList.contains("btnDelete")) {
                // Hapus parent div yang berisi ToDo item ketika tombol "Hapus" ditekan
                event.target.closest(".row").remove();
            }
        });
    </script>
</body>

</html>