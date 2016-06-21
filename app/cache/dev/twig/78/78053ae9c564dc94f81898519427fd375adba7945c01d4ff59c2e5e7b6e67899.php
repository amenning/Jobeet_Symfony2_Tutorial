<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_cbc2c1fc38d6158737dfae40493bdc09c3e0f2ae810b47c1c89731e9393bf93f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b20d60d3b3d70e7ce8c00516401dee1ab98247b25e5e81e24ac759a7cab7118 = $this->env->getExtension("native_profiler");
        $__internal_2b20d60d3b3d70e7ce8c00516401dee1ab98247b25e5e81e24ac759a7cab7118->enter($__internal_2b20d60d3b3d70e7ce8c00516401dee1ab98247b25e5e81e24ac759a7cab7118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b20d60d3b3d70e7ce8c00516401dee1ab98247b25e5e81e24ac759a7cab7118->leave($__internal_2b20d60d3b3d70e7ce8c00516401dee1ab98247b25e5e81e24ac759a7cab7118_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4b0a745107048149ce4257d2aa0f545c0a8def3022c287ce2d5ad6b48f2809b5 = $this->env->getExtension("native_profiler");
        $__internal_4b0a745107048149ce4257d2aa0f545c0a8def3022c287ce2d5ad6b48f2809b5->enter($__internal_4b0a745107048149ce4257d2aa0f545c0a8def3022c287ce2d5ad6b48f2809b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_4b0a745107048149ce4257d2aa0f545c0a8def3022c287ce2d5ad6b48f2809b5->leave($__internal_4b0a745107048149ce4257d2aa0f545c0a8def3022c287ce2d5ad6b48f2809b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  45 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field%}*/
/*     {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}*/
/*     {% set valueFormat = field_description.options.format|default('%s') %}*/
/* */
/*     {{valueFormat|format(value)|trans({}, translationDomain)}}*/
/* {% endblock %}*/
/* */
