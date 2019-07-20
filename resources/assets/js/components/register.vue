<template>

    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-md-3 reg-img">
            <img src="https://www.codeclouds.com/wp-content/themes/CodeClouds/images/CodeClouds_Girl.svg" alt="">
        </div>
        <div class="col-md-4 mid-div">
            <h1 class="color-h1">Sign Up!</h1>
            <form method="POST" v-on:submit="check" action="/verify_reg">
                <!-- {{ csrf_field() }} -->
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Name *" name="name" v-model="name" />
                    <small style="color:red;" v-if="nameErr">Name is required</small>
                </div>
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
                    <small style="color:red;" v-if="cpass">Password doesn't match</small>
                </div>
                <div class="form-group">
                    <label>Re-Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password *" name="confirm_password"
                        v-model="confirm_password" />
                    <small style="color:red;" v-if="confirm_passwordErr">Confirm your password</small>
                    <small style="color:red;" v-if="cpass">Password doesn't match</small>
                </div>
                <div>
                    <input type="hidden" name="_token" :value="csrfToken">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <p style="float:right;">Already registered?<a href="/login">Sign In</a></p>
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
                name: '',
                email: '',
                password: '',
                confirm_password: '',
                csrfToken: null,
                nameErr: 0,
                emailErr: 0,
                passwordErr: 0,
                confirm_passwordErr: 0,
                cpass: 0,
                error: 0,
            }
        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
        methods: {
            check(event) {
                this.error = 0;
                if (this.name == "") {
                    this.nameErr = 1;
                    this.error = 1;
                } else {
                    this.nameErr = 0;
                }

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

                if (this.confirm_password == "") {
                    this.confirm_passwordErr = 1;
                    this.error = 1;
                } else {
                    this.confirm_passwordErr = 0;
                }

                if (this.password != this.confirm_password && this.password != "" && this.confirm_password != "") {
                    this.cpass = 1;
                    this.error = 1;
                } else {
                    this.cpass = 0;
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