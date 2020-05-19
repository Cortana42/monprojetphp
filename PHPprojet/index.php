<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Inscription</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-white text-center py-4"> Bienvenue</h3>
                        </div>
                        <div class="card-body">

                            <form action="insert.php" method="post">
                                <input type="text" class="form-control mb-3" placeholder=" Username " name="name">
                                <input type="email" class="form-control mb-3" placeholder=" Email " name="email">
                                <input type="text" class="form-control mb-3" placeholder=" Âge " name="age">
                                <button class="btn btn-primary " name="submit">S'inscrire</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>