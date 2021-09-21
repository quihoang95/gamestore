 
 <!-- our -->
    <div id="games" class="our">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Games</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 margin_bottom">
                <?php foreach ($products as $product):
                    ?>
                    <div class="row pt-5">
                   
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                
                                <figure><?= $this->Html->image($product['image'], ['style'=>'width:360px;']) ?></figure>
                               
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            
                            <div class="Games">
                                <h3><?= h($product['name'])?></h3>
                                <p><?= h($product['description'])?></p>
                                <a href="#">View Detail</a>
                            </div>
                          
                        </div>
                    
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end our -->
    <!-- We are -->
    <div id="software" class="We_are">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Software</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="box_bg">
                         <div class="box_bg_img">
                             <figure><?=  $this->Html->image('soft.jpg', ['alt' => 'soft']);?></figure>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
                     <div class="box_text">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                         <a href="#">Read more</a>
                     </div>
                 </div> 
            </div>
        </div>
    </div>
    <!-- end We are -->

    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>About Our Game</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-box">
                        <figure><?=  $this->Html->image('about.jpg', ['alt' => 'about']);?></figure>

                        <p> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            <br> labore et dolore magna aliqua. Ut enim conseq</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end abouts -->

    <!-- testimonial -->
    <div id="testimonial" class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 offset-md-2">
                    <div class="row box">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="testimonial_box">
                                <figure><?=  $this->Html->image('test1.png', ['alt' => 'about']);?></figure>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="testimonial_box">
                                <figure><?=  $this->Html->image('test2.png', ['alt' => 'about']);?></figure>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="testimonial_box">
                                <figure><?=  $this->Html->image('test3.png', ['alt' => 'about']);?></figure>
                            </div>
                        </div>
                    </div>
                    <div class="clients_box">
                        <h3>Jecoo</h3>
                        <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            <br>aliqua. Ut enim ad minim veniam, quis
                            <br>nostrud exercitation ullamco</p>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- end testimonial -->

    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <form class="contact_bg">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="contactus" placeholder="Name" type="text" name="Name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Phone" type="text" name="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="contactus" placeholder="Email" type="text" name="Email">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
   
    <!-- end contact -->
