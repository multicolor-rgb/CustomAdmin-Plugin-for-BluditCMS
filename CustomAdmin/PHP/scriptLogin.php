<?php if ($this->getValue('showAvatar') == 'yes') : ?>

    <script>
        const avatar = "<img src='<?php echo $this->domainPath() . 'img/avatar.png' ?>' style='width:80px;height:80px;border-radius:50%;display:block;margin:0 auto;' class='avatar'>";
        document.querySelector('h1').insertAdjacentHTML('beforebegin', avatar);
    </script>

<?php endif; ?>

<?php if ($this->getValue('showName') == 'no') : ?>

    <script>
        document.querySelector('h1').textContent = '';
    </script>

<?php endif; ?>