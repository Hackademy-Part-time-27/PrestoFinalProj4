<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Enums\AlignPosition;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Image;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $w;
    private $h;
    private $fileName;
    private $path;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath,$w,$h)
    {
       $this->path= dirname($filePath);
       $this->fileName= basename($filePath);
       $this->w= $w;
       $this->h= $h;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath= storage_path() . '/app/public/' . $this->path  . '/' .  $this->fileName;
        $destPath= storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" .  $this->fileName;
        
        //$croppedImage= Image::load($srcPath)
        //->fit(Fit::Crop, $this->w, $this->h)
       // ->save($destPath);

        $croppedImage = Image::load($srcPath)
        ->crop($w,$h,CropPosition::Center)
        ->watermark(base_path('resources/img/Senza titolo-1.png'),
        AlignPosition::BottomRight,
        paddingX: 40, 
        paddingY: 40,
        width: 300,
        height: 200,
        fit: Fit::Stretch)
        ->save($destPath);
    }

    
}
