<?php

function button($button_url = null, $button_text) {
    if (isset($button_url)) {
        $btn_html = "
        <a href=\"$button_url\" class=\"no-menu\">
            <button type=\"button\" class=\"services\">
                $button_text
            </button>
        </a>
        ";
    }

    return $btn_html;
}

function li($html_content) {
    if (isset($html_content)) {
        $li_html = "
        <li>
            $html_content
        </li>
        ";
    }

    return $li_html;
}

function div_c($div_content, $class = null) {
    if (isset($class)) {
        $div_html = "
        <div class='$class'>
            $div_content
        </div>
        ";
    }

    return $div_html;
}
