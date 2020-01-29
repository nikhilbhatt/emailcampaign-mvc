<?php
class Route{
   
    protected $route=[];
    public function define($route)
    {
        $this->route=$route;
    }
    public function direct($url)
    {
        if(array_key_exists($url,$this->route))
        {
            return $this->route[$url];
        }
        else
        {
            return 'public/temp.php';  
        }
    }
}
?>