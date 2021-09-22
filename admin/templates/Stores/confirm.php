 <!-- our -->
 <div id="games" class="our">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="titlepage">
                     <h2>Confirm order</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-8  margin_bottom">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">Product Name</th>
                             <th scope="col">Image</th>
                             <th scope="col">Quantity</th>
                             <th scope="col">Price</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Angry Bird</td>
                             <td><?= $this->Html->image('our-image1.jpg', ['style' => 'width:100px;']) ?></td>
                             <td>3</td>
                             <td>60</td>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                             <th scope="col"></th>
                             <th scope="col"></th>
                             <th scope="col">Total</th>
                             <th scope="col">180</th>
                         </tr>
                     </tfoot>
                 </table>
             </div>
             <div class="col-4  margin_bottom">
                 <div class="col-md-12">

                     <form class="form-control">
                         <div class="row">
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="contactus" placeholder="Name" type="text" name="name">
                             </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <input class="contactus" placeholder="Birthday" type="date" name="name">
                             </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <input class="contactus" placeholder="Address" type="text" name="address">
                             </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <input class="contactus" placeholder="Phone" type="text" name="phone">
                             </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                 <input class="contactus" placeholder="Email" type="text" name="email">
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
 </div>
 <!-- end our -->