<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_2e2e076fbc660916033b635d31c444dbb81607777606addaa9ef26ff54306b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_18b4754f152e9a9b7c7cf2307a420c59d44e0943070ee569f3b33c17b5d07623 = $this->env->getExtension("native_profiler");
        $__internal_18b4754f152e9a9b7c7cf2307a420c59d44e0943070ee569f3b33c17b5d07623->enter($__internal_18b4754f152e9a9b7c7cf2307a420c59d44e0943070ee569f3b33c17b5d07623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b4754f152e9a9b7c7cf2307a420c59d44e0943070ee569f3b33c17b5d07623->leave($__internal_18b4754f152e9a9b7c7cf2307a420c59d44e0943070ee569f3b33c17b5d07623_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_739e4751788c725632ffd40df54a1e2aed962c92b1c97762d6b7b89e49620b6d = $this->env->getExtension("native_profiler");
        $__internal_739e4751788c725632ffd40df54a1e2aed962c92b1c97762d6b7b89e49620b6d->enter($__internal_739e4751788c725632ffd40df54a1e2aed962c92b1c97762d6b7b89e49620b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_739e4751788c725632ffd40df54a1e2aed962c92b1c97762d6b7b89e49620b6d->leave($__internal_739e4751788c725632ffd40df54a1e2aed962c92b1c97762d6b7b89e49620b6d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
