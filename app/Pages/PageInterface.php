<?php namespace App\Pages;

/**
 * Page API
 */
interface PageInterface
{
    /**
     * Get all Pages
     *
     * @return array $pages a list of all page file names
     */
    public function getAll();

    /**
     * Get a page by file locations
     *
     * @param string $location a string representing the filename to retreive
     *
     * @return string $file a string representing the contents of the file
     */
    public function getByLocation($location);

    /**
     * Create a new page
     *
     * @param string $location a string representing the filename to store the file in
     * @param string $data a string of data to save to the file
     *
     * @return void
     */
    public function create($location, $data);

    /**
     * Update a page
     *
     * @param string $location a string representing the filename to store the file in
     * @param string $data a string to update the page with
     *
     * @return void
     */
    public function edit($location, $data);

    /**
     * Delete page by file locations
     *
     * @param string $location a string representing the filename to retreive
     *
     * @return void
     */
    public function delete($location);
}
