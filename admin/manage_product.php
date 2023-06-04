<?php include('../admin/header.php');
$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$short_desc='';
$description='';
$meta_title='';
$meta_desc='';
$meta_keyword='';

 
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($con,$_GET['id']);
    $res=mysqli_query($con,"SELECT * from product where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        mysqli_query($con,"UPDATE product set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',short_desc='$short_desc',description='$description',meta_title='$meta_title', meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'");
        $row=mysqli_fetch_assoc($res);
        $categories_id=$row['categories_id'];
        $name=$row['name'];
        $price=$row['price'];
        $qty=$row['qty'];
        $short_desc=$row['short_desc'];
        $description=$row['description'];
        $meta_title=$row['meta_title'];
        $meta_desc=$row['meta_desc'];
        $meta_keyword=$row['meta_keyword'];
         
    }else{
        header('location:../admin/product.php');
        die();
    }
   
}
if(isset($_POST['submit'])){
    $categories_id=get_safe_value($con,$_POST['categories_id']);
    $name=get_safe_value($con,$_POST['name']);
    $mrp=get_safe_value($con,$_POST['mrp']);
    $price=get_safe_value($con,$_POST['price']);
    $qty=get_safe_value($con,$_POST['qty']);
    $short_desc=get_safe_value($con,$_POST['short_desc']);
    $description=get_safe_value($con,$_POST['description']);
    $meta_title=get_safe_value($con,$_POST['meta_title']);
    $meta_desc=get_safe_value($con,$_POST['meta_desc']);
    $meta_keyword=get_safe_value($con,$_POST['meta_keyword']);
   



    $res=mysqli_query($con,"select * from product where name='$name'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getDATA=mysqli_fetch_assoc($res);
            if($id==$getDATA['id']){

            }else{
                $msg="Product already exists!";
            }
        }
        
    }
    if($msg==''){
      
            if(isset($_GET['id']) && $_GET['id']!=''){
                mysqli_query($con,"UPDATE product set categories_id='$categories_id',name='$name',mrp='$mrp', price='$price',qty='$qty',short_desc='$short_desc',description='$description', meta_title='$meta_title',meta_desc='$meta_desc',meta_keyword='$meta_keyword' where id='$id'");
            }else{
                $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'../admin/assets/images/product/'.$image);
                mysqli_query($con,"INSERT INTO product(categories_id,name,mrp,price,qty,short_desc,description,meta_title,meta_desc,meta_keyword,status,image)values('$categories_id','$name','$mrp','$price','$qty','$short_desc','$description','$meta_title','$meta_desc','$meta_keyword',1,'$image')");
            }
            header("Location:product.php");
            die();
    }
}?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Manage categories</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Manage Categories</a></li>
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

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Add Category</label>
                <select class="form-control" name="categories_id" id="">
                    <option value="">Select Category</option>
                    <?php 
                    $res=mysqli_query($con,"SELECT id,categories from categories order by categories asc ");
                    while($row=mysqli_fetch_assoc($res)){
                        if($row['id']==$categories_id){
                            echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
                        }else{
                            echo "<option value=".$row['id'].">".$row['categories']."</option>";
                        }
                       
                    }
                    ?>
                </select>
                
            </div>
            <div class="mb-3">
                <label class="form-label">Add product</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $name?>"  required>  
            </div>
            <div class="mb-3">
                <label class="form-label">
                    MRP</label>
                <input type="text" class="form-control" name="mrp" placeholder="Enter Product MRP" value="<?php echo $mrp?>"  required>  
            </div>
            <div class="mb-3">
                <label class="form-label">Add product Price</label>
                <input type="text" class="form-control" name="price" placeholder="Enter Product Price" value="<?php echo $price?>"  required>  
            </div>
            <div class="mb-3">
                <label class="form-label">Add Product Qty</label>
                <input type="text" class="form-control" name="qty" placeholder="Enter Product Oty" value="<?php echo $qty?>"  required>  
            </div>
            <div class="mb-3">
                <label class="form-label">Add product Image</label>
                <input type="file" class="form-control" name="image" placeholder="Enter Product image" value="<?php echo $image?>"  required>  
            </div>
            <div class="mb-3">
                <label class="form-label">Short Description</label>
                <textarea name="short_desc" class="form-control"  placeholder="Enter Product short description" required><?php echo $short_desc?></textarea>    
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea  class="form-control" name="description" placeholder="Enter Product description"  required><?php echo $description?></textarea> 
            </div>
            <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <textarea  class="form-control" name="meta_title" placeholder="Enter Product meta title"  required><?php echo $meta_title?></textarea> 
            </div>
            <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea  class="form-control" name="meta_desc" placeholder="Enter Product meta description"  required><?php echo $meta_desc?></textarea> 
            </div>
            <div class="mb-3">
                <label class="form-label">Meta Keyword</label>
                <textarea  class="form-control" name="meta_keyword" placeholder="Enter meta keyword" required><?php echo $meta_keyword?></textarea>
            </div>
            
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <div class="field_error"><?php echo $msg?></div>
        </form>
    </div>
</div>





<!-- Required Js -->
<?php include('../admin/footer.php'); ?>



</body>

</html>