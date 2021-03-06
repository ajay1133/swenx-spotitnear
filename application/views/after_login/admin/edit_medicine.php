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
                        
                       <form role="form" action="<?php echo base_url();?>index.php/admin/update/medicine/<?php echo $data['id'];?>" method="POST" enctype="multipart/form-data">
                          
                                       
                          <div class="form-group">
                                <label>Medicine Name :</label>
                                <input  type="text" name="name" class="form-control" placeholder="Medicine Name" value="<?php echo $data['name'];?>">
                          </div>
                          
                          <div class="form-group">
                                <label>Medicine Description :</label>
                                <input  type="text" name="description" class="form-control" placeholder="Medicine Description" value="<?php echo $data['description'];?>">
                          </div>
                                               
                          <?php if(count($this->data["associated_data"]) > 0) { ?>
                          
                          <div class="form-group">
                                <label>Allot To Brand :</label>
                                <select name="brand_id">
                                 
                                <option value="">Select a brand</option>
                                   
                                <?php 
                                
                                foreach($this->data["associated_data"] as $key =>  $val) 
                                {
                                	  if($val["id"] != $data["brand_id"]) echo '<option value="'.$val["id"].'">'.$val["name"].'</option>';
                                	  if($val["id"] == $data["brand_id"]) echo '<option value="'.$val["id"].'" selected="selected">'.$val["name"].'</option>';
                                }
                                
                                ?>                                    
                                    
                                </select>
                          </div>
                          
                          <?php } ?>
                           
                          <div class="form-group">
                                <label>Medicine Amount :</label>
                                <input  type="text" name="amount" class="form-control" placeholder="Medicine Amount" value="<?php echo $data['amount'];?>">
                          </div>
                          
                          <div class="form-group">
                                <label>Medicine Image :</label>
                                <img src="<?php echo base_url();?>upload/medicine/<?php echo $data['image'];?>" class="item-image"/>
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
