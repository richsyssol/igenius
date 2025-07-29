<?php include 'head.php'; ?>
<?php include'header.php';?>

<section class='banimg'>
    <div class="image-container">
        <img class='w-100 d-block responsive-img' src="asset/image/contact-us.png" alt="contact-us">
    </div>
    
</section>




<section class='pb-5'>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-5 contact1" data-aos="zoom-in" data-aos-duration="1000">
                <div>
                    <h4 class='mh1'>Head Office</h4>
                    <p><a href="https://www.google.com/maps?q=Office+No.+7/8/9,+2nd+Floor+Silver+Plaza,+Opp.+BSNL+Office,+Canada+Corner+Sharanpur+Road,+Nashik" target="_blank" class="text-dark">
                        Office No. 7/8/9, 2nd Floor Silver Plaza, Opp. BSNL Office, Canada Corner Sharanpur Road, Nashik
                    </a></p>
                </div>
                <div>
                    <h4 class='mh1'>Contact No</h4>
                    <p><a href="tel:+917770045402">+91 7770045402</a></p>
                </div>
                <div>
                    <h4 class='mh1'>E-mail</h4>
                    <p><a href="mailto:info.igeniusnsk@gmail.com"> info.igeniusnsk@gmail.com</a></p>
                </div>
                
                <div>
                    <a href="find-us.php"><h4 class='text-danger'><img width="30" height="30" src="https://img.icons8.com/ios-filled/50/dc3545/place-marker--v1.png" alt="place-marker--v1"/>Find a Center</h4></a>
                </div>
                
            </div>
            <div class="col-lg-4 col-md-6 mt-5" data-aos="zoom-in" data-aos-duration="1000">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.1364326496714!2d73.76835957585371!3d20.002787822223695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb9f7bfc155d%3A0x99ad98210ae26227!2sSilver%20Plaza!5e0!3m2!1sen!2sin!4v1714215712821!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-12 mt-5 contact" data-aos="zoom-in" data-aos-duration="1000">
                <h2 class='main-heading'>Contact Us</h2>
                <form action="test.php" method="post">
                    <input type="hidden" name="contact_form" value="contact_form" class="form-control"><br>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter Your Name*" required><br>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email*"><br>
                    <input type="text" name="contact" id="" class="form-control" placeholder="Enter Contact No*" required><br>
                    <textarea name="message" id="" class="form-control" placeholder="Enter Your Massage*"></textarea><br>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</section>








<!-- Example single danger button -->

  <script>
    $(document).ready(function(){
        $('.dropdown-toggle').dropdown();
    });
</script>

<!--AOS ANimation Script-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
          once: true, // Ensures animation happens only once
          offset: 200, // Offset (in px) from the original trigger point
          duration: 1000 // Duration of animation
        });
      });
    </script>
    
<?php include'footer.php';?>