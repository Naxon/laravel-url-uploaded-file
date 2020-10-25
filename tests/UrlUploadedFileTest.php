<?php

namespace Naxon\UrlUploadedFile\Tests;

use Naxon\UrlUploadedFile\UrlUploadedFile;
use Orchestra\Testbench\TestCase;

class UrlUploadedFileTest extends TestCase
{
    /**
     * @test
     *
     * This tests asserts that no exception was thrown.
     */
    public function it_can_retrieve_files_from_url(): void
    {
        UrlUploadedFile::createFromUrl('https://naxon.dev/assets/img/portrait.jpg');

        $this->addToAssertionCount(1);
    }
}
