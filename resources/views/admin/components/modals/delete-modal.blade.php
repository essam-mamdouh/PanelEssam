
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('language.delete')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg> ... </svg>
                </button>
            </div>
            <div class="modal-body">
                {{trans('language.delete_aleart')}}  <h4 style="display: inline;color: red;" class="deleteMessage"></h4>
            </div>
            <div class="modal-footer">
                <form class=" deleteForm" method="post">
                    <input class="deleteId" type="hidden" name="id">
                    @csrf
                    @method("delete")
                <button type="button" class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> {{trans('language.close')}}</button>
                <button type="submit" class="btn btn-primary">{{trans('language.delete')}}</button>
            </form>
            </div>
        </div>
    </div>
</div>
