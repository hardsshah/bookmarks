<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $html->charset(); ?>
        <title><?php echo $title_for_layout; ?></title>
        <?php
        echo $html->meta('icon');
        echo $html->css('blueprint/screen', null, array('media' => 'screen'));
        echo $html->css('blueprint/print', null, array('media' => 'print'));
        ?>
        <!--[if IE]><?php echo $html->css('blueprint/ie', null, array('media' => 'screen, projection'));?><![endif]-->
    </head>
    <body>
        <div id="container">
            <div id="header" class="span-24 last">
                <?php
                echo $html->tag('div', $html->tag('h1', $html->link('Bookmarks', array('controller' => '/'))), array('class' => 'span-12'));
                echo $html->tag('div', $this->element('auth/status'), array('class' => 'span-12 last', 'style' => 'text-align:right;padding-top:20px;'));
                echo $html->tag('div', $this->element('menus/primary'), array('class' => 'span-24 last'));
                echo $html->tag('div', $this->element('menus/primary/sub'), array('class' => 'span-24 last'));
                ?>
            </div>
            <div id="content" class="span-24 last">
                <?php $session->flash(); ?>
                <?php $session->flash('auth'); ?>
                <?php echo $content_for_layout; ?>
            </div>
            <div id="footer" class="span-24 last" style="text-align:right;">
                Bookmarks 0.1 - Developed by <a href="http://matthewcampbell.org/">Matthew Campbell</a> of <a href="http://madesecure.com/">Made Secure, LLC <em>web solutions</em> Charlotte, NC</a>
            </div>
        </div>
    </body>
    <?php echo $scripts_for_layout; ?>
</html>


