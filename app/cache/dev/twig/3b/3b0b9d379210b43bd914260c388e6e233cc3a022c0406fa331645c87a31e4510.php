<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_91140407d2e724c99181fa442621bab67496fd239e281972f4aa44921e5d41bc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2298f0d6e54dd22a47fdc4db4ee7689befb1bee731a1c09a1c8c83fa318eb79 = $this->env->getExtension("native_profiler");
        $__internal_a2298f0d6e54dd22a47fdc4db4ee7689befb1bee731a1c09a1c8c83fa318eb79->enter($__internal_a2298f0d6e54dd22a47fdc4db4ee7689befb1bee731a1c09a1c8c83fa318eb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2298f0d6e54dd22a47fdc4db4ee7689befb1bee731a1c09a1c8c83fa318eb79->leave($__internal_a2298f0d6e54dd22a47fdc4db4ee7689befb1bee731a1c09a1c8c83fa318eb79_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f0931941b8ee28687177030ec2333de6a21dd13345c5b230ae8f96abfc40a110 = $this->env->getExtension("native_profiler");
        $__internal_f0931941b8ee28687177030ec2333de6a21dd13345c5b230ae8f96abfc40a110->enter($__internal_f0931941b8ee28687177030ec2333de6a21dd13345c5b230ae8f96abfc40a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f0931941b8ee28687177030ec2333de6a21dd13345c5b230ae8f96abfc40a110->leave($__internal_f0931941b8ee28687177030ec2333de6a21dd13345c5b230ae8f96abfc40a110_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
