<ol id="breadcrumb">
    <?php
        for ($i = 0; $i < sizeof($pages); $i++):
            $class = '';

            if (sizeof($pages) == 1)
                $class = 'first current';
            else if ($i == 0)
                $class = 'first';
            else if ($i == sizeof($pages) - 1)
                $class = 'current'
    ?>
    <li <?php if ($class) echo 'class="'.$class.'"'; ?>>
        <?php
            if (isset($pages[$i]['url']))
                echo link_to($pages[$i]['label'], $pages[$i]['url']);
            else
                echo $pages[$i]['label'];
        ?>
    </li>
    <?php endfor; ?>
</ol>