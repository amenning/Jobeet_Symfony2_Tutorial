<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_117941c1439801c4c0dbde2e02998b52293fb317ae7914dc03d9f9e5be5d9f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd9baaab92f1eeed42724f2d459f0b3d8573dd19ce75c03ac2ec941b150fb37 = $this->env->getExtension("native_profiler");
        $__internal_fcd9baaab92f1eeed42724f2d459f0b3d8573dd19ce75c03ac2ec941b150fb37->enter($__internal_fcd9baaab92f1eeed42724f2d459f0b3d8573dd19ce75c03ac2ec941b150fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd9baaab92f1eeed42724f2d459f0b3d8573dd19ce75c03ac2ec941b150fb37->leave($__internal_fcd9baaab92f1eeed42724f2d459f0b3d8573dd19ce75c03ac2ec941b150fb37_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_b8edd15504506738d759db5d0c1db374df510a67ec4194f1d24621dd0ccb7618 = $this->env->getExtension("native_profiler");
        $__internal_b8edd15504506738d759db5d0c1db374df510a67ec4194f1d24621dd0ccb7618->enter($__internal_b8edd15504506738d759db5d0c1db374df510a67ec4194f1d24621dd0ccb7618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_b8edd15504506738d759db5d0c1db374df510a67ec4194f1d24621dd0ccb7618->leave($__internal_b8edd15504506738d759db5d0c1db374df510a67ec4194f1d24621dd0ccb7618_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_a52b8fd7f3e44817d3b15ca6749e6cb6a5c4e26be79695b7f3c618ef96bcbf51 = $this->env->getExtension("native_profiler");
        $__internal_a52b8fd7f3e44817d3b15ca6749e6cb6a5c4e26be79695b7f3c618ef96bcbf51->enter($__internal_a52b8fd7f3e44817d3b15ca6749e6cb6a5c4e26be79695b7f3c618ef96bcbf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_a52b8fd7f3e44817d3b15ca6749e6cb6a5c4e26be79695b7f3c618ef96bcbf51->leave($__internal_a52b8fd7f3e44817d3b15ca6749e6cb6a5c4e26be79695b7f3c618ef96bcbf51_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     {{ admin.trans(name) }}*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
