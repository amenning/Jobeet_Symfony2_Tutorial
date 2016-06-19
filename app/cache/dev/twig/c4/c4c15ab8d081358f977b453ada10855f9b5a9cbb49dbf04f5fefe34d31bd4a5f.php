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
        $__internal_429c27a7e1187d04a7c4c18a0c8a6550875617faeffbe2e1784dc04e067a82bb = $this->env->getExtension("native_profiler");
        $__internal_429c27a7e1187d04a7c4c18a0c8a6550875617faeffbe2e1784dc04e067a82bb->enter($__internal_429c27a7e1187d04a7c4c18a0c8a6550875617faeffbe2e1784dc04e067a82bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429c27a7e1187d04a7c4c18a0c8a6550875617faeffbe2e1784dc04e067a82bb->leave($__internal_429c27a7e1187d04a7c4c18a0c8a6550875617faeffbe2e1784dc04e067a82bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f44c1b0195c4770a805cc456ba4d7f368acc33bfb0b892434d86c88f874bb6a1 = $this->env->getExtension("native_profiler");
        $__internal_f44c1b0195c4770a805cc456ba4d7f368acc33bfb0b892434d86c88f874bb6a1->enter($__internal_f44c1b0195c4770a805cc456ba4d7f368acc33bfb0b892434d86c88f874bb6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_f44c1b0195c4770a805cc456ba4d7f368acc33bfb0b892434d86c88f874bb6a1->leave($__internal_f44c1b0195c4770a805cc456ba4d7f368acc33bfb0b892434d86c88f874bb6a1_prof);

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
