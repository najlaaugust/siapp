<?php

/* payment.twig */
class __TwigTemplate_ebb4676ef1833038778bf2d22af16295b6352e7d8776a741abf36669bd609c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "payment.twig", 1);
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
<style type=\"text/css\">
\t.Title {font-size: 14px; font-weight: bold; text-align: center;}
\t.paid {color: green; font-style: italic; padding-left: 8px; font-weight: bold;}
\t#payment table {padding-left: 10px;}
\t#payment tbody th {font-weight: bold; text-align: left; padding-top: 10px; }
\t#payment tbody td {vertical-align: top; padding-left: 20px;}
\t#payment thead {font-weight: bold; text-align: left;}
</style>

<form name=\"myForm\" method=\"POST\" action=\"/payflow\">
<table id=\"payment\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" style=\"padding-left: 10px; width: 100%;\">
<tr>
\t<td class=\"Title\">
\t\t<br>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["current_app_year"]) ? $context["current_app_year"] : null), "html", null, true);
        echo " Summer Institute Online Payments</b></br></br>
\t</td>
</tr>
<tr><td><hr></td></tr>

<tr>
\t<td>

\t\t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" >
        <thead>
\t\t\t<tr><th colspan=\"2\">Applicant Information</th></tr>
        </thead>

        <tbody>
        <tr>
\t\t\t<td>Confirmation #:</td>
\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["confirm_num"]) ? $context["confirm_num"] : null), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Name:</td>
\t\t\t<td>
\t\t\t    ";
        // line 38
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "title", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "title", array()), "html", null, true);
            echo " ";
        }
        // line 39
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "fname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "mname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "lname", array()), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "address1", array()), "html", null, true);
        echo "<br>
\t\t\t\t";
        // line 41
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "address2", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "address2", array()), "html", null, true);
            echo " <br> ";
        }
        // line 42
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "address3", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "address3", array()), "html", null, true);
            echo " <br> ";
        }
        // line 43
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "city", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "city", array()), "html", null, true);
            echo " <br> ";
        }
        // line 44
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "state", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "state", array()), "html", null, true);
            echo " <br> ";
        }
        // line 45
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "zip", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "zip", array()), "html", null, true);
            echo " <br> ";
        }
        // line 46
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "CountryName", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "CountryName", array()), "html", null, true);
            echo " <br> ";
        }
        // line 47
        echo "\t\t\t</td>
\t\t</tr>

\t\t";
        // line 50
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "email", array())) {
            echo "<tr><td>Email:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "email", array()), "html", null, true);
            echo "</td></tr>";
        }
        // line 51
        echo "\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "hphone", array())) {
            echo "<tr><td>Home Telephone:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "hphone", array()), "html", null, true);
            echo "</td></tr>";
        }
        // line 52
        echo "\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "wphone", array())) {
            echo "<tr><td>Work Telephone:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "wphone", array()), "html", null, true);
            echo "</td></tr>";
        }
        // line 53
        echo "\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "fax", array())) {
            echo "<tr><td>Fax:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "fax", array()), "html", null, true);
            echo "</td></tr>";
        }
        // line 54
        echo "\t\t";
        if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "umId", array())) {
            echo "<tr><td>UM ID:</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "umId", array()), "html", null, true);
            echo "</td></tr>";
        }
        // line 55
        echo "
    \t</tbody>
\t\t 
\t\t";
        // line 58
        if (($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "PayAmount", array()) > 0)) {
            // line 59
            echo "        <thead>
\t\t\t<tr><th colspan=\"2\">Total Fees</th></tr>
        </thead>
        <tbody>
        \t<tr>
            \t<td colspan=\"2\">
                    ";
            // line 65
            if ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "CCNumber", array())) {
                // line 66
                echo "                    \t\$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "PayAmount", array()), 2, ".", ","), "html", null, true);
                echo "
                    \t<span class=\"paid\">Paid on ";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "CCDate", array()), "date", array()), "m/d/Y"), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 69
                echo "                    \t\$";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "PayAmount", array()), 2, ".", ","), "html", null, true);
                echo "
                    ";
            }
            // line 71
            echo "           \t    </td>
            </tr>
        </tbody>
        ";
        }
        // line 75
        echo "\t\t
\t\t</table>

\t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" >
    <thead>
        <tr><th>Course/Workshop</th></tr>
    </thead>

    <tbody>
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseSignedUpFor"]) ? $context["courseSignedUpFor"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
            echo "    \t<tr><td><li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "course_full_name", array()), "html", null, true);
            echo " (<em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "schedule_date", array()), "html", null, true);
            echo "</em>)</li></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
    ";
        // line 88
        if ((($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "PaymentStat", array()) == "credit") && ($this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "AllowOnlinePayment", array()) == 1))) {
            // line 89
            echo "    <!-- PaymentStatus must equal \"credit\" and PayAmount > 0; This can be set in the Student FRM_StudentsEdit form in MS Access -->
    <tr>
        <td><br><br>
        \t<input type=\"hidden\" name=\"OnlineID\" value=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userInfo"]) ? $context["userInfo"] : null), "OnlineID", array()), "html", null, true);
            echo "\" />
            <input type=\"submit\" value=\"Make Payment\" /><br />
            <span style=\"font-size: 90%; font-style: italic;\">
            * Summer Institute uses PayPal for credit card processing.
\t\t\tYou will be redirected to a secure PayPal site to enter your credit card info.</span>
        </td>
    </tr>
    ";
        }
        // line 100
        echo "
    </tbody>
    </table>
