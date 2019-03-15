<?php
	include("module/connectdatabase.php");
?>           

		   <div class="thong_ke"> 
		   <div>
		   <!--thong ke  top phim hot-->
		   <div class="group-title-bg"> <div class="group-title"><span class="title1" ><a href="/phim-bo.html" ></a></span> </div> </div>
		   
    			    <div id="TabbedPanels1" class="TabbedPanels" style="float:right;">
					
								
                                <ul class="TabbedPanelsTabGroup">
                                  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;">Hot Ngày  </li>
                                  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;">Hot Tuần  </li>
								  <li class="TabbedPanelsTab" tabindex="0" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:10px;margin-top: 6px;"> Hot Tháng  </li>
                                </ul>
                                <div class="TabbedPanelsContentGroup">
                                  <div class="TabbedPanelsContent">
									<?php
										$sql="SELECT * FROM movies ORDER BY view_day DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$i=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
									
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"> 
										<span class="label-range1"> <?php echo $i;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:normal;font-size: 15px;color: #F5CC29;font-family: 'Roboto', sans-serif;"><?=$row['name_english'];?></p> 
                                            <p style="font-weight:normal;font-size: 12px;color: #9B9B9B;font-family: 'Roboto', sans-serif;"><?=$row['name'];?></p> 
                                          <p style="font-weight:normal;font-size: 12px;color: #9B9B9B;font-family: 'Roboto', sans-serif;">Lượt xem: <?=$row['view_day'];?></p>
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
                                    <?php
										$sql="SELECT * FROM movies ORDER BY view_week DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$w=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
								 
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"  /> 
									<span class="label-range1"> <?php echo $w;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:bold;"><?=$row['name_english'];?></p> 
                                            <p><?=$row['name'];?></p> 
                                          <p>Lượt xem: <?=$row['view_week'];?></p>
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
                                    <?php
										$sql="SELECT * FROM movies ORDER BY view_mon DESC LIMIT 0,5";
										$kq=mysqli_query($conn,$sql);
										$j=1;
										while($row=mysqli_fetch_array($kq)){
											
									?>
								 
                                    <div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src="<?=$row['images'];?>"  /> 
									<span class="label-range1"> <?php echo $j;?> </span>
                                        <div class="ten_hot" >
                                          <p style="font-weight:bold;"><?=$row['name_english'];?></p> 
                                            <p><?=$row['name'];?></p> 
                                          <p>Lượt xem: <?=$row['view_mon'];?></p>
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
        