<!DOCTYPE html>
<head>
	<title>Food App</title>
	<link href = "css/bootstrap.css" rel = "stylesheet" type="text/css">
	<style>
		body {
			background-color:#F8F8F8;
			}
		.c1{
			width:15%;
			height:100%;
			float:left;
			}
		.c2{
			width:85%;
			height:100%;
			float:right; 
			border-left: 1px solid gray;
			}
		#ingred{
			background-color:#1E90FF;
			height:20%;
			}
	</style>
</head>
<body bgcolor="gray">
    <div>
	  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
		<div style="width:15%">
		<a class="navbar-brand" href="#"><font color="white">Food App</font></a>
		</div>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<input class="form-control mr-sm-2" type="search" placeholder="Search">
			<button class="btn-default" type="submit">Search</button>
		</div>
	  </nav>		  
    </div>
	
	<div>
        <div class="c1">
		  <div class="container">
			<br>
			Food<br>
			 <a href="#">Add New Food</a><br>
			 <a href="#">List of All Food</a><br>
			<br>
			Items<br>
			 <a href="#">Add New Items</a><br>
			 <a href="#">List of All Items</a>
		  </div>
		</div>
       
	    <div class="c2">
		  <div class="container">
			<br>
			<h3>Add New Item</h3>
			<hr>
            <form>
				<div class="row">
				  <div class="col">
					<h6>Select Category</h6>
					<select class="form-control">
					  <option>Choose..</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					</select>
				  </div>
				  <div class="col">
					<h6>Name</h6>
				 	<input type="text" class="form-control">
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Description</h6>
					<input type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Item Type</h6>
				 	<select class="form-control">
					  <option>Choose..</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					</select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Status</h6>
					<select class="form-control">
					  <option>Choose..</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					</select>
				  </div>
				  <div class="col">
					<h6>Image</h6>
				 	<input type="file" class="form-control">
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Sort Order</h6>
					<input type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Quantity</h6>
				 	<input type="text" class="form-control">
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Final Weight</h6>
					<input type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Weight(gms,kg,pound,stone)</h6>
				 	<select class="form-control">
					  <option>Choose..</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					</select>
				  </div>
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<h6>Preparation Time</h6>
					<input type="text" class="form-control">
				  </div>
				  <div class="col">
					<h6>Portion(small,medium,large)</h6>
				 	<select class="form-control">
					  <option>Choose..</option>
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					</select>
				  </div>
				</div>
				<br>
				<h3>Ingredients</h3>
				<h6>Search and add ingredients to the recipe</h6>
				<br>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Ingredient">
					
				</div>
				<br>
				Ingredient
				<div class="container" id="ingred">
					<br>
					<div class="row">
				    	<div class="col">
						  <input type="text" class="form-control" placeholder="Search Food">
						</div>
						<div class="col">
							<select class="form-control">
								<option>Choose..</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="col">
							<select class="form-control">
								<option>Choose..</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
					</div>
					<br>
					<table class="table table-striped">
						<tr>
							<td>#</td>
							<td>Name</td>
							<td>Source</td>
							<td>Energy</td>
							<td>Fat</td>
							<td>Carbohydrate</td>
							<td>Protien</td>
							<td>Action</td>
						<tr>
						
						
					</table>
				</div>
				<br>
				
				<h3>Cooking Method</h3>
				<h6>Give instructions to prepare this recipe</h6>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">1</span>
					</div>
					<input type="text" class="form-control">
					
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">2</span>
					</div>
					<input type="text" class="form-control">
					
				</div>
				<br>
				<div class="row">
				  <div class="col">
					<button class="btn-primary" type="button">Submit</button>
				  </div>
				</div>
			</form>
        </div>     
	  
	</div>  
	
</body>
</html>