</tr>

</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  248 => 92,  243 => 89,  241 => 88,  238 => 87,  227 => 85,  223 => 84,  212 => 75,  206 => 71,  200 => 69,  195 => 67,  190 => 66,  188 => 65,  180 => 59,  178 => 58,  173 => 55,  166 => 54,  159 => 53,  152 => 52,  145 => 51,  139 => 50,  134 => 47,  127 => 46,  120 => 45,  113 => 44,  106 => 43,  99 => 42,  93 => 41,  89 => 40,  80 => 39,  74 => 38,  66 => 33,  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"base.twig\" %}
{% block content %}

<style type=\"text/css\">
\t.Title {font-size: 14px; font-weight: bold; text-align: center;}
\t.paid {color: green; font-style: italic; padding-left: 8px; font-weight: bold;}
\t#payment table {padding-left: 10px;}
\t#payment tbody th {font-weight: bold; text-align: left; padding-top: 10px; }
\t#payment tbody td {vertical-align: top; padding-left: 20px;}
\t#payment thead {font-weight: bold; text-align: left;}
</style>

<form name=\"myForm\" method=\"POST\" action=\"/payflow\">
<table id=\"payment\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" style=\"padding-left: 10px; width: 100%;\">
<tr>
\t<td class=\"Title\">
\t\t<br>{{ current_app_year }} Summer Institute Online Payments</b></br></br>
\t</td>
</tr>
<tr><td><hr></td></tr>

<tr>
\t<td>

\t\t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" >
        <thead>
\t\t\t<tr><th colspan=\"2\">Applicant Information</th></tr>
        </thead>

        <tbody>
        <tr>
\t\t\t<td>Confirmation #:</td>
\t\t\t<td>{{ confirm_num }}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Name:</td>
\t\t\t<td>
\t\t\t    {% if userInfo.title %} {{ userInfo.title }} {% endif %}
\t\t\t\t{{ userInfo.fname }} {{ userInfo.mname }} {{ userInfo.lname }}<br>
\t\t\t\t{{ userInfo.address1 }}<br>
\t\t\t\t{% if userInfo.address2 %} {{ userInfo.address2 }} <br> {% endif %}
\t\t\t\t{% if userInfo.address3 %} {{ userInfo.address3 }} <br> {% endif %}
\t\t\t\t{% if userInfo.city %} {{ userInfo.city }} <br> {% endif %}
\t\t\t\t{% if userInfo.state %} {{ userInfo.state }} <br> {% endif %}
\t\t\t\t{% if userInfo.zip %} {{ userInfo.zip }} <br> {% endif %}
\t\t\t\t{% if userInfo.CountryName %} {{ userInfo.CountryName }} <br> {% endif %}
\t\t\t</td>
\t\t</tr>

\t\t{% if userInfo.email %}<tr><td>Email:</td><td>{{ userInfo.email }}</td></tr>{% endif %}
\t\t{% if userInfo.hphone %}<tr><td>Home Telephone:</td><td>{{ userInfo.hphone }}</td></tr>{% endif %}
\t\t{% if userInfo.wphone %}<tr><td>Work Telephone:</td><td>{{ userInfo.wphone }}</td></tr>{% endif %}
\t\t{% if userInfo.fax %}<tr><td>Fax:</td><td>{{ userInfo.fax }}</td></tr>{% endif %}
\t\t{% if userInfo.umId %}<tr><td>UM ID:</td><td>{{ userInfo.umId }}</td></tr>{% endif %}

    \t</tbody>
\t\t 
\t\t{% if userInfo.PayAmount > 0 %}
        <thead>
\t\t\t<tr><th colspan=\"2\">Total Fees</th></tr>
        </thead>
        <tbody>
        \t<tr>
            \t<td colspan=\"2\">
                    {% if userInfo.CCNumber %}
                    \t\${{ userInfo.PayAmount|number_format(2, '.', ',') }}
                    \t<span class=\"paid\">Paid on {{ userInfo.CCDate.date|date(\"m/d/Y\") }}</span>
                    {% else %}
                    \t\${{ userInfo.PayAmount|number_format(2, '.', ',') }}
                    {% endif %}
           \t    </td>
            </tr>
        </tbody>
        {% endif %}
\t\t
\t\t</table>

\t<table id=\"payment\" border=\"0\" cellpadding=\"4\" cellspacing=\"0\" >
    <thead>
        <tr><th>Course/Workshop</th></tr>
    </thead>

    <tbody>
    {% for item in courseSignedUpFor %}
    \t<tr><td><li>{{ item.course_full_name }} (<em>{{ item.schedule_date }}</em>)</li></td></tr>
    {% endfor %}

    {% if userInfo.PaymentStat == \"credit\" and userInfo.AllowOnlinePayment == 1 %}
    <!-- PaymentStatus must equal \"credit\" and PayAmount > 0; This can be set in the Student FRM_StudentsEdit form in MS Access -->
    <tr>
        <td><br><br>
        \t<input type=\"hidden\" name=\"OnlineID\" value=\"{{ userInfo.OnlineID }}\" />
            <input type=\"submit\" value=\"Make Payment\" /><br />
            <span style=\"font-size: 90%; font-style: italic;\">
            * Summer Institute uses PayPal for credit card processing.
\t\t\tYou will be redirected to a secure PayPal site to enter your credit card info.</span>
        </td>
    </tr>
    {% endif %}

    </tbody>
    </table>
</tr>

</table>
</form>
{% endblock %}
";
    }
}
