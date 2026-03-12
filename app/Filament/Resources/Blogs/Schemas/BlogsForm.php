<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BlogsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(200),
                TextInput::make('subtitle')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->native(false)
                    ->required(),
                TextInput::make('location')
                    ->required(),
                FileUpload::make('photo')
                    ->image()
                    ->maxSize(2048)
                    ->directory('blog')
                    ->visibility('public')
                    // ->saveUploadedFileUsing(fn(BaseFileUpload $component, TemporaryUploadedFile $file): ?string => self::storeCompressedImage($component, $file))
                    ->required(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
            ]);
    }

    // protected static function storeCompressedImage(BaseFileUpload $component, TemporaryUploadedFile $file): ?string
    // {
    //     if (! $file->exists()) {
    //         return null;
    //     }

    //     $disk = $component->getDisk();
    //     $directory = trim($component->getDirectory() ?? '', '/');
    //     $extension = strtolower($file->getClientOriginalExtension());
    //     $filename = Str::ulid() . '.' . $extension;
    //     $path = ltrim($directory . '/' . $filename, '/');

    //     $sourcePath = $file->getRealPath();
    //     $imageInfo = @getimagesize($sourcePath);

    //     if ($imageInfo === false) {
    //         return $file->storeAs($component->getDirectory(), $filename, $component->getDiskName());
    //     }

    //     $image = match ($imageInfo['mime'] ?? null) {
    //         'image/jpeg' => @imagecreatefromjpeg($sourcePath),
    //         'image/png' => @imagecreatefrompng($sourcePath),
    //         'image/webp' => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($sourcePath) : false,
    //         default => false,
    //     };

    //     if (! is_resource($image) && ! ($image instanceof \GdImage)) {
    //         return $file->storeAs($component->getDirectory(), $filename, $component->getDiskName());
    //     }

    //     [$targetWidth, $targetHeight] = self::fitWithinBounds(imagesx($image), imagesy($image), 1920, 1920);
    //     $canvas = imagecreatetruecolor($targetWidth, $targetHeight);

    //     if (($imageInfo['mime'] ?? null) === 'image/png' || ($imageInfo['mime'] ?? null) === 'image/webp') {
    //         imagealphablending($canvas, false);
    //         imagesavealpha($canvas, true);
    //         $transparent = imagecolorallocatealpha($canvas, 255, 255, 255, 127);
    //         imagefilledrectangle($canvas, 0, 0, $targetWidth, $targetHeight, $transparent);
    //     }

    //     imagecopyresampled(
    //         $canvas,
    //         $image,
    //         0,
    //         0,
    //         0,
    //         0,
    //         $targetWidth,
    //         $targetHeight,
    //         imagesx($image),
    //         imagesy($image),
    //     );

    //     ob_start();

    //     $saved = match ($imageInfo['mime'] ?? null) {
    //         'image/jpeg' => imagejpeg($canvas, null, 75),
    //         'image/png' => imagepng($canvas, null, 8),
    //         'image/webp' => function_exists('imagewebp') ? imagewebp($canvas, null, 75) : false,
    //         default => false,
    //     };

    //     $binary = ob_get_clean();

    //     imagedestroy($canvas);
    //     imagedestroy($image);

    //     if (! $saved || $binary === false) {
    //         return $file->storeAs($component->getDirectory(), $filename, $component->getDiskName());
    //     }

    //     $disk->put($path, $binary);

    //     return $path;
    // }

    // protected static function fitWithinBounds(int $width, int $height, int $maxWidth, int $maxHeight): array
    // {
    //     if ($width <= $maxWidth && $height <= $maxHeight) {
    //         return [$width, $height];
    //     }

    //     $ratio = min($maxWidth / $width, $maxHeight / $height);

    //     return [
    //         max(1, (int) round($width * $ratio)),
    //         max(1, (int) round($height * $ratio)),
    //     ];
    // }
}
