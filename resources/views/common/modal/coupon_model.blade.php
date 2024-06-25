<div class="modal fade show" id="addVoucherModal" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-semi-full modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold fs-4">Voucher Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="company_id" value="">
                <button class="btn btn-icon btn-icon-start btn-primary mb-4" onclick="AddVoucherModel(document.getElementById('company_id').value)" type="button"
                    data-bs-toggle="modal" data-bs-target="#myModal">
                    <i data-acorn-icon="plus"></i>
                    <span>Add New Voucher</span>
                </button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Voucher Title</th>
                            <th>Voucher Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table_data">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

