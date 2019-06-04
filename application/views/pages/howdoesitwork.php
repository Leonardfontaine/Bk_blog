 <div class="howork" id="work">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
            <div class="container smooth">
                <div class="row">
                    <div class="col-md-5 offset-md-1 col-sm-8">
                        <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/register.png" class="register rounded-circle" width="100px" height="90px">
                            <div class="column">     
                                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 2) {
                                ?>
                                <h5> <?php echo $post['title']; ?></h5>
                                <p class="lilFont"><?php echo $post['body']; ?></p>
                                <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
                                <?php endif; ?>

                                <?php
                                    }
                                 endforeach; ?>
                            </div>
                        </div>
                        <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/enterinformation.png" class="enterinformation rounded-circle" width="100px" height="90px">
                            <div class="column">    
                                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 3) {
                                ?>
                                <h5> <?php echo $post['title']; ?></h5>
                                <p class="lilFont"><?php echo $post['body']; ?>
                                <?php if($this->session->userdata('user_id') == 1): ?></p>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
                                <?php endif; ?>

                                <?php
                                    }
                                 endforeach; ?>
                            </div>
                        </div>
                        <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/startshaing.png" class="startsharing rounded-circle" width="100px" height="90px">
                            <div class="column">    
                                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 4) {
                                ?>
                                <h5> <?php echo $post['title']; ?></h5>
                                <p class="lilFont"><?php echo $post['body']; ?>
                                <?php if($this->session->userdata('user_id') == 1): ?></p>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
                                <?php endif; ?>

                                <?php
                                    }
                                 endforeach; ?>
                            </div>
                        </div>
                        <div class="line">
                            <img src="<?php echo base_url(); ?>assets/image/startearning.png" class="startearning rounded-circle" width="100px" height="90px">
                            <div class="column">    
                                <?php foreach($posts as $post) : 
                                    if ($post['id'] == 5) {
                                ?>
                                <h5> <?php echo $post['title']; ?></h5>
                                <p class="lilFont"><?php echo $post['body']; ?></p>
                                <?php if($this->session->userdata('user_id') == 1): ?>
                                <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
                                <?php endif; ?>

                                <?php
                                    }
                                 endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 block">
                        <img src="<?php echo base_url(); ?>assets/image/appo.png" width="75%">
                    </div>
                </div>
            </div>
            <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        </div>