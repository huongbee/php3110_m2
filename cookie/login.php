<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
<body>
<div class="container">
<h3>Đăng nhập</h3>
    <form class="form-inline">
    <label class="sr-only" for="inlineFormInput">Name</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
    
    <label class="sr-only" for="inlineFormInputGroup">Username</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon">@</div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
    </div>

    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Remember me
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>