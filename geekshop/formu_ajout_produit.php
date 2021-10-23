<div class="main ">
				<div class="main-center">
					<form class="offset-4 pl-10" method="post" action="#" >
						<h2><?php echo $alert;?></h2>
						
						<div class="form-group">
							<label for="libelle">libelle</label>
								<div class="input-group">
									<span class="input-group-addon "><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control col-md-3" name="libelle" id="libelle"  placeholder="Entrer le libelle"/>
							</div>
						</div>

						<div class="form-group">
							<label for="quantite_mini">quantité minimal</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="quantite_mini" placeholder="Enter quantité minim"/>
							</div>
						</div>

						<div class="form-group">
							<label for="quantite_en_stock">quantité en stock</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="quantite_stock" placeholder="Enter quantité stocké"/>
								</div><br>

						<div class="form-group">
							<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<button type="submit" name="ajout"> ENREGISTRER</button>
						</div>
						</div>
					</div>

					
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->