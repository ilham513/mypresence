<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap core CSS -->
	<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" >
	<link href="<?=base_url();?>css/style.css" rel="stylesheet" >    
	
	<style>
	.center {
	  margin: auto;
	  margin-top:100px;
	  width: 60%;
	  padding: 10px;
	  font-size: 18px;
	}
	td{
	  padding: 2px 2px;
	}
	.nunito{
	  font-family: 'Nunito', sans-serif;
	}
	
	body {
		background-color: #163a76;
		color: white;
		font-family: 'Open Sans', sans-serif;

		background: rgb(22,58,118);
		background: linear-gradient(94deg, rgba(22,58,118,1) 0%, rgba(34,92,187,1) 100%); 
	}
	
	h4{
	  font-size: 24px;
	}
	
	</style>

  </head>
  <body>

<section class="vh-100 gradient-custom">
  <div class="container pt-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mt-md-4 pb-4">

              <h2 class="fw-bolder mb-4 text-uppercase">Masuk</h2>
			  		  
			  <form method="post" action="<?=site_url('akun/login_go')?>">
				  <div class="form-outline form-white mb-2">
					<input type="text" name="id" id="typeEmailX" class="form-control" />
					<label class="form-label" for="typeEmailX">ID</label>
				  </div>

				  <div class="form-outline form-white mb-4">
					<input type="password" name="password" id="typePasswordX" class="form-control" />
					<label class="form-label" for="typePasswordX">Password</label>
				  </div>

				  <button class="btn btn-primary px-5" type="submit">Login</button>
			  </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

	
  </body>
</html>