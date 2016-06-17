<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_2791caa51b0d490b9d77346d1fc3cfe74cb9e3429d6e3716a72f11b7877f30d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_292160fff3e52d5e72f6960f4753df9f82835b7efea7031e5c17527df2bc6271 = $this->env->getExtension("native_profiler");
        $__internal_292160fff3e52d5e72f6960f4753df9f82835b7efea7031e5c17527df2bc6271->enter($__internal_292160fff3e52d5e72f6960f4753df9f82835b7efea7031e5c17527df2bc6271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_292160fff3e52d5e72f6960f4753df9f82835b7efea7031e5c17527df2bc6271->leave($__internal_292160fff3e52d5e72f6960f4753df9f82835b7efea7031e5c17527df2bc6271_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_31a0cac9a576028f677c5cd1d788cc76dd94144ba8f1e66292b31b51ff86bf4b = $this->env->getExtension("native_profiler");
        $__internal_31a0cac9a576028f677c5cd1d788cc76dd94144ba8f1e66292b31b51ff86bf4b->enter($__internal_31a0cac9a576028f677c5cd1d788cc76dd94144ba8f1e66292b31b51ff86bf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_31a0cac9a576028f677c5cd1d788cc76dd94144ba8f1e66292b31b51ff86bf4b->leave($__internal_31a0cac9a576028f677c5cd1d788cc76dd94144ba8f1e66292b31b51ff86bf4b_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_821de2396865401e135feea4335a6192afa3b43cca7e28e552c11c5f2f7cbdf1 = $this->env->getExtension("native_profiler");
        $__internal_821de2396865401e135feea4335a6192afa3b43cca7e28e552c11c5f2f7cbdf1->enter($__internal_821de2396865401e135feea4335a6192afa3b43cca7e28e552c11c5f2f7cbdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_821de2396865401e135feea4335a6192afa3b43cca7e28e552c11c5f2f7cbdf1->leave($__internal_821de2396865401e135feea4335a6192afa3b43cca7e28e552c11c5f2f7cbdf1_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f47337c072efa9318f80b27406cf0cb6e68f2909badda550daa421af9a0e2243 = $this->env->getExtension("native_profiler");
        $__internal_f47337c072efa9318f80b27406cf0cb6e68f2909badda550daa421af9a0e2243->enter($__internal_f47337c072efa9318f80b27406cf0cb6e68f2909badda550daa421af9a0e2243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_f47337c072efa9318f80b27406cf0cb6e68f2909badda550daa421af9a0e2243->leave($__internal_f47337c072efa9318f80b27406cf0cb6e68f2909badda550daa421af9a0e2243_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
