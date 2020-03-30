<template>


        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
            <div class="form billing-info">
                <div class="shop-page-title">
                    <div class="title">Personal<span>Profile</span></div>
                </div>
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="field-label">Company name</div>
                            <div class="field-input">
                                <input type="text" name="company_name" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="field-label">About/Company description</div>
                            <div class="field-input">
                              <textarea name="description" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="field-label">Areas served</div>
                            <div class="field-input">
                              <textarea name="areas_served" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="field-label">Services provided</div>
                            <div class="field-input">
                              <textarea name="services" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field-label">Location</div>
                            <div class="field-input">
                                <input type="text" name="cost" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-label">Website</div>
                            <div class="field-input">
                                <input type="text" name="cost_details" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="field-label">Profile image</div>
                            <div class="field-input">
                                <input type="file" name="images" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <input type="submit" name="" class="btn btn-primary" value="Submit">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

  </div>
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
</style>
