<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">

               @foreach($product as $products)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Men's Shirt
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->name}}
                        </h5>
                        <h6>
                           ${{$products->Price}}
                        </h6>
                     </div>
                  </div>
               </div>
         
               @endforeach
               <span style= "padding-top:25px;">
              {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
              </span>
        
            </div>
      </section>
