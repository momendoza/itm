<?php

/* configure.variation.form.tpl */
class __TwigTemplate_717237cd97ae711917694446bf3b8c1a extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        echo "<script type=\"text/javascript\">

function RecalculateProducts()
{
\tvar fp = document.forms.frmRecalculateVariation.elements;
\tvar selected = [];

\tfor(i = 0; i < fp.length; i++) {
\t\tif(fp[i].type == \"checkbox\" && fp[i].checked)
\t\t\tselected[selected.length] = fp[i].value;
\t}

\tif(selected.length == 0) {
\t\talert(\"";
        // line 14
        echo Interspire_Template_Extension::jsFilter(getLang("ChooseVariations"), "'");
        echo "\");
\t\treturn;
\t}

\tvar resp = confirm('";
        // line 18
        echo getLang("ProductVariationRecalculateConfirm");
        echo "');
\t
\tif (resp == true)
\t{
\t\t\$.iModal({
\t\t\ttype: 'ajax',
\t\t\tmethod: 'post',
\t\t\turl: 'remote.php?remoteSection=configure_variations&w=initRecaulculateCombinations&variationId=";
        // line 25
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "&productIDx=' + selected.join(),
\t\t\t//close: false,
\t\t\twidth: 600
\t\t});
\t}
}

function AsignVariationsForm()
{
\tdocument.forms.frmAsignVariations.submit();
}

function SaveConfigVariationForm()
{
\tdocument.forms.frmConfigVariation.submit();
}

function ConfirmCancel() {
\tif(confirm(\"";
        // line 43
        echo getLang("ConfirmCancelVariation");
        echo "\"))
\t\tdocument.location.href = \"index.php?ToDo=editProductVariation&variationId=";
        // line 44
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\";
}

function selectAll (objectSent, turnways) {

\tif (turnways == 1)
\t{
\t\tvar i = 0;
\t\tfor(i;i<objectSent.length;i++)
\t\t{
\t\t\tobjectSent[i].checked = false;
\t\t}
\t}
\telse
\t{
\t\tvar i = 0;
\t\tfor(i;i<objectSent.length;i++)
\t\t{
\t\t\tobjectSent[i].checked = true;
\t\t}
\t}
}

function checkNumeric ()
{
\tvar i;
\tvar errPrice = new Array();
\tvar errWeight = new Array();
\tvar fieldsPrice = document.forms[\"frmConfigVariation\"].elements[\"inp_vcprice[]\"];
\tvar fieldsWeight = document.forms[\"frmConfigVariation\"].elements[\"inp_vcweight[]\"];
\t//alert(\"--\"+fieldsPrice.toString()+\"--\");
\tfor (i=0;i<fieldsPrice.length;i++)
\t{
\t\t//alert(\"--\"+i+\"--\"+fieldsPrice[i].name+\"--\"+fieldsPrice[i].value+\"--<br />\");
\t\tif (isNaN(fieldsPrice[i].value) || fieldsPrice[i].value == \"\")
\t\t{
\t\t\terrPrice.push(i);\t\t\t
\t\t}
\t\tif (isNaN(fieldsWeight[i].value) || fieldsWeight[i].value == \"\")
\t\t{
\t\t\terrWeight.push(i);\t\t\t
\t\t}
\t}

\tif (errPrice.length>0)
\t{
\t\tvar errmsg = 'Los siguientes campos deben ser numericos con dos digitos\\nMontos de Precio:\\n';
\t\tfor(i in errPrice)
\t\t{
\t\t\terrmsg += \"Opcion ID: \" + document.forms[\"frmConfigVariation\"].elements[\"hdn_voptionid[]\"][errPrice[i]].value + \"\\n\";
\t\t\tdocument.forms[\"frmConfigVariation\"].elements[\"inp_vcprice[]\"][errPrice[i]].style.backgroundColor = \"red\";
\t\t}
\t\terrmsg += \"Montos de Peso:\\n\";
\t\tfor(i in errWeight)
\t\t{
\t\t\terrmsg += \"Opcion ID: \" + document.forms[\"frmConfigVariation\"].elements[\"hdn_voptionid[]\"][errPrice[i]].value + \"\\n\";
\t\t\tdocument.forms[\"frmConfigVariation\"].elements[\"inp_vcweight[]\"][errWeight[i]].style.backgroundColor = \"red\";
\t\t}
\t\talert(errmsg);
\t\treturn false;
\t}
\telse return true;
}

function InitializeZeroes()
{
\tvar ans = confirm(\"Esta seguro de querer inicializar la forma? Todos los valores se regresaran a cero\");

\tif (ans == true)
\t{
\t\tvar i;
\t\tvar fieldsPrice = document.forms[\"frmConfigVariation\"].elements[\"inp_vcprice[]\"];
\t\tfor (i=0;i<fieldsPrice.length;i++)
\t\t{
\t\t\tfieldsPrice[i].value = 0.0000;
\t\t}
\t\tvar selectPrice = document.forms[\"frmConfigVariation\"].elements[\"sel_vcpricediff[]\"];
\t\tfor (i=0;i<selectPrice.length;i++)
\t\t{
\t\t\tselectPrice[i].selectedIndex = 0;
\t\t}
\t\t
\t\tvar fieldsWeight = document.forms[\"frmConfigVariation\"].elements[\"inp_vcweight[]\"];
\t\tfor (i=0;i<fieldsWeight.length;i++)
\t\t{
\t\t\tfieldsWeight[i].value = 0.0000;
\t\t}
\t\tvar selectWeight = document.forms[\"frmConfigVariation\"].elements[\"sel_vcweightdiff[]\"];
\t\tfor (i=0;i<selectWeight.length;i++)
\t\t{
\t\t\tselectWeight[i].selectedIndex = 0;
\t\t}
\t}
}

</script>

<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 141
        echo twig_safe_filter((isset($context['FormActionConfig']) ? $context['FormActionConfig'] : null));
        echo "\" id=\"frmConfigVariation\" method=\"post\">
<input type=\"hidden\" name=\"variationId\" id=\"productId\" value=\"";
        // line 142
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\">
<div class=\"BodyContainer\">
<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
<tr>
\t<td class=\"Heading1\">";
        // line 146
        echo twig_safe_filter((isset($context['ConfigTitle']) ? $context['ConfigTitle'] : null));
        echo "</td>
\t<td align=\"right\"><input type=\"reset\" value=\"";
        // line 147
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" /></td>
</tr>
<tr>
\t<td class=\"Intro\" colspan=\"2\">
\t\t\t";
        // line 151
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t<p>";
        // line 152
        echo getLang("ConfigureVariationsIntro");
        echo "</p>
\t</td>
</tr>
<tr>
\t<td>
\t\t<table>
\t\t<tr class=\"GridRow\">
\t\t\t<td class=\"Heading2\">Nombre</td>
\t\t\t<td class=\"Heading2\">Valor</td>
\t\t\t<td class=\"Heading2\">Accion precio</td>
\t\t\t<td class=\"Heading2\">Monto accion precio</td>
\t\t\t<td class=\"Heading2\">Accion peso</td>
\t\t\t<td class=\"Heading2\">Monto accion peso</td>
\t\t</tr>
\t\t";
        // line 166
        echo twig_safe_filter((isset($context['Variations']) ? $context['Variations'] : null));
        echo "
\t</td>
</tr>
<tr>
\t<td colspan=\"2\">
\t\t<input type=\"button\" value=\"";
        // line 171
        echo getLang("Save");
        echo "\" class=\"FormButton\" onclick=\"SaveConfigVariationForm()\" />
\t\t<INPUT type='reset' value='Deshacer cambios' />
\t\t<input type=\"button\" value=\"";
        // line 173
        echo getLang("InitializeForm");
        echo "\" class=\"FormButton\" onclick=\"InitializeZeroes()\" />
\t</td>
</tr>
</table>
</form>
<br /> 
<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 179
        echo twig_safe_filter((isset($context['FormActionAsignVariations']) ? $context['FormActionAsignVariations'] : null));
        echo "\" id=\"frmAsignVariations\" method=\"post\">
<input type=\"hidden\" name=\"variationId\" id=\"productId\" value=\"";
        // line 180
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\">
<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t<tr>
\t\t<td class=\"Heading1\">";
        // line 183
        echo twig_safe_filter((isset($context['AsignTitle']) ? $context['AsignTitle'] : null));
        echo "</td>
\t</tr>
\t<tr>
\t\t<td class=\"Intro\" colspan=\"2\">
\t\t\t<p>";
        // line 187
        echo getLang("AsignVariationsIntro");
        echo "</p>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr class=\"Heading3\" >
\t\t\t\t<tdcolspan=\"4\">Productos por categoria</td>
\t\t\t</tr>
\t\t\t";
        // line 196
        echo twig_safe_filter((isset($context['ProductsTable']) ? $context['ProductsTable'] : null));
        echo "
\t\t\t</table>
\t\t</td>
\t</tr>
\t<tr>
\t\t<td class=\"Heading1\">Otras Opciones</td>
\t</tr>
\t<tr>
\t\t<td><input type=\"checkbox\" name=\"chk_prodoptionsrequired\" />";
        // line 204
        echo getLang("ProductOptionRequired");
        echo "</td>
\t</tr>
    <tr>
        <td>
            <input type=\"button\" value=\"";
        // line 208
        echo twig_safe_filter((isset($context['AsignTitle']) ? $context['AsignTitle'] : null));
        echo "\" class=\"FormButton\" onclick=\"AsignVariationsForm()\" />
\t\t\t&nbsp;&nbsp;&nbsp;
            <a href=\"#\" onclick=\"selectAll(document.forms.frmAsignVariations.elements['products[]'], 0);return false;\">";
        // line 210
        echo getLang("SelectAll");
        echo "</a>
\t\t\t&nbsp;&nbsp;&nbsp;
            <a href=\"#\" onclick=\"selectAll(document.forms.frmAsignVariations.elements['products[]'], 1);return false;\">";
        // line 212
        echo getLang("UnselectAll");
        echo "</a>
        </td>
    </tr>
</table>
</form>
<br />
<form enctype=\"multipart/form-data\" action=\"index.php?ToDo=";
        // line 218
        echo twig_safe_filter((isset($context['FormActionRecalculate']) ? $context['FormActionRecalculate'] : null));
        echo "\" id=\"frmRecalculateVariation\" method=\"post\">
<input type=\"hidden\" name=\"variationId\" id=\"productId\" value=\"";
        // line 219
        echo twig_safe_filter((isset($context['VariationId']) ? $context['VariationId'] : null));
        echo "\">
<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
<tr>
\t<td class=\"Heading1\">";
        // line 222
        echo twig_safe_filter((isset($context['RecalculateTitle']) ? $context['RecalculateTitle'] : null));
        echo "</td>
</tr>
<tr>
\t<td class=\"Intro\" colspan=\"2\">
\t\t<p>";
        // line 226
        echo getLang("RecalculateVariationsIntro");
        echo "</p>
\t</td>
</tr>
<tr>
\t<td>
\t\t<table class=\"GridPanel SortableGrid AutoExpand\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" id=\"IndexGrid\" style=\"width:100%;\">
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\" class=\"Heading2\">Productos a recalcular</td>
\t\t\t</tr>
\t\t\t";
        // line 235
        echo twig_safe_filter((isset($context['ProductsToRecalculate']) ? $context['ProductsToRecalculate'] : null));
        echo "
\t\t</table>
\t</td>
</tr>
<tr>
\t<td>
\t\t<!--<input type=\"button\" value=\"";
        // line 241
        echo twig_safe_filter((isset($context['RecalculateTitle']) ? $context['RecalculateTitle'] : null));
        echo "\" class=\"FormButton\" onclick=\"RecalculateProducts();\" />-->
\t\t<input type=\"submit\" name=\"RecalculateFormRecalculate\" value=\"";
        // line 242
        echo twig_safe_filter((isset($context['RecalculateTitle']) ? $context['RecalculateTitle'] : null));
        echo "\" class=\"FormButton\" onclick=\"return confirm('";
        echo getLang("ProductVariationRecalculateConfirm");
        echo "');\" />
\t\t<input type=\"submit\" name=\"RecalculateFormUnasign\" value=\"";
        // line 243
        echo getLang("UnasignVariation");
        echo "\" class=\"FormButton\" onclick=\"return confirm('";
        echo getLang("ProductVariationUnasignConfirm");
        echo "');\" />
\t\t&nbsp;&nbsp;&nbsp;
\t\t<a href=\"#\" onclick=\"selectAll(document.forms.frmRecalculateVariation.elements['chk_product[]'], 0);return false;\">";
        // line 245
        echo getLang("SelectAll");
        echo "</a>
\t\t&nbsp;&nbsp;&nbsp;
\t\t<a href=\"#\" onclick=\"selectAll(document.forms.frmRecalculateVariation.elements['chk_product[]'], 1);return false;\">";
        // line 247
        echo getLang("UnselectAll");
        echo "</a>
\t</td>
\t<td align=\"right\"><input type=\"reset\" value=\"";
        // line 249
        echo getLang("Cancel");
        echo "\" class=\"FormButton\" onclick=\"ConfirmCancel()\" /></td>\t
</tr>
</table>
</div>
</form>
";
    }

}
