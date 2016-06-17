<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_c627b2fe043b392d7d5586bdb0c0e07bdbe08da58e1b1a5de196c9524ce7baed extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac31dc6f1329424fff22174845537f0bbb343480628783f66ca9f6ad31a0c29d = $this->env->getExtension("native_profiler");
        $__internal_ac31dc6f1329424fff22174845537f0bbb343480628783f66ca9f6ad31a0c29d->enter($__internal_ac31dc6f1329424fff22174845537f0bbb343480628783f66ca9f6ad31a0c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac31dc6f1329424fff22174845537f0bbb343480628783f66ca9f6ad31a0c29d->leave($__internal_ac31dc6f1329424fff22174845537f0bbb343480628783f66ca9f6ad31a0c29d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_73269f9dea5c0ae610faaba950fafc2c181c4079bb58fbbea9b0c06241626f64 = $this->env->getExtension("native_profiler");
        $__internal_73269f9dea5c0ae610faaba950fafc2c181c4079bb58fbbea9b0c06241626f64->enter($__internal_73269f9dea5c0ae610faaba950fafc2c181c4079bb58fbbea9b0c06241626f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_73269f9dea5c0ae610faaba950fafc2c181c4079bb58fbbea9b0c06241626f64->leave($__internal_73269f9dea5c0ae610faaba950fafc2c181c4079bb58fbbea9b0c06241626f64_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
