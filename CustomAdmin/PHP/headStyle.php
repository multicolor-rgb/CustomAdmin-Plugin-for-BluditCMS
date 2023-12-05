<?php if($this->getValue('admintheme')!=='normal'):?>

<link rel="stylesheet" href="<?php echo $this->domainPath().'css/admintheme/'.$this->getValue('admintheme').'.css';?>">

<?php endif;?>

