<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_cc59aa215e4b753c216f9c9f08d0e8e1880f57bb3b2664ac6f041bdec25da234 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e38f3e03fa55c4d21c475f1d3a12de9f8c624a412ca98c3eeec1ffedb42c8914 = $this->env->getExtension("native_profiler");
        $__internal_e38f3e03fa55c4d21c475f1d3a12de9f8c624a412ca98c3eeec1ffedb42c8914->enter($__internal_e38f3e03fa55c4d21c475f1d3a12de9f8c624a412ca98c3eeec1ffedb42c8914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38f3e03fa55c4d21c475f1d3a12de9f8c624a412ca98c3eeec1ffedb42c8914->leave($__internal_e38f3e03fa55c4d21c475f1d3a12de9f8c624a412ca98c3eeec1ffedb42c8914_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_197d295a9768c363e2e61b17e6d50833fac56f93afd3ed66f0e00e788fb6e8ad = $this->env->getExtension("native_profiler");
        $__internal_197d295a9768c363e2e61b17e6d50833fac56f93afd3ed66f0e00e788fb6e8ad->enter($__internal_197d295a9768c363e2e61b17e6d50833fac56f93afd3ed66f0e00e788fb6e8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_197d295a9768c363e2e61b17e6d50833fac56f93afd3ed66f0e00e788fb6e8ad->leave($__internal_197d295a9768c363e2e61b17e6d50833fac56f93afd3ed66f0e00e788fb6e8ad_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d236e392df93d0c8dcabcd36832d9bfc1224453e5f25bc34ca3e7d04aa297d65 = $this->env->getExtension("native_profiler");
        $__internal_d236e392df93d0c8dcabcd36832d9bfc1224453e5f25bc34ca3e7d04aa297d65->enter($__internal_d236e392df93d0c8dcabcd36832d9bfc1224453e5f25bc34ca3e7d04aa297d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d236e392df93d0c8dcabcd36832d9bfc1224453e5f25bc34ca3e7d04aa297d65->leave($__internal_d236e392df93d0c8dcabcd36832d9bfc1224453e5f25bc34ca3e7d04aa297d65_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_afd69cfbd4af59637756349cd8451a280298c9abf2cb146ad7399548cfdd9cea = $this->env->getExtension("native_profiler");
        $__internal_afd69cfbd4af59637756349cd8451a280298c9abf2cb146ad7399548cfdd9cea->enter($__internal_afd69cfbd4af59637756349cd8451a280298c9abf2cb146ad7399548cfdd9cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_afd69cfbd4af59637756349cd8451a280298c9abf2cb146ad7399548cfdd9cea->leave($__internal_afd69cfbd4af59637756349cd8451a280298c9abf2cb146ad7399548cfdd9cea_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c28d88d3501bf97510e382369a04d1e46290cbc4c4288ae17d4ccce96d5c426e = $this->env->getExtension("native_profiler");
        $__internal_c28d88d3501bf97510e382369a04d1e46290cbc4c4288ae17d4ccce96d5c426e->enter($__internal_c28d88d3501bf97510e382369a04d1e46290cbc4c4288ae17d4ccce96d5c426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c28d88d3501bf97510e382369a04d1e46290cbc4c4288ae17d4ccce96d5c426e->leave($__internal_c28d88d3501bf97510e382369a04d1e46290cbc4c4288ae17d4ccce96d5c426e_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_6fb84a754c54c538d08f33dd11fb4ff5a8e0a86927f82d94b0263ed8adf623c3 = $this->env->getExtension("native_profiler");
        $__internal_6fb84a754c54c538d08f33dd11fb4ff5a8e0a86927f82d94b0263ed8adf623c3->enter($__internal_6fb84a754c54c538d08f33dd11fb4ff5a8e0a86927f82d94b0263ed8adf623c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_6fb84a754c54c538d08f33dd11fb4ff5a8e0a86927f82d94b0263ed8adf623c3->leave($__internal_6fb84a754c54c538d08f33dd11fb4ff5a8e0a86927f82d94b0263ed8adf623c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  126 => 35,  114 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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
/* {% block title %}*/
/*     {% if admin.id(object) is not null %}*/
/*         {{ "title_edit"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}*/
/*     {% else %}*/
/*         {{ "title_create"|trans({}, 'SonataAdminBundle') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block navbar_title %}*/
/*     {{ block('title') }}*/
/* {% endblock %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}*/
/* {% import "SonataAdminBundle:CRUD:base_edit_form_macro.html.twig" as form_helper %}*/
/* */
/* {% block form %}*/
/*     {{ block('parentForm') }}*/
/* {% endblock %}*/
/* */
