<section id="blogArchive">      
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Notice</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="index.php">Home</a></li>                  
                            <li class="active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Start Blog Archive Area -->
                        <div class="blogArchive-area">
                            <div class="row">
                                <!-- Start left Side bar -->
                                <style>.hide-scroll{ overflow: hidden;} .view-scrol{ overflow: auto;}</style>
                                <div class="col-sm-5 hide-scroll">
                                    <aside class="sidebar view-scrol">
                                        <!-- Start sidebar widget -->
                                        <div class="sidebar-widget">
                                            <h3>Latest Notice</h3>
                                            <ul class="popular-tab">
                                                <li>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <table class=" table  table-striped  table-hover table-responsive">
                                                                <?php
                                                                $notice = new dalNotice();
                                                                $data = $notice->fview();
                                                                foreach ($data as $dt) {
                                                                    echo "<tr>";
                                                                    echo "<td><p>Date : </p><p> $dt->date</p></td>";
                                                                    echo "<td>Title : <p>$dt->title</p><p><a href='#'>...Read details</a></p></td>";
                                                                    echo "<td colspan='2'><img style='width:100px; height:80px;' src='images/notice/notice-{$dt->id}.{$dt->picture}'/></td>";
                                                                    echo "</tr>";
                                                                }
                                                                ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Start Archives widget -->
                                        <div class="sidebar-widget">
                                            <h3>Archives</h3>
                                            <ul class="archives">
                                                <li><a title="November 2016" href="#">November 2016<span>2</span></a></li>
                                                <li><a title="October 2016" href="#">October 2016<span>5</span></a></li>
                                                <li><a title="September 2016" href="#">September 2016<span>10</span></a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <!-- Start Blog Content -->
                                <div class="col-sm-7">                     
                                    <div class="blog-content">
                                        <!-- Start Single Blog -->
                                        <div class="single-Blog">
                                            <div class="single-blog-right">
                                                <div class="blog-img">
                                                    <figure class="blog-figure">
                                                        <?php
                                                        $notice = new dalNotice();
                                                        $data = $notice->fview();
                                                        foreach ($data as $dt) {
                                                            echo "<div class='image-effect'><img style='width:500px;' src='images/notice/notice-{$dt->id}.{$dt->picture}'/></div>";
                                                            echo "<p class='text-justify'>$dt->description</p>";
                                                        }
                                                        ?>
                                                    </figure>
                                                </div>
                                                <div class="blog-author">
                                                    <ul>
                                                        <li>By <a href="#">Dr. Smith</a></li>
                                                        <li>In <a href="#">Dental</a></li>
                                                    </ul>
                                                </div>
                                                <div class="blog-content">
                                                    <h2>Latest Trend Of Medical Dental Department</h2>
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    <!-- Read more btn -->
                                                    <a class="wpcf7-submit button--itzel" href="#">
                                                        <i class="button__icon fa fa-link"></i>
                                                        <span>Read More</span>
                                                    </a>   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start blog pagination  -->
                                        <div class="blog-pagination">
                                            <nav>
                                                <ul class="pagination">
                                                    <li>
                                                        <a href="#" aria-label="Previous">
                                                            <span class="fa fa-angle-left"></span>
                                                        </a>
                                                    </li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li>
                                                        <a href="#" aria-label="Next">
                                                            <span class="fa fa-angle-right"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>