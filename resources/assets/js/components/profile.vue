<template>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-2 profile-margin1">
                <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" alt="">
            </div>
            <div class="col-md-4 profile-margin2">
                <h2 class="color-h2"> Profile</h2>
                <form method="POST" v-on:submit="check" action="/dashboard">
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="phone" class="form-control" placeholder="12345*****" name="contact"
                            v-model="contact" />
                        <small style="color:red;" v-if="contactErr">Contact is required</small>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" row="5" cols="30" placeholder="Type your address.." name="address"
                            v-model="adress"></textarea>
                        <small style="color:red;" v-if="addressErr">Address is required</small>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="fileUpload">
                    </div>
                    <div>
                        <input type="hidden" name="_token" :value="csrfToken">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
            </div>
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
                contact: '',
                address: '',
                userImage: '',
                error: 0,
            }
        },
        created() {
            this.csrfToken = document.querySelector('meta[name="csrf-token"]').content
        },
        methods: {
            check(event) {
                this.error = 0;
                if (this.contact == "") {
                    this.contactErr = 1;
                    this.error = 1;
                } else {
                    this.contactErr = 0;
                }

                if (this.address == "") {
                    this.addressErr = 1;
                    this.error = 1;
                } else {
                    this.addressErr = 0;
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