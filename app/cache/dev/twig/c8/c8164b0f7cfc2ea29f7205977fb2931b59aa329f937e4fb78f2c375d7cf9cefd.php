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
        $__internal_6dd2899703582def484be261213124ad3f8912dc365d38b8536772d3e8923567 = $this->env->getExtension("native_profiler");
        $__internal_6dd2899703582def484be261213124ad3f8912dc365d38b8536772d3e8923567->enter($__internal_6dd2899703582def484be261213124ad3f8912dc365d38b8536772d3e8923567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dd2899703582def484be261213124ad3f8912dc365d38b8536772d3e8923567->leave($__internal_6dd2899703582def484be261213124ad3f8912dc365d38b8536772d3e8923567_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0ccdfb44ea6b01d4eeb326cf2fa92661fc4bc47ecc4543893e9c8e092c48b7aa = $this->env->getExtension("native_profiler");
        $__internal_0ccdfb44ea6b01d4eeb326cf2fa92661fc4bc47ecc4543893e9c8e092c48b7aa->enter($__internal_0ccdfb44ea6b01d4eeb326cf2fa92661fc4bc47ecc4543893e9c8e092c48b7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_0ccdfb44ea6b01d4eeb326cf2fa92661fc4bc47ecc4543893e9c8e092c48b7aa->leave($__internal_0ccdfb44ea6b01d4eeb326cf2fa92661fc4bc47ecc4543893e9c8e092c48b7aa_prof);

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
