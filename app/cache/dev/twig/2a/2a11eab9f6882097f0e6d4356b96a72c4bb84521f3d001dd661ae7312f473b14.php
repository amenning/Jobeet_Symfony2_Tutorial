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
        $__internal_74214ba1f70826e09c5584d0a747f70c78d4590cbe3d85fd7fa6b364846605a3 = $this->env->getExtension("native_profiler");
        $__internal_74214ba1f70826e09c5584d0a747f70c78d4590cbe3d85fd7fa6b364846605a3->enter($__internal_74214ba1f70826e09c5584d0a747f70c78d4590cbe3d85fd7fa6b364846605a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74214ba1f70826e09c5584d0a747f70c78d4590cbe3d85fd7fa6b364846605a3->leave($__internal_74214ba1f70826e09c5584d0a747f70c78d4590cbe3d85fd7fa6b364846605a3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d92389cd428e594c3209614f154b1a4d776e974ad41f9d19ca3acf1c66d544c8 = $this->env->getExtension("native_profiler");
        $__internal_d92389cd428e594c3209614f154b1a4d776e974ad41f9d19ca3acf1c66d544c8->enter($__internal_d92389cd428e594c3209614f154b1a4d776e974ad41f9d19ca3acf1c66d544c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d92389cd428e594c3209614f154b1a4d776e974ad41f9d19ca3acf1c66d544c8->leave($__internal_d92389cd428e594c3209614f154b1a4d776e974ad41f9d19ca3acf1c66d544c8_prof);

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
