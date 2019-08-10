@include('fronts.incl.header')
         <!-- banner -->
         <div class="inner_page-banner one-img">
         </div>
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="index.php">Home</a>
                     <span>/ </span>
                  </li>
                  <li>Checkout</li>
               </ul>
            </div>
         </div>
         <!-- //short-->
         <!--Checkout-->  
         <!-- //banner -->
         <!-- top Products -->
         <section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
               <div class="shop_inner_inf">
                  <div class="privacy about">
                     <h3>Chec<span>kout</span></h3>
                     <div class="checkout-right">
                        <h4>Your shopping cart contains: <span>3 Products</span></h4>
                        <table class="table table-bordered">
                           <thead class="thead-dark">
                              <tr>
                                 <th>SL No.</th>
                                 <th>Product</th>
                                 <th>Quality</th>
                                 <th>Product Name</th>
                                 <th>Price</th>
                                 <th>Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="rem1">
                                 <td class="invert">1</td>
                              <td class="invert-image"><a href="single.php"><img src="{{asset('/')}}front/images/shart/shart1.jpg" alt=" " class="img-responsive"></a></td>
                                 <td class="invert">
                                    <div class="quantity">
                                       <div class="quantity-select">
                                          <div class="entry value-minus">&nbsp;</div>
                                          <div class="entry value"><span>1</span></div>
                                          <div class="entry value-plus active">&nbsp;</div>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="invert">Bella Toes</td>
                                 <td class="invert">৳ 675.00</td>
                                 <td class="invert">
                                    <div class="rem">
                                       <div class="close1"> </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="rem2">
                                 <td class="invert">2</td>
                                 <td class="invert-image"><a href="single.php"><img src="{{asset('/')}}front/images/watch/watch1.jpg" alt=" " class="img-responsive"></a></td>
                                 <td class="invert">
                                    <div class="quantity">
                                       <div class="quantity-select">
                                          <div class="entry value-minus">&nbsp;</div>
                                          <div class="entry value"><span>1</span></div>
                                          <div class="entry value-plus active">&nbsp;</div>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="invert">Red Bellies</td>
                                 <td class="invert"> ৳ 325.00</td>
                                 <td class="invert">
                                    <div class="rem">
                                       <div class="close2"> </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="rem3">
                                 <td class="invert">3</td>
                                 <td class="invert-image"><a href="single.php"><img src="{{asset('/')}}front/images/worldcup/world2.jpg" alt=" " class="img-responsive"></a></td>
                                 <td class="invert">
                                    <div class="quantity">
                                       <div class="quantity-select">
                                          <div class="entry value-minus">&nbsp;</div>
                                          <div class="entry value"><span>1</span></div>
                                          <div class="entry value-plus active">&nbsp;</div>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="invert">Chikku Loafers</td>
                                 <td class="invert">৳ 405.00</td>
                                 <td class="invert">
                                    <div class="rem">
                                       <div class="close3"> </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                           <h4>Continue to basket</h4>
                           <ul>
                              <li>Product1 <i>-</i> <span>৳ 675.00 </span></li>
                              <li>Product2 <i>-</i> <span>৳ 325.00 </span></li>
                              <li>Product3 <i>-</i> <span>৳ 405.00 </span></li>
                              <li>Total Service Charges <i>-</i> <span>৳ 55.00</span></li>
                              <li>Total <i>-</i> <span>৳ 1405.00</span></li>
                           </ul>
                        </div>
                        <div class="col-md-8 address_form">
                           <h4>Add a new Details</h4>
                           <form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
                              <section class="creditly-wrapper wrapper">
                                 <div class="information-wrapper">
                                    <div class="first-row form-group">
                                       <div class="controls">
                                          <label class="control-label">নাম : </label>
                                          <input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
                                       </div>
                                       <div class="card_number_grids">
                                          <div class="card_number_grid_left">
                                             <div class="controls">
                                                <label class="control-label">ফোন নাম্বার :</label>
                                                <input class="form-control" type="text" placeholder="Mobile number">
                                             </div>
                                          </div>
                                          <div class="card_number_grid_right">
                                             <div class="controls">
                                                <label class="control-label">জেলা : </label>
                                                <input class="form-control" type="text" placeholder="District">
                                             </div>
                                          </div>
                                          <div class="clear"> </div>
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">টাউন/সিটি : </label>
                                          <input class="form-control" type="text" placeholder="Town/City">
                                       </div>
                                       <div class="controls">
                                          <label class="control-label">ঠিকানা ধরন: </label>
                                          <select class="form-control option-w3ls">
                                             <option>Office</option>
                                             <option>ঢাকা</option>
                                             <option>ঢাকার বাহিরে</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="submit check_out">Delivery to this Address</button>
                                 </div>
                              </section>
                           </form>
                           <div class="checkout-right-basket">
                              <a href="payment.php">Make a Payment </a>
                           </div>
                        </div>
                        <div class="clearfix"> </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <!-- //top products -->
            </div>
      </section>
  
  
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      @include('fronts.incl.footer')
