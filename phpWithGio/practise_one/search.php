<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // $value = post_data;
        // echo '<pre>';
        // var_dump($value);
        // echo '</pre>';    
        $username = post_data('username');
        $email= post_data('emali');
        $password = post_data('password');
        $repeat_password = post_data('repeat_password');
        $cv_link = post_data('cv_link');

        // echo '<pre>';
        // var_dump($value);
        // echo '</pre>'; 

}   
function post_data($field) {
        $_POST['field'] ??= '';
        return $_POST['field'];
}

?>
<body>

        <div class="content p-5">
        <form method="POST">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo post_data($username) ?>"> 
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Repeate Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="repeat_password">
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">CV Link</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" name="cv_link" aria-describedby="emailHelp">
                  </div>
                  <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>
