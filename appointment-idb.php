<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="contact-form">
                    <div class="section-heading">
                        <h2>Appointment</h2>
                        <div class="line"></div>
                    </div>
                    <p>Fill out all required Field to send a Message. Please don't spam,Thank you!</p>
                    <form class="submitphoto_form" method="post" action="index.php?v=booking-insert" enctype="multipart/form-data">
                        <?php
                        //echo date('Y-m-d', strtotime('next Monday'));
                        //echo date("l");
                        ?>
                        <div class="form-group">
                            <br/><br/>
                        </div>
                        <div class="form-group">
                            <select name="doctor" id="doc" class="form-control">
                                <option value="0">Choose Doctor</option>
                            </select><br/><br/>
                        </div>
                        <div class="form-group">
                            <select name="visitday" id="day" class="form-control">
                                <option value="0">Choose Day</option>
                            </select><br/><br/>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="name" class="form-control"  placeholder="Patient name"/><br/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control"  placeholder="Patient Email"/><br/>
                        </div>
                        <div class="form-group">
                            <input type="text"  name="address" class="form-control" placeholder="Patient address"/><br/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Phone" class="form-control"  placeholder="Patient Phone Number"/><br/>
                        </div>
                        <div class="form-group">
                            <label>Gender</label><br/>
                            <input type="radio" name="gender"  class="form-group" value="Male" /><span class="fa fa-male"> Male</span><br/>
                            <input type="radio" name="gender" class="form-group"  value="Female" /><span class="fa fa-female"> Female</span><br/>
                            <input type="radio" name="gender" class="form-group"  value="Other" /><span class="fa fa-users"> Other</span><br/>
                        </div>
                        <div class="form-group">

                            <input type="text" name="age"  class="form-control"  placeholder="Patient Age"/><br/>
                        </div>
                        <div class="form-group">
                            <textarea  name="reason" class="form-control" placeholder="Reason of Appointment"></textarea><br/>
                        </div>

                        <input type="submit"  name="sub" value= "Make an appointment" class="btn btn-success"/>
                    </form>

                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#dep").change(function() {
                        var spid = parseInt($("#dep").val());
                        if (spid == 0) {
                            $("#doc").html("<option value='0'>Choose Doctor</option>")
                        }
                        else {
                            var datalist = "id=" + spid;
                            $.ajax({
                                type: 'POST',
                                data: datalist,
                                url: "dal/ajax-doctor.php",
                                success: function(data) {
                                    $("#doc").html(data);
                                }
                            });
                        }
                    });


                    $("#doc").change(function() {
                        var docid = parseInt($("#doc").val());
                        if (docid == 0) {
                            $("#day").html("<option value='0'>Choose Day</option>")
                        }
                        else {
                            var datalist = "id=" + docid;
                            $.ajax({
                                type: 'POST',
                                data: datalist,
                                url: "dal/ajax-day.php",
                                success: function(data) {
                                    $("#day").html(data);
                                }
                            });
                        }
                    });
                });
            </script>

            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="contact-address">
                    <div class="section-heading">
                        <h2>Contact Information</h2>
                        <div class="line"></div>
                    </div>
                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    <address class="contact-info">               
                        <p><span class="fa fa-home"></span>305 Intergraph Way
                            Madison, AL 35758, USA</p>
                        <p><span class="fa fa-phone"></span>1.256.730.2000</p>
                        <p><span class="fa fa-envelope"></span>info@wpfmedinova.com</p>
                    </address>
                    <h3>Social Media</h3>
                    <div class="social-share">               
                        <ul>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>>