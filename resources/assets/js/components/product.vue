<template>
    <div>
        <div class="container">
            <div class="navbar navbar-inverse">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li class="active"><a href="addproduct.html">Add Product</a></li>
                            <li><a href="updateproduct.html">Update Product(s)</a></li>
                            <li><a href="Addproductgroup.html">Add Product Group</a></li>
                            <li><a href="checkorders.html">Check Customer Orders</a></li>
                            <li><a href="logout.html">Logout</a></li>
                        </ul>
                    </div>
                     <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="pro_head_color">Add Product</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form role="form" method="POST" action="/verify_pro">

                        <label for="productname" class="loginFormElement">Product category:</label>
                        <select class="form-control" id="productSelect" name="product_category">
                            <option>Please Select a Product Group</option>
                            <option>Shirts</option>
                            <option>Jeans</option>
                            <option>footware</option>
                            <option>Sunglass</option>
                        </select>

                        <div class="form-group">
                            <label for="productname" class="loginFormElement">Product name:</label>
                            <input class="form-control" id="productName" name="product_name" type="text">
                        </div>

                        <div class="form-group">
                            <label for="productprice" class="loginFormElement">Product Stock:</label>
                            <input class="form-control" id="productStock" name="product_stock" type="number">
                        </div>

                        <div class="form-group">
                            <label for="productprice" class="loginFormElement">Product Price:</label>
                            <input class="form-control" id="productprice" name="product_price" type="number">
                        </div>

                        <div class="form-group">
                            <label for="productprice" class="loginFormElement">Choose file:</label>
                            <input class="form-control" id="productImg" name="product_file" type="file">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="_token" :value="csrfToken">
                            <button type="submit" id="loginSubmit" class="btn btn-primary">Add
                                Product</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component Mounted');
        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
    }
</script>