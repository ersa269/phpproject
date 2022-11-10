


<div class="row">
<?php
session_start();
if($_SESSION["name"] ==null){
    header("location:index.php");

}
include("admin/confiq.php");
                $id=$_GET["catid"];
				$query=mysqli_query($con,"select *from form where Cat_id='$id'");
				while($row=mysqli_fetch_array($query))
				{
				?>
				
					
					<div class="col-lg-3 col-md-6">
					
						<div class="single-product">
							<img class="img-fluid" src="admin/images/<?php echo $row['Image']?>">

							<div class="product-details">
								<h6><a href="single-product.php?id=<?php echo $row["Id"] ?>"><?php echo $row['Description']?></a></h6>
								<div class="price">
							
									<h6>Rs.<?php echo $row['ProductPrice']?></h6>
									<h6 class="l-through">$210.00</h6>
					       </div>
								<div class="prd-bottom">

									<a href="cart.php?id=<?php echo $row["Id"]?>"<?php echo $row['ProductPrice']?> class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
                                    <a href="" class="social-info">
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<?php
			    } ?>
										