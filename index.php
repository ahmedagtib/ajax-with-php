<?php include 'connect.php'; ?>
<?php include 'header.php'; ?>
<div class="container">
 <div class="card mt-4">
 	<div class="card-header text-center">
 		 gestion contact
 	</div>
 	<div class="card-body">
 		<div class="msg"></div>
 		
 			<div class="form-group">
 				<input type="hidden" name="id" id="id">
 				<input type="text" class="form-control" name="name" id="name" placeholder="first name">
 			</div>
 			<div class="form-group">
 				<input type="text" class="form-control" name="prenom"  id="prenom" placeholder="last name">
 			</div>
 			<div class="form-group">
 				<input type="email" class="form-control" name="email" id="email" placeholder="email">
 			</div>
 			<div class="form-group">
 				<input type="tel" class="form-control"  name="tel" id="tel" placeholder="phone">
 			</div>
 			<button   class="btn btn-primary" id="btnadd">send</button>
 			<button  class="btn btn-warning" style="display: none;" id="btnupdate">update</button>
 		
 	</div>
 </div>
</div>
<div class="container">
	<div id="result">
		
	</div>
</div>
<?php include "footer.php"; ?>


