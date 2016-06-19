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
        $__internal_5ee27006936ea81e292c93f5ce522159ff0a4fdfdb2c09b9e602293133c4491f = $this->env->getExtension("native_profiler");
        $__internal_5ee27006936ea81e292c93f5ce522159ff0a4fdfdb2c09b9e602293133c4491f->enter($__internal_5ee27006936ea81e292c93f5ce522159ff0a4fdfdb2c09b9e602293133c4491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee27006936ea81e292c93f5ce522159ff0a4fdfdb2c09b9e602293133c4491f->leave($__internal_5ee27006936ea81e292c93f5ce522159ff0a4fdfdb2c09b9e602293133c4491f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ab9303684b1846972589624668e602ed81ee50795043370c6b606caff2786075 = $this->env->getExtension("native_profiler");
        $__internal_ab9303684b1846972589624668e602ed81ee50795043370c6b606caff2786075->enter($__internal_ab9303684b1846972589624668e602ed81ee50795043370c6b606caff2786075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ab9303684b1846972589624668e602ed81ee50795043370c6b606caff2786075->leave($__internal_ab9303684b1846972589624668e602ed81ee50795043370c6b606caff2786075_prof);

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
