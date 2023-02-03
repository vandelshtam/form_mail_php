
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Отправка формы на почту </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style>
form {
    background-color: #f9f9f9;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>

<body>
<div class="container">

    <div class="row">
        <div class="col-sm-4">
            <form action="send.php" method="POST">
                <legend>Header form</legend>

                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" id="" name="user_name" placeholder="you name">
                </div>

                <div class="form-group">
                    <label for="">Number phone</label>
                    <input type="text" class="form-control" id="" name="user_phone" placeholder="+7 (999) 99 99 999">
                </div>

                <div class="form-group">
                    <label for="">Input email</label>
                    <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail">
                </div>

                <div class="form-group">
                    <label for="">input message</label>
                    <textarea type="textarea" class="form-control" id="" name="user_textarea" placeholder="you text">you text</textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto rounded-pill">Send form</button>
            </form>
        </div><!-- .col-sm-4 -->
    </div> <!-- .row -->

</div><!-- /.container -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
