<div>
    <div class="card card-default card-md mb-4 mt-5">
        <div class="card-header">
            <h6>Cases Overview</h6>
        </div>
        <div class="card-body">
            <div class="columnGrid-wrapper">
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-primary mb-2" data-bs-toggle="modal" wire:click='$set("detail", [])'
                            data-bs-target="#crudModal">
                            Add Entry
                        </a>
                    </div>
                    <div class="col-12">
                        <livewire:cases-datatable />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="crudModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crudModalLabel">
                        @isset($detail['id'])
                            Edit Details
                        @else
                            Add Details
                        @endisset
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Saudi Recruitment Agency</label>
                            <input class="form-control" wire:model='detail.sra'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Suspension Date</label>
                            <input type="date" class="form-control" wire:model='detail.suspension_date'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Office Order Number</label>
                            <input class="form-control" wire:model='detail.office_order_no'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>No. Of Days Suspended</label>
                            <input class="form-control" wire:model='detail.suspension_days'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>E-mail</label>
                            <input class="form-control" wire:model='detail.email'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Employer's Name</label>
                            <input class="form-control" wire:model='detail.employer_name'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Case Officer Who Requested For Suspension</label>
                            <input class="form-control" wire:model='detail.case_officer'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Contact Number Of SRA</label>
                            <input class="form-control" wire:model='detail.sra_contact'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Worker's Lastname</label>
                            <input class="form-control" wire:model='detail.worker_lasname'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Worker's Firstname</label>
                            <input class="form-control" wire:model='detail.worker_firstname'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Worker's Middlename</label>
                            <input class="form-control" wire:model='detail.worker_middlename'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>ATNSIA Case ID No.</label>
                            <input class="form-control" wire:model='detail.atnsia_case_id'>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label>Cr No.</label>
                            <input class="form-control" wire:model='detail.cr_no'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Nature of Complaint</label>
                            <input class="form-control" wire:model='detail.nature_of_complaint'>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Office Address</label>
                            <textarea class="form-control" wire:model='detail.office_address'></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    @isset($detail['id'])
                        <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='edit'>Update</a>
                        <a href="#" class="btn btn-danger"  data-bs-dismiss="modal" wire:click='destroy'>Delete</a>
                    @else
                        <a href="#" class="btn btn-primary" data-bs-dismiss="modal" wire:click='store'>Save changes</a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
