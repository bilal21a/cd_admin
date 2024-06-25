<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class="required fw-bold fs-6 mb-2">Voucher Title</label>
    <input type="text" name="voucher_title" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Voucher Title" value="" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('voucher_title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<div class="fv-row mb-5 fv-plugins-icon-container">
    <label class=" fw-bold fs-6 mb-2">Voucher Price</label>
    <input type="text" name="voucher_price" class="form-control form-control-solid mb-3 mb-lg-0"
        placeholder="Voucher Price" required>
    <div class="fv-plugins-message-container invalid-feedback"></div>
    @error('voucher_price')
        {{-- @dd($message) --}}
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
<input type="hidden" id="company_id_send" name="company_id_send" value="{{$application_id}}">

<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">Close</button>
    <button class="btn btn-primary" type="submit">
        <span class="indicator-label">Submit</span>
    </button>
</div>
