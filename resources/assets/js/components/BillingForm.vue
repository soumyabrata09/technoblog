<template>
    <div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="email" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="address" required>
            </div>

            <div class="half-form">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="city" required>
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="province" required>
                </div>
            </div> 
                    <!-- end half-form -->

            <div class="half-form">
                <div class="form-group">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="postalcode" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="phone" required>
                </div>
            </div>
    </div>
</template>
<script>
export default {
    mounted : function(){
        console.log('Billing Form mounted successfully');
    }
}
</script>