	<div class="col-md-12 banner">
          <div class="card card-raised card-carousel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
				<?php
					include("module/connectdatabase.php");
					$sql="SELECT * FROM `movies` ORDER BY movies.id DESC LIMIT 0,1";
					$kq=mysqli_query($conn,$sql);
					
				?>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
				<?php while($row=mysqli_fetch_array($kq)){
				?>
				<div class="item active">
                    <a class="btn btn-primary btn-raised mybtn" data-toggle="modal" data-target="#myModal"><img class="slide" src=<?=$row['poster'];?> alt="Awesome Image" style="width:1140px;height:428px;"></a>
                    <div class="carousel-caption">
                     <h2 class="BC"><?=$row['name'];?></h2>
                    </div>
                  </div>
				  <?php
					}
				  ?>
				  <?php
					include("module/connectdatabase.php");
					$sql1="SELECT * FROM `movies` ORDER BY movies.id DESC LIMIT 1,3";
					$kq1=mysqli_query($conn,$sql1);
					while($row=mysqli_fetch_array($kq1)){
				?>
				<div class="item">
                    <a class="btn btn-primary btn-raised mybtn" data-toggle="modal" data-target="#myModal1"><img class="slide" src=<?=$row['poster'];?> alt="Awesome Image" style="width:1140px;height:428px;"></a>
                    <div class="carousel-caption">
                     <h2 class="BC"><?=$row['name'];?></h2>
                    </div>
                  </div>
				  <?php
					}
					
				?>
				
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                </a>
              </div>
            </div>
          </div>
        </div>




 