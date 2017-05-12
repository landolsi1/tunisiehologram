<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace HologramBundle\Entity;

/**
 * Description of Upload
 *
 * @author Rami
 */
class Upload {

    var $destination = '';
    var $permittedSize; // in Ko
    var $permittedExtentions = array();
    var $root;

    function __construct($root, $destination, $permittedSize, $permittedExtentions) {
        $this->root = $root;
        $this->destination = $destination;
        $this->permittedSize = $permittedSize;
        $this->permittedExtentions = $permittedExtentions;
    }

    function uploadFile($file) {


        $extension = $this->convertExtension($file['type']);
        $time = microtime(true);

        $fileName = str_replace('.', '_', $time) . '.' . $extension;
        $destination_file = $this->destination . $fileName;
        $source_file = $file['tmp_name'];
        copy($source_file, $destination_file);

        return $fileName;
    }

    function hasValidExtension($file) {
        $extension = $this->convertExtension($file['type']);
        $valid_extension = false;
        $i = 0;
        while ($i < count($this->permittedExtentions) && !$valid_extension) {
            $valid_extension = (strcmp($this->permittedExtentions[$i], $extension) == 0);
            $i++;
        }

        return $valid_extension;
    }

    function hasValidSize($file) {
        return (($file['size'] / 1024) <= ($this->permittedSize));
    }

    function fileExists($file) {
        return(($file['tmp_name']) != '');
    }

    function deleteFile($file) {

        // $ftp = new Ftp();
        // $ftp->connect();
        @unlink($file);
        // $ftp->disconnect();
    }

    function convertExtension($type) {
        echo $type;
        switch ($type) {
            case 'image/gif' : return 'gif';
                break;
            case 'image/pjpeg':
            case 'image/jpeg': return 'jpeg';
                break;
            case 'image/png': return 'png';
                break;
            case 'image/gif': return 'gif';
                break;
             case 'video/mp4': return 'mp4';
                break;
            case 'application/pdf':

                return 'pdf';                                                               
                break;
            case 'application/msword' : return 'doc';
            case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' : return 'docx';
                break;
            case 'text/html' : return 'html';
            default : return '';
        }
    }

}
?>