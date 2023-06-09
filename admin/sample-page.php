<?php include('../admin/header.php');?>
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Sample Page</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Sample Page</a></li>
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
				<th class="ml-5">Product</th>
				<th>Title</th>
				<th>Status</th>
				<th>Position</th>
				<th>Actions</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>
				  <div class="d-flex align-items-center ml-5">
					<img
						src="https://mdbootstrap.com/img/new/avatars/8.jpg"
						alt=""
						style="width: 75px; height: 75px"
						class="rounded-circle"
						/>
					<!-- <div class="ms-3">
					  <p class="fw-bold mb-1">John Doe</p>
					  <p class="text-muted mb-0">john.doe@gmail.com</p>
					</div> -->
				  </div>
				</td>
				<td>
				  <p class="fw-normal mb-1">Software engineer</p>
				  <p class="text-muted mb-0">IT department</p>
				</td>
				<td>
				  <span class="badge badge-success rounded-pill d-inline">Active</span>
				</td>
				<td>Senior</td>
				<td>
				  <button type="button" class="btn btn-link btn-sm btn-rounded">
					Edit
				  </button>
				</td>
			  </tr>
			  <tr>
				<td>
				  <div class="d-flex align-items-center ml-5">
					<img
						src="https://mdbootstrap.com/img/new/avatars/6.jpg"
						class="rounded-circle"
						alt=""
						style="width: 75px; height: 75px"						/>
					<!-- <div class="ms-3">
					  <p class="fw-bold mb-1">Alex Ray</p>
					  <p class="text-muted mb-0">alex.ray@gmail.com</p>
					</div> -->
				  </div>
				</td>
				<td>
				  <p class="fw-normal mb-1">Consultant</p>
				  <p class="text-muted mb-0">Finance</p>
				</td>
				<td>
				  <span class="badge badge-primary rounded-pill d-inline"
						>Onboarding</span
					>
				</td>
				<td>Junior</td>
				<td>
				  <button
						  type="button"
						  class="btn btn-link btn-rounded btn-sm fw-bold"
						  data-mdb-ripple-color="dark"
						  >
					Edit
				  </button>
				</td>
			  </tr>
			  <tr>
				<td>
				  <div class="d-flex align-items-center ml-5">
					<img
						src="https://mdbootstrap.com/img/new/avatars/7.jpg"
						class="rounded-circle"
						alt=""
						style="width: 75px; height: 75px"						/>
					<!-- <div class="ms-3">
					  <p class="fw-bold mb-1">Kate Hunington</p>
					  <p class="text-muted mb-0">kate.hunington@gmail.com</p>
					</div> -->
				  </div>
				</td>
				<td>
				  <p class="fw-normal mb-1">Designer</p>
				  <p class="text-muted mb-0">UI/UX</p>
				</td>
				<td>
				  <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
				</td>
				<td>Senior</td>
				<td>
				  <button
						  type="button"
						  class="btn btn-link btn-rounded btn-sm fw-bold"
						  data-mdb-ripple-color="dark"
						  >
					Edit
				  </button>
				</td>
			  </tr>
			</tbody>
		  </table> 
    </div>
	
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

	

    <!-- Required Js -->
<?php include('../admin/footer.php');?>



</body>

</html>
