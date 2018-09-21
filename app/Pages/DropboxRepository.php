<?php namespace App\Pages;

/**
 *
 */
class DropboxRepository extends LocalRepository implements PageInterface
{
    protected $disk = 'dropbox';
}
