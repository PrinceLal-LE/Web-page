<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>   
<div class="container">
    <div class="col-md-12 mb-3 mt-3">
    <div class="card">
        <div class="card-header"><b>CONTACT US</b></div>
        <div class="card-body">
            <form action="sendmail.php" method="POST"> 
                    <div class="form-group">
                        <label> Name </label>
                        <input type = "text" name="name" class="form-control" placeholder="Enter Name of User">
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label> Email </label>
                        <input type = "email" name="email" class="form-control" placeholder="Enter Email of User">
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <label> Message </label>
                        <textarea  name="message" class="form-control" placeholder="Enter Message"></textarea>
                    </div>
                    <input type = "submit" class="btn btn-success" name="submit" class="form-control" value="Submit">
            </form>
        </div>
    </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>