@extends('dashboard.layouts.app')
@section('dashboard')
<div class="form billing-info">
    <div class="shop-page-title">
        <div class="title">Add <span>Project</span></div>
    </div>
    <form method="post" action="#">
        <div class="row">
            <div class="col-md-12">
                <div class="field-label">Project name*</div>
                <div class="field-input">
                    <input type="text" name="project_name" placeholder="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="field-label">Project description*</div>
                <div class="field-input">
                  <textarea name="description" rows="8" cols="80"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="field-label">Project category *</div>
                <div class="field-input">
                    <select class="" name="">
                      <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="field-label">Project category *</div>
                <div class="field-input">
                    <select class="" name="category">
                      <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="field-label">Typical Job Cost *</div>
                <div class="field-input">
                    <input type="text" name="cost" placeholder="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="field-label">Cost details *</div>
                <div class="field-input">
                    <input type="text" name="cost_details" placeholder="">
                </div>
            </div>
            <div class="col-md-12">
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


@stop
