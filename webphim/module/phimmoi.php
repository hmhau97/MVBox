<?php
	include("module/connectdatabase.php");
?>           

		   <div class="thong_ke"> 
		   <div>
		   <!--thong ke  top phim hot-->
		   
    			    <div id="TabbedPanels1" class="TabbedPanels" style="float:right;">
					
								
                                <ul class="TabbedPanelsTabGroup">
                                  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;font-size:14px;">PHIM BỘ </li>
                                  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;font-size:14px;">  PHIM LẺ  </li>
								  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;font-size:14px;">  PHIM CHIẾU RẠP  </li>
                                </ul>
                                <div class="TabbedPanelsContentGroup">
                                  <div class="TabbedPanelsContent">
								  <h1>PHIM BỘ MỚI</h1>
									<?php
										$sql="SELECT * FROM movies WHERE movies.id_loaiphim=1 ORDER BY movies.id DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$i=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
									
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"> 
										<span class="label-range1"> <?php echo $i;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:bold;"><?=$row['name_english'];?></p> 
                                            <p><?=$row['name'];?></p> 
											<p>Thời lượng: <?=$row['thoiluong'];?></p>
                                        </div>
                                        <div class="clear"></div>
                                        </a>
                                    </div> <!--ket thuc hot-->
									<?php
										$i++;
										}
									?>
                                    
                                   
									</div>
                                        <!--ket thuc tab1-->
                                  <div class="TabbedPanelsContent">  <!--thong ke phim moi cap nhat-->
								  <h1>PHIM LẺ MỚI</h1>
                                    <?php
										$sql="SELECT * FROM movies WHERE movies.id_loaiphim=2 ORDER BY movies.id DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$w=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
								 
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"  /> 
									<span class="label-range1"> <?php echo $w;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:bold;"><?=$row['name_english'];?></p> 
                                            <p><?=$row['name'];?></p> 
											<p>Thời lượng: <?=$row['thoiluong'];?></p>
                                      
                                        </div>
                                        <div class="clear"></div>
                                        </a>
                                    </div> <!--ket thuc hot-->
									<?php
									$w++;
										}
									?>
                                                            
                                  </div>
								  <div class="TabbedPanelsContent">  <!--thong ke phim moi cap nhat-->
								  <h1>PHIM CHIẾU RẠP MỚI</h1>
                                    <?php
										$sql="SELECT * FROM movies WHERE movies.id_loaiphim=3 ORDER BY movies.id DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$j=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
								 
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"  /> 
									<span class="label-range1"> <?php echo $j;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:bold;"><?=$row['name_english'];?></p> 
                                            <p><?=$row['name'];?></p> 
											<p>Thời lượng: <?=$row['thoiluong'];?></p>
                                         
                                        </div>
                                        <div class="clear"></div>
                                        </a>
                                    </div> <!--ket thuc hot-->
									<?php
									$j++;
										}
									?>                      
                                  </div>
                                        <!--ket thuc tab 2-->	
                                </div>			
              </div>
			  </div>
       	    </div>
                 <!--/*  kết thúc thông kê*/-->
                <!--/*  kết thúc thông kê*/-->
        