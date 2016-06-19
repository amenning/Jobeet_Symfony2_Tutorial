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
        $__internal_93e72159e6158aca7783710f626189ad84ed2613cd9ea9c7c6b3141eb4da85b1 = $this->env->getExtension("native_profiler");
        $__internal_93e72159e6158aca7783710f626189ad84ed2613cd9ea9c7c6b3141eb4da85b1->enter($__internal_93e72159e6158aca7783710f626189ad84ed2613cd9ea9c7c6b3141eb4da85b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e72159e6158aca7783710f626189ad84ed2613cd9ea9c7c6b3141eb4da85b1->leave($__internal_93e72159e6158aca7783710f626189ad84ed2613cd9ea9c7c6b3141eb4da85b1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_68c3986cbb49e2c4a91bcfe060d0f78b57150df453f7c0beef74ecaa36230641 = $this->env->getExtension("native_profiler");
        $__internal_68c3986cbb49e2c4a91bcfe060d0f78b57150df453f7c0beef74ecaa36230641->enter($__internal_68c3986cbb49e2c4a91bcfe060d0f78b57150df453f7c0beef74ecaa36230641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_68c3986cbb49e2c4a91bcfe060d0f78b57150df453f7c0beef74ecaa36230641->leave($__internal_68c3986cbb49e2c4a91bcfe060d0f78b57150df453f7c0beef74ecaa36230641_prof);

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
