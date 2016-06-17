<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_8992df6e782e041f36ee9c928c45454fc57cdc334953cdbfefb2f452f655baa1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_524f36fc3fc0dc46134f1f106f0f74ef2b0c10bf9c849f7c0f4d992fa08070dd = $this->env->getExtension("native_profiler");
        $__internal_524f36fc3fc0dc46134f1f106f0f74ef2b0c10bf9c849f7c0f4d992fa08070dd->enter($__internal_524f36fc3fc0dc46134f1f106f0f74ef2b0c10bf9c849f7c0f4d992fa08070dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524f36fc3fc0dc46134f1f106f0f74ef2b0c10bf9c849f7c0f4d992fa08070dd->leave($__internal_524f36fc3fc0dc46134f1f106f0f74ef2b0c10bf9c849f7c0f4d992fa08070dd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aaf33103908544c1763d98bb5229c8ae847af8bc397c1a3de0288359b7a3fbd9 = $this->env->getExtension("native_profiler");
        $__internal_aaf33103908544c1763d98bb5229c8ae847af8bc397c1a3de0288359b7a3fbd9->enter($__internal_aaf33103908544c1763d98bb5229c8ae847af8bc397c1a3de0288359b7a3fbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_aaf33103908544c1763d98bb5229c8ae847af8bc397c1a3de0288359b7a3fbd9->leave($__internal_aaf33103908544c1763d98bb5229c8ae847af8bc397c1a3de0288359b7a3fbd9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
