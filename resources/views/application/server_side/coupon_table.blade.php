{{-- @dd($coupons ) --}}
@if (count($vouchers) == 0)
    <tr>
        <td colspan="3" class="fw-bold">Not Found!
        </td>
    </tr>
@else
    @foreach ($vouchers as $voucher)
        <tr>
            <td>{{ $voucher->voucher_title }}</td>
            <td>{{ $voucher->voucher_price }}</td>
            <td><button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="editVoucherModel({{$voucher->id}})" type="button" data-bs-toggle="modal" data-bs-target="#myModalVoucherEdit">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-edit-square undefined">
                    <path d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11">
                    </path>
                    <path d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z">
                    </path>
                </svg>
                <span class="d-none d-xxl-inline-block">Edit</span>
            </button></td>
        </tr>
    @endforeach

@endif
