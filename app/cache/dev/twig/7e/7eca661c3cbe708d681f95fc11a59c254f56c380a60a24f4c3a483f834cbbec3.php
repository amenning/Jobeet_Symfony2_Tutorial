<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_22e11150d6bb6cfebb7d101a9b5a3ec7ec06954cd2e4ebb8bdcb6e81528ae8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4d05a674af05379f687ca95fcea1d5b4aebbbdc5387f381959285e9d8ecf37e = $this->env->getExtension("native_profiler");
        $__internal_c4d05a674af05379f687ca95fcea1d5b4aebbbdc5387f381959285e9d8ecf37e->enter($__internal_c4d05a674af05379f687ca95fcea1d5b4aebbbdc5387f381959285e9d8ecf37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4d05a674af05379f687ca95fcea1d5b4aebbbdc5387f381959285e9d8ecf37e->leave($__internal_c4d05a674af05379f687ca95fcea1d5b4aebbbdc5387f381959285e9d8ecf37e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2e77c3f59a4931b7af1f09d4a3ea930a0769dcd8238a7749cc21e80bb0861a71 = $this->env->getExtension("native_profiler");
        $__internal_2e77c3f59a4931b7af1f09d4a3ea930a0769dcd8238a7749cc21e80bb0861a71->enter($__internal_2e77c3f59a4931b7af1f09d4a3ea930a0769dcd8238a7749cc21e80bb0861a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2e77c3f59a4931b7af1f09d4a3ea930a0769dcd8238a7749cc21e80bb0861a71->leave($__internal_2e77c3f59a4931b7af1f09d4a3ea930a0769dcd8238a7749cc21e80bb0861a71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
