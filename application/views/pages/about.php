<main>
        <div class="home">
            <div class="container smooth" id="about">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="<?php echo base_url(); ?>assets/image/web.png" width="400px" class="center-block">
                    </div>
                    <div class="col-md-6 col-sm-6 block">
                        <?php foreach($posts as $post) : 
                            if ($post['id'] == 1) {
                                ?>
                        <center><h4><?php echo $post['title']; ?></h4></center>
                        <br/>
                        <p> <?php echo $post['body']; ?> </p> 
                        <?php if($this->session->userdata('user_id') == 1): ?>
                        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>"> Edit</a>
                        <?php endif; ?>
                        <br/>
                    <?php
                            }
                         endforeach; ?> 
                    </div>
                </div>

            </div>            
        </div>
        <!--
        <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
       -->
       