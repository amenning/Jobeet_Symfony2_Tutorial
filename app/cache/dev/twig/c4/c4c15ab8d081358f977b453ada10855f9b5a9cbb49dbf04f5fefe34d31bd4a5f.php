<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_ac455879854ec9da1199750987d707ca69429155c55f92e8be0af9664422f363 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5aa3fcd8449e2cdefa3dad6e0b77ad71b266653f3686948b3418ec1d5feeada8 = $this->env->getExtension("native_profiler");
        $__internal_5aa3fcd8449e2cdefa3dad6e0b77ad71b266653f3686948b3418ec1d5feeada8->enter($__internal_5aa3fcd8449e2cdefa3dad6e0b77ad71b266653f3686948b3418ec1d5feeada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa3fcd8449e2cdefa3dad6e0b77ad71b266653f3686948b3418ec1d5feeada8->leave($__internal_5aa3fcd8449e2cdefa3dad6e0b77ad71b266653f3686948b3418ec1d5feeada8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ddec33cfc6c58870d1ba7e8d2329eacc4e47c50c3fb69a81e4fcc651c4d0d539 = $this->env->getExtension("native_profiler");
        $__internal_ddec33cfc6c58870d1ba7e8d2329eacc4e47c50c3fb69a81e4fcc651c4d0d539->enter($__internal_ddec33cfc6c58870d1ba7e8d2329eacc4e47c50c3fb69a81e4fcc651c4d0d539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_ddec33cfc6c58870d1ba7e8d2329eacc4e47c50c3fb69a81e4fcc651c4d0d539->leave($__internal_ddec33cfc6c58870d1ba7e8d2329eacc4e47c50c3fb69a81e4fcc651c4d0d539_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
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
