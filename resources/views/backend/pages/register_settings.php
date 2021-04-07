<div class="content-page">
        <div class="content">
            
            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb" class="float-right mt-1">
                            <ol class="breadcrumb">
                                
                                <li class="breadcrumb-item"><a href="#"><?=$pagetitle?></a></li>
                            </ol>
                        </nav>
                        <h4 class="mb-1 mt-0"><?=$pagetitle?></h4>
                    </div>
                </div>
                                <?php
                                    if(isset($validation))
                                    echo '<div class="alert alert-danger">'.$validation.'</div>';
                                ?>
                                <?php
                                    if(session()->getFlashdata('message'))
                                    echo '<div class="alert alert-success">'.session()->getFlashdata('message').'</div>';
                                ?>

                                <span class="badge badge-primary badge-pill " ><a class="btn-curser" data-toggle="modal" data-target="#event-modal">Add New Field</a></span>
                                <!-- modals -->
                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                                <h5 class="modal-title" id="modal-title">Field Details</h5>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="regsettings-form" id="regsettings-form" novalidate method="POST">
                                                    <input type="hidden" name="calendar_id" id="calendar_id" value="" />
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Label Name</label>
                                                                <input class="form-control" placeholder="Label Name"
                                                                    type="text" name="label_name" id="label_name" required />
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Field Name</label>
                                                                <input class="form-control" placeholder="Field Name"
                                                                    type="text" name="field_name" id="field_name" required />
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Input Type</label>
                                                                <select id="field_type" name="field_type" class="form-control">
                                                                    <option value="text">Text</option>
                                                                    <option value="textarea">Textarea</option>
                                                                    <option value="password">Password</option>
                                                                    <option value="select">Select</option>
                                                                    <option value="checkbox">Checkbox</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="options"></div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Required</label>
                                                                <input type="radio"  name="req" value="1" > Yes
                                                                <input type="radio" name="req" value="0" > No
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                        <button type="button" class="btn btn-danger mr-1" data-dismiss="modal">Close</button>
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->

                                <form action="<?=base_url('admin/save_settings')?>" method="POST"  enctype="multipart/form-data">
                                    
                                        <input type="hidden" id="user_id" value="<?php if(session()->get('user_logged_data')['id']) echo session()->get('user_logged_data')['id'];?>" name="user_id" >
                                        
                                        <?php
                                        if(!empty($register_settings['register_settings'])){
                                            $register_settings = unserialize($register_settings['register_settings']);
                                            //echo '<pre>'; print_r( $register_settings );
                                            foreach($register_settings as $row)
                                            {
                                                if($row['field_type'] == 'text') {
                                                ?>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label"><?=$row['label_name']?></label>
                                                    <div class="col-sm-10">
                                                        <input type="<?=$row['field_type']?>" class="form-control" id="<?=$row['field_name']?>" value="<?php  ?>" name="<?=$row['field_name']?>" placeholder="<?=$row['label_name']?>">
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                if($row['field_type'] == 'select') {
                                                    ?>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label"><?=$row['label_name']?></label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="<?=$row['field_name']?>" name="<?=$row['field_name']?>">
                                                                <?php
                                                                  $options =  explode(',',$row['field_options']);
                                                                  foreach(  $options as $option)  
                                                                    {
                                                                       $values = explode(':',$option); 
                                                                ?>
                                                                        <option value="<?=$values[0]?>" ><?=$values[1]?></option>

                                                                <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                        }
                                        
                                        ?>
                                        

                                        
                                        <div class="form-group row">
                                            <div class="col-sm-10 offset-sm-2">
                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </div>
                                        </div>
                                    
                                </form>
                                </div>
        </div>
</div>
 