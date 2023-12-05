<?php
class customAdmin extends Plugin
{


    public function init()
    {
        $this->dbFields = array(
            'loginstyle' => '',
            'showAvatar' => '',
            'showName' => '',
            'admintheme' => '',
            'sidebaroption' => '',

        );
    }

    public function form()
    {

        include($this->phpPath() . 'PHP/form.php');
    }

    public function adminHead()
    {

        include($this->phpPath() . 'PHP/headStyle.php');
    }

    public function adminBodyEnd()
    {
        include($this->phpPath() . 'PHP/footerScript.php');
    }

    public function loginHead()
    {

        include($this->phpPath() . 'PHP/headStyle.php');


        $headStyle = '
        <style>
        body.login {
	background: #000;
	background-image: url("https://picsum.photos/1600/900/?blur");
	background-size: cover;
	background-position: center center;
}
h1{
    font-size:2rem !important;
text-transform:inherit !important;}


</style>
        ';


        if ($this->getValue('loginstyle') == 'left') {
            $headStyle .= '<link rel="stylesheet" href="' . $this->domainPath() . 'css/loginLeft.css"/>';
        };

        if ($this->getValue('loginstyle') == 'transparent') {
            $headStyle .= '<link rel="stylesheet" href="' . $this->domainPath() . 'css/loginTransparent.css"/>';
        };



        return $headStyle;
    }


    public function loginBodyEnd()
    {

        include($this->phpPath() . 'PHP/scriptLogin.php');
    }
}
