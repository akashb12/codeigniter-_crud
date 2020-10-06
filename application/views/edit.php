<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
    <div class="container">
    <a href="#~!" class="navbar-brand">CRUD APPLICATION</a></div>
    </div>
    <div class="container" style="padding-top:10px;">
    <div class="row">
    <div class="col-6"><h3>Update User</h3></div>
    <div class="col-6"><a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-primary">View</a></div>
    </div>
    <form method="post" name="createUser" action="<?php echo base_url(). 'index.php/user/edit/'.$user['user_id']; ?>">
    <div class="row">
    
    <div class="col-md-6">
    <div class="form-group">
    <label>Name </label>
    <input type="text" name="name" class="form-control" value="<?php echo set_value('name',$user['name']); ?>">
    <?php echo form_error('name')  ?>
    </div>
    <div class="form-group">
    <label>Email </label>
    <input type="text" name="email" class="form-control" value="<?php echo set_value('email',$user['email']); ?>">
    <?php echo form_error('email')  ?>
    </div>
    <div class="form-group">
    <button class="btn btn-primary">Update</button>
    <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-secondary">Cancel</a>
    </div>
    </div>
    
    </div>
    </form>
    </div>
</body>
</html>