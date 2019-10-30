<?php


session_start();
if($_SESSION==NULL)
{
	header('location:login.php');
}



include('header.php'); 

?>		<!--End header wrapper-->

        <!--Begin content wrapper-->
            <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="container">
            <div class="alumni-directory">
                                <div class="top-section">
                    <div class="row">
                        <div class="title-page text-left col-md-6 col-sm-12 col-xs-12">
                            <h4 class="text-regular">Alumni Directory</h4>
                        </div>
                        <div class="search-alumni-directory text-right col-md-6 col-sm-12 col-xs-12">
                            <form class="navbar-form no-margin no-padding" action="/">
                                <input type="text" name="q" class="form-control input-search" value="" placeholder="Keywords (e.g. name, city, school...)" autocomplete="off">
                                <button type="submit" class=" bg-color-theme text-center text-regular">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                                <div class="alumni-directory-content">
                    <ul class="list-item">
                        <li class="label-content">
                            <span class="user " style="padding-left:5px;">Name</span>
                            <span class="year">Email ID</span>
                            <span class="city">Diploma/Degree</span>
                            <span class="scholl">Location</span>
                            
                            <span class="company">Company</span>
                            <span class="profile">Profile</span>
                        </li>
						<?php
						include('../gentelella-master/production/oops_query.php');

	$result = $obj->fetch_record("registration");
	while($row=mysqli_fetch_array($result))
	{
		?>
        <li class="box-content">
                                        <span class="user">
										<a href="alumni_profile.php?view_astudent=1&id=<?php echo $row['id'];?>" ><img src="../gentelella-master/production/alumni_upload/<?php echo $row['email'];?>/<?php echo $row['img'];?>" sizes="(max-width: 128px) 100vw, 128px"></a>
                                        <span class=" col-lg-4"><a href="" ><?php echo $row['username'];?></a></span></span>
                                        <span class="year"><?php echo $row['email'];?></span>
                                        <span class="city"><?php echo $row['class'];?></span>
                                        <span class="department"><?php echo $row['city'];?></span>
                                        <span class="department"><?php echo $row['company'];?></span>
                                        <span class="department"><?php echo $row['profile'];?></span>
						</li>
		<?php
	}

?>
						

                        
                                    
								
                                                                 
                                                    </ul>
                </div>
                <div class="pagination-wrapper"><ul class="pagination"><li><span class='page-numbers current'>1</span></li><li><a class='page-numbers' href=''>2</a></li><li><a class='page-numbers' href=''>3</a></li><li><a class="next page-numbers" href="">Next&nbsp;&nbsp;&nbsp;</a></li></ul></div>            </div>
        </div>
                
        </div>
    </div>
    <!--End content wrapper-->
<?php 
	include_once('footer.php');
?>

    
                <!-- #primary -->
</div><!-- #content -->

<!--Begin footer wrapper-->
<!--End footer wrapper-->


	
</body>
</html>
