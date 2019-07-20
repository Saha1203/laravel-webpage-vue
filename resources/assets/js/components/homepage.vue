<template>
    <div class="x">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">CodeClouds</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Product
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Product1</a>
                        <a class="dropdown-item" href="#">Product2</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav flt-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                        <i class="fa fa-user-circle-o"></i>
                        Account
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="/login">Sign In</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="container caro-margin">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.codeclouds.com/wp-content/uploads/2018/11/gfx-business.svg" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.visibilityline.com/wp-content/themes/visibility-line/images/ai_robot.svg"  width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.codeclouds.com/wp-content/uploads/2018/08/graphic-development.svg" alt="New York" width="1100" height="500">
                        </div>
                    </div>
                

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        
        <div  class="container caro-margin">
        <h2 class="color-h2">Welcome to CodeClouds Product Team</h2>
        <p>We are waiting for your success</p>
        </div>
    </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component Mounted');
        },
        data() {
            return {
                userImage: '',
            }
        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
    }
</script>

<style>

</style>