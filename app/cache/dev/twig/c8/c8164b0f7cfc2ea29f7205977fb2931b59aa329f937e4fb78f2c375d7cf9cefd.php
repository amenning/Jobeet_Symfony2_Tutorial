<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_28b202cecb16f67682cd5f88b0609cdb357be7d8dc60a3b140ea791ad8711bbc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_073227ff25a86f1bb2a7f326359a636a42b75a278ecd8ba5e7be56c8f5d20d0e = $this->env->getExtension("native_profiler");
        $__internal_073227ff25a86f1bb2a7f326359a636a42b75a278ecd8ba5e7be56c8f5d20d0e->enter($__internal_073227ff25a86f1bb2a7f326359a636a42b75a278ecd8ba5e7be56c8f5d20d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073227ff25a86f1bb2a7f326359a636a42b75a278ecd8ba5e7be56c8f5d20d0e->leave($__internal_073227ff25a86f1bb2a7f326359a636a42b75a278ecd8ba5e7be56c8f5d20d0e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_363a5bd4fbb42f8a7738ee4f522123a312f56989beb469a1f35ac4589bfa98a2 = $this->env->getExtension("native_profiler");
        $__internal_363a5bd4fbb42f8a7738ee4f522123a312f56989beb469a1f35ac4589bfa98a2->enter($__internal_363a5bd4fbb42f8a7738ee4f522123a312f56989beb469a1f35ac4589bfa98a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_363a5bd4fbb42f8a7738ee4f522123a312f56989beb469a1f35ac4589bfa98a2->leave($__internal_363a5bd4fbb42f8a7738ee4f522123a312f56989beb469a1f35ac4589bfa98a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
