<div class="features" id="features">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
            <br/>
            <div class="container smooth">
                <center><h3>Features</h3></center>
                <br/><br/>
                <div class="row">
                        
                        <div class="column col-md-5 offset-md-1">
                            <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/pay.png" width="100px" height="100px" style="margin-top: 10%;">
                            <div class="column">    
                                    <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'Pay') {
                                ?>
                                <h5> <?php echo $post['title']; ?></h5>
                                <p class="lilFont"><?php echo $post['body']; ?></p>
                                <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                <?php
                                    endif;
                                    }
                                 endforeach; ?>
                                </div>
                            </div>
                            <div class="line">
                                <img src="<?php echo base_url(); ?>assets/image/recharge.png" width="100px" height="100px" style="margin-top: 10%;">
                                <div class="column">    
                                    <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'Recharge') {
                                    ?>
                                    <h5> <?php echo $post['title']; ?></h5>
                                    <p class="lilFont"><?php echo $post['body']; ?></p>
                                    <?php if($this->session->userdata('user_id') == 1): ?>
                                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                    <?php
                                        endif;
                                        }
                                 endforeach; ?>
                                </div>
                            </div>
                            <div class="line">
                                <img src="<?php echo base_url(); ?>assets/image/qr_code.png" width="100px" height="100px" style="margin-top: 10%;">
                                <div class="column">    
                                    <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'QR-code') {
                                    ?>
                                    <h5> <?php echo $post['title']; ?></h5>
                                    <p class="lilFont"><?php echo $post['body']; ?></p>
                                    <?php if($this->session->userdata('user_id') == 1): ?>
                                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                    <?php
                                        endif;
                                    }
                                 endforeach; ?>
                                </div>
                            </div>
                        </div>
                     <div class="column col-md-5">
                            <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="100px" height="100px" style="margin-top: 10%;">
                            <div class="column">    
                                    <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'Withdraw') {
                                    ?>
                                    <h5> <?php echo $post['title']; ?></h5>
                                    <p class="lilFont"><?php echo $post['body']; ?></p>
                                    <?php if($this->session->userdata('user_id') == 1): ?>
                                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                    <?php
                                        endif;
                                        }
                                 endforeach; ?>
                                </div>
                            </div>
                            <div class="line">
                                <img src="<?php echo base_url(); ?>assets/image/history.png" width="100px" height="100px" style="margin-top: 10%;">
                                <div class="column">    
                                   <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'History') {
                                    ?>
                                    <h5> <?php echo $post['title']; ?></h5>
                                    <p class="lilFont"><?php echo $post['body']; ?></p>
                                    <?php if($this->session->userdata('user_id') == 1): ?>
                                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                    <?php
                                        endif;
                                        }
                                 endforeach; ?>
                                </div>
                            </div>
                            <div class="line">
                                <img src="<?php echo base_url(); ?>assets/image/paypal.png" width="100px" height="100px" style="margin-top: 10%;">
                                <div class="column">    
                                    <?php foreach($posts as $post) : 
                                    if ($post['slug'] == 'Paypal') {
                                    ?>
                                    <h5> <?php echo $post['title']; ?></h5>
                                    <p class="lilFont"><?php echo $post['body']; ?></p>
                                    <?php if($this->session->userdata('user_id') == 1): ?>
                                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>

                                    <?php
                                        endif;
                                        }
                                 endforeach; ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        </div>