<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_9bb0e676fe13ded3d292aef57e42f3cd5cbdab8f4348d5abd5d7ea17fae82499 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f17c13bc9fca4b03f4ba26dd17d648ee3721e02142f452d8a5ec169ce0a2f63 = $this->env->getExtension("native_profiler");
        $__internal_9f17c13bc9fca4b03f4ba26dd17d648ee3721e02142f452d8a5ec169ce0a2f63->enter($__internal_9f17c13bc9fca4b03f4ba26dd17d648ee3721e02142f452d8a5ec169ce0a2f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f17c13bc9fca4b03f4ba26dd17d648ee3721e02142f452d8a5ec169ce0a2f63->leave($__internal_9f17c13bc9fca4b03f4ba26dd17d648ee3721e02142f452d8a5ec169ce0a2f63_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_911c6eca34d40c8ff70f928e648b821609ab757283e53b5f4c6d82d301b5ade8 = $this->env->getExtension("native_profiler");
        $__internal_911c6eca34d40c8ff70f928e648b821609ab757283e53b5f4c6d82d301b5ade8->enter($__internal_911c6eca34d40c8ff70f928e648b821609ab757283e53b5f4c6d82d301b5ade8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_911c6eca34d40c8ff70f928e648b821609ab757283e53b5f4c6d82d301b5ade8->leave($__internal_911c6eca34d40c8ff70f928e648b821609ab757283e53b5f4c6d82d301b5ade8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
