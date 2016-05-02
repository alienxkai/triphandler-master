<?php

/* PlatformCoreBundle:User:list.html.twig */
class __TwigTemplate_f1f158f009c699317f1014e62c3b48530444b43b00d7d4e502f0cb6e88970b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/backoffice/index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'maincontent' => array($this, 'block_maincontent'),
            'header_title' => array($this, 'block_header_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/backoffice/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo " Admin Page - Trip Handlers - User Management ";
    }

    // line 5
    public function block_maincontent($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"row\">
        <div class=\"span2\">
            <a href=\"javascript:;\" class=\"main-left\">Apps</a>
            <a href=\"javascript:;\" class=\"main-left\">Bookmarks</a>
            <a href=\"javascript:;\" class=\"main-left\">Reports</a>
            <a href=\"javascript:;\" class=\"main-left\">Comments</a>
            <a href=\"javascript:;\" class=\"main-left\">Users</a>
        </div>
        <!-- /span2 -->
        <div class=\"span10\">
            <div class=\"widget widget-table action-table\">
                <div class=\"widget-header\"> <i class=\"icon-th-list\"></i>
                    <h3> ";
        // line 19
        $this->displayBlock('header_title', $context, $blocks);
        echo " </h3>
                    <div class=\"save-button\" style=\"float:right;\">
                        <!--<a class=\"btn\" data-toggle=\"modal\" data-target=\"#myModal\"  href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("platform_user_insertpage");
        echo "\">Add User</a><i style=\"margin-right: 10px;\" class=\"icon-large icon-plus \"></i>-->
                        <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">Add</a><i style=\"margin-right: 10px;\" class=\"icon-large icon-plus \"></i>
                        <!--<div id=\"myModal\">-->
                        <div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PlatformCoreBundle:User:addUserForm"));
        echo "
                        </div>
                    </div>
                </div>
                <!-- /widget-header -->
                <div class=\"widget-content\">
                    <table class=\"table table-striped table-bordered\">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Username </th>
                            <th> Mail address </th>
                            <th> Role </th>
                            <th> Type </th>
                            <th class=\"td-actions\"> </th>
                        </tr>
                        </thead>
                        <tbody>

                            ";
        // line 44
        if ( !twig_test_empty((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")))) {
            // line 45
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 46
                echo "                                    <tr>
                                        <td> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userid", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mail", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "userrole", array()), "userrolename", array()), "html", null, true);
                echo " </td>
                                        <td> ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "usertype", array()), "usertypename", array()), "html", null, true);
                echo " </td>
                                        <td class=\"td-actions\"><a href=\"javascript:;\" class=\"btn btn-mini btn-success\"><i class=\"btn-icon-only icon-ok\"> </i></a>
                                            <a href=\"javascript:;\" class=\"btn btn-danger btn-mini\"><i class=\"btn-icon-only icon-remove\"> </i></a></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            ";
        } else {
            // line 57
            echo "                                <tr >
                                    <td colspan=\"6\" class=\"text-center\">No items yet</td>
                                </tr>
                            ";
        }
        // line 61
        echo "                        </tbody>
                    </table>
                </div>
                <!-- /widget-content -->
            </div>
            <!-- /widget -->
        </div>
        <!-- /span9 -->
    </div>

";
    }

    // line 19
    public function block_header_title($context, array $blocks = array())
    {
        echo " User List ";
    }

    public function getTemplateName()
    {
        return "PlatformCoreBundle:User:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 19,  142 => 61,  136 => 57,  133 => 56,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  103 => 46,  98 => 45,  96 => 44,  74 => 25,  67 => 21,  62 => 19,  47 => 6,  44 => 5,  38 => 3,  11 => 1,);
    }
}
