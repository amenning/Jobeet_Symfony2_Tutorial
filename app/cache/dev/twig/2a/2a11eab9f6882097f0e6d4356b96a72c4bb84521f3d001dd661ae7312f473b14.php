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
        $__internal_ba2c79081c8be8e8553fe517ad18acb6b982a852c31b3bb6edb84d3f49e2568a = $this->env->getExtension("native_profiler");
        $__internal_ba2c79081c8be8e8553fe517ad18acb6b982a852c31b3bb6edb84d3f49e2568a->enter($__internal_ba2c79081c8be8e8553fe517ad18acb6b982a852c31b3bb6edb84d3f49e2568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2c79081c8be8e8553fe517ad18acb6b982a852c31b3bb6edb84d3f49e2568a->leave($__internal_ba2c79081c8be8e8553fe517ad18acb6b982a852c31b3bb6edb84d3f49e2568a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_50c856eede129663db4331f943db273744045fcef7437587b21fc910eb342334 = $this->env->getExtension("native_profiler");
        $__internal_50c856eede129663db4331f943db273744045fcef7437587b21fc910eb342334->enter($__internal_50c856eede129663db4331f943db273744045fcef7437587b21fc910eb342334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_50c856eede129663db4331f943db273744045fcef7437587b21fc910eb342334->leave($__internal_50c856eede129663db4331f943db273744045fcef7437587b21fc910eb342334_prof);

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
