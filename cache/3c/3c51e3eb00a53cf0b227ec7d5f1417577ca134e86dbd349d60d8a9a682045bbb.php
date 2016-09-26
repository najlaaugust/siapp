<?php

/* base.twig */
class __TwigTemplate_5aaf182252af3fd78f3a1757e503616395c462bd75638769ea094ee16ca67c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\" dir=\"ltr\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
<meta name=\"google-site-verification\" content=\"E5J23TGA6zQT0FgS0Kwtd5tlXAWb0V3D3GViymalnoY\" /> -->
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Payment | ISR Summer Institute</title>
<link rel=\"shortcut icon\" href=\"favicon.gif\" type=\"image/x-icon\" />
<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"templates/si.css\" />

    <!--[if lte IE 8]>
      <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"http://si.isr.umich.edu/sites/all/themes/si/ie7.css\" />    <![endif]-->
    <!--[if IE 6]>
      <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"http://si.isr.umich.edu/sites/all/themes/si/ie6.css\" />    <![endif]-->

\t<style type=\"text/css\">
\t\t#dataentry_content input, textarea, select, table {
\t\t\tfont-size: 9pt; 
\t\t\tfont-style: normal; 
\t\t\tfont-weight: normal;
\t\t}
\t\t#dataentry_content table {
\t\t\tmargin-left:0;
\t\t\tmargin-top:0;
\t\t\tpadding-right:4;
\t\t}
\t\t
\t\t#dataentry_content th {
\t\t\ttext-align:left;
\t\t\tfont-weight: bold; 
\t\t\tpadding-top:5;
\t\t}\t\t
\t\t.input_default_width {
\t\t\twidth:470px;
\t\t}
\t\t
\t\t.input_default_half_width {
\t\t\twidth:40%;
\t\t}
\t\t
\t\t#banner sup {font-size: 12px;}
\t</style>
</head>
<body>
<!--[if IE]><div id=\"IEroot\"><![endif]-->

<div id=\"headWrapper\">

<div id=\"head\">
<div id=\"block-google_cse-0\" class=\"block block-google_cse\">
  <h2>Search</h2>

<div class=\"content\">
<form action=\"http://si.isr.umich.edu/search/google\"  accept-charset=\"UTF-8\" method=\"get\" id=\"google-cse-searchbox-form\">
\t<div><input type=\"hidden\" name=\"cx\" id=\"edit-cx\" value=\"011474502914805834745:ka4rdlr1ddq\"  />
\t<input type=\"hidden\" name=\"cof\" id=\"edit-cof\" value=\"FORID:11\"  />
\t<div class=\"form-item\" id=\"edit-query-wrapper\" style=\"display: inline;\">
\t <input type=\"text\" maxlength=\"128\" name=\"query\" id=\"edit-query\" size=\"20\" value=\"\" title=\"Enter the terms you wish to search for.\" class=\"form-text\" />
\t</div>
<input type=\"submit\" name=\"op\" id=\"edit-sa\" value=\"Search\"  class=\"form-submit\" />

<input type=\"hidden\" name=\"form_build_id\" id=\"form-6a7791edc316589654c7ece64387955b\" value=\"form-6a7791edc316589654c7ece64387955b\"  />
<input type=\"hidden\" name=\"form_id\" id=\"edit-google-cse-searchbox-form\" value=\"google_cse_searchbox_form\"  />

</div></form>
  </div>
</div>
<div id=\"annual\">
<div id=\"block-block-1\" class=\"block block-block\">

  <div class=\"content\">
    <p><strong>";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["currentYearDisplay"]) ? $context["currentYearDisplay"] : null), "html", null, true);
        echo "</strong> Annual<br /> <span class=\"smaller\"><cfoutput>";
        echo twig_escape_filter($this->env, (isset($context["current_app_dates"]) ? $context["current_app_dates"] : null), "html", null, true);
        echo "</cfoutput></span></p>

  </div>
</div>
</div>
<h1><a href=\"http://si.isr.umich.edu\"><img src=\"http://si.isr.umich.edu/sites/all/themes/si/images/si-logo.png\" alt=\"\" style=\"border: none;\"/></a></h1>
</div>
</div>

<div id=\"contentBg\">
<div id=\"contentWrapper\">
<div id=\"content\">

<!--<div id=\"sidebar\"></div>-->

<div id=\"mainContent\" style=\"margin: 0;opacity: 1;min-height: 675px;\">

<ul id=\"textSize\">
<li>Text size:</li>
<li class=\"largeText\"><a href=\"#\">Increase</a> | </li>
<li class=\"smallText\"><a href=\"#\">Decrease</a></li>
</ul>
";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "<div class=\"clr\"></div>
</div>
</div>
</div>

<div id=\"footWrapper\">
<div id=\"foot\" style=\"width: 960px;\">
<div id=\"block-menu-secondary-links\" class=\"block block-menu\">
  <h2>footerlinks</h2>

  <div class=\"content\">
    <ul class=\"menu\">
    <li class=\"leaf first active-trail\"><a href=\"http://si.isr.umich.edu/overview\" title=\"\" class=\"active\">Overview</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/schedule\" title=\"\">Courses &amp; Schedule</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/faculty\" title=\"\">Faculty</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/resources\" title=\"\">Visitor Resources</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/enrollment-application\" title=\"\">Enrollment &amp; Application</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/international\" title=\"\">International Students</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/contact\" title=\"\">Contact Us</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/faqs\" title=\"\">FAQ</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu\" title=\"\">Home</a></li>
\t<li class=\"leaf last\"><a href=\"http://si.isr.umich.edu/sitemap\" title=\"\">Sitemap</a></li>
\t</ul> 
</div>

