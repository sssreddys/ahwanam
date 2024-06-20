<?php


namespace App\Livewire;
use App\Models\Image;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class ImageUpload extends Component
{
    use WithFileUploads;


    public $image;


    public function mount()
    {

    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'image' => 'required',
        ]);
    }

    public function uploadImage()
    {

        // $directory = 'public/uploads/image_uploads';

        // // Get an array of all files in the directory
        // $files = Storage::files($directory);

        // dd( $files );
       
        $this->validate([
            'image' => 'required',
        ]);
          

      

        $image = new Image();


        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('image_uploads', $imageName);

        $image->image = $imageName;


        $image->save();


        session()->flash('message', 'Image has been uploaded successfully');


        $this->image = '';


    }



    public function render()
    {
        //Get Uploaded Images


        $images = Image::orderBy('id','DESC')->get();


        return view('livewire.image-upload',['images'=>$images]);
    }
}
