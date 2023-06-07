<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\CompanyRequest;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\About;
use App\Models\Annoncement;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class WebsiteController extends Controller
{
    public function index(){
        $services = Service::all();
        $Blogs = Blog::all();
        $contacts = ContactUs::all();
        $subscriptions =Subscription::orderBy('price')->get();
        $companies = Company::all();
        $Clients = DB::table('users')->count();
        $aboutUs = About::all()->first();
        $contactUS = ContactUs::all()->first();
        $Portfolios = Portfolio::all();
        $annoncements = Annoncement::all();
        return view('admin.Website.index',compact('services','companies','Blogs','contacts','subscriptions','Clients','aboutUs','contactUS','Portfolios','annoncements'));
    }

    //    ------------------------------------------------------------------------------------------------ AboutUs

    public function About(){
        $abouts = About::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.About.index',compact('abouts','admin','notifications'));
    }
    public function CreateAbout(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.About.create',compact('notifications','admin'));
    }

    public function StoreAbout(AboutRequest $request){
        $filename = '';
        $filename = uploadImage("aboutUs",$request->image);

        $about = About::create([
           'image' => $filename,
           "description" => $request->description
        ]);

        return redirect()->route('AllAbout')->with('message','done for About Us');
    }
    public function EditAbout($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $about = About::find($id);
        return view('admin.Website.About.edit',compact('about','notifications','admin'));
    }

    public function UpdateAbout(AboutRequest $request,$id){
        $about = About::find($id);

        $fileInfo = pathinfo($about['image']);

        if(isset($request['image'])){
            $file_path = public_path("\\img\\aboutUs\\" . $fileInfo['basename']);
            if(File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("aboutUs",$request['image']);
            $request['image'] = $filename;
            $about->update($request);

        }else{
            $about->description = $request->description;
            $about->save();
            return redirect()->route('AllAbout')->with('message','About Us edit Successfully');
        }
    }
    public function DeleteAbout($id){
        $about = About::find($id);
        $about->delete();
        return redirect()->route('AllAbout')->with('message','About Us deleted Successfully');
    }

    //    ------------------------------------------------------------------------------------------------ Services


    public function Service(){
        $Services = Service::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Service.index',compact('Services','admin','notifications'));
    }
    public function CreateService(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Service.create',compact('notifications','admin'));
    }

    public function StoreService(ServiceRequest $request){
//        return $request->all();
        $filename = '';
        $filename = uploadImage("Service",$request->image);

        $service = Service::create([
            'image' => $filename,
            'title' => $request->title,
            'name' => $request->name,
            "description" => $request->description
        ]);

        return redirect()->route('AllService')->with('message','done for Services');
    }
    public function EditService($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $service = Service::find($id);
        return view('admin.Website.Service.edit',compact('service','notifications','admin'));
    }

    public function UpdateService(ServiceRequest $request,$id){
        $service = Service::find($id);

        $fileInfo = pathinfo($service['image']);

        if(isset($request['image'])){
            $file_path = public_path("\\img\\Service\\" . $fileInfo['basename']);
            if(File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Service",$request['image']);

            $service->update([
                'image' => $filename,
                'title' => $request->title,
                'name' => $request->name,
                "description" => $request->description
            ]);
            return redirect()->route('AllService')->with('message','Services edit Successfully');

        }else{
            $service->description = $request->description;
            $service->name = $request->name;
            $service->title = $request->title;

            $service->save();
            return redirect()->route('AllService')->with('message','Services edit Successfully');
        }
    }
    public function DeleteService($id){
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('AllService')->with('message','Services deleted Successfully');
    }

//    ------------------------------------------------------------------------------------------------ Blogs

    public function Blog(){
        $Blogs = Blog::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Blog.index',compact('Blogs','admin','notifications'));
    }
    public function CreateBlog(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Blog.create',compact('notifications','admin'));
    }

    public function StoreBlog(BlogRequest $request){
//        return $request->all();
        $filename = '';
        $filename = uploadImage("Blog",$request->image);

        $blog = Blog::create([
            'image' => $filename,
            'title' => $request->title,
            'category' => $request->category,
            "description" => $request->description,
            "admin_id" => auth('admin')->user()->id
        ]);

        return redirect()->route('Blogs')->with('message','done for Blogs');
    }
    public function EditBlog($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $blog = Blog::find($id);
        return view('admin.Website.Blog.edit',compact('blog','notifications','admin'));
    }

    public function UpdateBlog(Request $request,$id){
        $blog = Blog::find($id);

        $fileInfo = pathinfo($blog['image']);

        if(isset($request['image'])){
            $file_path = public_path("\\img\\Blog\\" . $fileInfo['basename']);
            if(File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Blog",$request['image']);

            $blog->update([
                'image' => $filename,
                'title' => $request->title,
                'category' => $request->category,
                "description" => $request->description,
                'admin_id' => auth('admin')->user()->id
            ]);
            return redirect()->route('Blogs')->with('message','Blog edit Successfully');

        }else{
            $blog->description = $request->description;
            $blog->category = $request->category;
            $blog->title = $request->title;
            $blog->admin_id =

                $blog->save();
            return redirect()->route('Blogs')->with('message','Blogs edit Successfully');
        }
    }
    public function DeleteBlog($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('Blogs')->with('message','Blogs deleted Successfully');
    }

    public function blog_single($id){
        $blog = Blog::find($id);
        return view('admin.Website.Blog.blog_single',compact('blog'));

    }

//    --------------------------------------------------------------------------------------------- Contact US

    public function Contact(){
        $Contacts = ContactUs::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Contact.index',compact('Contacts','admin','notifications'));
    }
    public function CreateContact(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Contact.create',compact('notifications','admin'));
    }

    public function StoreContact(ContactRequest $request){

        $blog = ContactUs::create([
            "description" => $request->description,
            "email" => $request->email,
            "street" => $request->street,
            "address" => $request->address,
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "tiktok" => $request->tiktok,
            "twitter" => $request->twitter,
            "phone" => $request->phone,
            "PlayStore" => $request->PlayStore,
            "AppleStore" => $request->AppleStore,
        ]);

        return redirect()->route('Contact')->with('message','done for Contact');
    }
    public function EditContact($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $contact = ContactUs::find($id);
        return view('admin.Website.Contact.edit',compact('contact','notifications','admin'));
    }

    public function UpdateContact(ContactRequest $request,$id){
        $contact = ContactUs::find($id);

        $contact->update([
            "description" => $request->description,
            "email" => $request->email,
            "street" => $request->street,
            "address" => $request->address,
            "facebook" => $request->facebook,
            "instagram" => $request->instagram,
            "linkedin" => $request->linkedin,
            "tiktok" => $request->tiktok,
            "twitter" => $request->twitter,
            "phone" => $request->phone,
            "PlayStore" => $request->PlayStore,
            "AppleStore" => $request->AppleStore,
            ]);
            return redirect()->route('Contact')->with('message','Contact edit Successfully');

    }
    public function DeleteContact($id){
        $contact = ContactUs::find($id);
        $contact->delete();
        return redirect()->route('Contact')->with('message','Contacts deleted Successfully');
    }

    public function Contact_store(Request $request){
        $validated = Validator::make($request->all(),[
            "name" => "required|max:20|min:5",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required"
        ]);
        if($validated->fails()){
            return redirect()->back()->withErrors($validated)->withInput($request->all());
        }
        $requestData = $request->all();

        Contact::create($requestData);
        return redirect()->back()->with('message' , 'Thank you for contact us. we will contact you shortly.');
    }

    public function AllContact(){
        $allcontacts = Contact::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Contact.messages',compact('allcontacts','notifications','admin'));
    }

//    ----------------------------------------------------------------------------------------------------Company

    public function Company(){
        $Companies = Company::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Company.index',compact('Companies','admin','notifications'));
    }
    public function CreateCompany(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Company.create',compact('notifications','admin'));
    }

    public function StoreCompany(CompanyRequest $request){
        $filename = '';
        $filename = uploadImage("Company",$request->image);

        $company = Company::create([
            'image' => $filename,
            'name' => $request->name,
            "description" => $request->description,
        ]);

        return redirect()->route('Company')->with('message','done for Company');
    }
    public function EditCompany($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $company = Company::find($id);
        return view('admin.Website.Company.edit',compact('company','notifications','admin'));
    }

    public function UpdateCompany(Request $request,$id){
        $company = Company::find($id);

        $fileInfo = pathinfo($company['image']);

        if(isset($request['image'])){
            $file_path = public_path("\\img\\Company\\" . $fileInfo['basename']);
            if(File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Company",$request['image']);

            $company->update([
                'image' => $filename,
                'name' => $request->name,
                "description" => $request->description,
            ]);
            return redirect()->route('Company')->with('message','Company edit Successfully');

        }else{
            $company->description = $request->description;
            $company->name = $request->name;

            $company->save();
            return redirect()->route('Company')->with('message','Company edit Successfully');
        }
    }
    public function DeleteCompany($id){
        $company = Company::find($id);

        $fileInfo = pathinfo($company['image']);
        $file_path = public_path("\\img\\Company\\" . $fileInfo['basename']);
        if(File::exists($file_path)) {
            unlink($file_path);
        }
        $company->delete();
        return redirect()->route('Company')->with('message','Company deleted Successfully');
    }

//    -----------------------------------------------------------------------------------------Portfolio
    public function Portfolio(){
        $Portfolios = Portfolio::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Portfolio.index',compact('Portfolios','admin','notifications'));
    }
    public function CreatePortfolio(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Portfolio.create',compact('notifications','admin'));
    }

    public function StorePortfolio(PortfolioRequest $request){
//        return $request->all();
        $filename = '';
        $filename = uploadImage("Portfolio",$request->image);

        $requestData = $request->all();
        if($request->hasfile("detailsImage")){
            foreach($request->file("detailsImage") as $image){
                $details[] = uploadImage("Portfolio",$image);
            }
        }

        $requestData = $request->all();
        $requestData['detailsImage'] = json_encode($details);


        $Portfolio = Portfolio::create([
            'image' => $filename,
            'detailsImage' =>  $requestData['detailsImage'],
            'name' => $request->name,
            "description" => $request->description,
            "client" => $request->client,
            "url" => $request->url,
            "category" => $request->category,
        ]);

        return redirect()->route('Portfolio')->with('message','done for Portfolio');
    }
    public function EditPortfolio($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $Portfolio = Portfolio::find($id);
        return view('admin.Website.Portfolio.edit',compact('Portfolio','notifications','admin'));
    }

    public function UpdatePortfolio(Request $request,$id){
        $Portfolio = Portfolio::find($id);

        $fileInfo = pathinfo($Portfolio['image']);

        if(isset($request['image'])) {
            $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
            if (File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Portfolio", $request['image']);
            $Portfolio->update([
                'image' => $filename,
                'name' => $request->name,
                "description" => $request->description,
                "client" => $request->description,
                "url" => $request->description,
                "category" => $request->description,
            ]);
            return redirect()->route('Portfolio')->with('message','Portfolio edit Successfully');
        }elseif (isset($request['detailsImage']))  //--------------------------------------details Image
          {
              $Portfolio = Portfolio::find($id);
              foreach (json_decode($Portfolio->detailsImage) as $image) {
                    $fileInfo = pathinfo($image);
                    $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
                    if (File::exists($file_path)) {
                        unlink($file_path);
                    }
                }
                foreach ($request->file("detailsImage") as $image) {
                    $details[] = uploadImage("Portfolio", $image);
                }
                $requestData = $request->all();
                $requestData['detailsImage'] = json_encode($details);

            $Portfolio->update([
//                'image' => $filename,
                'detailsImage' => $requestData['detailsImage'],
                'name' => $request->name,
                "description" => $request->description,
                "client" => $request->description,
                "url" => $request->description,
                "category" => $request->description,
            ]);
            return redirect()->route('Portfolio')->with('message','Portfolio edit Successfully');

         }elseif (isset($request['image']) &&isset($request['detailsImage']) ){
            $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
            if (File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Portfolio", $request['image']);

            foreach (json_decode($Portfolio->detailsImage) as $image) {
                $fileInfo = pathinfo($image);
                $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
                if (File::exists($file_path)) {
                    unlink($file_path);
                }
            }
            foreach ($request->file("detailsImage") as $image) {
                $details[] = uploadImage("Portfolio", $image);
            }
            $requestData = $request->all();
            $requestData['detailsImage'] = json_encode($details);
            $Portfolio->update([
                'image' => $filename,
                'detailsImage' => $requestData['detailsImage'],
                'name' => $request->name,
                "description" => $request->description,
                "client" => $request->description,
                "url" => $request->description,
                "category" => $request->description,
            ]);
            return redirect()->route('Portfolio')->with('message','Portfolio edit Successfully');
        }
        else{
                $Portfolio->description = $request->description;
                $Portfolio->name = $request->name;
                $Portfolio->category = $request->category;
                $Portfolio->url = $request->url;
                $Portfolio->client = $request->client;

                $Portfolio->save();
            return redirect()->route('Portfolio')->with('message','Portfolio edit Successfully');
        }
    }
    public function DeletePortfolio($id){
        $Portfolio = Portfolio::find($id);

        $fileInfo = pathinfo($Portfolio['image']);
        $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
        if(File::exists($file_path)) {
            unlink($file_path);
        }

        foreach (json_decode($Portfolio->detailsImage) as $image) {
            $fileInfo = pathinfo($image);
            $file_path = public_path("\\img\\Portfolio\\" . $fileInfo['basename']);
            if (File::exists($file_path)) {
                unlink($file_path);
            }
        }
        $Portfolio->delete();
        return redirect()->route('Portfolio')->with('message','Portfolio deleted Successfully');
    }

    public function portfolio_details($id){
        $Portfolio = Portfolio::find($id);
        return view('admin.Website.Portfolio.portfolio-details',compact('Portfolio'));
    }

//    ---------------------------------------------------------------------------------------------------Announcement

    public function Announcement(){
        $Annoncements = Annoncement::all();
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Announcement.index',compact('Annoncements','admin','notifications'));
    }
    public function CreateAnnouncement(){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        return view('admin.Website.Announcement.create',compact('notifications','admin'));
    }

    public function StoreAnnouncement(AnnouncementRequest $request){
        $filename = '';
        $filename = uploadImage("Announcement",$request->image);

        $Announcement = Annoncement::create([
            'image' => $filename,
            'title' => $request->title,
            "description" => $request->description,
        ]);

        return redirect()->route('Announcement')->with('message','done for Announcement');
    }
    public function EditAnnouncement($id){
        $notifications = DB::table('notifications')->orderBy('id', 'DESC')->take(4)->get();
        $admin = auth('admin')->user();
        $Announcement = Annoncement::find($id);
        return view('admin.Website.Announcement.edit',compact('Announcement','notifications','admin'));
    }

    public function UpdateAnnouncement(Request $request,$id){
        $Announcement = Annoncement::find($id);

        $fileInfo = pathinfo($Announcement['image']);

        if(isset($request['image'])){
            $file_path = public_path("\\img\\Announcement\\" . $fileInfo['basename']);
            if(File::exists($file_path)) {
                unlink($file_path);
            }
            $filename = '';
            $filename = uploadImage("Announcement",$request['image']);

            $Announcement->update([
                'image' => $filename,
                'title' => $request->title,
                "description" => $request->description,
            ]);
            return redirect()->route('Announcement')->with('message','Announcement edit Successfully');

        }else{
            $Announcement->description = $request->description;
            $Announcement->title = $request->title;

            $Announcement->save();
            return redirect()->route('Announcement')->with('message','Announcement edit Successfully');
        }
    }
    public function DeleteAnnouncement($id){
        $Announcement = Annoncement::find($id);

        $fileInfo = pathinfo($Announcement['image']);
        $file_path = public_path("\\img\\Announcement\\" . $fileInfo['basename']);
        if(File::exists($file_path)) {
            unlink($file_path);
        }
        $Announcement->delete();
        return redirect()->route('Announcement')->with('message','Announcement deleted Successfully');
    }


}
