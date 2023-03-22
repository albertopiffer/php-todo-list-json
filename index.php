<!-- <?php
    echo "Hello, World!";
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
    >
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
    >
    </script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://kit.fontawesome.com/c517704bb6.js" crossorigin="anonymous"></script>

</head>
<<body>
    
    <div id="app">
			<section class="py-5">
				<div class="container">
					<h2>TODOLIST</h2>
				</div>
				<div class="container py-3">
					<div class="mb-3 row">
						
						<div class="col">
							<input
								type="text"
								class="form-control"
								id="inputPassword"
								placeholder="Nuova cosa da fare..."
								v-model="inputValue"
								@keyup.enter="addTask"
							/>
						</div>
						<div class="col-auto">
							<button @click="addTask" class="btn btn-primary">Aggiungi</button>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="card">
						<ul class="list-group list-group-flush">
							<li	
                            
							@click="invertiDone(task)"
							v-for="(task,index) in tasks"
                            class="list-group-item d-flex justify-content-between"							
							:class="{ 'text-decoration-line-through': task.done }"
                            >                           

								{{ task.text }}

                                <div
                                @click.stop="removeTask(index)"
                                class="px-2 border border-secondary" 
                                >
                                <i class="fa-solid fa-xmark"></i>
                                </div>

							</li>
                            
						</ul>
					</div>
				</div>
			</section>
		</div>

		<script src="./app.js"></script>

</body>
</html>
