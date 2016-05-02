<?php

/* backoffice/login.html.twig */
class __TwigTemplate_50cbe03fc15c2a9b57fcf820a0a18bf3ca74eeb6528813b6e3c1c944448fe259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'login_form' => array($this, 'block_login_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"> 
    
\t<link href=\"/back-office/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"/back-office/css/bootstrap-responsive.min.css\" rel=\"stylesheet\" type=\"text/css\" />

\t<link href=\"/back-office/css/font-awesome.css\" rel=\"stylesheet\">
\t<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600\" rel=\"stylesheet\">

\t<link href=\"/back-office/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"/back-office/css/pages/signin.css\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>
\t<div class=\"navbar navbar-fixed-top\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"brand\" href=\"index.html\">
\t\t\t\t\tTrip Handlers - Admin
\t\t\t\t</a>
\t\t\t\t<div class=\"nav-collapse\">
\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("platform_core_homepage");
        echo "\" class=\"\">
\t\t\t\t\t\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\t\t\t\t\t\tBack to Homepage
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t</div> <!-- /container -->
\t\t</div> <!-- /navbar-inner -->
\t</div> <!-- /navbar -->
\t";
        // line 46
        $this->displayBlock('login_form', $context, $blocks);
        // line 51
        echo "
\t<script src=\"/back-office/js/jquery-1.7.2.min.js\"></script>
\t<script src=\"/back-office/js/bootstrap.js\"></script>
\t<script src=\"/back-office/js/signin.js\"></script>

</body>

</html>
";
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo "Login Trip Handler - Administration";
    }

    // line 46
    public function block_login_form($context, array $blocks = array())
    {
        // line 47
        echo "\t<div class=\"account-container\">
\t\tPut your Login Form here!
\t</div> <!-- /account-container -->
    ";
    }

    public function getTemplateName()
    {
        return "backoffice/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  94 => 46,  88 => 6,  76 => 51,  74 => 46,  61 => 36,  28 => 6,  21 => 1,);
    }
}
