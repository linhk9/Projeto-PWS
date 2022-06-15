<main class="form-control w-100 m-auto mt-5">
        <?php
            if(isset($erro))
            {
                echo "Erro: " . $erro;
            }
        ?>
        <form action="./router.php?c=login&a=login" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

            <div class="form-floating">
                <input class="form-control" type="text" id="name" name="name" placeholder="Username"><br>
                <label for="name">Nome</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
        </form>
</main>