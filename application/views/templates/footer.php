</main>
        <script type="text/javascript" src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/slick-1.8.1/slick/slick.min.js"></script> 

        <script type="text/javascript">
        $('.slickmap').slick({
          slidesToShow: 5,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                slidesToShow: 1
              }
            }
          ]
        });
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-scrollTo').on('click', function() {
                    var page = $(this).attr('href'); 
                    var speed = 750; 
                    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
                    return false;
                });
            });
        </script>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
	<script>
                CKEDITOR.replace( 'editor1' );
            </script>
	</body>
    
</html>