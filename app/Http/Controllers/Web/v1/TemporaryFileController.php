<?php

namespace App\Http\Controllers\Web\v1;

use App\Http\Controllers\Controller;
use App\Models\TemporaryFile;
use App\Http\Requests\StoreTemporaryFileRequest;
use App\Http\Requests\UpdateTemporaryFileRequest;
use App\Models\TemporaryFiles;
use Illuminate\Support\Facades\Storage;

class TemporaryFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTemporaryFileRequest $request)
    {
        $file = $request->file('file');
        $filename = time() . "-" . auth()->user()->id . "-" . (auth()->user()->fname ?? "") . "-" . (auth()->user()->lname ?? "") . "." . $file->extension();
        $save = Storage::put("public/tmp-files/{$filename}", file_get_contents($file));
        if ($save) {
            $tempFileObj = TemporaryFile::create(['name' => $filename,
                "type" => $file->getClientMimeType(),
                "size" => $file->getSize()]);
            return response($tempFileObj->id, 200, ['content-type' => 'text/plain']);
        }
        return abort("403", "The file has not saved.");
    }

    /**
     * Display the specified resource.
     */
    public function show(TemporaryFile $temporaryFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TemporaryFile $temporaryFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTemporaryFileRequest $request, TemporaryFile $temporaryFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TemporaryFile $temporaryFile)
    {
        //
    }
}
