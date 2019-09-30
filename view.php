<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Post Details <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Department:</label>
                    <p><?php echo !empty($post['department'])?$post['department']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <p><?php echo !empty($post['description'])?$post['description']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>