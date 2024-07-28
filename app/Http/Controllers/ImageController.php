<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function generate_passport(Application $application)
    {
        if (!$application) {
            return redirect()->back();
        }

        // Load an image from a file path
        $img = Image::make(public_path('passport.jpg'));

        $img->text($application->applicant_ref_no??null, 750, 120, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(38);
            $font->color('#ff0000');
        });




        $c=$application->applicant_country??null;
        $img->text($application->applicant_name??null.' '.$c, 135, 250, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_ref_no??null, 770, 287, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_uci??null, 770, 323, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });





        $img->text($application->applicant_name??null, 511, 425, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_name??null, 511, 463, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_dob??null, 511, 503, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_gender??null, 511, 540, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($c, 511, 578, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($c, 511, 618, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_passport_number??null, 631, 655, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });

        $img->text($application->created_at->format('Y-m-d')??null, 511, 738, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->applicant_due_date??null, 511, 772, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text("WORKER", 511, 807, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text("YES", 511, 841, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text(null, 511, 875, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->job->job_desc??null, 511, 909, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $img->text($application->job->job_title??null, 511, 943, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        $t=isset($application->job->contract_period)?$application->job->contract_period.' Years':null;
        $img->text($t, 511, 978, function($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(16);
            $font->color('#100A00');
        });
        // Save the image
        $img->save(public_path('storage/passport/passport_'.$application->id.'.jpg'));

        return redirect()->back();
    }

    public function generate_receipt(Application $application)
    {
        if (!$application) {
            return redirect()->back();
        }

        // Load an image from a file path
        $img = Image::make(public_path('receipt.jpg'));

        $img->text($application->applicant_name??null, 313, 358, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        $img->text($application->applicant_passport_number??null, 313, 395, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        $img->text($application->applicant_country??null, 313, 435, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        $img->text($application->job->job_title??null, 313, 472, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        $img->text($application->applicant_ref_no??null, 313, 505, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        $img->text($application->receipt_amount??null, 370, 543, function ($font) {
            $font->file(public_path('fonts/Roboto/Roboto-Medium.ttf'));
            $font->size(14);
            $font->color('#100A00');
        });
        // Save the image
        $img->save(storage_path('app/public/receipt/receipt_'.$application->id.'.jpg'));

        return redirect()->back();
    }
}
