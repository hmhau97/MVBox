<?php
	include("module/connectdatabase.php");
?>  

<div class="thong_ke">
				<div id="TabbedPanels1" class="TabbedPanels">
         <!-- <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0" style="padding-left:25px;padding-right:25px;padding-top:10px;padding-bottom:10px;">Phim Hoạt Hình</li>                          
            </ul>-->
			
                        <div class="TabbedPanelsContentGroup">
                          <div class="TabbedPanelsContent">
                            <div class="group-title-bg"> <div class="group-title"><span class="title1"><a href="/phim-bo.html" style="display: inline-block;
    padding:10px;color: #fff;
    font-weight: bold;width: auto;
    font-size: 15px;font-family: 'Roboto', sans-serif;text-decoration: none;">Phim hoạt hình</a></span><span class="action"><a href="?view=movie_list&kind_id=8" class="viewmore" style="width:auto;float: right;
    padding-right: 15px; font-size: 11px; text-transform: uppercase;
    color: #F39B13;font-weight:bold;text-decoration:none;padding:10px;">Xem tất cả</a></span> </div> </div>
						  <?php
							$sql="SELECT movies.* FROM movies,movie_kind_names WHERE movies.kind_id=movie_kind_names.id AND movie_kind_names.id=8 ORDER BY movies.id DESC LIMIT 0,10";
							$kq=mysqli_query($conn,$sql);
							$p=1;
							while($row=mysqli_fetch_array($kq)){
								
						  ?>
                       		<div class="hot"><a href="?view=detail_movie&id=<?=$row['id']?>"><img class="img_hot" src=<?=$row['images'];?>>
							<span class="label-range1"> <?php echo $p;?> </span>							
                   	  			<div class="ten_hot" >
                                  <p style="font-weight:normal;font-size: 15px;color: #F5CC29;font-family: 'Roboto', sans-serif;"><?=$row['name_english'];?></p> 
                                    <p style="font-weight:normal;font-size: 12px;color: #9B9B9B;font-family: 'Roboto', sans-serif;"><?=$row['name']?></p> 
                            </div>
                                <div class="clear"></div>
                                </a>
                            </div> <!--ket thuc hot-->
							<?php
							$p++;
							}
							?>
                            
                            
                           
               			  </div>
                          		<!--ket thuc tab1-->
                         
                        </div>			
			  </div>
            </div>