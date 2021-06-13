<?
class Components{
    public static $components_dir = 'page/component';
    function __construct($title){
        $this->title = $title;
        $this->components_dir = self::$components_dir;

        $k = $this->isset_this_component();

        if($k){
            include($k);
            return true;
        }
        echo("Компонент ".$title." в директории <b>".$this->components_dir."</b> не найден");
        return false;
    }
    function isset_this_component(){
        $filename = self::$components_dir.DIRECTORY_SEPARATOR .$this->title.'.php';
        return file_exists($filename)?$filename:false;
    }
}

class Layout_blocks{
    public static $components_dir = 'page/layout/blocks';
    function __construct($title){
        $this->title = $title;
        $this->components_dir = self::$components_dir;

        $k = $this->isset_this_component();

        if($k){
            include($k);
            return true;
        }
        echo("Компонент ".$title." в директории <b>".$this->components_dir."</b> не найден");
        return false;
    }
    function isset_this_component(){
        $filename = self::$components_dir.DIRECTORY_SEPARATOR .$this->title.'.php';
        return file_exists($filename)?$filename:false;
    }
}


class Form{
    public static $components_dir = 'page/component/form';
    function __construct($title){
        $this->title = $title;
        $this->components_dir = self::$components_dir;

        $k = $this->isset_this_component();

        if($k){
            include($k);
            return true;
        }
        echo("Компонент ".$title." в директории <b>".$this->components_dir."</b> не найден");
        return false;
    }
    function isset_this_component(){
        $filename = self::$components_dir.DIRECTORY_SEPARATOR .$this->title.'.php';
        return file_exists($filename)?$filename:false;
    }
}


class Cabinet{
    public static $components_dir = 'page/component/cabinet';
    function __construct($title){
        $this->title = $title;
        $this->components_dir = self::$components_dir;

        $k = $this->isset_this_component();

        if($k){
            include($k);
            return true;
        }
        echo("Компонент ".$title." в директории <b>".$this->components_dir."</b> не найден");
        return false;
    }
    function isset_this_component(){
        $filename = self::$components_dir.DIRECTORY_SEPARATOR .$this->title.'.php';
        return file_exists($filename)?$filename:false;
    }
}

function component($title){
    // var_dump($title);
    return new Components(explode("?",$title)[0]);
}
function Layout_block($title){
    // var_dump($title);
    return new Layout_blocks(explode("?",$title)[0]);
}
function form($title){
    // var_dump($title);
    return new Form(explode("?",$title)[0]);
}
function cabinet($title){
    // var_dump($title);
    return new Cabinet(explode("?",$title)[0]); }

function get_module($module){
    $module = explode("?",$module)[0];
   $dir = 'page';
   $filename = $dir.DIRECTORY_SEPARATOR .$module.'.php';

   if(file_exists($filename)){
       include($filename);
   }else{
       $filename = $dir.DIRECTORY_SEPARATOR .'home.php';
       include($filename);
   }
}