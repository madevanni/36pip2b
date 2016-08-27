<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">This is the users information list</div>
                    <div class="panel-body">
                        <?php
                        if ($message != NULL)
                            echo '<div class="alert alert-info">' . $message . '</div>';
                        ?>
                        <table class="display" id="example">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Group</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td data-search="<?php echo $user->first_name; ?>"><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td data-search="<?php echo $user->email; ?>"><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td>
                                            <?php foreach ($user->groups as $group): ?>
                                                <?php echo anchor("administrator/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
                                            <?php endforeach ?>
                                        </td>
                                        <td><?php echo ($user->active) ? anchor("administrator/deactivate/" . $user->id, lang('index_active_link'), ['class' => 'btn btn-success btn-sm']) : anchor("administrator/activate/" . $user->id, lang('index_inactive_link'), ['class' => 'btn btn-warning btn-sm']); ?></td>
                                        <td><?php echo anchor("administrator/edit_user/" . $user->id, 'Edit', ['class' => 'btn btn-warning btn-sm']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <?php echo anchor('administrator/create_user', lang('index_create_user_link'), ['class' => 'btn btn-primary', 'role' => 'button']) ?>
                        | 
                        <?php echo anchor('administrator/create_group', lang('index_create_group_link'), ['class' => 'btn btn-primary', 'role' => 'button']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>