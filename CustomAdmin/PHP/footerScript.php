<?php if ($this->getValue('sidebaroption') == 'right') : ?>

    <script>
        document.querySelector('.sidebar').classList.add('order-md-2');
    </script>

<?php endif; ?>

<?php if ($this->getValue('sidebaroption') == 'top') : ?>

    <style>
        .navbar {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }
        
        .col-lg-10{
            margin-top: 5rem !important;
        }
    </style>

    <script>
        document.querySelector('.sidebar').remove();
        document.querySelector('.navbar').classList.remove('d-lg-none');
        document.querySelector('.navbar').classList.remove('navbar-expand-lg');
        document.querySelector('.navbar').classList.remove('navbar-expand-lg');

        document.querySelector('.col-lg-10').classList.add('col-lg-12');
    </script>

<?php endif; ?>