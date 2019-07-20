<template>
    <div class="x">
        <nav class="navbar navbar-expand-sm bg-color-nav navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand icon-weight" href="#">CodeClouds</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>
                        About Us</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        Product
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/product">ProductNew</a>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav flt-right">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       <i class="fa fa-user-circle-o"></i>
                        Account
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/profile">Profile</a>
                        <a class="dropdown-item" href="/logout">Sign Out</a>
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
                        <img src="https://www.codeclouds.com/wp-content/uploads/2018/11/gfx-business.svg" width="1100"
                            height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.visibilityline.com/wp-content/themes/visibility-line/images/ai_robot.svg"
                            width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.codeclouds.com/wp-content/uploads/2018/08/graphic-development.svg"
                            alt="New York" width="1100" height="500">
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

        <div class="container caro-margin">
            <h2 class="color-h2">Welcome to CodeClouds Product Team</h2>
            <h4>Hi! {{ email }} we are waiting for your success..</h4>
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

        props: ['email'],

        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
    }
</script>

<style>

</style>