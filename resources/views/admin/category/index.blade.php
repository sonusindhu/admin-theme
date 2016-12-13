@extends('layouts.admin')

@section('content')

<div class="">

    <div class="clearfix"></div>

    <div class="row">

        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Category List</h2>
                    <div class="title_right">
                        <div class="col-md-2 col-sm-2 col-xs-12 form-group pull-right">
                          <div class="input-group">
                              <a href="{{URL::to('admin/category/add')}}" class="btn btn-danger pull-right" href="">Add Category</a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            if($categories){
                                foreach($categories as $key=>$value){
                                    ?>
                                        <tr>
                                            <td><?php echo $value->id; ?></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo $value->slug; ?></td>
                                            <td><?php echo $value->created_at; ?></td>
                                            <td><?php echo $value->status; ?></td>
                                            <td>
                                                <a href="<?php echo url('admin/category/edit/'.$value->id);?>" class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                                
                                                <a href="<?php echo url('admin/category/delete/'.$value->id);?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                    <tr>
                                        <td colspan="5">No category registered yet</td>
                                    </tr>
                                <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>



@stop