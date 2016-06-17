<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_9b1d9322a95dd3ec54701854c9db63e61127d0ffc5df49696564a9b1305fd3bb extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd860dd07845a221c9702f183981afb5d8cf40c1d5ed988280fb05672e4039ad = $this->env->getExtension("native_profiler");
        $__internal_cd860dd07845a221c9702f183981afb5d8cf40c1d5ed988280fb05672e4039ad->enter($__internal_cd860dd07845a221c9702f183981afb5d8cf40c1d5ed988280fb05672e4039ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd860dd07845a221c9702f183981afb5d8cf40c1d5ed988280fb05672e4039ad->leave($__internal_cd860dd07845a221c9702f183981afb5d8cf40c1d5ed988280fb05672e4039ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3980a6573ca44f3caff477e4cdc70d62c04945bd4bf1507ca8bb0dec244644a0 = $this->env->getExtension("native_profiler");
        $__internal_3980a6573ca44f3caff477e4cdc70d62c04945bd4bf1507ca8bb0dec244644a0->enter($__internal_3980a6573ca44f3caff477e4cdc70d62c04945bd4bf1507ca8bb0dec244644a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3980a6573ca44f3caff477e4cdc70d62c04945bd4bf1507ca8bb0dec244644a0->leave($__internal_3980a6573ca44f3caff477e4cdc70d62c04945bd4bf1507ca8bb0dec244644a0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
