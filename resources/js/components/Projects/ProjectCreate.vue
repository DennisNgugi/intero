<template>
<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
    <div class="form billing-info">
        <div class="shop-page-title">
            <div class="title">Add <span>project</span></div>
        </div>
        <form @submit.prevent="projectCreate">
            <div class="row">
                <div class="col-md-12">


                    <div class="field-label">Project name*</div>
                    <div :class="['field_input',allerrors.project_name ? 'has-error' : '']">
                        <input type="text" class="form-control" v-model="post.project_name" placeholder="">
                        <span v-if="allerrors.project_name" class="form-control" :class="['label label-danger']">
                            <p style="color:red;">{{ allerrors.project_name[0]}}</p>
                        </span>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="field-label">Project description*</div>
                    <div :class="['field_input',allerrors.description ? 'has-error' : '']">
                        <textarea  class="form-control" v-model="post.description" rows="8" cols="80"></textarea>
                        <span v-if="allerrors.description" :class="['label label-danger']">
                            <p style="color:red;">{{ allerrors.description[0]}}</p>
                        </span>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="field-label">Project category *</div>
                    <div :class="['field_input',allerrors.category ? 'has-error' : '']">
                        <select class="form-control" v-model="post.category">
                            <option v-for="dep in categories" :value="dep.id">{{dep.department_name}}</option>
                        </select>
                        <span v-if="allerrors.category" :class="['label label-danger']">
                            <p style="color:red;">{{ allerrors.category[0]}}</p>
                        </span>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="field-label">Typical Job Cost *</div>
                    <div :class="['field_input',allerrors.cost ? 'has-error' : '']">
                        <input type="text"  class="form-control" v-model="post.cost" placeholder="">
                        <span v-if="allerrors.cost" :class="['label label-danger']">
                            <p style="color:red;">{{ allerrors.cost[0]}}</p>
                        </span>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="field-label">Cost details *</div>
                    <div :class="['field_input',allerrors.cost_details ? 'has-error' : '']">
                        <input type="text" class="form-control" v-model="post.cost_details" placeholder="">
                        <span v-if="allerrors.cost_details" :class="['label label-danger']">
                            <p style="color:red;">{{ allerrors.cost_details[0]}}</p>
                        </span>

                    </div>
                </div>
                <div class="col-md-12">
                    <div :class="['field_input',allerrors.images ? 'has-error' : '']">
                        <input type="file" class="form-control" multiple @onChange="fieldChange">
                    </div>
                </div>
                <div class="col-md-3 my-3">
                    <input type="submit" class="btn btn-primary" value="Submit">
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
    data() {
        return {
            post: {
                category: '',
                project_name: '',
                description: '',
                cost: '',
                cost_details: '',
                images: [],
            },
            allerrors: [],
            categories:[],
        }
    },

    methods: {
       fetchDepartments(){
           axios.get('/categories')
           .then((resp)=>{
             this.categories = resp.data.department
           }).catch((error)=>{
             console.log(error)
           })
       },
        fieldChange(e) {
            let selectedFile = e.target.files[0]

            if (!selectedFile.length) {
                return false;
            }
            for (let i = 0; i < selectedFile.length; i++) {
                this.post.images.push(selectedFile[i]);
            }
            console.log(e)
        },
        projectCreate() {

            form = new FormData();

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            form.append('project_name', this.post.project_name)
            form.append('category', this.post.category)
            form.append('description', this.post.description)
            form.append('cost', this.post.cost)
            form.append('cost_details', this.post.cost_details)
            form.append('images[]', this.post.images)

            axios.post('/project/create', form, config)
                .then((response) => {
                    this.post.project_name = '';
                    this.post.description = '';
                    this.post.category = '';
                    this.post.cost = '';
                    this.post.cost_details = '';
                    this.post.images = '';
                })
                .catch((error) => {
                    this.allerrors = error.response.data.errors;
                })

        }
    },
    mounted(){

    this.fetchDepartments();

    },


}
</script>

<style lang="css" scoped>
</style>
