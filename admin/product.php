<?php include('header.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($con,$_GET['operation']);
		$id=get_safe_value($con,$_GET['id']);
		if($operation=='active') {
			$status='1'; 
	}else{
		$status='0';
	}
	$update_status_sql="UPDATE product set status='$status' WHERE id='$id'";
	mysqli_query($con,$update_status_sql);
}
	if($type=='delete'){
		
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="DELETE FROM product WHERE id='$id'";
	    mysqli_query($con,$delete_sql);
}
}


$sql ="SELECT product.*,categories.categories FROM product,categories  WHERE product.categories_id=categories.id ORDER BY product.id desc";
$res=mysqli_query($con,$sql);
?>



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Products</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Hello card</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum."
                        </p>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
		<table class="table align-middle mb-0 bg-white">
			<thead class="bg-light">
			  <tr>
				<th class="ml-5">#</th>
				<th>Id</th>
				<th >Categories</th>
				<th>Name</th>
				<th>Image</th>
				<th>MRP</th>
				<th>Price</th>
				<th>QTY</th>
			  </tr>
			</thead>
			<tbody>
				<?php $i=1;
				while($row=mysqli_fetch_assoc($res))
                {?>
			  <tr>
				<td class="serial"><?php echo $i?></td>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['categories']?></td>
				<td><?php echo $row['name']?></td>
				<td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image']?>" style="width: 100px; height:100px;"/></td>
				<td><?php echo $row['mrp']?></td>
				<td><?php echo $row['price']?></td>
				<td><?php echo $row['qty']?></td>
				<td>
					<?php 
					if($row['status']==1){
						echo "<button class='btn btn-success'><a href='?type=status&operation=deactive&id=".$row['id']."' class='text-light'>Active</a></button>&nbsp;";
					}else{
						echo "&nbsp;<button class='btn btn-secondary text-light'><a href='?type=status&operation=active&id=".$row['id']."' class='text-light'>Deactive</a></button>&nbsp";
					}
					echo "&nbsp;<button class='btn btn-danger'><a href='?&id=".$row['id']."' class='text-light'>Delete</a></button>&nbsp;";

					echo "&nbsp;<button class='btn btn-primary'><a href='manage_product.php?type=delete&id=".$row['id']."' class='text-light'>Edit</a></button>";
				}
					?>
				
				</span>
				</td>
				
			  </tr> 
				
			</tbody>
		  </table>  
		  <a href="manage_product.php"><button type="button" class="btn btn-primary"> Add Products</button></a>
    </div>
</div>
    <!-- Required Js -->
<?php include('../admin/footer.php');?>



</body>

</html>
