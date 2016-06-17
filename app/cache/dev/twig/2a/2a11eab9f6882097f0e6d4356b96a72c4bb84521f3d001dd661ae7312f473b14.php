<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_6108c787f76676800635c3688911817a90cb01f64fce4bca50d6475eca0ed662 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9efba2d6e923b00c0fc1e33c7bbcb2a4f08b66d6bf4f67954da372136d02d24c = $this->env->getExtension("native_profiler");
        $__internal_9efba2d6e923b00c0fc1e33c7bbcb2a4f08b66d6bf4f67954da372136d02d24c->enter($__internal_9efba2d6e923b00c0fc1e33c7bbcb2a4f08b66d6bf4f67954da372136d02d24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efba2d6e923b00c0fc1e33c7bbcb2a4f08b66d6bf4f67954da372136d02d24c->leave($__internal_9efba2d6e923b00c0fc1e33c7bbcb2a4f08b66d6bf4f67954da372136d02d24c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7ab6f28c136ec4673f6d8d068afad73e63753cd4fb3f705fa4dff88f8505a29c = $this->env->getExtension("native_profiler");
        $__internal_7ab6f28c136ec4673f6d8d068afad73e63753cd4fb3f705fa4dff88f8505a29c->enter($__internal_7ab6f28c136ec4673f6d8d068afad73e63753cd4fb3f705fa4dff88f8505a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7ab6f28c136ec4673f6d8d068afad73e63753cd4fb3f705fa4dff88f8505a29c->leave($__internal_7ab6f28c136ec4673f6d8d068afad73e63753cd4fb3f705fa4dff88f8505a29c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
