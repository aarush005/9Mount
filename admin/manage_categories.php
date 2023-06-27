<?php include('../admin/header.php');
$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=get_safe_value($con,$_GET['id']);
    $res=mysqli_query($con,"select * from categories where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
        $categories=$row['categories'];
    }else{
        header('location:../admin/categories.php');
        die();
    }
   
}
if(isset($_POST['submit'])){
    $categories=get_safe_value($con,$_POST['categories']);
    $res=mysqli_query($con,"select * from categories where categories='$categories'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getDATA=mysqli_fetch_assoc($res);
            if($id==$getDATA['id']){

            }else{
                $msg="Category already exists!";
            }
        }
        
    }
    if($msg==''){
      
            if(isset($_GET['id']) && $_GET['id']!=''){
                mysqli_query($con,"UPDATE categories set categories='$categories' where id='$id'");
            }else{
                mysqli_query($con,"INSERT INTO categories(categories,status)values('$categories','1')");
            }
            echo "<meta http-equiv='refresh' content=';url=categories.php'>";
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

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Add Categories</label>
                <input type="text" class="form-control" name="categories" placeholder="Enter Category Name" value="<?php echo $categories?>"  required>
                
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