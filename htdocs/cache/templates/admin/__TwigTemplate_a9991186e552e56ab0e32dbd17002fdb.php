<?php

/* sincro.system.grid.tpl */
class __TwigTemplate_a9991186e552e56ab0e32dbd17002fdb extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<form method=\"post\" id=\"SincroForm\" action=\"index.php?ToDo=viewsincro\" onsubmit=\"return SearchSystemSincro(this);\">
\t<input type=\"hidden\" name=\"SortURL\" id=\"SortURL\" value=\"index.php?ToDo=viewsincro";
        // line 2
        echo twig_safe_filter((isset($context['SortURL']) ? $context['SortURL'] : null));
        echo "\" />
\t<input type=\"hidden\" name=\"CurrentTab\" id=\"CurrentTab1\" value=\"";
        // line 3
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo "\" />
\t<table id=\"SystemSincroOptions\" class=\"IntroTable\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">
\t\t<tr>
\t\t\t<td class=\"Intro\" style=\"padding-top: 10px;\">
\t\t\t\t<input type=\"button\" name=\"IndexDeleteButton\" value=\"";
        // line 7
        echo getLang("DeleteSelected");
        echo "\" id=\"IndexDeleteButton\" class=\"SmallButton\" onclick=\"ConfirmDeleteSelectedS()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t\t<input type=\"button\" name=\"DeleteAll\" value=\"";
        // line 8
        echo getLang("DeleteAll");
        echo "\" class=\"SmallButton\" onclick=\"ConfirmDeleteAllS()\" ";
        echo twig_safe_filter((isset($context['DisableDelete']) ? $context['DisableDelete'] : null));
        echo "  />
\t\t\t</td>
\t\t\t<td align=\"right\" nowrap=\"nowrap\" style=\"padding-top: 10px;\">
\t\t\t\t<select name=\"SincStatus\" id=\"SincStatus\">
\t\t\t\t\t<option>Todos los estatus</option>
\t\t\t\t\t<option value=\"0\" ";
        // line 13
        echo twig_safe_filter((isset($context['Estatus0Selected']) ? $context['Estatus0Selected'] : null));
        echo ">NEW</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 14
        echo twig_safe_filter((isset($context['Estatus1Selected']) ? $context['Estatus1Selected'] : null));
        echo ">SLC</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 15
        echo twig_safe_filter((isset($context['Estatus2Selected']) ? $context['Estatus2Selected'] : null));
        echo ">RES</option>
\t\t\t\t</select>
\t\t\t\t&nbsp;
\t\t\t\t<input type=\"text\" id=\"xmlSummary\" class=\"Button\" value=\"";
        // line 18
        echo twig_safe_filter((isset($context['XmlValue']) ? $context['XmlValue'] : null));
        echo "\" size=\"20\" />
\t\t\t</td>
\t\t\t<td width=\"1\" style=\"padding-left: 5px;\">
\t\t\t\t<input id=\"SearchButton\" type=\"image\" border=\"0\" style=\"vertical-align: middle;\" src=\"images/searchicon.gif\" name=\"SearchButton\" />
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>&nbsp;</td>
\t\t\t<td align=\"right\">
\t\t\t\t<a href=\"index.php?ToDo=viewsincro\" style=\"display: ";
        // line 27
        echo twig_safe_filter((isset($context['HideClearResults']) ? $context['HideClearResults'] : null));
        echo "\" id=\"SearchClearButton\" onclick=\"return ClearSystemResultsSincro(this);\">";
        echo getLang("ClearResults");
        echo "</a>
\t\t\t</td>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t</table>
\t<table class=\"GridPanel SortableGrid\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\" style=\"width:100%;\">
\t\t<tr align=\"right\">
\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t";
        // line 35
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t</td>
\t\t</tr>

