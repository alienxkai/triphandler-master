<?php

/* PlatformCoreBundle:User:add.html.twig */
class __TwigTemplate_2ed237c8bd781647437855366f95fc66eb6a4fbdbf84e24f796ada7a59739dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Modal -->
<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Add new content ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["andrana"]) ? $context["andrana"] : $this->getContext($context, "andrana")), "html", null, true);
        echo "</h3>
</div>
<div class=\"modal-body\" style=\"height: 300px !important; \">
    <!--<p>One fine body…</p>-->
    <div class=\"tab-content\">
        <form id=\"edit-profile\" class=\"form-horizontal\">
            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"username\">Username</label>
                    <div class=\"controls\">
                        <input type=\"text\" class=\"span4 disabled\" id=\"username\" >
                        <!--<p class=\"help-block\">Your username is for logging in and cannot be changed.</p>-->
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"mail\">Mail Adress</label>
                    <div class=\"controls\">
                        <input type=\"text\" class=\"span4\" id=\"mail\" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"password\">Password</label>
                    <div class=\"controls\">
                        <input type=\"password\" class=\"span4\" id=\"password\" >
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->


                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"userrole\">Role</label>
                    <div class=\"controls\">
                        <div class=\"btn-group btn-input clearfix\">
                            <select name=\"userrole\" id=\"userrole\">
                                <option value=\"value1\">Valeur 1</option>
                                <option value=\"value2\" selected>Valeur 2</option>
                                <option value=\"value3\">Valeur 3</option>
                            </select>
                        </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"usertype\">Type</label>
                    <div class=\"controls\">
                        <div class=\"btn-group btn-input clearfix\">
                            <select name=\"usertype\" id=\"usertype\">
                                <option value=\"value1\">Valeur 1</option>
                                <option value=\"value2\" selected>Valeur 2</option>
                                <option value=\"value3\">Valeur 3</option>
                            </select>
                        </div>
                    </div> <!-- /controls -->
                </div> <!-- /control-group -->

            </fieldset>
        </form>
    </div>
</div>
<div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
    <button class=\"btn btn-primary\">Save changes</button>
</div>


";
    }

    public function getTemplateName()
    {
        return "PlatformCoreBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
