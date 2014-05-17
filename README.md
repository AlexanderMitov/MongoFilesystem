MongoFilesystem
===============

Filesystem implementation on top of MongoDB. It manages a hierarchy of folders and files inside them. The library uses the GridFS for the file storage and a standard collection for the folders. There is an Object-oriented representation of the folders and files in the MongoFilesystem and rich API for performing operations on them. There are file/folder renderers for JSON/HTML/XML as well. 

Requirements
------------
* PHP >= 5.4.0
* MongoDB PHP Driver >= 1.4.0
* PHP SimpleXML extension
* You need the PHP Zip extension >= 1.1.0 in order to use the folder zipping functionality

Installation
------------
1. Install Composer https://getcomposer.org/doc/00-intro.md.
2. Add to your composer.json:
    ```"require": {
        "alexander-mitov/mongo-filesystem": "1.0.*"
    }```
3. Run the `composer install` command.

Basic usage
-----------
Look at the demo project: https://github.com/AlexanderMitov/Demo_Project_Of_MongoFilesystem

Tips
-----------
TODO

API
----------------
* MongoFilesystem::__construct(MongoDB)
* MongoFilesystem::createFolder(string, string)
* MongoFilesystem::deleteFile(MongoFile)
* MongoFilesystem::deleteFolder(MongoFolder)
* MongoFilesystem::downloadAndOutputFile(MongoFile)
* MongoFilesystem::downloadAndOutputFolder(MongoFolder, boolean)
* MongoFilesystem::downloadFile(MongoFile)
* MongoFilesystem::downloadFileInFile(MongoFile)
* MongoFilesystem::downloadFileInFolder(MongoFile, string)
* MongoFilesystem::downloadFolderInFile(MongoFolder, string)
* MongoFilesystem::downloadFolderInFolder(MongoFolder, string)
* MongoFilesystem::fileWithIDExists(MongoId)
* MongoFilesystem::fileWithNameExistsInFolder(string, string, MongoId)
* MongoFilesystem::fileWithPathExists(string, string)
* MongoFilesystem::filesAreIdentical(MongoId, File)
* MongoFilesystem::folderWithIDExists(MongoId)
* MongoFilesystem::folderWithNameAndParentFolderIDExists(string, MongoId)
* MongoFilesystem::folderWithNameExistsInFolder(string, MongoId)
* MongoFilesystem::folderWithPathExists(string, string)
* MongoFilesystem::getFile(MongoId)
* MongoFilesystem::getFileByNameAndParentFolderID(string, string, MongoId)
* MongoFilesystem::getFileByPath(string, string)
* MongoFilesystem::getFileIDByNameAndParentFolderID(string, string, MongoId)
* MongoFilesystem::getFileIDByPath(string, string)
* MongoFilesystem::getFilePath(MongoFile, boolean, string)
* MongoFilesystem::getFileResourceStream(MongoId)
* MongoFilesystem::getFolder(MongoId, boolean)
* MongoFilesystem::getFolderByNameAndParentFolderID(string, MongoId)
* MongoFilesystem::getFolderByPath(string, string)
* MongoFilesystem::getFolderByPath(string, string)
* MongoFilesystem::getFolderFiles(MongoId)
* MongoFilesystem::getFolderIDByNameAndParentFolderID(string, MongoId)
* MongoFilesystem::getFolderIDByPath(string, string)
* MongoFilesystem::getFolderParentFolderID(MongoId)
* MongoFilesystem::getFolderPath(MongoId, boolean, string)
* MongoFilesystem::getFolderSubfolders(MongoId)
* MongoFilesystem::getParentFolder(mixed)
* MongoFilesystem::moveFileInFolder(MongoId, MongoId)
* MongoFilesystem::moveFolderInFolder(MongoId, MongoId)
* MongoFilesystem::renameFile(MongoId, string, string)
* MongoFilesystem::renameFolder(MongoId, stirng)
* MongoFilesystem::updateFile(MongoId, File)
* MongoFilesystem::updateFolder(MongoId, Folder)
* MongoFilesystem::uploadFile(File, MongoId, boolean)
* MongoFilesystem::uploadFolder(Folder, MongoId)
* MongoFilesystem::uploadRecursivelyFolder(Folder, MongoId)

