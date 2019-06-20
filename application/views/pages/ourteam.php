 <div class="team" id="ourteam">
            <div class="container">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 23) {
                                ?>
                    <center><h3> <?php echo $post['title']; ?></h3></center>
                    <br/>
                    <center><p><?php echo $post['body']; ?></p></center>
                    <?php if($this->session->userdata('user_id') == 1): ?>
                    <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                <div class="row">
                <div class="col-md-3">
                    <?php foreach($posts as $post) : 
                                    if ($post['id'] == 19) {
                                ?>
                    <img src="<?php echo base_url(); ?>assets/image/khunganh.png" width="200px" alt="member">
                    <h5><?php echo $post['title']; ?></h5>
                    <p><?php echo $post['body']; ?></p>
                     <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                </div>
                <div class="col-md-3">
                    <?php foreach($posts as $post) : 
                                    if ($post['id'] == 20) {
                                ?>
                    <img src="<?php echo base_url(); ?>assets/image/khunganh.png" width="200px" alt="member">
                    <h5><?php echo $post['title']; ?></h5>
                    <p><?php echo $post['body']; ?></p>
                     <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                </div>
                    <div class="col-md-3">
                    <?php foreach($posts as $post) : 
                                    if ($post['id'] == 21) {
                                ?>
                    <img src="<?php echo base_url(); ?>assets/image/khunganh.png" width="200px" alt="member">
                    <h5><?php echo $post['title']; ?></h5>
                    <p><?php echo $post['body']; ?></p>
                     <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                </div>
                <div class="col-md-3">
                    <?php foreach($posts as $post) : 
                                    if ($post['id'] == 22) {
                                ?>
                    <img src="<?php echo base_url(); ?>assets/image/khunganh.png" width="200px" alt="member">
                    <h5><?php echo $post['title']; ?></h5>
                    <p><?php echo $post['body']; ?></p>
                     <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                </div>
                </div>
                <br>

            </div>            
        </div>
        <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        <div class="update">
            <div class="container smooth" id="ud">
                <br/>
                <br/>
                <br/>
                <br/>
                
                <div class="container">
                    
                </div>

            </div>            
        </div>
        