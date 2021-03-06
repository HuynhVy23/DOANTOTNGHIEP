@extends('layout.layout')
@section('main')
 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url(../images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Products</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="../images/product-1-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$999.00 </del></small> $779.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="../images/product-2-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$99.00</del></small>  $79.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$1999.00</del></small>   $1779.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$999.00 </del></small> $779.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$99.00</del></small>  $79.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non beatae soluta, placeat vitae cum maxime culpa itaque minima.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="product-item">
          <a href="product-details.html"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="product-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>
            <h6><small><del>$1999.00</del></small>   $1779.00</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</p>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <ul class="pages">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <p>Copyright ?? 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form">
          <form action="#" id="contact">
              <div class="row">
                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up location" required="">
                      </fieldset>
                   </div>

                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return location" required="">
                      </fieldset>
                   </div>
              </div>

              <div class="row">
                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                      </fieldset>
                   </div>

                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Return date/time" required="">
                      </fieldset>
                   </div>
              </div>
              <input type="text" class="form-control" placeholder="Enter full name" required="">

              <div class="row">
                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter email address" required="">
                      </fieldset>
                   </div>

                   <div class="col-md-6">
                      <fieldset>
                        <input type="text" class="form-control" placeholder="Enter phone" required="">
                      </fieldset>
                   </div>
              </div>
          </form>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>
@stop