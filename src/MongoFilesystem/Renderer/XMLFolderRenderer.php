<?php
namespace MongoFilesystem\Renderer;
use MongoFilesystem\MongoFolder;
use MongoFilesystem\MongoFile;
use MongoFilesystem\Renderer\FolderRenderer;
use MongoFilesystem\Renderer\XMLFileRenderer;
class XMLFolderRenderer extends FolderRenderer
{
    public function __construct(MongoFolder $folder)
    {
        /**
         * Specifing the path the to views folder
         * @var string
         */
        $pathToViews = dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'views';
        parent::__construct($folder, $pathToViews, 'xml');
    }

    protected function getFileRenderer(MongoFile $file) {
        return new XMLFileRenderer($file);
    }
    protected function getFolderRenderer(MongoFolder $folder) {
        return new XMLFolderRenderer($folder);
    }
}