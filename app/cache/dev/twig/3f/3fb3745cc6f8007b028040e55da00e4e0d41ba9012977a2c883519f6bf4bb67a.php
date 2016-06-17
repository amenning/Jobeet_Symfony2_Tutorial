<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_b664d3687d7b9c5c64cafe22521b3c291b9308bf39bfd51c3f4cd4e0cfa14b91 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c856f97b5e6f3a35c632093a34b6d1d7e29051200dc941e541ad9e01a977a20d = $this->env->getExtension("native_profiler");
        $__internal_c856f97b5e6f3a35c632093a34b6d1d7e29051200dc941e541ad9e01a977a20d->enter($__internal_c856f97b5e6f3a35c632093a34b6d1d7e29051200dc941e541ad9e01a977a20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c856f97b5e6f3a35c632093a34b6d1d7e29051200dc941e541ad9e01a977a20d->leave($__internal_c856f97b5e6f3a35c632093a34b6d1d7e29051200dc941e541ad9e01a977a20d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_883e38f344d06c6a5a33c492668607c9d44e3e9b2180de40f30b98ce499d8ab0 = $this->env->getExtension("native_profiler");
        $__internal_883e38f344d06c6a5a33c492668607c9d44e3e9b2180de40f30b98ce499d8ab0->enter($__internal_883e38f344d06c6a5a33c492668607c9d44e3e9b2180de40f30b98ce499d8ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_883e38f344d06c6a5a33c492668607c9d44e3e9b2180de40f30b98ce499d8ab0->leave($__internal_883e38f344d06c6a5a33c492668607c9d44e3e9b2180de40f30b98ce499d8ab0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
