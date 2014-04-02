<?php

/* sincro.system.row.tpl */
class __TwigTemplate_863206610a795d36f236b8e102c0346e extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "\t\t\t<tr id=\"tr";
        echo twig_safe_filter((isset($context['SincroId']) ? $context['SincroId'] : null));
        echo "\" class=\"GridRow\" onmouseover=\"this.className='GridRowOver'\" onmouseout=\"this.className='GridRow'\">
\t\t\t\t<td width=\"1\">
\t\t\t\t\t<input type=\"checkbox\" class=\"DeleteCheck\" name=\"delete[]\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['SincroId']) ? $context['SincroId'] : null));
        echo "\" />
\t\t\t\t</td>
\t\t\t\t<td width=\"80\" class=\"";
        // line 5
        echo twig_safe_filter((isset($context['SincroIdClass']) ? $context['SincroIdClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 6
        echo twig_safe_filter((isset($context['SincroId']) ? $context['SincroId'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td align=\"center\" style=\"width:15px\">
\t\t\t\t\t";
        // line 9
        echo twig_safe_filter((isset($context['ExpandLink']) ? $context['ExpandLink'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 11
        echo twig_safe_filter((isset($context['SortedFieldSincroSumClass']) ? $context['SortedFieldSincroSumClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 12
        echo twig_safe_filter((isset($context['SincroSum']) ? $context['SincroSum'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 14
        echo twig_safe_filter((isset($context['SortedFieldSincroEstatusClass']) ? $context['SortedFieldSincroEstatusClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 15
        echo twig_safe_filter((isset($context['SincroEstatus']) ? $context['SincroEstatus'] : null));
        echo "
\t\t\t\t</td>
\t\t\t\t<td class=\"";
        // line 17
        echo twig_safe_filter((isset($context['SortedFieldSincroDateClass']) ? $context['SortedFieldSincroDateClass'] : null));
        echo "\">
\t\t\t\t\t";
        // line 18
        echo twig_safe_filter((isset($context['SincroDate']) ? $context['SincroDate'] : null));
        echo "
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr id=\"trQ";
        // line 21
        echo twig_safe_filter((isset($context['SincroId']) ? $context['SincroId'] : null));
        echo "\" style=\"display:none\">
\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t&nbsp;
\t\t\t\t</td>
\t\t\t\t<td colspan=\"3\" id=\"tdQ";
        // line 25
        echo twig_safe_filter((isset($context['SincroId']) ? $context['SincroId'] : null));
        echo "\" class=\"QuickView\">
\t\t\t\t</td>
\t\t\t\t<td colspan=\"1\">&nbsp;</td>
\t\t\t</tr>";
    }

}
