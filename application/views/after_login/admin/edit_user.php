<?php 

$data = $this->data["data"];

?>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <?php echo $this->load->view("navigation");?>
            
        </nav>

        <div id="page-wrapper" style="min-height:600px">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $this->data["title"];?>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                
                    <?php if($this->session->flashdata("message")) { ?>
                    
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?php echo $this->session->flashdata("message");?>
                        </div>
                    </div>
                    
                    <?php } ?>
                    
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-6">
                        
                       <form role="form" action="<?php echo base_url();?>index.php/admin/update/user/<?php echo $data['id'];?>" method="POST" enctype="multipart/form-data">
                          
                                       
                          <div class="form-group">
                                <label>First Name :</label>
                                <input  type="text" name="fname" class="form-control" placeholder="First Name" value='<?php echo $data["fname"];?>'>
                          </div>
                          
                          <div class="form-group">
                                <label>Last Name :</label>
                                <input  type="text" name="lname" class="form-control" placeholder="Last Name" value='<?php echo $data["lname"];?>'>
                          </div>
                                               
                          <div class="form-group">
                                <label>Email Address :</label>
                                <input  type="text" name="email" class="form-control" placeholder="Email Address" value='<?php echo $data["email"];?>' readonly>
                          </div>
                          
                          <div class="form-group">
                                <label>Address :</label>
                                <input  type="text" name="address" class="form-control" placeholder="Address" value='<?php echo $data["address"];?>'>
                          </div>
                          
                          <div class="form-group">
                                <label>City :</label>
                                <input  type="text" name="city" class="form-control" placeholder="City" value='<?php echo $data["city"];?>'>
                          </div>
                          
                          <div class="form-group">
                                <label>Postal Code :</label>
                                <input  type="text" name="postal_code" class="form-control" placeholder="Postal Code" value='<?php echo $data["postal_code"];?>'>
                          </div>
                          
                          <div class="form-group">
                                <label>Phone :</label>
                                <input  type="text" name="phone" class="form-control" placeholder="Phone" value='<?php echo $data["phone"];?>'>
                          </div>
                          
                          <div class="form-group">
                                <label>User Image :</label>
                                <img src="<?php echo base_url();?>upload/user/<?php echo $data['image'];?>" class="item-image"/>
                          </div>
                          
                          <div class="form-group">
                                <label>Change Image :</label>
                                <input type="file" name="imgfile">
                          </div>
                          
                          <input type="submit" value="Submit" name="submit" class="btn btn-default"/>
                          <button type="reset" class="btn btn-default">Reset Button</button>
                          
                       </form>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" style="height:20px">
                    
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    
</body>
