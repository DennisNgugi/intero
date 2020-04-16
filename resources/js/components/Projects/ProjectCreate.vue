<template>
<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
    <div class="form billing-info">
        <div class="shop-page-title">
            <div class="title">Add <span>project</span></div>
        </div>
        <form>
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
                        <textarea class="form-control" v-model="post.description" rows="8" cols="80"></textarea>
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
                        <input type="text" class="form-control" v-model="post.cost" placeholder="">
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
                    <div class="field-label">Project Images *</div>
                    <div class="card">
                        <div class="card-body">
                            <div :class="['field_input',allerrors.images ? 'has-error' : '']">
                                <el-upload action="/" list-type="picture-card"
                                 :on-preview="handlePictureCardPreview"
                                 :on-change="updateImageList"
                                 :auto-upload="false"
                                 name="file[]"
                                 multiple
                                 :limit="5"
                                 :on-exceed="handleExceed">
                                 <i class="el-icon-plus"></i>
                                </el-upload>
                                <el-dialog :visible.sync="dialogVisible">
                                    <img width="100%" :src="dialogImageUrl" alt="">
                                </el-dialog>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-3 my-3">
                    <button type="button" @click="createProject" class="btn btn-primary btn-sm" name="button">
                        {{ isCreatingProject ? 'Posting...' : 'Create Project'}}
                    </button>

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
            isCreatingProject: false,
            dialogImageUrl: '',
            dialogVisible: false,
            post: {
                category: '',
                project_name: '',
                description: '',
                cost: '',
                cost_details: '',
                images: [],
            },
            allerrors: [],
            categories: [],
        }
    },

    methods: {
        fetchDepartments() {
            axios.get('/api/categories')
                .then((resp) => {
                    this.categories = resp.data.department
                }).catch((error) => {
                    console.log(error)
                })
        },

        updateImageList(file) {
            this.post.images.push(file.raw);
        },
        handlePictureCardPreview() {
            this.dialogImageUrl = file.url;
            this.dialogVisible = true;
        },
        handleExceed(file, images) {
            this.$message.warning(`The limit  is 2, you selected ${files.length} files this time, add up to ${files.length + images.length} totally`)
        },

        createProject() {
            this.isCreatingProject = true;
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
            $.each(this.post.images, function(key, image) {
                form.append('images[${key}]', image)
            })
            axios.post('/api/project', form, config)
                .then((response) => {
                    this.post.project_name = '';
                    this.post.description = '';
                    this.post.category = '';
                    this.post.cost = '';
                    this.post.cost_details = '';
                    this.post.images = '';
                    this.isCreatingProject = false;
                })
                .catch((error) => {
                    this.allerrors = error.response.data.errors;
                    this.isCreatingProject = false;
                })

        }
    },
    mounted() {

        this.fetchDepartments();

    },


}
</script>

<style>
.avata-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.avatar-uploader .el-upload:hover {
    border-color: #409eff;

}

.avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
}

.avatar {
    width: 178px;
    height: 178px;
    display: block;
}
</style>
