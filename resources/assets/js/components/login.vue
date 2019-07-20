<template>
    <div class="container">
        <div class="col-md-2"></div>
         <div class="col-md-2 lgin-img">
             <img src="https://www.codeclouds.com/wp-content/themes/CodeClouds/images/CodeClouds_Girl.svg" alt="">
         </div>
        <div class="col-md-4 mid-div">
            <h1 class="color-h1">Sign In!</h1>
            <form method="POST" v-on:submit="check" action="/verify_login">
                <!-- {{ csrf_field() }} -->
                <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="form-control" placeholder="email *" name="email" v-model="email" />
                    <small style="color:red;" v-if="emailErr">Email is required</small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Your Password *" name="password"
                        v-model="password" />
                    <small style="color:red;" v-if="passwordErr">Password is required</small>
                </div>
                <div>
                    <input type="hidden" name="_token" :value="csrfToken">
                    <input type="submit" name="btn" class="btn btn-primary" value="Login">
                    <p style="float:right;">Don't have account?<a href="/register">Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Component Mounted');
        },
        data() {
            return {
                email: '',
                password: '',
                csrfToken: null,
                emailErr: 0,
                passwordErr: 0,
                error: 0
            }
        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
        methods: {
            check(event) {
                if (this.email == "") {
                    this.emailErr = 1;
                    this.error = 1;
                } else {
                    this.emailErr = 0;
                }

                if (this.password == "") {
                    this.passwordErr = 1;
                    this.error = 1;
                } else {
                    this.passwordErr = 0;
                }
                if (this.error == 1) {
                    event.preventDefault();
                } else {
                    this.error = 0;
                }
            }
        }
    }
</script>