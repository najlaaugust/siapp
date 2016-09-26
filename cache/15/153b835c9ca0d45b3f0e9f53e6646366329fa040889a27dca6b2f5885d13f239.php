<?php

/* index.twig */
class __TwigTemplate_c552abfe3c1f3602e05b352dfd73b1ac11fac8b8ec97e63536cb3dd46db748b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- <script language=\"JavaScript\" type=\"text/javascript\" src=\"../_custom.js\"></script> -->

<style type=\"text/css\">
\t.Title {font-size: 14px; font-weight: bold; text-align: center;}
\t#payment th {font-weight: bold; text-align: left; white-space: nowrap; }
\t#payment td {width: 100%;}\t\t
</style>
<form name=\"myForm\" action=\"/search\" method=\"POST\">
<table id=\"dataentry_content\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"padding-left: 10px; width: 100%;\">
    <tr>
        <td class=\"Title\">
            <br>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["current_app_year"]) ? $context["current_app_year"] : null), "html", null, true);
        echo " Summer Institute Online Payments</b></br></br>
        </td>
    </tr>
    <tr><td><hr /></td></tr>
\t
    <tr><td>Please enter your confirmation number and your last name:<br /><br /></td></tr>
    <tr>
    \t<td>
        \t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\">
            <tr>
                <th>Confirmation #:</th>
                <td>
                \t<input type=\"text\" name=\"ConfirmNum\" maxlength=\"20\" size=\"50\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["ConfirmNum"]) ? $context["ConfirmNum"] : null), "html", null, true);
        echo "\" />
                </td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td>
                \t<input type=\"text\" name=\"LastName\" maxlength=\"50\" size=\"50\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["LastName"]) ? $context["LastName"] : null), "html", null, true);
        echo "\"/>
                </td>
            </tr>
              
            ";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 38
            echo "            <tr>
                <th></th>
                <td style=\"color: red; font-style: italic;\">
                \t* ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "
                 </td>
            </tr>
            ";
        }
        // line 44
        echo "            
            
            <tr>
                <th></th>
                <td><input type=\"submit\" value=\"Submit\" style=\"width: 90px;\" /></td>
            </tr>
            </table>
            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    \t</td>
  \t</tr>\t
</table>
  
</form>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  83 => 41,  78 => 38,  76 => 37,  69 => 33,  60 => 27,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.twig\" %}
{% block content %}

<!-- <script language=\"JavaScript\" type=\"text/javascript\" src=\"../_custom.js\"></script> -->

<style type=\"text/css\">
\t.Title {font-size: 14px; font-weight: bold; text-align: center;}
\t#payment th {font-weight: bold; text-align: left; white-space: nowrap; }
\t#payment td {width: 100%;}\t\t
</style>
<form name=\"myForm\" action=\"/search\" method=\"POST\">
<table id=\"dataentry_content\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"padding-left: 10px; width: 100%;\">
    <tr>
        <td class=\"Title\">
            <br>{{ current_app_year }} Summer Institute Online Payments</b></br></br>
        </td>
    </tr>
    <tr><td><hr /></td></tr>
\t
    <tr><td>Please enter your confirmation number and your last name:<br /><br /></td></tr>
    <tr>
    \t<td>
        \t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\">
            <tr>
                <th>Confirmation #:</th>
                <td>
                \t<input type=\"text\" name=\"ConfirmNum\" maxlength=\"20\" size=\"50\" value=\"{{ ConfirmNum }}\" />
                </td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td>
                \t<input type=\"text\" name=\"LastName\" maxlength=\"50\" size=\"50\" value=\"{{ LastName }}\"/>
                </td>
            </tr>
              
            {% if error %}
            <tr>
                <th></th>
                <td style=\"color: red; font-style: italic;\">
                \t* {{ error }}
                 </td>
            </tr>
            {% endif %}            
            
            <tr>
                <th></th>
                <td><input type=\"submit\" value=\"Submit\" style=\"width: 90px;\" /></td>
            </tr>
            </table>
            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
    \t</td>
  \t</tr>\t
</table>
  
</form>
{% endblock %}
";
    }
}
