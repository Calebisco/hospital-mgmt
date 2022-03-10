<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="contact-form">
                    <div class="section-heading">

                        <div class="line"></div>
                        <h2>Contact Us</h2>
                    </div>

                    <form class="submitphoto_form" method="post" action="index.php?u=register-insert" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="name" class="wp-form-control wpcf7-text" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label>User Email address</label>
                            <input type="mail"  name="email"class="wp-form-control wpcf7-email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <label>User Password</label>          
                            <input type="password"  name="pass"class="wp-form-control wpcf7-text" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>User Contact Number</label>
                            <input type="text" name="cont" class="wp-form-control wpcf7-text" placeholder="Contact Number">
                        </div>
                        <div class="form-group">
                            <label>User Type</label>
                            <select name="type"  class="wp-form-control wpcf7-text" placeholder="User Type">
                                <option value="a">administrator</option>
                                <option value="p">register</option>
                                <option value="u">user</option>
                                <option value="o">operator</option>
                            </select>
                            <div class="form-group">
                                <label>User Address</label>
                                <textarea name="add" class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="Address"></textarea>
                            </div>
                            <div class="form-group" >
                                <label>Gender</label><br>
                                <input type="radio" name="gen" value="1" checked> Male<br>
                                <input type="radio" name="gen" value="2"> Female<br>
                                <input type="radio" name="gen" value="3"> Other<br><br>
                            </div>
                            <div class="form-group">
                                <label>User Picture</label>
                                <input type="file" name="pic" class="wp-form-control wpcf7-text" placeholder="User Picture">
                            </div>
                            <input type="submit"  name="sub" value= "Submit" class="btn btn-success"/>
                    </form>
                </div>
            </div>
       
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