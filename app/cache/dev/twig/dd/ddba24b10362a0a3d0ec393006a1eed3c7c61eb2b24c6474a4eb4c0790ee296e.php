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
        $__internal_abc07e02f8650d0e8979aaa0cac23c9667b536743b44dc5644cbc4cf59d6a943 = $this->env->getExtension("native_profiler");
        $__internal_abc07e02f8650d0e8979aaa0cac23c9667b536743b44dc5644cbc4cf59d6a943->enter($__internal_abc07e02f8650d0e8979aaa0cac23c9667b536743b44dc5644cbc4cf59d6a943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc07e02f8650d0e8979aaa0cac23c9667b536743b44dc5644cbc4cf59d6a943->leave($__internal_abc07e02f8650d0e8979aaa0cac23c9667b536743b44dc5644cbc4cf59d6a943_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_df8285abd6ba831952daf35cfd0f35aa0fc502ac2b7bb1d505e17d1dce43700a = $this->env->getExtension("native_profiler");
        $__internal_df8285abd6ba831952daf35cfd0f35aa0fc502ac2b7bb1d505e17d1dce43700a->enter($__internal_df8285abd6ba831952daf35cfd0f35aa0fc502ac2b7bb1d505e17d1dce43700a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_df8285abd6ba831952daf35cfd0f35aa0fc502ac2b7bb1d505e17d1dce43700a->leave($__internal_df8285abd6ba831952daf35cfd0f35aa0fc502ac2b7bb1d505e17d1dce43700a_prof);

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
