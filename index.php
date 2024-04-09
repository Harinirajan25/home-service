<?php 
include_once "includes/header.php";


$cities = ["trichy","thanjavur","chennai","karur","sirkali","mayiladuthurai","kumbakonam","coimbatore","thiruvarur","chidambaram","cuddalore","selam","madurai","ooty"];

?>


       

        <!-- Add more carousel items as needed -->
 

<hr>


     <section id="about" class="about" style="background-image: url('assets/img/.jpg'); background-size: cover; background-position: center;">
       
        <div class="container" style="margin-top:80px; margin-bottom: 60px;">
        <div class="container" data-aos="fade-up">
       
      
          <div class="section-title">
            <h2>Services</h2>
            
          </div>

    <div class="row">
        <div class="form-group col-5">
            <label for="">City</label>
            <select class="form-control" name="city" id="city">
                <option value="none">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group col-5">
            <label for="">Who's Required</label>
            <select class="form-control" name="profession" id="profession">
                <option value="none">Select Profession</option>
                <option value="electrician">Electrician</option>
                <option value="plumber">Plumber</option>
                <option value="mobile">AC Repairer</option>
                <option value="mobile"> Gardening</option>
                <option value="mobile">painting</option>
                <option value="mobile">cleaning</option>
                <option value="mobile">mobile repair</option>
                <option value="mobile"></option>
            </select>
        </div>

        <div class="form-group col-2">
            <label for="">Action</label>
            <button id="search" class="form-control btn btn-success" type="button">Search</button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Profession</th>
                    <th>experience</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
                </div>
<script src="assets/js/jquery.js"></script>
<script>
    $(function() {
        $("#search").click(function() {
            var city = $("#city").val();
            var profession = $("#profession").val();

            if (city == "none" || profession == "none") {
                alert("Don't leave fields empty!");
                tbody = "<tr><td colspan='5'>please </td></tr>";
            } else {
                $.post('scripts/searchproviders.php', {
                    city: city,
                    profession: profession
                }, function(res) {
                    var providers = JSON.parse(res);
                    var tbody = "";

                    if (providers.failed == true) {
                        tbody = "<tr><td colspan='5'>No Service Providers found...</td></tr>";
                    } else {
                        providers.forEach(function(provider, i) {
                            tbody += "<tr>" +
                                "<td><img style='height:100px' src='images/" + provider
                                .photo +
                                "'/></td>" +
                                "<td>" + provider.name + "</td>" +
                                "<td>" + provider.adder1 + "</td>" +
                                
                               "<td>" +provider.city + "</td>" +
                                "<td>" + provider.profession + "</td>" +
                                 "<td>" + provider.experience + "</td>"+
                                "<td><a href='booking.php?provider=" + provider.id +
                                "' class='btn btn-primary btn-block'>Book</a></td>";
                        });
                    }
                    $("#providers tbody").html(tbody);
                });
            }
        });
    });
</script>

<?php include_once "./includes/footer.php";
