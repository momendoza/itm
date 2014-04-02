<?php

/* singleline.frontend.html */
class __TwigTemplate_2acea0b2068ad070391f3e6dd2217cbe extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<input type=\"text\" ";
        echo twig_safe_filter((isset($context['FormFieldDefaultArgs']) ? $context['FormFieldDefaultArgs'] : null));
        echo " value=\"";
        echo twig_safe_filter((isset($context['FormFieldValue']) ? $context['FormFieldValue'] : null));
        echo "\" />";
    }

}