\t\t<tr class=\"Heading3\">
\t\t\t<td align=\"center\" width=\"1\"><input type=\"checkbox\" onclick=\"\$(this).parents('form').find('input[type=checkbox]').attr('checked', this.checked);\"></td>
\t\t\t<td>
\t\t\t\tConsecutivo &nbsp;
\t\t\t\t";
        // line 43
        echo twig_safe_filter((isset($context['SortLinksConsecutivo']) ? $context['SortLinksConsecutivo'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t&nbsp;
\t\t\t</td>
\t\t\t<td>
\t\t\t\txml &nbsp;
\t\t\t\t";
        // line 50
        echo twig_safe_filter((isset($context['SortLinksXml']) ? $context['SortLinksXml'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\tEstatus &nbsp;
\t\t\t\t";
        // line 54
        echo twig_safe_filter((isset($context['SortLinksEstatus']) ? $context['SortLinksEstatus'] : null));
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\tCreado &nbsp;
\t\t\t\t";
        // line 58
        echo twig_safe_filter((isset($context['SortLinksCreado']) ? $context['SortLinksCreado'] : null));
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 61
        echo twig_safe_filter((isset($context['SincroGrid']) ? $context['SincroGrid'] : null));
        echo "
\t\t<tr align=\"right\">
\t\t\t<td colspan=\"8\" style=\"padding:6px 0px 6px 0px\" class=\"PagingNav\">
\t\t\t\t";
        // line 64
        echo twig_safe_filter((isset($context['Nav']) ? $context['Nav'] : null));
        echo "
\t\t\t</td>
\t\t</tr>\t
\t</table>
</form>

<script type=\"text/javascript\">
\tfunction ShowLogInfo(id)
\t\t{
\t\t\tvar tr = document.getElementById(\"tr\"+id);
\t\t\tvar trQ = document.getElementById(\"trQ\"+id);
\t\t\tvar tdQ = document.getElementById(\"tdQ\"+id);
\t\t\tvar img = document.getElementById(\"expand\"+id);
\t\t\t
\t\t\t
\t\t\tif(img.src.indexOf(\"plus.gif\") > -1)
\t\t\t{
\t\t\t\timg.src = \"images/minus.gif\";
\t
\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"#dbf3d1\";
\t\t\t\t}
\t
\t\t\t\t\$(trQ).find('.QuickView').load('remote.php?w=sincroInfoQuickView&SincroId='+id, {}, function() {
\t\t\t\t\ttrQ.style.display = \"\";
\t\t\t\t});
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\timg.src = \"images/plus.gif\";
\t
\t\t\t\tfor(i = 0; i < tr.childNodes.length; i++)
\t\t\t\t{
\t\t\t\t\tif(tr.childNodes[i].style != null)
\t\t\t\t\t\ttr.childNodes[i].style.backgroundColor = \"\";
\t\t\t\t}
\t\t\t\ttrQ.style.display = \"none\";
\t\t\t}
\t\t}
\t\t
\tfunction ConfirmDeleteSelectedS() {
\t\tif(\$('.DeleteCheck:checked').length == 0) {
\t\t\talert('";
        // line 108
        echo getLang("ChooseLogEntry");
        echo "');
\t\t}
\t\telse {
\t\t\tif(confirm('";
        // line 111
        echo getLang("ConfirmDeleteLogEntries");
        echo "')) {
\t\t\t\tg('SincroForm').action = g('SincroForm').action.replace('viewsincro', 'deleteSystemSincro');
\t\t\t\tg('SincroForm').method = 'post';
\t\t\t\tg('SincroForm').submit();
\t\t\t}
\t\t}
\t}

\tfunction ConfirmDeleteAllS() {
\t\tif(confirm('";
        // line 120
        echo getLang("ConfirmDeleteAllSystemLogEntries");
        echo "')) {
\t\t\tg('SincroForm').action = g('SincroForm').action.replace('viewsincro', 'deleteAllSystemSincro');
\t\t\tg('SincroForm').method = 'post';
\t\t\tg('SincroForm').submit();
\t\t}
\t}
\t
\tfunction SearchSystemSincro(f) {

\t\tvar searchURL = '';
\t\tif(\$('#SincStatus').val() >= 0) {
\t\t\tsearchURL += '&SincStatus='+\$('#SincStatus').val();
\t\t\talert('search_url = '.\$searchURL);
\t\t}


\t\tif(\$('#xmlSummary').val() != \"\") {
\t\t\tsearchURL += '&xmlsummary='+escape(\$('#XmlSummary').val());
\t\t\talert('b');
\t\t}
\t\t
\t\talert(\$('#SortURL').val());
\t\talert(\$('#searchURL').val());
\t\t
\t\t\$(f).parents('.GridContainer').load(\$('#SortURL').val()+searchURL, '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}

\tfunction ClearSystemResultsSincro(f) {

\t\t\$(f).parents('.GridContainer').load(\$('#SortURL').val(), '', function() {
\t\t\tBindAjaxGridSorting();
\t\t});
\t\treturn false;
\t}
\t
</script>";
    }

}
