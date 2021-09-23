 <!-- our -->
 <div id="games" class="our">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="titlepage">
                     <h2>Detail</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-6  margin_bottom">
                 <div class="row pt-5">
                     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                         <div class="two-box">
                             <figure><?= $this->Html->image($product['image'], ['style' => 'width:360px; height:208px']) ?></figure>
                         </div>
                         <div>
                             picture
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-6">
                 <div class="row pt-5">
                     <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                         <div class="Games">
                             <h3><?= h($product['name']) ?></h3>
                             <p><?= h($product['description']) ?></p>
                             <h4><b>Price:</b> <span><?= h(number_format($product['price'], 2) . '$') ?></span></h4>
                             <?= $this->Form->create(null, [
                                    'url' => [
                                        'controller' => 'Carts',
                                        'action' => 'add'
                                    ]
                                ]); ?>
                             <?= $this->Form->input('quantity') ?>
                             <?= $this->Form->hidden('product_id', ['value' => $product['id']]) ?>
                             <?= $this->Form->button('Add to cart', ['type' => 'submit', 'id' => 'add-to-cart']); ?>
                             <?= $this->Form->end(); ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- end our -->