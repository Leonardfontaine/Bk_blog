<li class="nav-item">
                  <a class="nav-link active scroll-link js-scrollTo" href="#about"><strong>About</strong> <span class="sr-only"></span></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/About"> Edit</a>
                  <?php endif; ?>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#work"><strong>How does it work ?</strong></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/How-does-it-work"> Edit</a>
                  <?php endif; ?>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#features"><strong>Features</strong></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/Features"> Edit</a>
                  <?php endif; ?>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#roadmap"><strong>Roadmap</strong></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/Roadmap"> Edit</a>
                  <?php endif; ?>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#ourteam"><strong>Our team</strong></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/Our-team"> Edit</a>
                  <?php endif; ?>
              </li>
              <li class="nav-item">
                  <a class="nav-link scroll-link js-scrollTo" href="#ud"><strong>Updates</strong></a>
                  <?php if($this->session->userdata('user_id') == 1): ?>
                    <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>posts/edit/Updates"> Edit</a>
                  <?php endif; ?>
              </li>
              <?php if($this->session->userdata('user_id') == 1): ?>
              <li class="nav-item">
                  <?php echo form_open('/users/logout'); ?>
                  <input type="submit" value="Logout" class="btn btn-danger"> 

              </li>