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
        $__internal_6274cab0942b28bf751811fd164398381ee9ca4074c51333713d006068f832a6 = $this->env->getExtension("native_profiler");
        $__internal_6274cab0942b28bf751811fd164398381ee9ca4074c51333713d006068f832a6->enter($__internal_6274cab0942b28bf751811fd164398381ee9ca4074c51333713d006068f832a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6274cab0942b28bf751811fd164398381ee9ca4074c51333713d006068f832a6->leave($__internal_6274cab0942b28bf751811fd164398381ee9ca4074c51333713d006068f832a6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3b91b88a18f0b5cce1fd0137ca8995090d77d77cc2a7bbe403785ef03ea7835c = $this->env->getExtension("native_profiler");
        $__internal_3b91b88a18f0b5cce1fd0137ca8995090d77d77cc2a7bbe403785ef03ea7835c->enter($__internal_3b91b88a18f0b5cce1fd0137ca8995090d77d77cc2a7bbe403785ef03ea7835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3b91b88a18f0b5cce1fd0137ca8995090d77d77cc2a7bbe403785ef03ea7835c->leave($__internal_3b91b88a18f0b5cce1fd0137ca8995090d77d77cc2a7bbe403785ef03ea7835c_prof);

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
