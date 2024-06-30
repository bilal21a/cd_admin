<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_buttons($id)
    {
        return '
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="editFormShow(' . $id . ')" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-edit-square undefined">
                <path
                    d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11">
                </path>
                <path
                    d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z">
                </path>
            </svg>
            <span class="d-none d-xxl-inline-block">Edit</span>
        </button>
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-danger ms-1" onclick="deleteData(' . $id . ')" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-bin undefined">
                <path
                    d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5">
                </path>
                <path
                    d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5">
                </path>
                <path d="M2 5H18M12 9V13M8 9V13"></path>
            </svg>
            <span class="d-none d-xxl-inline-block">Delete</span>
        </button>';
    }

    public function for_application($id)
    {
        return '
        <button type="button" class="btn btn-sm btn-outline-dark" onclick="openViewShowModal('.$id.')">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M2.47466 10.8418C2.15365 10.3203 2.15365 9.67971 2.47466 9.15822C3.49143 7.50643 6.10818 4 10 4C13.8918 4 16.5086 7.50644 17.5253 9.15822C17.8464 9.67971 17.8464 10.3203 17.5253 10.8418C16.5086 12.4936 13.8918 16 10 16C6.10818 16 3.49143 12.4936 2.47466 10.8418Z"></path><path d="M10 12C11.1046 12 12 11.1046 12 10C12 8.89543 11.1046 8 10 8C8.89543 8 8 8.89543 8 10C8 11.1046 8.89543 12 10 12Z"></path></svg>
            <span class="d-none d-xxl-inline-block">view</span>
        </button>
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="editFormShow(' . $id . ')" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-edit-square undefined">
                <path
                    d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11">
                </path>
                <path
                    d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z">
                </path>
            </svg>
            <span class="d-none d-xxl-inline-block">Edit</span>
        </button>
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-danger ms-1" onclick="deleteData(' . $id . ')" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-bin undefined">
                <path
                    d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5">
                </path>
                <path
                    d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5">
                </path>
                <path d="M2 5H18M12 9V13M8 9V13"></path>
            </svg>
            <span class="d-none d-xxl-inline-block">Delete</span>
        </button>
        <button type="button" class="btn btn-sm btn-outline-tertiary" onclick="VoucherModel('.$id.')">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined">
                <path d="M8.05025 2.5C8.66225 2.5 8.96824 2.5 9.25214 2.58612C9.37751 2.62415 9.49883 2.6744 9.61437 2.73616C9.87601 2.87601 10.0924 3.09238 10.5251 3.52513L16.0251 9.02514C17.0182 10.0182 17.5148 10.5148 17.6331 11.1098C17.6844 11.3674 17.6844 11.6326 17.6331 11.8902C17.5148 12.4852 17.0182 12.9818 16.0251 13.9749L13.9749 16.0251C12.9818 17.0182 12.4852 17.5148 11.8902 17.6331C11.6326 17.6844 11.3674 17.6844 11.1098 17.6331C10.5148 17.5148 10.0182 17.0182 9.02512 16.0251L3.52513 10.5251C3.09238 10.0924 2.87601 9.87601 2.73616 9.61437C2.6744 9.49883 2.62415 9.37751 2.58612 9.25214C2.5 8.96825 2.5 8.66225 2.5 8.05025L2.5 6C2.5 4.59554 2.5 3.89331 2.83706 3.38886C2.98298 3.17048 3.17048 2.98298 3.38886 2.83706C3.89331 2.5 4.59554 2.5 6 2.5L8.05025 2.5Z"></path><path d="M5.5 6C5.5 5.72386 5.72386 5.5 6 5.5V5.5C6.27614 5.5 6.5 5.72386 6.5 6V6C6.5 6.27614 6.27614 6.5 6 6.5V6.5C5.72386 6.5 5.5 6.27614 5.5 6V6Z"></path>
            </svg>
            <span class="d-none d-xxl-inline-block">Add Voucher</span>
        </button>
        <button type="button" class="btn btn-sm btn-outline-quaternary" onclick="VoucherModel('.$id.')">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path><path d="M13 6 7 6M13 10 7 10M13 14 7 14"></path></svg>            <span class="d-none d-xxl-inline-block">Insurance Certificate</span>
        </button>
        ';
    }


    public function viewButton($id, $title = 'View')
    {
        return '<button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="viewFormShow(' . $id . ')" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-bin undefined">
                <path
                    d="M2.47466 10.8418C2.15365 10.3203 2.15365 9.67971 2.47466 9.15822C3.49143 7.50643 6.10818 4 10 4C13.8918 4 16.5086 7.50644 17.5253 9.15822C17.8464 9.67971 17.8464 10.3203 17.5253 10.8418C16.5086 12.4936 13.8918 16 10 16C6.10818 16 3.49143 12.4936 2.47466 10.8418Z">
                </path>
                <path
                    d="M10 12C11.1046 12 12 11.1046 12 10C12 8.89543 11.1046 8 10 8C8.89543 8 8 8.89543 8 10C8 11.1046 8.89543 12 10 12Z">
                </path>
            </svg>
            <span class="d-none d-xxl-inline-block">' . $title . '</span>
        </button>';
    }

    public function delete_button($id)
    {
        return '
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="deleteData(' . $id . ')" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-bin undefined">
                <path
                    d="M4 5V14.5C4 15.9045 4 16.6067 4.33706 17.1111C4.48298 17.3295 4.67048 17.517 4.88886 17.6629C5.39331 18 6.09554 18 7.5 18H12.5C13.9045 18 14.6067 18 15.1111 17.6629C15.3295 17.517 15.517 17.3295 15.6629 17.1111C16 16.6067 16 15.9045 16 14.5V5">
                </path>
                <path
                    d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5">
                </path>
                <path d="M2 5H18M12 9V13M8 9V13"></path>
            </svg>
            <span class="d-none d-xxl-inline-block">Delete</span>
        </button>';
    }
    public function approve_button($id)
    {
        return '
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="approveData(' . $id . ')" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-bin undefined"><path d="M16 5L7.7051 14.2166C7.32183 14.6424 6.65982 14.6598 6.2547 14.2547L3 11"></path></svg>
            <span class="d-none d-xxl-inline-block">Approve</span>
        </button>';
    }

    public function edit_button($id)
    {
        return '
        <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" onclick="editFormShow(' . $id . ')" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="acorn-icons acorn-icons-edit-square undefined">
                <path
                    d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11">
                </path>
                <path
                    d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z">
                </path>
            </svg>
            <span class="d-none d-xxl-inline-block">Edit</span>
        </button>';
    }
}
