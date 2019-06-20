<div class="roadmap" id="roadmap">
            
            <div class="container smooth" >
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            
                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 12) {
                                ?>
                <center><h3> <?php echo $post['title']; ?></h3></center>
                <br/>
                <center><p><?php echo $post['body']; ?></p></center>
                <br>
                 <?php if($this->session->userdata('user_id') == 1): ?>
                    <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                <?php
                    endif;
                    }
                endforeach; ?>
                <div class="container slickmap">
                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 13) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>



                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 14) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>

                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 15) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>

                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 16) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>

                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 17) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>

                    <div class="column">
                        <?php foreach($posts as $post) : 
                                    if ($post['id'] == 18) {
                                ?>
                        <img src="<?php echo site_url();?>assets/image/posts/<?php echo $post['post_image']; ?>" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6><?php echo $post['title']; ?></h6></center>
                        <center><p style="font-size: 14px"><?php echo $post['body']; ?></p></center>
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <center><a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a></center>
                    <?php
                        endif;
                        }
                    endforeach; ?>
                    </div>
            
                </div>
                 <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>  
            
        </div>