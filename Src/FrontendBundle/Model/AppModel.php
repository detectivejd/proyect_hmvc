<?php
namespace Src\FrontendBundle\Model;
use \App\Model;
abstract class AppModel extends Model {
    function __construct() {
        parent::__construct();
    }
}