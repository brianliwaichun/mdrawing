<link rel="stylesheet" type="text/css" href="../../bootstrap-3.1.1-dist/css/bootstrap.css">
<script src="../../bootstrap-3.1.1-dist/js/bootstrap.js"></script>
<script src="../../bootstrap-3.1.1-dist/js/jquery-2.1.0.js"></script>
<script src="../../bootstrap-3.1.1-dist/js/all.js"></script>
 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main">Bookshop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="register">User</a></li>
        <li><a href="member_register">Member</a></li>
		<li><a href="product_register">Product</a></li>
		<li><a href="Cashout">Review</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 </nav>

<form role="form" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter user name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php if($this->input->get('register') == 'success'){
			echo 'Staff register success';
		}else if($this->input->get('register') == 'fail'){
			echo 'User name has been used.';
		}
?>



