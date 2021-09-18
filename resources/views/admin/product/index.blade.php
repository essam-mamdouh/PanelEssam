@extends('admin.layout.index')
@section('page-title',trans('language.categories'))
@section('statistics')
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 flex-column">
                <div class="border-0 mb-4">
                    <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold py-3 mb-0">Category
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                            </div>
                        </h3>

                        <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                            <button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createproject">
                                <i class="icofont-plus-circle me-2 fs-6"></i>Add Category</button>
                        </div>
                    </div>
                </div>
                <div class="tab-content mt-4">
                    <div class="tab-pane fade show active" id="All-list">
                        <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                        <button type="button" class="btn btn-outline-primery" data-bs-toggle="modal" data-bs-target="#createproject">
                            <i class="icofont-plus-circle me-2 fs-6"></i>Add Item</button>
                        </div><br>
                        <div class="row g-3 gy-5 py-3 row-deck">
                            <div class="col-xxl-3 col-xl-2 col-lg-3 col-md-4 col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="lesson_name">
                                                <div class="project-block bg-lightgreen">
                                                    <i class="icofont-vector-path"></i>
                                                </div>
                                                <span class="small text-muted project_name fw-bold"> Practice to Perfect </span>
                                                <h6 class="mb-0 fw-bold  fs-6  mb-2">Website Design</h6>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button>
                                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createproject" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput77" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput77" placeholder="Explain what the Project Name">
            </div>
            <div class="mb-3">
                <label  class="form-label">Project Category</label>
                <select class="form-select" aria-label="Default select Project Category">
                    <option selected>UI/UX Design</option>
                    <option value="1">Website Design</option>
                    <option value="2">App Development</option>
                    <option value="3">Quality Assurance</option>
                    <option value="4">Development</option>
                    <option value="5">Backend Development</option>
                    <option value="6">Software Testing</option>
                    <option value="7">Website Design</option>
                    <option value="8">Marketing</option>
                    <option value="9">SEO</option>
                    <option value="10">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFileMultipleone" class="form-label">Project Images & Document</label>
                <input class="form-control" type="file" id="formFileMultipleone"  multiple>
            </div>
            <div class="deadline-form">
                <form>
                    <div class="row g-3 mb-3">
                      <div class="col">
                        <label for="datepickerded" class="form-label">Project Start Date</label>
                        <input type="date" class="form-control" id="datepickerded">
                      </div>
                      <div class="col">
                        <label for="datepickerdedone" class="form-label">Project End Date</label>
                        <input type="date" class="form-control" id="datepickerdedone">
                      </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">Notifation Sent</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">Team Leader Only</option>
                                <option value="2">Team Member Only</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                            <select class="form-select" multiple aria-label="Default select Priority">
                                <option selected>Lucinda Massey</option>
                                <option value="1">Ryan Nolan</option>
                                <option value="2">Oliver Black</option>
                                <option value="3">Adam Walker</option>
                                <option value="4">Brian Skinner</option>
                                <option value="5">Dan Short</option>
                                <option value="5">Jack Glover</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-sm">
                    <label for="formFileMultipleone" class="form-label">Budget</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-sm">
                    <label for="formFileMultipleone" class="form-label">Priority</label>
                    <select class="form-select" aria-label="Default select Priority">
                        <option selected>Highest</option>
                        <option value="1">Medium</option>
                        <option value="2">Low</option>
                        <option value="3">Lowest</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea78" class="form-label">Description (optional)</label>
                <textarea class="form-control" id="exampleFormControlTextarea78" rows="3" placeholder="Add any extra details about the request"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
            <button type="button" class="btn btn-primary">Create</button>
        </div>
    </div>
    </div>
</div>

<!-- Edit Project-->
<div class="modal fade" id="editproject" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="editprojectLabel"> Edit Project</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput78" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput78" value="Social Geek Made">
            </div>
            <div class="mb-3">
                <label  class="form-label">Project Category</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>UI/UX Design</option>
                    <option value="1">Website Design</option>
                    <option value="2">App Development</option>
                    <option value="3">Quality Assurance</option>
                    <option value="4">Development</option>
                    <option value="5">Backend Development</option>
                    <option value="6">Software Testing</option>
                    <option value="7">Website Design</option>
                    <option value="8">Marketing</option>
                    <option value="9">SEO</option>
                    <option value="10">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple456" class="form-label">Project Images & Document</label>
                <input class="form-control" type="file" id="formFileMultiple456">
            </div>
            <div class="deadline-form">
                <form>
                    <div class="row g-3 mb-3">
                      <div class="col">
                        <label for="datepickerded123" class="form-label">Project Start Date</label>
                        <input type="date" class="form-control" id="datepickerded123" value="2021-01-10">
                      </div>
                      <div class="col">
                        <label for="datepickerded456" class="form-label">Project End Date</label>
                        <input type="date" class="form-control" id="datepickerded456" value="2021-04-10">
                      </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm-12">
                            <label class="form-label">Notifation Sent</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">Team Leader Only</option>
                                <option value="2">Team Member Only</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="formFileMultipleone" class="form-label">Task Assign Person</label>
                            <select class="form-select" multiple aria-label="Default select Priority">
                                <option selected>Lucinda Massey</option>
                                <option selected value="1">Ryan Nolan</option>
                                <option selected value="2">Oliver Black</option>
                                <option selected value="3">Adam Walker</option>
                                <option selected value="4">Brian Skinner</option>
                                <option value="5">Dan Short</option>
                                <option value="5">Jack Glover</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-sm">
                    <label for="formFileMultipleone" class="form-label">Priority</label>
                    <select class="form-select" aria-label="Default select Priority">
                        <option selected>Medium</option>
                        <option value="1">Highest</option>
                        <option value="2">Low</option>
                        <option value="3">Lowest</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                <textarea class="form-control" id="exampleFormControlTextarea786" rows="3">Social Geek Made,lorem urna commodo sem. Pellentesque venenatis leo quam, sed mattis sapien lobortis ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                </textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
            <button type="button" class="btn btn-primary">Create</button>
        </div>
    </div>
    </div>
</div>

<!-- Modal  Delete Folder/ File-->
<div class="modal fade" id="deleteproject" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title  fw-bold" id="deleteprojectLabel"> Delete item Permanently?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body justify-content-center flex-column d-flex">
            <i class="icofont-ui-delete text-danger display-2 text-center mt-2"></i>
            <p class="mt-4 fs-5 text-center">You can only delete this item Permanently</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger color-fff">Delete</button>
        </div>
    </div>
    </div>
</div>
@endsection



