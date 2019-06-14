<div class="roadmap">
            
            <div class="container smooth" id="roadmap">
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
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> February 2018</h6></center>
                        <center><p style="font-size: 14px">Exchange Cryptocash to Bitcoin</p></center>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> March 2018</h6></center>
                        <center><p style="font-size: 14px">BTCC made of payment in Cyptocash</p></center>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> June 2018</h6></center>
                        <center><p style="font-size: 14px">Send-Receive coin Cyptocash & mobile</p></center>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> October 2018</h6></center>
                        <center><p style="font-size: 14px">Coin Marketcap, World Coin index</p></center>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> December 2018</h6></center>
                        <center><p style="font-size: 14px">Exchange Cryptocash to Bitcoin</p></center>
                    </div>
                    <div class="column">
                        <img src="<?php echo base_url(); ?>assets/image/withdraw.png" width="75px" height="75px" style="margin-left: auto; margin-right: auto;">
                        <img src="<?php echo base_url(); ?>assets/image/node.png" width="50px" height="50px" style="margin-left: auto; margin-right: auto;">
                        <center><h6> December 2018</h6></center>
                        <center><p style="font-size: 14px">Deposit bitcoi  from your account</p></center>
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