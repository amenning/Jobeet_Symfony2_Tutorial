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
        $__internal_f05a0700c715435dd9483a13c55fa858ffc1beb4b1da7410a1fdfe3e9a3a3e4c = $this->env->getExtension("native_profiler");
        $__internal_f05a0700c715435dd9483a13c55fa858ffc1beb4b1da7410a1fdfe3e9a3a3e4c->enter($__internal_f05a0700c715435dd9483a13c55fa858ffc1beb4b1da7410a1fdfe3e9a3a3e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05a0700c715435dd9483a13c55fa858ffc1beb4b1da7410a1fdfe3e9a3a3e4c->leave($__internal_f05a0700c715435dd9483a13c55fa858ffc1beb4b1da7410a1fdfe3e9a3a3e4c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_070f3704fa698c4758352756e7c18ee722262c380bae6981ff37b9506cdb43cd = $this->env->getExtension("native_profiler");
        $__internal_070f3704fa698c4758352756e7c18ee722262c380bae6981ff37b9506cdb43cd->enter($__internal_070f3704fa698c4758352756e7c18ee722262c380bae6981ff37b9506cdb43cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_070f3704fa698c4758352756e7c18ee722262c380bae6981ff37b9506cdb43cd->leave($__internal_070f3704fa698c4758352756e7c18ee722262c380bae6981ff37b9506cdb43cd_prof);

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
