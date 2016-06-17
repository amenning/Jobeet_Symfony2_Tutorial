<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_a6a341c7aa13bba80f02ace27ea4efe942b6ddcb267516856ed2670aae25b442 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b716fca256d33ce9d301508f9a38c0b3a098eec684c0f2c5b02af5152b53397 = $this->env->getExtension("native_profiler");
        $__internal_9b716fca256d33ce9d301508f9a38c0b3a098eec684c0f2c5b02af5152b53397->enter($__internal_9b716fca256d33ce9d301508f9a38c0b3a098eec684c0f2c5b02af5152b53397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b716fca256d33ce9d301508f9a38c0b3a098eec684c0f2c5b02af5152b53397->leave($__internal_9b716fca256d33ce9d301508f9a38c0b3a098eec684c0f2c5b02af5152b53397_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_485872dc86d4f18af9e4432e9e19c901d1013d058da2053b92711f13e94140e0 = $this->env->getExtension("native_profiler");
        $__internal_485872dc86d4f18af9e4432e9e19c901d1013d058da2053b92711f13e94140e0->enter($__internal_485872dc86d4f18af9e4432e9e19c901d1013d058da2053b92711f13e94140e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_485872dc86d4f18af9e4432e9e19c901d1013d058da2053b92711f13e94140e0->leave($__internal_485872dc86d4f18af9e4432e9e19c901d1013d058da2053b92711f13e94140e0_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_03166692a4d2047e080376ba02f67a278a6c131ed4bf0447808d15b3d8cabbae = $this->env->getExtension("native_profiler");
        $__internal_03166692a4d2047e080376ba02f67a278a6c131ed4bf0447808d15b3d8cabbae->enter($__internal_03166692a4d2047e080376ba02f67a278a6c131ed4bf0447808d15b3d8cabbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_03166692a4d2047e080376ba02f67a278a6c131ed4bf0447808d15b3d8cabbae->leave($__internal_03166692a4d2047e080376ba02f67a278a6c131ed4bf0447808d15b3d8cabbae_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f01ee5cee9297446f2c939b407af71cfe8179077acf71a2d0f1747944a02cdb = $this->env->getExtension("native_profiler");
        $__internal_5f01ee5cee9297446f2c939b407af71cfe8179077acf71a2d0f1747944a02cdb->enter($__internal_5f01ee5cee9297446f2c939b407af71cfe8179077acf71a2d0f1747944a02cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_5f01ee5cee9297446f2c939b407af71cfe8179077acf71a2d0f1747944a02cdb->leave($__internal_5f01ee5cee9297446f2c939b407af71cfe8179077acf71a2d0f1747944a02cdb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
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
