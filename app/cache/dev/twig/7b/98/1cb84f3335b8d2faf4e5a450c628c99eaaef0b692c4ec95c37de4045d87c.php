<?php

/* PlatformCoreBundle:Security:login-bo.html.twig */
class __TwigTemplate_7b981cb84f3335b8d2faf4e5a450c628c99eaaef0b692c4ec95c37de4045d87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("backoffice/login.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'login_form' => array($this, 'block_login_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Login Trip Handler - Administration ";
    }

    // line 5
    public function block_login_form($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"account-container\">
        <div class=\"content clearfix\">
            ";
        // line 9
        echo "            ";
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array(), "any", true, true)) {
            // line 10
            echo "                <div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 12
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("platform_admin_login_check");
        echo "\" method=\"post\">
                <h1 style=\"text-align: center\">Administatrion</h1>
                <div class=\"login-fields\">
                    <p>Please provide your details</p>
                    <div class=\"field\">
                        <label for=\"username\">Username</label>
                        <input autocomplete=\"off\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\" class=\"login username-field\" />
                    </div> <!-- /field -->

                    <div class=\"field\">
                        <label for=\"password\">Password:</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" value=\"\" placeholder=\"Password\" class=\"login password-field\"/>
                    </div> <!-- /password -->
                </div> <!-- /login-fields -->

                <div class=\"login-actions\">
                <span class=\"login-checkbox\">
                    <input id=\"rememberme\" name=\"_remember_me\" type=\"checkbox\" class=\"field login-checkbox\" tabindex=\"4\" />
                    <label class=\"choice\" for=\"rememberme\">Keep me signed in</label>
                </span>
                    <button class=\"button btn btn-success btn-large\">Sign In</button>
                </div> <!-- .actions -->
            </form>
        </div><!-- /content -->
    </div> <!-- /account-container -->
";
    }

    public function getTemplateName()
    {
        return "PlatformCoreBundle:Security:login-bo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  59 => 12,  53 => 10,  50 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
