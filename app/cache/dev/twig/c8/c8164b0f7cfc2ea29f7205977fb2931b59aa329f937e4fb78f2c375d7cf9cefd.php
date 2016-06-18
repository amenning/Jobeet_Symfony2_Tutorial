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
        $__internal_3fd9985a7871cec63c9b69c18d76060b8135635d9a39ec52eba25d26c95a810e = $this->env->getExtension("native_profiler");
        $__internal_3fd9985a7871cec63c9b69c18d76060b8135635d9a39ec52eba25d26c95a810e->enter($__internal_3fd9985a7871cec63c9b69c18d76060b8135635d9a39ec52eba25d26c95a810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd9985a7871cec63c9b69c18d76060b8135635d9a39ec52eba25d26c95a810e->leave($__internal_3fd9985a7871cec63c9b69c18d76060b8135635d9a39ec52eba25d26c95a810e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6813c6405dde27656267b5278823b07cf37561e85a6611c873e24e87980142cc = $this->env->getExtension("native_profiler");
        $__internal_6813c6405dde27656267b5278823b07cf37561e85a6611c873e24e87980142cc->enter($__internal_6813c6405dde27656267b5278823b07cf37561e85a6611c873e24e87980142cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_6813c6405dde27656267b5278823b07cf37561e85a6611c873e24e87980142cc->leave($__internal_6813c6405dde27656267b5278823b07cf37561e85a6611c873e24e87980142cc_prof);

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
