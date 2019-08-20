<?php echo $this->load->view('frontend/includes/header'); ?>
<div class="wrapper">
    <div class="container">        
        <div class="col-md-10">
            <div class="heading-sec">
                <h1><?php echo "Permissions" ?></h1></br>               
                <button style="float: right;"><a  href="<?php echo SITE_URL.'aclController/showPermissionForm/' ?>"> Add new Permission </a></button>
            </div>
        </div>
        <div id="content" class="col-lg-10 col-sm-10">      
            <!-- content starts -->
			<div class="row">
                <div class="box col-md-12">
                    <div id="mydivs">   
                        <?php if($this->session->flashdata('msg')): ?>
                        <p style="color:green"><?php echo $this->session->flashdata('msg'); ?></p>
                        <?php endif; ?>
                    </div>
  
                    <div class="box-inner">   
                        <div class="box-content">    
	                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="tblData">
                                <thead>
                                <tr>
                                    <th>Permission name</th>              
                                    <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(!empty($permission)) { ?>
                                        <?php foreach( $permission as $data ) { ?>				
                                            <tr>
                                                <td><?php echo $data->permName;?> </td>	
                                                <td class="center">                                                          
                            <a  href="<?php echo SITE_URL.'aclController/editPermissionForm/'.$data->permId; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
        <a  href="<?php echo SITE_URL.'aclController/deletePermission/'.$data->permId;; ?>"><button class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-trash"></span></button></a>
                                    </td>       
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php echo "All records are empty!!!";?>
                                    <?php } ?>
                                </tbody>
                             </table>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div><!--/row-->       
        </div>       
    </div>
    <!-- Container -->
</div>
<!-- Wrapper -->
</body>
</html>

<script>
    $(document).ready(function(){
        setTimeout(function() {
                $('#mydivs').hide('fast');
            }, 1000);
    })
</script>