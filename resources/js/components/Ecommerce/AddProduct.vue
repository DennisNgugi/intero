<template>
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
            <div class="form billing-info">
                <div class="shop-page-title">
                    <div class="title">Add <span>product for sale</span></div>
                </div>
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="field-label">Product name*</div>
                            <div class="field-input">
                                <input type="text" name="project_name" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="field-label">Product description*</div>
                            <div class="field-input">
                              <textarea name="description" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="field-label">Price of product*</div>
                            <div class="field-input">
                                <select class="" name="">
                                  <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="field-label">Quantity *</div>
                            <div class="field-input">
                                <select class="" name="category">
                                  <option value=""></option>
                                </select>
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
