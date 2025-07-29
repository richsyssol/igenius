<?php include 'includes/session.php';?>
<?php include 'header.php'?>
<?php include 'left-menu.php'?>
<?php include 'includes/config.php';?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dahboard</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Invoice</h4>
                        </div>
                    </div>
                </div>     
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <div class="float-start">
                                        <div class="auth-logo">
                                            <div class="logo logo-dark">
                                                <span class="logo-lg">
                                                <img src="assets/images/BW%20LOGO_.png" alt="" width="200">
                                                </span>
                                            </div>
                                            <div class="logo logo-light">
                                                <span class="logo-lg">
                                                <img src="assets/images/BW%20LOGO_.png" alt="" width="200">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <h4 class="m-0 d-print-none">Invoice</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3">
	                                    <?php
                                        $id=intval($_GET['id']);
                                        $query=mysqli_query($conn,"select sales.*,sales.id from sales where sales.id='$id'");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <p><b>Hello, <?php echo htmlentities($row['first_name']);?> <?php echo $row['last_name'];?></b></p>
                                        <?php } ?>
                                       <ul>
                                                    <li class="theme-color">Bake Wonders </li>
                                                    <li>Hari Nakshtra, Shop No 5. Opp. </li>
                                                    <li> Gurudwara, Near LIC Office, </li>
                                                    <li> Nashik Road-422101</li>
                                                </ul>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-4 offset-md-2">
                                        <div class="mt-3 float-end">
                                        <?php
                                        $id=intval($_GET['id']);
                                        $query=mysqli_query($conn,"select sales.*,sales.id from sales where sales.id='$id'");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <p><strong>Order Date : </strong> <span class="float-end"> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo htmlentities($row['sales_date']);?></span></p> 
                                                <?php 
                                            if($row['status'] == 'Delivered')
                                            {
                                            ?>
                                        <p><strong>Order Status : </strong> <span class="float-end"><span class="badge bg-danger"><?php echo htmlentities($row['status']);?></span></span></p>
                                        <?php } ?>
                                        <p><strong>Order No. : </strong> <span class="float-end"><?php echo htmlentities($row['orderid']);?> </span></p>
                                        <?php } ?>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <h6>Shipping Address</h6>
                                        <?php
                                        $id=intval($_GET['id']);
                                        $query=mysqli_query($conn,"select sales.*,sales.id from sales where sales.id='$id'");
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
                                        <address>
                                        <?php echo htmlentities($row['first_name']);?> <?php echo $row['last_name'];?><br>
                                        <?php echo htmlentities($row['address']);?> <?php echo htmlentities($row['city']);?> <?php echo htmlentities($row['pincode']);?><br>
                                        <?php echo htmlentities($row['state']);?> ,<?php echo htmlentities($row['country']);?>  <br>
                                        </address>
                                        <?php } ?>
                                    </div> <!-- end col -->
                                </div> 
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table mt-4 table-centered">
                                                <thead>
                                                    <tr>
                                                    <th style="width: 01%">#</th>
                                                    <th style="width: 25%">Product Name</th>
                                                    <th style="width: 25%">Size </th>
                                                    <th style="width: 10%">Quantity</th>
                                                    <th style="width: 10%">Product Price</th>
                                                   
                                                    <th style="width: 10%" class="text-end">Total</th>
                                                    </tr>
                                                </thead>
                                            <tbody>
                                             <?php
                                        $id=intval($_GET['id']);
                                        $query=mysqli_query($conn,"SELECT details.*,details.id as did,details.quantity,details.product_id,products.name from details join products on products.id=details.product_id where details.sales_id='$id'");
                                        $cnt=1;
                                        while($row=mysqli_fetch_array($query))
                                        {
                                        ?>
	                                                <tr>
                                            			<td><?php echo $cnt++; ?></td>
                                            			<td><?php echo mb_strimwidth($row['name'], 0, 40, "..."); ?></td>
                            			
                                            			<td></td>
                            		
                                            				<td> <?php echo $row['quantity'];?></td>
                                            			<td>₹ <?php echo number_format($row['price'], 2);?></td>
                                            			
                                            			<td class='text-end'>₹  <?php echo number_format($row['price']*$row['quantity']+$row['shipping_charges'], 2);?></td>
                                            		</tr>
                                            		<?php 
                                            	}
                                            		$output['total'] = '';
                                            		$pdo->close();
                                            		//echo json_encode($output);
                                            	?>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive -->
                                    </div> <!-- end col -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="clearfix pt-5">
                                            <h6 class="text-muted">Notes:</h6>
                                            <small class="text-muted">
                                                All accounts are to be paid within 7 days from receipt of
                                                invoice. To be paid by cheque or credit card or direct payment
                                                online. If account is not paid within 7 days the credits details
                                                supplied as confirmation of work undertaken will be charged the
                                                agreed quoted fee noted above.
                                            </small>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="float-end">
                                            <?php
                                $id=intval($_GET['id']);
                                $query=mysqli_query($conn,"select sales.*,sales.id as did from sales where sales.id='$id'");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>
                                            <p><b>Sub Total:</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; ₹ <?php echo $row['subtotal'];?></span></p>
                                           <?php } ?>
                                            <?php
                                $id=intval($_GET['id']);
                                $query=mysqli_query($conn,"select sales.*,sales.id as did from sales where sales.id='$id'");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>
                                            <p><b>Shipping Charges:</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; ₹ <?php echo $row['shipping_charge'];?></span></p>
                                           <?php } ?>
                                            <?php
                                $id=intval($_GET['id']);
                                $query=mysqli_query($conn,"select sales.*,sales.id as did from sales where sales.id='$id'");
                                while($row=mysqli_fetch_array($query))
                                {
                            ?>
                                            <p><b>Total Purchase:</b> <span class="float-end"> &nbsp;&nbsp;&nbsp; ₹ <?php echo $row['subtotal']+$row['shipping_charge'];?></span></p>
                                           <?php } ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-end">
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->
                            </div>
                            <div class="mt-4 mb-1">
                                <div class="text-end d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer me-1"></i> Print</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
<!-- Footer Start -->
<?php include("footer.php"); ?>