<?php

/* settings.checkout.manage.tpl */
class __TwigTemplate_825c423ad188cd46fa0dc8e271dea11c extends Twig_Template
{
    public function display(array $context)
    {
        // line 1
        $context['util'] = $this->env->loadTemplate("macros/util.tpl", true);
        echo "
\t<form action=\"index.php?ToDo=saveUpdatedCheckoutSettings\" name=\"frmCheckoutSettings\" id=\"frmCheckoutSettings\" method=\"post\" onsubmit=\"return ValidateForm(CheckCheckoutSettingsForm)\">
\t\t<div class=\"BodyContainer\">
\t\t<table cellSpacing=\"0\" cellPadding=\"0\" width=\"100%\" style=\"margin-left: 4px; margin-top: 8px;\">
\t\t<tr>
\t\t\t<td class=\"Heading1\">";
        // line 7
        echo getLang("CheckoutSettings");
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"Intro\">
\t\t\t\t<p>";
        // line 11
        echo getLang("CheckoutSettingsIntro");
        echo "</p>
\t\t\t\t<div id=\"CheckoutStatus\">
\t\t\t\t\t";
        // line 13
        echo twig_safe_filter((isset($context['Message']) ? $context['Message'] : null));
        echo "
\t\t\t\t</div>
\t\t\t\t<p class=\"TopButtons\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 16
        echo getLang("Save");
        echo "\" class=\"FormButton SaveButton\" />
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 17
        echo getLang("Cancel");
        echo "\" class=\"FormButton CancelButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<ul id=\"tabnav\">
\t\t\t\t\t<li><a href=\"#\" class=\"active\" id=\"tab0\" onclick=\"ShowTab(0)\">";
        // line 24
        echo getLang("GeneralSettings");
        echo "</a></li>
\t\t\t\t\t";
        // line 25
        echo twig_safe_filter((isset($context['CheckoutTabs']) ? $context['CheckoutTabs'] : null));
        echo "
\t\t\t\t</ul>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<input id=\"currentTab\" name=\"currentTab\" value=\"0\" type=\"hidden\">
\t\t\t\t<div id=\"div0\" style=\"padding-top: 10px;\">
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 35
        echo getLang("CheckoutSettings");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"storename\">";
        // line 39
        echo getLang("CheckoutMethods");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div id=\"BuiltInGatewayOption\" style=\"";
        // line 42
        echo twig_safe_filter((isset($context['HideBuiltInGateway']) ? $context['HideBuiltInGateway'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label><input type=\"radio\" id=\"CheckoutMethodBuiltIn\" name=\"builtInGateway\" value=\"1\" ";
        // line 44
        echo twig_safe_filter((isset($context['UseBuiltInGatewayChecked']) ? $context['UseBuiltInGatewayChecked'] : null));
        echo " /> ";
        echo twig_safe_filter((isset($context['UseBuiltInGateway']) ? $context['UseBuiltInGateway'] : null));
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"builtInGateway builtInGateway_1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" class=\"FloatLeft\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"BuiltInGatewayForm\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 49
        echo twig_safe_filter((isset($context['BuiltInGatewayErrors']) ? $context['BuiltInGatewayErrors'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"BuiltInCheckoutIntro\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo twig_safe_filter((isset($context['BuiltInGatewayIntro']) ? $context['BuiltInGatewayIntro'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 53
        echo twig_safe_filter((isset($context['BuiltInGatewayProperties']) ? $context['BuiltInGatewayProperties'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<label><input type=\"radio\" id=\"CheckoutMethodCustom\" name=\"builtInGateway\" value=\"0\" ";
        // line 58
        echo twig_safe_filter((isset($context['UseCustomGatewayChecked']) ? $context['UseCustomGatewayChecked'] : null));
        echo " /> ";
        echo getLang("UseCustomGateway");
        echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" class=\"FloatLeft builtInGateway builtInGateway_0\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"builtInGateway builtInGateway_0\">
\t\t\t\t\t\t\t\t\t<select size=\"20\" multiple=\"multiple\" name=\"checkoutproviders[]\" id=\"checkoutproviders\" class=\"Field300 ISSelectReplacement ";
        // line 63
        echo twig_safe_filter((isset($context['CheckoutProviderClass']) ? $context['CheckoutProviderClass'] : null));
        echo "\">
\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_safe_filter((isset($context['CheckoutProviders']) ? $context['CheckoutProviders'] : null));
        echo "
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('d1');\" onmouseover=\"ShowHelp('d1', '";
        // line 66
        echo getLang("CheckoutMethods");
        echo "', '";
        echo getLang("CheckoutMethodsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"d1\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">";
        // line 72
        echo getLang("CheckoutType");
        echo ":</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select name=\"CheckoutType\" class=\"Field300\">
\t\t\t\t\t\t\t\t\t<option value=\"single\" ";
        // line 75
        echo twig_safe_filter((isset($context['CheckoutTypeSingleSelected']) ? $context['CheckoutTypeSingleSelected'] : null));
        echo ">";
        echo getLang("CheckoutTypeSingle");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"multipage\" ";
        // line 76
        echo twig_safe_filter((isset($context['CheckoutTypeMultiSelected']) ? $context['CheckoutTypeMultiSelected'] : null));
        echo ">";
        echo getLang("CheckoutTypeMulti");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('chktype');\" onmouseover=\"ShowHelp('chktype', '";
        // line 78
        echo getLang("CheckoutType");
        echo "', '";
        echo getLang("CheckoutTypeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"chktype\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">";
        // line 83
        echo getLang("EnableGuestCheckout");
        echo "?</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"GuestCheckoutEnabled\" value=\"1\" onclick=\"\$('.GuestCheckoutEnabledToggle').toggle();\" ";
        // line 85
        echo twig_safe_filter((isset($context['GuestCheckoutChecked']) ? $context['GuestCheckoutChecked'] : null));
        echo " /> ";
        echo getLang("YesEnableGuestCheckout");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('guestcheckout');\" onmouseover=\"ShowHelp('guestcheckout', '";
        // line 86
        echo getLang("EnableGuestCheckout");
        echo "?', '";
        echo getLang("EnableGuestCheckoutHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"guestcheckout\"></div>
\t\t\t\t\t\t\t\t<div style=\"";
        // line 88
        echo twig_safe_filter((isset($context['HideGuestCheckoutCreateAccounts']) ? $context['HideGuestCheckoutCreateAccounts'] : null));
        echo "\" class=\"GuestCheckoutEnabledToggle\">
\t\t\t\t\t\t\t\t\t<img src=\"images/nodejoin.gif\" alt=\"\" />
\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"GuestCheckoutCreateAccounts\" value=\"1\" ";
        // line 90
        echo twig_safe_filter((isset($context['GuestCheckoutCreateAccountsCheck']) ? $context['GuestCheckoutCreateAccountsCheck'] : null));
        echo " /> ";
        echo getLang("YesAutoCreateGuestAccounts");
        echo "</label>
\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('guestcheckout2');\" onmouseover=\"ShowHelp('guestcheckout2', '";
        // line 91
        echo getLang("AutoCreateGuestAccounts");
        echo "?', '";
        echo getLang("AutoCreateGuestAccountsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"guestcheckout2\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"EnableOrderComments\">";
        // line 98
        echo getLang("EnableOrderComments");
        echo "?</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"EnableOrderComments\" id=\"EnableOrderComments\" value=\"1\" ";
        // line 101
        echo twig_safe_filter((isset($context['IsEnableOrderComments']) ? $context['IsEnableOrderComments'] : null));
        echo " /> <label for=\"EnableOrderComments\">";
        echo getLang("YesEnableOrderComments");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('OrderCommentsHelp');\" onmouseover=\"ShowHelp('OrderCommentsHelp', '";
        // line 102
        echo getLang("EnableOrderComments");
        echo "?', '";
        echo getLang("EnableOrderCommentsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"OrderCommentsHelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"EnableOrderComments\">";
        // line 108
        echo getLang("EnableOrderTermsAndConditions");
        echo "?</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input onclick=\"\$('.OrderTermsAndConditions').toggle();\" type=\"checkbox\" name=\"EnableOrderTermsAndConditions\" id=\"EnableOrderTermsAndConditions\" value=\"1\" ";
        // line 111
        echo twig_safe_filter((isset($context['IsEnableOrderTermsAndConditions']) ? $context['IsEnableOrderTermsAndConditions'] : null));
        echo " /> <label for=\"EnableOrderTermsAndConditions\">";
        echo getLang("YesEnableOrderTermsAndConditions");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('EnableOrderTermsAndConditionsHelp');\" onmouseover=\"ShowHelp('EnableOrderTermsAndConditionsHelp', '";
        // line 112
        echo getLang("EnableOrderTermsAndConditions");
        echo "?', '";
        echo getLang("EnableOrderTermsAndConditionsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"EnableOrderTermsAndConditionsHelp\"></div>
\t\t\t\t\t\t\t\t<div style=\"";
        // line 114
        echo twig_safe_filter((isset($context['HideOrderTermsAndConditions']) ? $context['HideOrderTermsAndConditions'] : null));
        echo "\" class=\"OrderTermsAndConditions\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\"><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>


\t\t\t\t\t\t\t\t\t\t\t\t<input onclick=\"ToggleTermsAndConditions('link');\" type=\"radio\" name=\"OrderTermsAndConditionsType\" id=\"TNCLink\" class=\"OrderTermsAndConditionsType\" value=\"link\"  ";
        // line 121
        echo twig_safe_filter((isset($context['IsEnableOrderTermsAndConditionsLink']) ? $context['IsEnableOrderTermsAndConditionsLink'] : null));
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"TNCLink\">";
        // line 122
        echo getLang("LinkToMyTermsAndConditions");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('OrderTermsAndConditionsLinkHelp');\" onmouseover=\"ShowHelp('OrderTermsAndConditionsLinkHelp', '";
        // line 123
        echo getLang("OrderTermsAndConditionsLink");
        echo "?', '";
        echo getLang("OrderTermsAndConditionsLinkHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"OrderTermsAndConditionsLinkHelp\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t<input style=\"margin-left:25px; ";
        // line 126
        echo twig_safe_filter((isset($context['HideOrderTermsAndConditionsLink']) ? $context['HideOrderTermsAndConditionsLink'] : null));
        echo "\" class=\"Field250 OrderTermsAndConditionsLink\" name=\"OrderTermsAndConditionsLink\" value=\"";
        echo twig_safe_filter((isset($context['OrderTermsAndConditionsLink']) ? $context['OrderTermsAndConditionsLink'] : null));
        echo "\">

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td valign=\"top\"><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t<input onclick=\"ToggleTermsAndConditions('textarea');\" type=\"radio\" name=\"OrderTermsAndConditionsType\" id=\"TNCText\" class=\"OrderTermsAndConditionsType\" value=\"textarea\"  ";
        // line 134
        echo twig_safe_filter((isset($context['IsEnableOrderTermsAndConditionsTextarea']) ? $context['IsEnableOrderTermsAndConditionsTextarea'] : null));
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"TNCText\">";
        // line 135
        echo getLang("LetMeTypeTermsAndConditions");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('OrderTermsAndConditionsTextareaHelp');\" onmouseover=\"ShowHelp('OrderTermsAndConditionsTextareaHelp', '";
        // line 136
        echo getLang("OrderTermsAndConditionsText");
        echo "?', '";
        echo getLang("OrderTermsAndConditionsTextareaHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"OrderTermsAndConditionsTextareaHelp\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t<textarea  style=\"margin-left:25px; ";
        // line 139
        echo twig_safe_filter((isset($context['HideOrderTermsAndConditionsTextarea']) ? $context['HideOrderTermsAndConditionsTextarea'] : null));
        echo "\" class=\"Field250 OrderTermsAndConditionsTextarea\" name=\"OrderTermsAndConditionsTextarea\" rows=\"5\">";
        echo twig_safe_filter((isset($context['OrderTermsAndConditions']) ? $context['OrderTermsAndConditions'] : null));
        echo "</textarea>

\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr style=\"";
        // line 147
        echo twig_safe_filter((isset($context['HideMultiShipping']) ? $context['HideMultiShipping'] : null));
        echo "\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"MultipleShippingAddresses\">";
        // line 149
        echo getLang("EnableMultipleShippingAddresses");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"MultipleShippingAddresses\" id=\"MultipleShippingAddresses\" value=\"1\" ";
        // line 152
        echo twig_safe_filter((isset($context['IsMultipleShippingAddressesEnabled']) ? $context['IsMultipleShippingAddressesEnabled'] : null));
        echo " /> <label for=\"MultipleShippingAddresses\">";
        echo getLang("YesEnableMultipleShippingAddresses");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('MultipleShippingAddressesHelp');\" onmouseover=\"ShowHelp('MultipleShippingAddressesHelp', '";
        // line 153
        echo getLang("EnableMultipleShippingAddresses");
        echo "?', '";
        echo getLang("EnableMultipleShippingAddressesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\" />
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"MultipleShippingAddressesHelp\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>

\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 161
        echo getLang("CheckoutExtraFields");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\"><label for=\"CheckoutUseExtraFields\">";
        // line 164
        echo getLang("CheckoutUseExtraFieldsLabel");
        echo ":</label></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" onclick=\"toggleCheckoutExtraFields();\" name=\"CheckoutUseExtraFields\" id=\"CheckoutUseExtraFields\" ";
        // line 166
        echo twig_safe_filter((isset($context['CheckoutUseExtraFieldsChecked']) ? $context['CheckoutUseExtraFieldsChecked'] : null));
        echo "/> <label for=\"CheckoutUseExtraFields\">";
        echo getLang("CheckoutUseExtraFields");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuef');\" onmouseover=\"ShowHelp('cuef', '";
        // line 167
        echo getLang("CheckoutUseExtraFields");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuef\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr style=\"";
        // line 172
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRow1Display']) ? $context['CheckoutExtraFieldRow1Display'] : null));
        echo "\" id=\"CheckoutExtraFieldRow1\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">Activar campo 1? <input type=\"checkbox\" onclick=\"toggleCheckoutExtraFieldActive(1);\" name=\"CheckoutExtraFieldActive1\" id=\"CheckoutExtraFieldActive1\" ";
        // line 173
        echo twig_safe_filter((isset($context['CheckoutExtraFieldActive1Checked']) ? $context['CheckoutExtraFieldActive1Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t<td id=\"DivCheckoutExtraFieldActive1\" style=\"";
        // line 174
        echo twig_safe_filter((isset($context['DivCheckoutExtraFieldActive1Display']) ? $context['DivCheckoutExtraFieldActive1Display'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 177
        echo getLang("CheckoutExtraFieldName1");
        echo " <input type=\"text\" name=\"CheckoutExtraFieldName1\" id=\"CheckoutExtraFieldName1\" value=\"";
        echo twig_safe_filter((isset($context['CheckoutExtraFieldName1Value']) ? $context['CheckoutExtraFieldName1Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>Requerido? <input type=\"checkbox\" name=\"CheckoutExtraFieldRequired1\" id=\"CheckoutExtraFieldRequired1\" ";
        // line 178
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRequired1Checked']) ? $context['CheckoutExtraFieldRequired1Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 179
        echo getLang("CheckoutExtraFieldType1");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"CheckoutExtraFieldType1\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"input\"";
        // line 182
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType1Selectedinput']) ? $context['CheckoutExtraFieldType1Selectedinput'] : null));
        echo ">Texto (chico)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"text\"";
        // line 183
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType1Selectedtext']) ? $context['CheckoutExtraFieldType1Selectedtext'] : null));
        echo ">Texto (grande)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"select\"";
        // line 184
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType1Selectedselect']) ? $context['CheckoutExtraFieldType1Selectedselect'] : null));
        echo ">Seleccion</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"checkbox\"";
        // line 185
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType1Selectedcheckbox']) ? $context['CheckoutExtraFieldType1Selectedcheckbox'] : null));
        echo ">Check</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 188
        echo getLang("CheckoutExtraFieldValue1");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"CheckoutExtraFieldValue1\" id=\"CheckoutExtraFieldValue1\" value=\"";
        // line 189
        echo twig_safe_filter((isset($context['CheckoutExtraFieldValue1Value']) ? $context['CheckoutExtraFieldValue1Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuefv1');\" onmouseover=\"ShowHelp('cuefv1', '";
        // line 191
        echo getLang("CheckoutUseExtraFieldsValues");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuefv1\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr style=\"";
        // line 199
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRow2Display']) ? $context['CheckoutExtraFieldRow2Display'] : null));
        echo "\" id=\"CheckoutExtraFieldRow2\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">Activar campo 2? <input type=\"checkbox\" onclick=\"toggleCheckoutExtraFieldActive(2);\" name=\"CheckoutExtraFieldActive2\" id=\"CheckoutExtraFieldActive2\" ";
        // line 200
        echo twig_safe_filter((isset($context['CheckoutExtraFieldActive2Checked']) ? $context['CheckoutExtraFieldActive2Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t<td id=\"DivCheckoutExtraFieldActive2\" style=\"";
        // line 201
        echo twig_safe_filter((isset($context['DivCheckoutExtraFieldActive2Display']) ? $context['DivCheckoutExtraFieldActive2Display'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 204
        echo getLang("CheckoutExtraFieldName2");
        echo " <input type=\"text\" name=\"CheckoutExtraFieldName2\" id=\"CheckoutExtraFieldName2\" value=\"";
        echo twig_safe_filter((isset($context['CheckoutExtraFieldName2Value']) ? $context['CheckoutExtraFieldName2Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>Requerido? <input type=\"checkbox\" name=\"CheckoutExtraFieldRequired2\" id=\"CheckoutExtraFieldRequired2\" ";
        // line 205
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRequired2Checked']) ? $context['CheckoutExtraFieldRequired2Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 206
        echo getLang("CheckoutExtraFieldType2");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"CheckoutExtraFieldType2\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"input\"";
        // line 209
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType2Selectedinput']) ? $context['CheckoutExtraFieldType2Selectedinput'] : null));
        echo ">Texto (chico)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"text\"";
        // line 210
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType2Selectedtext']) ? $context['CheckoutExtraFieldType2Selectedtext'] : null));
        echo ">Texto (grande)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"select\"";
        // line 211
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType2Selectedselect']) ? $context['CheckoutExtraFieldType2Selectedselect'] : null));
        echo ">Seleccion</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"checkbox\"";
        // line 212
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType2Selectedcheckbox']) ? $context['CheckoutExtraFieldType2Selectedcheckbox'] : null));
        echo ">Check</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 215
        echo getLang("CheckoutExtraFieldValue2");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"CheckoutExtraFieldValue2\" id=\"CheckoutExtraFieldValue2\" value=\"";
        // line 216
        echo twig_safe_filter((isset($context['CheckoutExtraFieldValue2Value']) ? $context['CheckoutExtraFieldValue2Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuefv2');\" onmouseover=\"ShowHelp('cuefv2', '";
        // line 218
        echo getLang("CheckoutUseExtraFieldsValues");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuefv2\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr style=\"";
        // line 226
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRow3Display']) ? $context['CheckoutExtraFieldRow3Display'] : null));
        echo "\" id=\"CheckoutExtraFieldRow3\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">Activar campo 3? <input type=\"checkbox\" onclick=\"toggleCheckoutExtraFieldActive(3);\" name=\"CheckoutExtraFieldActive3\" id=\"CheckoutExtraFieldActive3\" ";
        // line 227
        echo twig_safe_filter((isset($context['CheckoutExtraFieldActive3Checked']) ? $context['CheckoutExtraFieldActive3Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t<td id=\"DivCheckoutExtraFieldActive3\" style=\"";
        // line 228
        echo twig_safe_filter((isset($context['DivCheckoutExtraFieldActive3Display']) ? $context['DivCheckoutExtraFieldActive3Display'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 231
        echo getLang("CheckoutExtraFieldName3");
        echo " <input type=\"text\" name=\"CheckoutExtraFieldName3\" id=\"CheckoutExtraFieldName3\" value=\"";
        echo twig_safe_filter((isset($context['CheckoutExtraFieldName3Value']) ? $context['CheckoutExtraFieldName3Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>Requerido? <input type=\"checkbox\" name=\"CheckoutExtraFieldRequired3\" id=\"CheckoutExtraFieldRequired3\" ";
        // line 232
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRequired3Checked']) ? $context['CheckoutExtraFieldRequired3Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 233
        echo getLang("CheckoutExtraFieldType3");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"CheckoutExtraFieldType3\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"input\"";
        // line 236
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType3Selectedinput']) ? $context['CheckoutExtraFieldType3Selectedinput'] : null));
        echo ">Texto (chico)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"text\"";
        // line 237
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType3Selectedtext']) ? $context['CheckoutExtraFieldType3Selectedtext'] : null));
        echo ">Texto (grande)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"select\"";
        // line 238
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType3Selectedselect']) ? $context['CheckoutExtraFieldType3Selectedselect'] : null));
        echo ">Seleccion</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"checkbox\"";
        // line 239
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType3Selectedcheckbox']) ? $context['CheckoutExtraFieldType3Selectedcheckbox'] : null));
        echo ">Check</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 242
        echo getLang("CheckoutExtraFieldValue3");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"CheckoutExtraFieldValue3\" id=\"CheckoutExtraFieldValue3\" value=\"";
        // line 243
        echo twig_safe_filter((isset($context['CheckoutExtraFieldValue3Value']) ? $context['CheckoutExtraFieldValue3Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuefv3');\" onmouseover=\"ShowHelp('cuefv3', '";
        // line 245
        echo getLang("CheckoutUseExtraFieldsValues");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuefv3\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr style=\"";
        // line 253
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRow4Display']) ? $context['CheckoutExtraFieldRow4Display'] : null));
        echo "\" id=\"CheckoutExtraFieldRow4\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">Activar campo 4? <input type=\"checkbox\" onclick=\"toggleCheckoutExtraFieldActive(4);\" name=\"CheckoutExtraFieldActive4\" id=\"CheckoutExtraFieldActive4\" ";
        // line 254
        echo twig_safe_filter((isset($context['CheckoutExtraFieldActive4Checked']) ? $context['CheckoutExtraFieldActive4Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t<td id=\"DivCheckoutExtraFieldActive4\" style=\"";
        // line 255
        echo twig_safe_filter((isset($context['DivCheckoutExtraFieldActive4Display']) ? $context['DivCheckoutExtraFieldActive4Display'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 258
        echo getLang("CheckoutExtraFieldName4");
        echo " <input type=\"text\" name=\"CheckoutExtraFieldName4\" id=\"CheckoutExtraFieldName4\" value=\"";
        echo twig_safe_filter((isset($context['CheckoutExtraFieldName4Value']) ? $context['CheckoutExtraFieldName4Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>Requerido? <input type=\"checkbox\" name=\"CheckoutExtraFieldRequired4\" id=\"CheckoutExtraFieldRequired4\" ";
        // line 259
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRequired4Checked']) ? $context['CheckoutExtraFieldRequired4Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 260
        echo getLang("CheckoutExtraFieldType4");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"CheckoutExtraFieldType4\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"input\"";
        // line 263
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType4Selectedinput']) ? $context['CheckoutExtraFieldType4Selectedinput'] : null));
        echo ">Texto (chico)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"text\"";
        // line 264
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType4Selectedtext']) ? $context['CheckoutExtraFieldType4Selectedtext'] : null));
        echo ">Texto (grande)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"select\"";
        // line 265
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType4Selectedselect']) ? $context['CheckoutExtraFieldType4Selectedselect'] : null));
        echo ">Seleccion</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"checkbox\"";
        // line 266
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType4Selectedcheckbox']) ? $context['CheckoutExtraFieldType4Selectedcheckbox'] : null));
        echo ">Check</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 269
        echo getLang("CheckoutExtraFieldValue4");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"CheckoutExtraFieldValue4\" id=\"CheckoutExtraFieldValue4\" value=\"";
        // line 270
        echo twig_safe_filter((isset($context['CheckoutExtraFieldValue4Value']) ? $context['CheckoutExtraFieldValue4Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuefv4');\" onmouseover=\"ShowHelp('cuefv4', '";
        // line 272
        echo getLang("CheckoutUseExtraFieldsValues");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuefv4\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr style=\"";
        // line 280
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRow5Display']) ? $context['CheckoutExtraFieldRow5Display'] : null));
        echo "\" id=\"CheckoutExtraFieldRow5\">
\t\t\t\t\t\t\t<td class=\"FieldLabel\">Activar campo 5? <input type=\"checkbox\" onclick=\"toggleCheckoutExtraFieldActive(5);\" name=\"CheckoutExtraFieldActive5\" id=\"CheckoutExtraFieldActive5\" ";
        // line 281
        echo twig_safe_filter((isset($context['CheckoutExtraFieldActive5Checked']) ? $context['CheckoutExtraFieldActive5Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t<td id=\"DivCheckoutExtraFieldActive5\" style=\"";
        // line 282
        echo twig_safe_filter((isset($context['DivCheckoutExtraFieldActive5Display']) ? $context['DivCheckoutExtraFieldActive5Display'] : null));
        echo "\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 285
        echo getLang("CheckoutExtraFieldName5");
        echo " <input type=\"text\" name=\"CheckoutExtraFieldName5\" id=\"CheckoutExtraFieldName5\" value=\"";
        echo twig_safe_filter((isset($context['CheckoutExtraFieldName5Value']) ? $context['CheckoutExtraFieldName5Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>Requerido? <input type=\"checkbox\" name=\"CheckoutExtraFieldRequired5\" id=\"CheckoutExtraFieldRequired5\" ";
        // line 286
        echo twig_safe_filter((isset($context['CheckoutExtraFieldRequired5Checked']) ? $context['CheckoutExtraFieldRequired5Checked'] : null));
        echo "/></td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 287
        echo getLang("CheckoutExtraFieldType5");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"CheckoutExtraFieldType5\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"input\"";
        // line 290
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType5Selectedinput']) ? $context['CheckoutExtraFieldType5Selectedinput'] : null));
        echo ">Texto (chico)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"text\"";
        // line 291
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType5Selectedtext']) ? $context['CheckoutExtraFieldType5Selectedtext'] : null));
        echo ">Texto (grande)</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"select\"";
        // line 292
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType5Selectedselect']) ? $context['CheckoutExtraFieldType5Selectedselect'] : null));
        echo ">Seleccion</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"checkbox\"";
        // line 293
        echo twig_safe_filter((isset($context['CheckoutExtraFieldType5Selectedcheckbox']) ? $context['CheckoutExtraFieldType5Selectedcheckbox'] : null));
        echo ">Check</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>";
        // line 296
        echo getLang("CheckoutExtraFieldValue5");
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><input type=\"text\" name=\"CheckoutExtraFieldValue5\" id=\"CheckoutExtraFieldValue5\" value=\"";
        // line 297
        echo twig_safe_filter((isset($context['CheckoutExtraFieldValue5Value']) ? $context['CheckoutExtraFieldValue5Value'] : null));
        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('cuefv5');\" onmouseover=\"ShowHelp('cuefv5', '";
        // line 299
        echo getLang("CheckoutUseExtraFieldsValues");
        echo "', '";
        echo getLang("CheckoutUseExtraFieldsValuesHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"cuefv5\"></div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t</table>

\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 311
        echo getLang("OrderSettings");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"updateinventory\">";
        // line 315
        echo getLang("UpdateProductInventoryWhen");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select name=\"updateinventory\" id=\"updateinventory\" class=\"Field300\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 319
        echo twig_safe_filter((isset($context['UpdateInventorySuccessfulSelected']) ? $context['UpdateInventorySuccessfulSelected'] : null));
        echo ">";
        echo getLang("UpdateInventorySuccessfulOrder");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 320
        echo twig_safe_filter((isset($context['UpdateInventoryCompletedSelected']) ? $context['UpdateInventoryCompletedSelected'] : null));
        echo ">";
        echo getLang("UpdateInventoryOrderCompleted");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ad1');\" onmouseover=\"ShowHelp('ad1', '";
        // line 322
        echo getLang("UpdateProductInventoryWhen");
        echo "', '";
        echo getLang("UpdateProductInventoryWhenHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ad1\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"UpdateInventoryOnOrderEdit\">";
        // line 328
        echo getLang("UpdateInventoryOnOrderEdit");
        echo "</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"UpdateInventoryOnOrderEdit\" id=\"UpdateInventoryOnOrderEdit\" value=\"1\" ";
        // line 331
        if ($this->getAttribute((isset($context['config']) ? $context['config'] : null), "UpdateInventoryOnOrderEdit", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " /> <label for=\"UpdateInventoryOnOrderEdit\">";
        echo getLang("YesUpdateInventoryOnOrderEdit");
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 332
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("UpdateInventoryOnOrderEdit", "UpdateInventoryOnOrderEditHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"UpdateInventoryOnOrderDelete\">";
        // line 337
        echo getLang("UpdateInventoryOnOrderDelete");
        echo "</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"UpdateInventoryOnOrderDelete\" id=\"UpdateInventoryOnOrderDelete\" value=\"1\" ";
        // line 340
        if ($this->getAttribute((isset($context['config']) ? $context['config'] : null), "UpdateInventoryOnOrderDelete", array(), "any")) {
            echo "checked=\"checked\"";
        }
        echo " /> <label for=\"UpdateInventoryOnOrderDelete\">";
        echo getLang("YesUpdateInventoryOnOrderDelete");
        echo "</label>
\t\t\t\t\t\t\t\t";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['util']) ? $context['util'] : null), "tooltip", array("UpdateInventoryOnOrderDelete", "UpdateInventoryOnOrderDeleteHelp", ), "method"), "1");
        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"orderstatusemails\">";
        // line 346
        echo getLang("EmailOnOrderStatusChange");
        echo ":</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<select name=\"orderstatusemails[]\" id=\"orderstatusemails\" class=\"Field300 ISSelectReplacement\" size=\"11\" multiple=\"multiple\">
\t\t\t\t\t\t\t\t\t";
        // line 350
        echo twig_safe_filter((isset($context['OrderStatusEmailList']) ? $context['OrderStatusEmailList'] : null));
        echo "
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('ad2');\" onmouseover=\"ShowHelp('ad2', '";
        // line 352
        echo getLang("EmailOnOrderStatusChange");
        echo "', '";
        echo getLang("EmailOnOrderStatusChangeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display:none\" id=\"ad2\"></div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t<table width=\"100%\" class=\"Panel\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"Heading2\" colspan=\"2\">";
        // line 359
        echo getLang("DigitalProductSettings");
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"FieldLabel\">
\t\t\t\t\t\t\t\t<label for=\"orderstatusemails\">";
        // line 363
        echo getLang("EnableDigitalHandlingFee");
        echo "?</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"PanelBottom\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" onclick=\"\$('.DigitalOrderHandling').toggle();\" id=\"EnableDigitalOrderHandlingFee\" name=\"EnableDigitalOrderHandlingFee\" ";
        // line 366
        echo twig_safe_filter((isset($context['DigitalOrderHandlingFeeChecked']) ? $context['DigitalOrderHandlingFeeChecked'] : null));
        echo " /> ";
        echo getLang("YesEnableDigitalHandlingFee");
        echo "</label>
\t\t\t\t\t\t\t\t<img onmouseout=\"HideHelp('digitalhandling');\" onmouseover=\"ShowHelp('digitalhandling', '";
        // line 367
        echo getLang("EnableDigitalHandlingFee");
        echo "?', '";
        echo getLang("EnableDigitalHandlingFeeHelp");
        echo "')\" src=\"images/help.gif\" width=\"24\" height=\"16\" border=\"0\">
\t\t\t\t\t\t\t\t<div style=\"display: none\" id=\"digitalhandling\"></div>
\t\t\t\t\t\t\t\t<div style=\"";
        // line 369
        echo twig_safe_filter((isset($context['HideDigitalOrderHandlingFee']) ? $context['HideDigitalOrderHandlingFee'] : null));
        echo "\" class=\"DigitalOrderHandling\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><img src=\"images/nodejoin.gif\" alt=\"\" /></td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tHandling Fee:
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 375
        echo twig_safe_filter((isset($context['LeftCurrencyToken']) ? $context['LeftCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"DigitalOrderHandlingFee\" id=\"DigitalOrderHandlingFee\" class=\"Field50\" value=\"";
        // line 376
        echo twig_safe_filter((isset($context['DigitalOrderHandlingFee']) ? $context['DigitalOrderHandlingFee'] : null));
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 377
        echo twig_safe_filter((isset($context['RightCurrencyToken']) ? $context['RightCurrencyToken'] : null));
        echo "
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        // line 386
        echo twig_safe_filter((isset($context['CheckoutDivs']) ? $context['CheckoutDivs'] : null));
        echo "
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\" width=\"100%\" class=\"PanelPlain\" id=\"BottomButtons\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td width=\"200\" class=\"FieldLabel\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 393
        echo getLang("Save");
        echo "\" class=\"FormButton SaveButton\" />
\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 394
        echo getLang("Cancel");
        echo "\" class=\"FormButton CancelButton\" onclick=\"ConfirmCancel()\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t</table>
\t\t</div>
\t</form>

\t<div id=\"ViewsMenu\" class=\"DropShadow DropDownMenu\" style=\"display: none; width:200px\">
\t\t<ul>
\t\t\t";
        // line 406
        echo twig_safe_filter((isset($context['CheckoutFieldsOptions']) ? $context['CheckoutFieldsOptions'] : null));
        echo "
\t\t</ul>
\t</div>

\t<script type=\"text/javascript\">

\t\tfunction ToggleTermsAndConditions(type)
\t\t{
\t\t\tif(type == 'link') {
\t\t\t\t\$('.OrderTermsAndConditionsLink').css({display: ''});
\t\t\t\t\$('.OrderTermsAndConditionsTextarea').css({display: 'none'});
\t\t\t} else {
\t\t\t\t\$('.OrderTermsAndConditionsTextarea').css({display: ''});
\t\t\t\t\$('.OrderTermsAndConditionsLink').css({display: 'none'});
\t\t\t}
\t\t}

\t\tfunction checkout_selected(checkout_id) {
\t\t\tif(checkout_id == 'builtin') {
\t\t\t\tif(\$('input[name=builtInGateway]:checked').val() == 1) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(g('checkoutproviders_old')) {
\t\t\t\tvar cp = g('checkoutproviders_old');
\t\t\t}
\t\t\telse {
\t\t\t\tvar cp = document.getElementById(\"checkoutproviders\");
\t\t\t}
\t\t\tfor(i = 0; i < cp.options.length; i++) {
\t\t\t\tif(cp.options[i].value == checkout_id && cp.options[i].selected) {
\t\t\t\t\treturn true;
\t\t\t\t}
\t\t\t}
\t\t\treturn false;
\t\t}

\t\tfunction ShowTab(T)
\t\t{
\t\t\ti = 0;
\t\t\twhile (document.getElementById(\"tab\" + i) != null) {
\t\t\t\tdocument.getElementById(\"div\" + i).style.display = \"none\";
\t\t\t\tdocument.getElementById(\"tab\" + i).className = \"\";
\t\t\t\ti++;
\t\t\t}

\t\t\tdocument.getElementById(\"div\" + T).style.display = \"\";
\t\t\tdocument.getElementById(\"tab\" + T).className = \"active\";
\t\t\tdocument.getElementById(\"currentTab\").value = T;
\t\t}

\t\tfunction CheckCheckoutSettingsForm()
\t\t{
\t\t\tif(\$('input[name=builtInGateway]:checked').val() == 1 && \$('.BuiltInGatewayForm .MessageBoxError').length > 0) {
\t\t\t\talert('";
        // line 464
        echo getLang("CannotEnableBuiltInModuleErrors");
        echo "');
\t\t\t\treturn false;
\t\t\t}

\t\t\tif(\$('#EnableDigitalOrderHandlingFee').attr('checked')) {
\t\t\t\tif(\$('#DigitalOrderHandlingFee').val() == '' || isNaN(priceFormat(\$('#DigitalOrderHandlingFee').val()))) {
\t\t\t\t\talert('";
        // line 470
        echo getLang("EnterDigitalOrderHandlingFee");
        echo "');
\t\t\t\t\t\$('#DigitalOrderHandlingFee').select();
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\tif(\$('#EnableOrderTermsAndConditions').attr('checked')) {
\t\t\t\tif(\$('.OrderTermsAndConditionsType:checked').val() == 'link') {
\t\t\t\t\tif(\$('.OrderTermsAndConditionsLink').val() == '' || \$('.OrderTermsAndConditionsLink').val() == 'http://') {
\t\t\t\t\t\talert(\"";
        // line 479
        echo getLang("EnterTermsAndConditionsLink");
        echo "\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t} else if(\$('.OrderTermsAndConditionsType:checked').val() == 'textarea') {
\t\t\t\t\tif(\$('.OrderTermsAndConditionsTextarea').val() == '') {
\t\t\t\t\t\talert(\"";
        // line 484
        echo getLang("EnterTermsAndConditions");
        echo "\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\talert(\"";
        // line 488
        echo getLang("SelectTermsAndConditionsType");
        echo "\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}

\t\t\t";
        // line 493
        echo twig_safe_filter((isset($context['CheckoutJavaScript']) ? $context['CheckoutJavaScript'] : null));
        echo "
\t\t}

\t\tfunction ConfirmCancel() {
\t\t\tif(confirm('";
        // line 497
        echo getLang("CancelCheckoutMessage");
        echo "')) {
\t\t\t\tdocument.location.href='index.php?ToDo=viewCheckoutSettings';
\t\t\t}
\t\t\telse {
\t\t\t\treturn false;
\t\t\t}
\t\t}

\t\tfunction ToggleBuiltInGateway()
\t\t{
\t\t\t// Built in gateway is disabled
\t\t\tif(\$('#BuiltInGatewayOption').css('display') == 'none') {
\t\t\t\treturn;
\t\t\t}
\t\t\tselected = \$('input[name=builtInGateway]:checked').val();
\t\t\t\$('.builtInGateway').hide();
\t\t\t\$('.builtInGateway_'+selected).show();
\t\t}

\t\t\$(document).ready(function() {
\t\t\t\$('input[name=builtInGateway]').click(function() {
\t\t\t\tToggleBuiltInGateway();
\t\t\t});
\t\t\tToggleBuiltInGateway();

\t\t\tShowTab(";
        // line 522
        echo twig_safe_filter((isset($context['CurrentTab']) ? $context['CurrentTab'] : null));
        echo ");

\t\t});

\t</script>
";
    }

}