</div>
<p class=\"copyright\">&copy; 2010 University of Michigan</p>
</div>
</div>

<!--[if IE]></div><![endif]-->
</body>
</html>";
    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 95,  123 => 96,  121 => 95,  94 => 73,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\" dir=\"ltr\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
<meta name=\"google-site-verification\" content=\"E5J23TGA6zQT0FgS0Kwtd5tlXAWb0V3D3GViymalnoY\" /> -->
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Payment | ISR Summer Institute</title>
<link rel=\"shortcut icon\" href=\"favicon.gif\" type=\"image/x-icon\" />
<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"templates/si.css\" />

    <!--[if lte IE 8]>
      <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"http://si.isr.umich.edu/sites/all/themes/si/ie7.css\" />    <![endif]-->
    <!--[if IE 6]>
      <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"http://si.isr.umich.edu/sites/all/themes/si/ie6.css\" />    <![endif]-->

\t<style type=\"text/css\">
\t\t#dataentry_content input, textarea, select, table {
\t\t\tfont-size: 9pt; 
\t\t\tfont-style: normal; 
\t\t\tfont-weight: normal;
\t\t}
\t\t#dataentry_content table {
\t\t\tmargin-left:0;
\t\t\tmargin-top:0;
\t\t\tpadding-right:4;
\t\t}
\t\t
\t\t#dataentry_content th {
\t\t\ttext-align:left;
\t\t\tfont-weight: bold; 
\t\t\tpadding-top:5;
\t\t}\t\t
\t\t.input_default_width {
\t\t\twidth:470px;
\t\t}
\t\t
\t\t.input_default_half_width {
\t\t\twidth:40%;
\t\t}
\t\t
\t\t#banner sup {font-size: 12px;}
\t</style>
</head>
<body>
<!--[if IE]><div id=\"IEroot\"><![endif]-->

<div id=\"headWrapper\">

<div id=\"head\">
<div id=\"block-google_cse-0\" class=\"block block-google_cse\">
  <h2>Search</h2>

<div class=\"content\">
<form action=\"http://si.isr.umich.edu/search/google\"  accept-charset=\"UTF-8\" method=\"get\" id=\"google-cse-searchbox-form\">
\t<div><input type=\"hidden\" name=\"cx\" id=\"edit-cx\" value=\"011474502914805834745:ka4rdlr1ddq\"  />
\t<input type=\"hidden\" name=\"cof\" id=\"edit-cof\" value=\"FORID:11\"  />
\t<div class=\"form-item\" id=\"edit-query-wrapper\" style=\"display: inline;\">
\t <input type=\"text\" maxlength=\"128\" name=\"query\" id=\"edit-query\" size=\"20\" value=\"\" title=\"Enter the terms you wish to search for.\" class=\"form-text\" />
\t</div>
<input type=\"submit\" name=\"op\" id=\"edit-sa\" value=\"Search\"  class=\"form-submit\" />

<input type=\"hidden\" name=\"form_build_id\" id=\"form-6a7791edc316589654c7ece64387955b\" value=\"form-6a7791edc316589654c7ece64387955b\"  />
<input type=\"hidden\" name=\"form_id\" id=\"edit-google-cse-searchbox-form\" value=\"google_cse_searchbox_form\"  />

</div></form>
  </div>
</div>
<div id=\"annual\">
<div id=\"block-block-1\" class=\"block block-block\">

  <div class=\"content\">
    <p><strong>{{ currentYearDisplay }}</strong> Annual<br /> <span class=\"smaller\"><cfoutput>{{ current_app_dates }}</cfoutput></span></p>

  </div>
</div>
</div>
<h1><a href=\"http://si.isr.umich.edu\"><img src=\"http://si.isr.umich.edu/sites/all/themes/si/images/si-logo.png\" alt=\"\" style=\"border: none;\"/></a></h1>
</div>
</div>

<div id=\"contentBg\">
<div id=\"contentWrapper\">
<div id=\"content\">

<!--<div id=\"sidebar\"></div>-->

<div id=\"mainContent\" style=\"margin: 0;opacity: 1;min-height: 675px;\">

<ul id=\"textSize\">
<li>Text size:</li>
<li class=\"largeText\"><a href=\"#\">Increase</a> | </li>
<li class=\"smallText\"><a href=\"#\">Decrease</a></li>
</ul>
{% block content %}{% endblock %}
<div class=\"clr\"></div>
</div>
</div>
</div>

<div id=\"footWrapper\">
<div id=\"foot\" style=\"width: 960px;\">
<div id=\"block-menu-secondary-links\" class=\"block block-menu\">
  <h2>footerlinks</h2>

  <div class=\"content\">
    <ul class=\"menu\">
    <li class=\"leaf first active-trail\"><a href=\"http://si.isr.umich.edu/overview\" title=\"\" class=\"active\">Overview</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/schedule\" title=\"\">Courses &amp; Schedule</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/faculty\" title=\"\">Faculty</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/resources\" title=\"\">Visitor Resources</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/enrollment-application\" title=\"\">Enrollment &amp; Application</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/international\" title=\"\">International Students</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/contact\" title=\"\">Contact Us</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu/faqs\" title=\"\">FAQ</a></li>
\t<li class=\"leaf\"><a href=\"http://si.isr.umich.edu\" title=\"\">Home</a></li>
\t<li class=\"leaf last\"><a href=\"http://si.isr.umich.edu/sitemap\" title=\"\">Sitemap</a></li>
\t</ul> 
</div>

</div>
<p class=\"copyright\">&copy; 2010 University of Michigan</p>
</div>
</div>

<!--[if IE]></div><![endif]-->
</body>
</html>";
    }
}
