<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_720621cc005fc8184b0b1c7daa8e8c438275ffc87991c17730fc0e8655b45a6f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2ef2af0d9774da0e7c7b173b3b01ab6c4e1ac5b4894a0c215f8f0d258a5037f = $this->env->getExtension("native_profiler");
        $__internal_f2ef2af0d9774da0e7c7b173b3b01ab6c4e1ac5b4894a0c215f8f0d258a5037f->enter($__internal_f2ef2af0d9774da0e7c7b173b3b01ab6c4e1ac5b4894a0c215f8f0d258a5037f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ef2af0d9774da0e7c7b173b3b01ab6c4e1ac5b4894a0c215f8f0d258a5037f->leave($__internal_f2ef2af0d9774da0e7c7b173b3b01ab6c4e1ac5b4894a0c215f8f0d258a5037f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5d6ee8eac19c11dcc2412a0834527837b06f43e77626c5d79dbd9742318d2186 = $this->env->getExtension("native_profiler");
        $__internal_5d6ee8eac19c11dcc2412a0834527837b06f43e77626c5d79dbd9742318d2186->enter($__internal_5d6ee8eac19c11dcc2412a0834527837b06f43e77626c5d79dbd9742318d2186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_5d6ee8eac19c11dcc2412a0834527837b06f43e77626c5d79dbd9742318d2186->leave($__internal_5d6ee8eac19c11dcc2412a0834527837b06f43e77626c5d79dbd9742318d2186_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
