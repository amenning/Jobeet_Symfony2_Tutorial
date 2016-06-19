<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_9386d85edcb0dc43f53bd388a34aa67a4e9a971a0d24302fc9f0b3f25b9127f4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f3100f928fc6c5b471629831cec9b44c33098c98b3cbd9212fbc91140fc386 = $this->env->getExtension("native_profiler");
        $__internal_79f3100f928fc6c5b471629831cec9b44c33098c98b3cbd9212fbc91140fc386->enter($__internal_79f3100f928fc6c5b471629831cec9b44c33098c98b3cbd9212fbc91140fc386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f3100f928fc6c5b471629831cec9b44c33098c98b3cbd9212fbc91140fc386->leave($__internal_79f3100f928fc6c5b471629831cec9b44c33098c98b3cbd9212fbc91140fc386_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e66d763e27426ae9c000bc4f3a754ae6a47b305fea43844faf57379c535cb64c = $this->env->getExtension("native_profiler");
        $__internal_e66d763e27426ae9c000bc4f3a754ae6a47b305fea43844faf57379c535cb64c->enter($__internal_e66d763e27426ae9c000bc4f3a754ae6a47b305fea43844faf57379c535cb64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e66d763e27426ae9c000bc4f3a754ae6a47b305fea43844faf57379c535cb64c->leave($__internal_e66d763e27426ae9c000bc4f3a754ae6a47b305fea43844faf57379c535cb64c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
