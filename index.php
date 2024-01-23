<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="text-center my-3">Censura Badwords</h1>
    <div class="container">
        <div class="row">
            <form action="" method="GET" >
                <div class="col-12 d-flex">

                    <div class="col-6 m-3">
                        <h3 class="text-center my-3">Testo da inserire</h3>
                        <textarea class="form-control" name="testo" id="testo" cols="30" rows="3" placeholder="inserisci qui il testo" ></textarea>
                    </div>

                    <div class="col-6 m-3">
                        <h3 class="text-center my-3">Parola da censurare</h3>
                        <input type="text" name="parola" id="parola" class="form-control" placeholder="parola da censurare">
                    </div>                    

                </div>

                <div class="col-12 text-center">
                    <button type="submit" >invia</button>
                </div>

            </form>                    
        </div>
    </div>   
</body>
</html>