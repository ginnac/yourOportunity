<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use App\User;



class ProfileController extends Controller
{

    use UploadTrait;
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    ////UPLOAD FILE LOCALLY Routes Below:

    // public function index()
    // {
    //     return view('auth.profile');
    // }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'name'  =>  'required',
            'profile_image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }
        // Persist user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }

    // public function deleteOne($folder = null, $disk = 'public', $filename = null)
    // {
    //         Storage::disk($disk)->delete($folder.$filename);
    // }



    ///////////////////////////////////////////////////////////////////////

    //WORKING WITH AWS S3 to store files permanently in the cloud. Routes below: 

        
   public function index()
   {
    //    $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
    //    $images = [];
    //    $files = Storage::disk('s3')->files('images');
    //        foreach ($files as $file) {
    //            $images[] = [
    //                'name' => str_replace('images/', '', $file),
    //                'src' => $url . $file
    //            ];
    //        }
    //    return view('welcome', compact('images'));

    return view('auth.profile');
   }

   public function store(Request $request)
   {
    //    $this->validate($request, [
    //        'image' => 'required|image|max:2048'
    //    ]);

        $request->validate([
            'name'  =>  'required',
            'profile_image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
               
        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');

               
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $userName = $request->input('name');
            $details = time() . $file->getClientOriginalName();
            $filePath = 'images/' . $userName . $details;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
        }

        // Persist user record to database
        $user->save();
       
       return back()->withSuccess('Profile updated successfully');
   }


   public function destroy($image)
   {
       Storage::disk('s3')->delete('images/' . $image);
       return back()->withSuccess('Image was deleted successfully');
   }

}
