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
        $__internal_6f503782c334b6425f2c458f2c4bb16351559f90009b3f343d44deaccad15088 = $this->env->getExtension("native_profiler");
        $__internal_6f503782c334b6425f2c458f2c4bb16351559f90009b3f343d44deaccad15088->enter($__internal_6f503782c334b6425f2c458f2c4bb16351559f90009b3f343d44deaccad15088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f503782c334b6425f2c458f2c4bb16351559f90009b3f343d44deaccad15088->leave($__internal_6f503782c334b6425f2c458f2c4bb16351559f90009b3f343d44deaccad15088_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_21fbb84911fc34c3922a2e9ede4caced26af3f3120f2933d82e94e8d68e2b5d8 = $this->env->getExtension("native_profiler");
        $__internal_21fbb84911fc34c3922a2e9ede4caced26af3f3120f2933d82e94e8d68e2b5d8->enter($__internal_21fbb84911fc34c3922a2e9ede4caced26af3f3120f2933d82e94e8d68e2b5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_21fbb84911fc34c3922a2e9ede4caced26af3f3120f2933d82e94e8d68e2b5d8->leave($__internal_21fbb84911fc34c3922a2e9ede4caced26af3f3120f2933d82e94e8d68e2b5d8_prof);

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
