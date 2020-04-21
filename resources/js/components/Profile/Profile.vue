<template>


        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
            <div class="form billing-info">
                <div class="shop-page-title">
                    <div class="title">Personal<span>Profile</span></div>
                </div>
                <form @submit.prevent='updateProfile'>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="field-label">Username</div>
                          <div class="field-input">
                              <input type="text" v-model="profile.name" >
                          </div>
                      </div>
                        <div class="col-md-12">
                            <div class="field-label">Company name</div>
                            <div class="field-input">
                                <input type="text" v-model="profile.company_name" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="field-label">About/Company description</div>
                            <div class="field-input">
                              <textarea v-model="profile.about" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <!-- <div class="col-md-12">
                            <div class="field-label">Areas served</div>
                            <div class="field-input">
                              <textarea v-model="profile.areas_served" rows="8" cols="80"></textarea>
                            </div>
                        </div> -->

                        <div class="col-md-12">
                            <div class="field-label">Services provided</div>
                            <div class="field-input">
                              <textarea v-model="profile.services_offered" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field-label">Location</div>
                            <div class="field-input">
                                <input type="text" v-model="profile.location" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="field-label">Website</div>
                            <div class="field-input">
                                <input type="text" v-model="profile.website" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                          <div class="field-label">Profile image</div>
                            <div class="field-input">
                                <input type="file" name="images" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-3 my-3">
                            <input type="submit"  class="btn btn-primary" value="Submit">
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>

  </div>
</template>
<script>
 // TODO: update image profile 
export default {
  data(){
    return{
      profile:[],
      allerrors:[]
    }
  },
  methods:{
    getProfile(){
      axios.get('/profile').then((resp)=>{
        this.profile = resp.data
      })
    },
    updateProfile(){
      let self = this;
      form = new FormData();


      form.append('id', self.profile.id);
      form.append('name', self.profile.name);
      form.append('company_name', self.profile.company_name);

      form.append('about', self.profile.about);

      form.append('services_offered', self.profile.services_offered);
      form.append('location', self.profile.location);
        form.append('website', self.profile.website);

      axios.post('/profile',form).then((resp)=>{
          console.log('uploaded succesfully')
          this.getProfile()
          self.allerrors = []
      })
    }
  },
  mounted(){
    this.getProfile();
  }
}

</script>

<style lang="css" scoped>
</style>
