<!doctype html>
<html lang="<?= $this->language ?>" dir="<?php echo $this->direction ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $this->title ?></title>
        <meta name="description" content="<?php echo $this->description; ?>">
        <meta name="keywords" content="<?php echo $this->keywords; ?>">
        <meta name="robots" content="all">
        <meta name="language" content="<?php echo $this->language; ?>">
        <meta name="author" content="<?php echo $this->author; ?>">
        <meta name="copyright" content="<?php echo $this->copyright; ?>">
        <script>
            document.createElement("header");
            document.createElement("footer");
            document.createElement("nav");
        </script>
        <?php
        
            // Dynamic Style Loading
            foreach($this->styles as $style) {
                echo "<link rel=\"stylesheet\" href=\"/css/{$style}.css\">\n\t";
            }
        ?>
    </head>
    <body>
        <div class="page">
            <header>
                <div class="line">
                    <div class="mod" style="float:left">
                        <a href="/"><img width=348 height=50 src="/img/logosmall.png"></a>
                    </div>
                    <div class="mod mod-dropdown pattern-gradient2" style="float:right;margin-right:40px">
                        <p>Stay a while, and listen.</p>
                    </div>
                </div>
                <nav class="mod pattern-gradient pattern-shadow" style="margin:0 0 12px 0">
                    <div style="float:left">
                        <?php
                        
                            // Home Navigation
                            foreach($this->navigation as $k => $link) {
                                if ($link['enabled']) {
                                    if ($link['selected']) {
                                        echo "<a title=\"{$link['title']}\" href=\"{$k}\" class=\"link-nav link-nav-selected\">" . $link['text'] . "</a>\n\t";
                                    } else {
                                        echo "<a title=\"{$link['title']}\" href=\"{$k}\" class=\"link-nav\">" . $link['text'] . "</a>\n\t";
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div style="float:right">
                        <form action="/search" method="get" class="form-search">
                            <fieldset>
                                <input type="text" class="input-search" name="q" x-webkit-speech/>
                                <input type="submit" class="submit-search" value="Search"/>
                            </fieldset>
                        </form>
                    </div>
                </nav>
            </header>
            <?php if (isset($this->heading)) { ?>
                <div class="mod">
                    <h1 class="h-page"><?php echo $this->heading; ?></h1>
                </div>
            <?php } ?>
            <?php
            
                // Notifications
                if ($this->flag['notifications']) {
                    if (F3::get('NOTIFY.error')) { echo "<p class=\"mod mod-button pattern-error js-fadein\">" . F3::get('NOTIFY.error') . "</p>"; }
                    if (F3::get('NOTIFY.success')) { echo "<p class=\"mod mod-button pattern-success js-fadein\">" . F3::get('NOTIFY.success') . "</p>"; }
                    if (F3::get('NOTIFY.tip')) { echo "<p class=\"mod mod-button pattern-tip js-fadein\">" . F3::get('NOTIFY.tip') . "</p>"; }
                    if (F3::get('NOTIFY.warning')) { echo "<p class=\"mod mod-button pattern-warning js-fadein\">" . F3::get('NOTIFY.warning') . "</p>"; }
                }
            ?>
            <?php include (F3::get('GUI') . $file); ?>
            <div class="mod" style="text-align:center;margin-top:40px;margin-bottom:40px">
                <p class="text-subtle" style="margin-bottom:10px">Leviatha.org | Diablo II Database | <a href="mailto:huckfinnaafb@gmail.com">Samuel Ferrell</a> | 2011 | <a href="https://github.com/huckfinnaafb/Leviatha">GitHub</a></p>
                <img title="Software Used for Development of Leviatha" src="/img/software.png">
            </div>
        </div>
        
        <?php
        
            // Dynamic Script Loading
            foreach($this->scripts as $script) {
                echo "<script src=\"/jscript/{$script}.js\"></script>\n\t";
            }
        ?>
        <?php if (F3::get('RELEASE')) { ?>
            <!-- Google Analytics -->
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-21869873-1']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
            
            </script>
        <?php } ?>
    </body>
</html>