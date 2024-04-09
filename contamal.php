<?php include_once "./includes/header.php"; ?>


    
     
        
    <section id="contact" class="contact">
      <div class="container" style="margin-top:80px; margin-bottom: 60px;" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You are most welcome for any query or any suggestion.
Please fill your details as mentioned below and we will get back to you within 24 hours.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>22,priyar nagar, thanjavur,609113</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ah@services.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 6385828936</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31344.349691259074!2d79.14793568124027!3d10.884279991314477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baac5e38e768f2b%3A0xb389f799fcd93724!2sPasupathikoil%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1707642380857!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">phone no</label>
                <input type="text" class="form-control" name="phone" id="subject" required>
              </div>
               <div class="form-group">
                <label for="name">address</label>
                <input type="text" class="form-control" name="address" id="address" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea  id="contact_message" class="form-control" name="message" rows="10" required></textarea>
              </div>
             
              <div class="text-center"> <button id="contact_btn"  class="contact_button trans_200" onclick="constructMailtoLink()" ><a href="#" id="sendEmailLink"></a>Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<script>
function constructMailtoLink() {
    // Get form values
    var name = document.getElementsByName("name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
    var address = document.getElementsByName("address")[0].value;
    var message = document.getElementById("contact_message").value;

    // Construct mailto link
    var mailtoLink = "mailto:harinirajan14@gmail.com?";
    mailtoLink += "subject=Contact Form Submission";
    mailtoLink += "&body=Name: " + encodeURIComponent(name) +
                  "%0D%0AEmail: " + encodeURIComponent(email) +
                  "%0D%0APhone: " + encodeURIComponent(phone) +
                  "%0D%0AAddress: " + encodeURIComponent(address) +
                  "%0D%0AMessage: " + encodeURIComponent(message);

    // Set href attribute of the "Send Email" link
    document.getElementById("sendEmailLink").setAttribute("href", mailtoLink);
    document.getElementById("sendEmailLink").click();

    // Continue with the form submission
    return true;
    
}
</script>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     <section class="features" id="features" style="background:lavender">
      <div class="container">
            <div style="text-align: center">
                <h1 class="mb-5 text-info" style="font-family:Catamaran;font-size: 50px;">Our Team Members</h1>
            </div>
        <div class="row">
          <div class="col-sm-12 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-4">
                  
                    <div class="feature-item" style="border-top: 2px solid gray">
                      <i><img class="img-thumbnail hvr-glow" width="400" height="350"  src="assets/img/hart.jpg"></i>
                      <h3 style="font-family: Catamaran;color: #3b5998;margin-top: 8px;">Harini</h3>
                      <h5 style="font-family: Catamaran;color: #3b5998;margin-top: 8px;">(CEO)</h5>
               
                    </div>
                  
                </div>
                <div class="col-sm-4">
                 
                    <div class="feature-item" style="border-top: 2px solid gray">
                      <i><img class="img-thumbnail hvr-glow"  width="250" height="300"  src="assets/img/aka.jpeg"></i>
                      <h3 style="font-family: Catamaran;color: #3b5998;margin-top: 8px;">virat</h3>
                      <h5 style="font-family: Catamaran;color: #3b5998;margin-top: 8px;">(co-founder)</h5>
           
                    </div>
              
                </div>
                  <div class="col-sm-4">

                      <div class="feature-item" style="border-top: 2px solid gray">
                          <i><img class="img-thumbnail hvr-glow"  width="200" height="200" src="assets/img/swe.jpeg"></i>
                          <h3 style="font-family:Catamaran;color: #3b5998;margin-top: 8px;">Swetha</h3>
                          <h5 style="font-family: Catamaran;color: #3b5998;margin-top: 8px;">(manager)</h5>
                          
                      </div>

                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
                </section>

          
           
 <?php include_once "./includes/footer.php"; ?>
 