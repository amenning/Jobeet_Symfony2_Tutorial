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
        $__internal_e6f0886609f079e4494f23416d345221be10b48db9c77fec33065171f36c61be = $this->env->getExtension("native_profiler");
        $__internal_e6f0886609f079e4494f23416d345221be10b48db9c77fec33065171f36c61be->enter($__internal_e6f0886609f079e4494f23416d345221be10b48db9c77fec33065171f36c61be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f0886609f079e4494f23416d345221be10b48db9c77fec33065171f36c61be->leave($__internal_e6f0886609f079e4494f23416d345221be10b48db9c77fec33065171f36c61be_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ab88df433913e1bc49cfad76cdef830221798025083c152b65f7b1a1946e75b4 = $this->env->getExtension("native_profiler");
        $__internal_ab88df433913e1bc49cfad76cdef830221798025083c152b65f7b1a1946e75b4->enter($__internal_ab88df433913e1bc49cfad76cdef830221798025083c152b65f7b1a1946e75b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_ab88df433913e1bc49cfad76cdef830221798025083c152b65f7b1a1946e75b4->leave($__internal_ab88df433913e1bc49cfad76cdef830221798025083c152b65f7b1a1946e75b4_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7b50795f113565c6e27a33480fcef4c7f7298aaeb500a68959418cb67b83316e = $this->env->getExtension("native_profiler");
        $__internal_7b50795f113565c6e27a33480fcef4c7f7298aaeb500a68959418cb67b83316e->enter($__internal_7b50795f113565c6e27a33480fcef4c7f7298aaeb500a68959418cb67b83316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_7b50795f113565c6e27a33480fcef4c7f7298aaeb500a68959418cb67b83316e->leave($__internal_7b50795f113565c6e27a33480fcef4c7f7298aaeb500a68959418cb67b83316e_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7700b1807b90fe03edfcada847c78b9275ee8d3e75a59dd7594f8a487011d06 = $this->env->getExtension("native_profiler");
        $__internal_c7700b1807b90fe03edfcada847c78b9275ee8d3e75a59dd7594f8a487011d06->enter($__internal_c7700b1807b90fe03edfcada847c78b9275ee8d3e75a59dd7594f8a487011d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c7700b1807b90fe03edfcada847c78b9275ee8d3e75a59dd7594f8a487011d06->leave($__internal_c7700b1807b90fe03edfcada847c78b9275ee8d3e75a59dd7594f8a487011d06_prof);

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
