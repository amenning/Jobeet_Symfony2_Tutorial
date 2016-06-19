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
        $__internal_9cc081c075006b0450b5357aa5e63a862fe0d887d71eed999e852959dba4e8fc = $this->env->getExtension("native_profiler");
        $__internal_9cc081c075006b0450b5357aa5e63a862fe0d887d71eed999e852959dba4e8fc->enter($__internal_9cc081c075006b0450b5357aa5e63a862fe0d887d71eed999e852959dba4e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc081c075006b0450b5357aa5e63a862fe0d887d71eed999e852959dba4e8fc->leave($__internal_9cc081c075006b0450b5357aa5e63a862fe0d887d71eed999e852959dba4e8fc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f0676ee0b5fefdba912d5527e36ca29d01259af00dab67d75769750b200fbbc3 = $this->env->getExtension("native_profiler");
        $__internal_f0676ee0b5fefdba912d5527e36ca29d01259af00dab67d75769750b200fbbc3->enter($__internal_f0676ee0b5fefdba912d5527e36ca29d01259af00dab67d75769750b200fbbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f0676ee0b5fefdba912d5527e36ca29d01259af00dab67d75769750b200fbbc3->leave($__internal_f0676ee0b5fefdba912d5527e36ca29d01259af00dab67d75769750b200fbbc3_prof);

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
