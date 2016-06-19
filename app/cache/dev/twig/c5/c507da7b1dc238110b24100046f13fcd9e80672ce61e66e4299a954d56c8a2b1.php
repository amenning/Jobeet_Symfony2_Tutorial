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
        $__internal_b2128eb8553755720de1f757b2c74190d2bbc4f622ea72d7c50cbd40392486df = $this->env->getExtension("native_profiler");
        $__internal_b2128eb8553755720de1f757b2c74190d2bbc4f622ea72d7c50cbd40392486df->enter($__internal_b2128eb8553755720de1f757b2c74190d2bbc4f622ea72d7c50cbd40392486df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2128eb8553755720de1f757b2c74190d2bbc4f622ea72d7c50cbd40392486df->leave($__internal_b2128eb8553755720de1f757b2c74190d2bbc4f622ea72d7c50cbd40392486df_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e0127e4744919c5bba26fecf95cf1900e31beedca2592254a9222095276d4c90 = $this->env->getExtension("native_profiler");
        $__internal_e0127e4744919c5bba26fecf95cf1900e31beedca2592254a9222095276d4c90->enter($__internal_e0127e4744919c5bba26fecf95cf1900e31beedca2592254a9222095276d4c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_e0127e4744919c5bba26fecf95cf1900e31beedca2592254a9222095276d4c90->leave($__internal_e0127e4744919c5bba26fecf95cf1900e31beedca2592254a9222095276d4c90_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_89996044469c72cbba93d7523edc01519fe41b45dcd39c07fa8f084e0227ed76 = $this->env->getExtension("native_profiler");
        $__internal_89996044469c72cbba93d7523edc01519fe41b45dcd39c07fa8f084e0227ed76->enter($__internal_89996044469c72cbba93d7523edc01519fe41b45dcd39c07fa8f084e0227ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_89996044469c72cbba93d7523edc01519fe41b45dcd39c07fa8f084e0227ed76->leave($__internal_89996044469c72cbba93d7523edc01519fe41b45dcd39c07fa8f084e0227ed76_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3480d02d9ded7b78378c971086a50b366f432341b9074acc590d036a0cb9d93 = $this->env->getExtension("native_profiler");
        $__internal_d3480d02d9ded7b78378c971086a50b366f432341b9074acc590d036a0cb9d93->enter($__internal_d3480d02d9ded7b78378c971086a50b366f432341b9074acc590d036a0cb9d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_d3480d02d9ded7b78378c971086a50b366f432341b9074acc590d036a0cb9d93->leave($__internal_d3480d02d9ded7b78378c971086a50b366f432341b9074acc590d036a0cb9d93_prof);

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
