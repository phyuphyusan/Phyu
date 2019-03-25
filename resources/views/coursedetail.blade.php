
@extends('template')
@section('content')
<section>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <img src="template/images/img_2.jpg" alt="" class="img-fluid"> 
        </div>  
      </div>
            
            <!-- <section class="episodes"> -->
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8">

            <button type="button" class="btn btn-primary btn-lg btn-block">Save</button>
           </div>
         </div>
         

            <div class="row justify-content-center">
              <div class="col-md-3 text-primary">
                <label>Course Name:</label>
              </div>
              <div class="col-md-5">
                <p class="lead">
                PHP Bootcamp
                </p>
              </div>   
            </div>   

            <div class="row justify-content-center">
              <div class="col-md-3 text-primary">
                <label>School Name:</label>
              </div>
                <div class="col-md-5">
                <p class="lead">
                Myanmar IT Consulting
                </p>
              </div> 
              </div>   
              

            <div class="row justify-content-center">
              <div class="col-md-3 text-primary">
                <label>School Description:</label>
              </div>
              <div class="col-md-5">
                <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod

                </p>
              </div>   
            </div>   

            <div class="row"> 
        <div class="col-md-8 offset-md-2">
            <form method="post" action="">
            <input type="hidden" name="post_id" value="">
            <div class="form-group">
          
              <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Write Comment"></textarea>
              <!-- @if ($errors->has('comment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif -->
            </div>
            
            <input type="submit" name="btn" value="Post" class="btn btn-success">
        
        </div>
        
      </div>
      <div class="col-md-8 offset-md-2">
        <div class="card my-3 shadow">
         
          <h5 class="card-header">Comments...</h5>
        </div>
      </div>
        


          </div>
        </div>
      </div>
      
    </section>
          </div>
      
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-left section-heading">
            <h2 class="text-primary heading">You May Also Like</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- END section -->

    
    
    <!-- <div class="py-5 block-22">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
            <h2 class="heading">Create cool websites</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.</p>
          </div>
          <div class="col-md-6">
            <form action="#" class="subscribe">
              <div class="form-group">
                <input type="email" class="form-control email" placeholder="Enter email">
                <input type="submit" class="btn btn-primary submit" value="Subscribe">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->
  

    
    <!-- loader -->
    <!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div> -->

  
@endsection