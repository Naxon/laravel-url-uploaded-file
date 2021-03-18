<?php

namespace Naxon\UrlUploadedFile;

use Illuminate\Http\UploadedFile;
use Naxon\UrlUploadedFile\Exceptions\CantOpenFileFromUrlException;

class UrlUploadedFile extends UploadedFile
{
    public static function createFromUrl(string $url, string $originalName = '', string $mimeType = null, int $error = null, bool $test = false): self
    {
        $arrContextOptions = [
            "ssl" => [
                "verify_peer"      => false,
                "verify_peer_name" => false,
            ],
        ];
        if (!$stream = @fopen($url, 'r', false, stream_context_create($arrContextOptions))) {
            throw new CantOpenFileFromUrlException($url);
        }

        $tempFile = tempnam(sys_get_temp_dir(), 'url-file-');

        file_put_contents($tempFile, $stream);

        return new static($tempFile, $originalName, $mimeType, $error, $test);
    }
}
