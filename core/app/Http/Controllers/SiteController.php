<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Models\AdminNotification;
use App\Models\EmailTemplate;
use App\Models\GeneralSetting;
use App\Models\Page;

class SiteController extends Controller
{
    public function __construct(){
        $this->activeTemplate = activeTemplate();
    }

    public function index(){
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','home')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'HOME';
            $page->slug = 'home';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','home')->first();
        $pageTitle = 'Home';
        return view($this->activeTemplate . 'home', compact('pageTitle','sections'));
    }

    public function pages($slug)
    {
        $page = Page::where('tempname',$this->activeTemplate)->where('slug',$slug)->firstOrFail();
        $pageTitle = $page->name;
        $sections = $page->secs;
        return view($this->activeTemplate . 'pages', compact('pageTitle','sections'));
    }

    public function expertise()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','expertise')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'Expertise';
            $page->slug = 'expertise';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','expertise')->first();
        $pageTitle = 'Expertise';
        return view($this->activeTemplate .'expertise',compact('pageTitle','sections'));
    }
    public function portfolio()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','portfolio')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'Portfolio';
            $page->slug = 'portfolio';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','portfolio')->first();
        $pageTitle = 'Portfolio';
        return view($this->activeTemplate .'portfolio',compact('pageTitle','sections'));
    }
    public function testimonial()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','testimonials')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'Testimonials';
            $page->slug = 'testimonials';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','testimonials')->first();
        $pageTitle = 'Testimonials';
        return view($this->activeTemplate .'testimonial',compact('pageTitle','sections'));
    }
    public function blog()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','blog')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'Blog';
            $page->slug = 'blog';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','blog')->first();
        $pageTitle = 'Blog';
        return view($this->activeTemplate .'blog',compact('pageTitle','sections'));
    }
    public function contact()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','contact')->count();
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'Contact';
            $page->slug = 'contact';
            $page->save();
        }
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','contact')->first();
        $pageTitle = 'Contact Us';
        return view($this->activeTemplate .'contact',compact('pageTitle','sections'));
    }
    public function contactSubmit(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $shortCodes =   [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'message' =>$request->message,
        ];
        $general = GeneralSetting::first();
        $emailTemplate = EmailTemplate::where('act', "SEND_EMAIL")->where('email_status', 1)->first();
        if ($general->en != 1 || !$emailTemplate) {
            return;
        }
        $message = shortCodeReplacer("{{fullname}}", $request->name, $general->email_template);
        $message = shortCodeReplacer("{{username}}", str_replace(' ','',$request->name), $message);
        $message = shortCodeReplacer("{{message}}", $emailTemplate->email_body, $message);
        if (empty($message)) {
            $message = $emailTemplate->email_body;
        }
        foreach ($shortCodes as $code => $value) {
            $message = shortCodeReplacer('{{' . $code . '}}', $value, $message);
        }
        try {
            $config = $general->mail_config;
            if ($config->name == 'php') {
                sendPhpMail('md.mehedihasaniubat@gmail.com', str_replace(' ','',$request->name),$request->subject, $message, $general);
            } else if ($config->name == 'smtp') {
                sendSmtpMail($config,'md.mehedihasaniubat@gmail.com', str_replace(' ','',$request->name), $request->subject, $message,$general);
            }
        } catch (\Exception $exp) {
            $notify[] = ['error', 'Something is wrong,Please try again later'];
            return back()->withNotify($notify);
        }
        $notify[] = ['success', 'Your Email Sent Successfully'];
        return back()->withNotify($notify);


    }
    public function placeholderImage($size = null){
        $imgWidth = explode('x',$size)[0];
        $imgHeight = explode('x',$size)[1];
        $text = $imgWidth . '×' . $imgHeight;
        $fontFile = realpath('assets/font') . DIRECTORY_SEPARATOR . 'RobotoMono-Regular.ttf';
        $fontSize = round(($imgWidth - 50) / 8);
        if ($fontSize <= 9) {
            $fontSize = 9;
        }
        if($imgHeight < 100 && $fontSize > 30){
            $fontSize = 30;
        }

        $image     = imagecreatetruecolor($imgWidth, $imgHeight);
        $colorFill = imagecolorallocate($image, 100, 100, 100);
        $bgFill    = imagecolorallocate($image, 175, 175, 175);
        imagefill($image, 0, 0, $bgFill);
        $textBox = imagettfbbox($fontSize, 0, $fontFile, $text);
        $textWidth  = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $textX      = ($imgWidth - $textWidth) / 2;
        $textY      = ($imgHeight + $textHeight) / 2;
        header('Content-Type: image/jpeg');
        imagettftext($image, $fontSize, 0, $textX, $textY, $colorFill, $fontFile, $text);
        imagejpeg($image);
        imagedestroy($image);
    }

    public function downloadCv()
    {
        $file = "Md.Mehedi-Hasan.pdf";
        $path = imagePath()['cv']['path'];
        $full_path = $path.'/' . $file;
        $title = $file;
        $mimetype = mime_content_type($full_path);
        header('Content-Disposition: attachment; filename="' . $title);
        header("Content-Type: " . $mimetype);
        return readfile($full_path);
    }
}
