<?php namespace App\Pages;

use \Exception;
use \Storage;

/**
 *
 */
class LocalRepository implements PageInterface
{
    protected $disk = 'local';

    public function getAll()
    {
        $username = auth()->user()->username;

        $files = Storage::disk($this->disk)->files($username);

        return $files;
    }

    public function getByLocation($location)
    {
        $username = auth()->user()->username;
        $filename = $username.'/'.$location;

        if(Storage::disk($this->disk)->exists($filename)) {
            $file = Storage::disk($this->disk)->get($filename);
            return $file;
        }

        throw new Exception('File Does Not Exist');
    }

    public function create($location, $data)
    {
        $username = auth()->user()->username;
        $filename = $username.'/'.$location;

        if(Storage::disk($this->disk)->exists($filename)) {
            throw new Exception('File Already Exists');
        }

        Storage::disk($this->disk)->put($filename, $data);

    }

    public function edit($location, $data)
    {
        $username = auth()->user()->username;
        $filename = $username.'/'.$location;

        if(Storage::disk($this->disk)->exists($filename)) {
            Storage::disk($this->disk)->put($filenmae, $data);
        }

        throw new Exception('File Does Not Exist');
    }

    public function delete($location)
    {
        $username = auth()->user()->username;
        $filename = $username.'/'.$location;
        $trash =  $username.'/trash/'.$location;

        if(Storage::disk($this->disk)->exists($filename)) {
            Storage::disk($this->disk)->move($filenmae, $trash);
        }

        throw new Exception('File Does Not Exist');
    }
}
