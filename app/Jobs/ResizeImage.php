<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
=======
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Image;
>>>>>>> 169510987a5e14590293dae48fc076ffa1be5430

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
<<<<<<< HEAD
=======
    private $w;
    private $h;
    private $fileName;
    private $path;
>>>>>>> 169510987a5e14590293dae48fc076ffa1be5430

    /**
     * Create a new job instance.
     */
<<<<<<< HEAD
    public function __construct()
    {
        //
=======
    public function __construct($filePath,$w,$h)
    {
       $this->path= dirname($filePath);
       $this->fileName= basename($filePath);
       $this->w= $w;
       $this->h= $h;

>>>>>>> 169510987a5e14590293dae48fc076ffa1be5430
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
<<<<<<< HEAD
        //
    }
=======
        $w= $this->w;
        $h= $this->h;
        $srcPath= storage_path() . '/app/public/' . $this->path  . '/' .  $this->fileName;
        $destPath= storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" .  $this->fileName;
        
        $croppedImage= Image::load($srcPath)
        ->fit(Fit::Crop, $this->w, $this->h)
        ->save($destPath);
    }

    
>>>>>>> 169510987a5e14590293dae48fc076ffa1be5430
}
