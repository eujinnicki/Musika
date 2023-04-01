<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
           
            padding-top: 40px;
        }

        .h1_font {
            font-size: 45px;

        }

        label{
          display: inline-block;
          width: 150px;

        }

        .text_color {
          color: black;
          padding: 20px;
        }

       

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.side')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="div_center">
                <h1 class = 'h1_font'>
                    Add Product
                </h1>

                <form action="{{url('/add_product')}}"  method="POST"  enctype="multipart/form-data">
                  
                  @csrf
                  <div>
                    <div>
                      <label>Product name:</label> 
                      <input class="text_color" type ='text' name='name' placeholder="Add product name" required="">
                    
                    </div>
                    <div>
                      <label>Product Description:</label>
                      <input  class="text_color" type="text" name="description" placeholder="Add product description" required="">
                    
                    
                    </div>
                    <div>
                      <label>Price:</label>
                      <input class="text_color"  type="number" name="price" placeholder="Add product price" required="">
                    
                    </div>
                    
                      <label>Quantity:</label>
                      <input  class="text_color"  type="number" name="quantity" min="0" placeholder="Add quantity" required="">
                    
                    </div>
                    
                    <div class="product_image">
                      <label>Product Image:</label>
                      <input type ="file" name="image" placeholder="Add product image" required=""><br>
                      
                    </div>

                    
                      <input type="submit"  value="Add product" class="btn btn-primary"> 
                    
                  </div>
                </form>
            </div>

          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>